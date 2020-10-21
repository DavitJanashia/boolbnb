<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Apartment;
use App\Service;
use Illuminate\Http\Request;

class UserController extends Controller
{
  public function __construct() {

    $this->middleware('auth');
  }

  public function create() {

      return view('apartment-create');

    }
    public function store(Request $request) {

      $user = Auth::user();
      $data = $request -> all();

      $apart = Apartment::create($data);

      $wifi = $request -> input('wifi');
      if ($wifi) {
      $apart -> services() -> attach(1);
      }

      $parking = $request -> input('parking');
      if ($parking) {
      $apart -> services() -> attach(2);
      }

      $sauna = $request -> input('sauna');
      if ($sauna) {
      $apart -> services() -> attach(3);
      }

      $sea_view = $request -> input('sea_view');
      if ($sea_view) {
      $apart -> services() -> attach(4);
      }

      $pool = $request -> input('pool');
      if ($pool) {
      $apart -> services() -> attach(5);
      }

      $reception = $request -> input('reception');
      if ($reception) {
      $apart -> services() -> attach(6);
      }


      $us_id = $user -> id;
      $apart -> user_id = $us_id;
      $apart->save();

      // $apa = \App\Apartment::first();
      // $apart -> services() -> attach(1);



      return redirect()-> route('home');
    }

    public function usindex() {
      $user = Auth::user();
      $id = $user -> id;
      $aparts = Apartment::where('user_id',$id) -> get();

      // dd($apartms);

      return view('user-apartments',compact('aparts'));
    }

    public function edit($id) {

      $apart = Apartment::findOrFail($id);

      return view('edit-apartment',compact('apart'));
    }
    public function update(Request $request,$id) {

      $data = $request -> all();
      $apart = Apartment::findOrFail($id);
      $apart -> update($data);

      $wifi = $request -> input('wifi');
      if ($wifi) {
      $apart -> services() -> attach(1);
      }

      $parking = $request -> input('parking');
      if ($parking) {
      $apart -> services() -> attach(2);
      }

      $sauna = $request -> input('sauna');
      if ($sauna) {
      $apart -> services() -> attach(3);
      }

      $sea_view = $request -> input('sea_view');
      if ($sea_view) {
      $apart -> services() -> attach(4);
      }

      $pool = $request -> input('pool');
      if ($pool) {
      $apart -> services() -> attach(5);
      }

      $reception = $request -> input('reception');
      if ($reception) {
      $apart -> services() -> attach(6);
      }

      return redirect() -> route('user.index');
    }

}