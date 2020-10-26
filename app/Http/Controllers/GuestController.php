<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Apartment;

class GuestController extends Controller
{
  public function show($id) {

    $apart = Apartment::findOrFail($id);
    $services = $apart->services()->get();

    return view('show-apartment', compact('apart','services'));
  }

  public function latlng(Request $request) {

    $lat = $request['lat'];
    $lng = $request['lng'];

    return view('search-results', compact('lat','lng'));
  }

  public function index() {

  $aparts = Apartment::all();
  return response()->json($aparts);
}
}
