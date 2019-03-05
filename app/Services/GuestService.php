<?php

namespace App\Services;

use App\Models\Guest;
use App\Models\GuestRsvp;
use App\Models\GuestFoodOption;
use Illuminate\Support\Collection;
use App\Exceptions\NotAllowedRehearsalDinner;

class GuestService
{
    /**
     * @param Guest $guest
     * @param Collection $data
     * @return Guest
     * @throws NotAllowedRehearsalDinner
     */
    public function updateRsvp(Guest $guest, Collection $data)
    {
        $guestRsvp = GuestRsvp::firstOrNew([
            'guest_id' => $guest->id
        ]);

        if ($data->has('attending_rehearsal_dinner')) {
            if (!$guest->allowed_rehearsal_dinner) {
                throw new NotAllowedRehearsalDinner();
            }
            $guestRsvp->attending_rehearsal_dinner = $data->get('attending_rehearsal_dinner');
        }

        $guestRsvp->attending = $data->get('attending');

        return $guestRsvp->save();
    }

    /**
     * @param Guest $guest
     * @param $data
     * @return GuestFoodOption
     */
    public function updateFoodOptions(Guest $guest, $data)
    {
        $guestFoodOption = GuestFoodOption::firstOrnew([
            'guest_id' => $guest->id
        ]);

        $guestFoodOption->fill([
            'wedding_selection' => $data->get('wedding_selection'),
            'rehearsal_selection' => $data->get('rehearsal_selection'),
            'dietary_restrictions' => $data->get('dietary_restrictions'),
        ]);

        return $guestFoodOption->save();
    }
}
