<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;
use App\Services\GuestService;
use Illuminate\Support\Facades\DB;
use App\Exceptions\NotAllowedRehearsalDinner;

class GuestController extends Controller
{
    /**
     * @var GuestService
     */
    private $guestService;

    /**
     * GuestController constructor.
     * @param GuestService $guestService
     */
    public function __construct(GuestService $guestService)
    {
        $this->guestService = $guestService;
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return response()->json(
              DB::table('guests')
                  ->selectRaw(
                      '
                      guests.id, 
                      CASE
                        WHEN guests.last_name = temp_guest.last_name THEN CONCAT(guests.first_name, " & ", temp_guest.first_name, " ", guests.last_name)
                        ELSE CONCAT(guests.first_name, " ", guests.last_name)
                      END as guest_name
                      '
                  )
                  ->leftJoin('guests as temp_guest', 'temp_guest.id', '=', 'guests.guest_id')
                  ->where('guests.last_name', 'LIKE', "%{$request->get('search')}%")
                  ->where(function ($query) {
                      $query->whereRaw('temp_guest.id > guests.id')
                          ->orWhereNull('temp_guest.id');
                  })
                  ->get()
          );
    }

    /**
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json(Guest::with(['rsvp', 'foodOptions', 'guest.rsvp', 'guest.foodOptions'])->findOrFail($id));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $guest = Guest::findOrFail($id);

        try {
            $this->guestService->updateRsvp($guest, collect($request->get('guest_rsvp')));
        } catch (NotAllowedRehearsalDinner $e) {
            return response()->json('Sorry, you were not invited to the rehearsal dinner.');
        }

        $this->guestService->updateFoodOptions($guest, collect($request->get('guest_food_option')));

        return response($guest);
    }
}
