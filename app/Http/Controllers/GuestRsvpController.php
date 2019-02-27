<?php

namespace App\Http\Controllers;

use App\Models\GuestRsvp;
use Illuminate\Http\Request;

class GuestRsvpController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param $guestId
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($guestId, $id)
    {
        return response()->json(GuestRsvp::where('id', $id)->where('guest_id', $guestId)->first());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $guestId, $id)
    {
        $guestRsvp = GuestRsvp::with('guest')
            ->where('id', $id)
            ->where('guest_id', $guestId)
            ->firstOrCreate();

        if ($request->has('attending_rehearsal_dinner') && $guestRsvp->guest->allowed_rehearsal_dinner) {
            $guestRsvp->attending_rehearsal_dinner = $request->get('attending_rehearsal_dinner');
        }

        if ($request->has('guest_id')) {
            if ($guestRsvp->guest->allowed_guest) {
                $guestRsvp->guest_id = $request->get('guest_id');
            }
            return response()->json('Sorry, we aren\'t allowing you a guest. Contact us and we can probably add them to the list');
        }

        $guestRsvp->attending = $request->get('attending');

        return response()->json($guestRsvp);
    }
}
