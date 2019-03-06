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
                    $connectedGuest = $this->createGuest($firstName, $lastName, !empty($row[3]), $row[7] === "TRUE", $connectedGuest);
                }
            }
        }
    }

    private function createGuest($firstName, $lastName, $allowedGuest, $allowedRehearsalDinner, Guest $connectedGuest = null)
    {
        $guest = Guest::create([
            'first_name' => $firstName,
            'last_name' => $lastName,
        ]);

        $guest->fill([
            'allowed_guest' => $allowedGuest,
            'allowed_rehearsal_dinner' => $allowedRehearsalDinner,
            'guest_id' => !empty($connectedGuest) ? $connectedGuest->id : null,
        ]);

        $guest->save();

        if (!empty($connectedGuest)) {
            $connectedGuest->update([
                'guest_id' => $guest->id,
            ]);
        }

        return $guest;
    }
}
