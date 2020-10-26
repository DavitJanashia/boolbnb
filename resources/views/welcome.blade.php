@extends('layouts.main-layout')
@section('header')
  @include('partials.header1')
@endsection
@section('content')
  <div id="div-search" class="flex">
    <div class="white-radius-center">
      <h2>Ricerca</h2>
      <input type="text" name="" id="mysearch" placeholder="Cerca appartamento">
      <div class="search">
        <a href="#"><i class="fas fa-search"></i></a>
      </div>
    </div>
  </div>
@endsection
