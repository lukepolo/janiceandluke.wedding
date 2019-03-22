<?php

namespace App\Imports;

use App\Models\Guest;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class GuestImport implements ToCollection
{
    public function collection(Collection $rows)
    {
        foreach ($rows as $rowIndex => $row) {
            if ($rowIndex < 1) {
                continue;
            }
            // 1 = names
            // 2 = adults
            // 3 = allowed plus one
            // 7 = rehearsal dinner
            // 8 = invited

            $allowedGuest = !empty($row[3]);
            $allowedRehersalDinner = $row[7] === "TRUE";

            $guestNames = array_reverse(
                array_map(
                    'trim',
                    preg_split('/&/', $row[1])
                )
            );

            $lastName = '';
            $connectedGuest = null;
            foreach ($guestNames as $guestName) {
                if (!empty($guestName) && $guestName !== 'Guest Count') {
                    $nameParts = preg_split('/\s/', $guestName);
                    $firstName = $nameParts[0];
                    if (isset($nameParts[1])) {
                        $lastName = $nameParts[1]. (isset($nameParts[2]) ? ' '.$nameParts[2] : null);
                    }
                    $connectedGuest = $this->createGuest(
                        $firstName,
                        $lastName,
                        $allowedGuest,
                        $allowedRehersalDinner,
                        $rowIndex + 1,
                        $connectedGuest
                    );

                    if ($allowedGuest) {
                        $this->createGuest(
                            "+1",
                            $lastName,
                            false,
                            $allowedRehersalDinner,
                            $rowIndex + 1,
                            $connectedGuest,
                            true
                        );
                    }
                }
            }
        }
    }

    private function createGuest($firstName, $lastName, $allowedGuest, $allowedRehearsalDinner, $invited, Guest $connectedGuest = null, $isGuest = false)
    {
        $guest = Guest::withTrashed()->firstOrCreate([
            'last_name' => $lastName,
            'first_name' => $firstName,
        ]);

        $guest->update([
            'is_guest' => $isGuest,
            'allowed_guest' => $allowedGuest,
            'allowed_rehearsal_dinner' => $allowedRehearsalDinner,
            'guest_id' => !empty($connectedGuest) ? $connectedGuest->id : null,
        ]);

        if (!$invited) {
            $guest->delete();
        }

        if (!empty($connectedGuest)) {
            $connectedGuest->update([
                'guest_id' => $guest->id,
            ]);
        }

        return $guest;
    }
}
