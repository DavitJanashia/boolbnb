@extends('layouts.main-layout')
@section('header')
  @include('partials.header1')
@endsection
@section('content')
  <div id="div-search" class="flex">
    <div class="white-radius-center">
      <form class="flex formSearch" action="{{route('aparts.search')}}" method="post">
          @csrf
          @method('POST')

            <input id="mysearch" type="search" name="places"  placeholder="Cerca appartamento">
            <div class="search">
              <button class='search' type="submit" name="button"><i class="fas fa-search"></i></button>
            </div>

            <input id="lat-form" type="text" class=" @error('description') is-invalid @enderror col-md-6" name="lat" value=""  required autocomplete="description" autofocus >

            <input id="lng-form" type="text" class=" @error('description') is-invalid @enderror col-md-6" name="lng" value=""  required autocomplete="description" autofocus >
        </form>
    </div>
  </div>
  <script src="{{ asset('js/app1.js') }}" defer></script>
@endsection
