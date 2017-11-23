<?php

namespace App\Http\Controllers;

use App\SilomPlaces;
use App\Sukhumvitplaces;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    public function get($id) {
        if ($id < 21) {
            $place = SukhumvitPlaces::find($id);
        }
        else if ($id > 21) {
            $place = SilomPlaces::find($id);
        }

        return view('content')->with('places', $place);
    }
}
