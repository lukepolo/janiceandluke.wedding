<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;
use App\Services\GuestService;
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
        return response()->json(Guest::where('last_name', 'LIKE', "%{$request->get('search')}%")->get());
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
