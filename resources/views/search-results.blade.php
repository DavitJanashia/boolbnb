@extends('layouts.main-layout')
@section('header')
  @include('partials.header1')
@endsection
@section('content')
<div class="container">
  <div id="div-search" class="flex mb-4 mt-0">
    <div class="white-radius-center">
      <input type="search" value="" name="places" id="mysearch" placeholder="Cerca appartamento">
      <div class="search">
        <!-- <a href="#"><i class="fas fa-search"></i></a> -->
        <i class="fas fa-search"></i>
      </div>
    </div>
    <span id="mylatitude">{{$lat}}</span>
    <span id="mylongitude">{{$lng}}</span>
  </div>
  <div class="row justify-content-center">

    <div class="col-md-8">

      <div class="card">
        <div class="card-header">
          <h1 class="text-center">Risultati</h1>
        </div>
        <div class="card-body">
          <ul id="target">

          </ul>

        </div>
      </div>
    </div>
  </div>
</div>
<script src="{{ asset('js/app2.js') }}" defer></script>

@endsection
