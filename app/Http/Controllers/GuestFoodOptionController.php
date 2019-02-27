<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GuestFoodOption;

class GuestFoodOptionController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json(GuestFoodOption::findOrFail($id));
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
        $guestFoodOption = GuestFoodOption::with('guest')
            ->where('id', $id)
            ->where('guest_id', $guestId)
            ->firstOrCreate();

        dd('not sure what we are storing yet');
        return response()->json($guestFoodOption);
    }
}
