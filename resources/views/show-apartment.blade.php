@extends('layouts.main-layout')
@section('header')
  @include('partials.header2')
@endsection

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      {{-- <a  href="{{route('user.index')}}">Elenco appartamenti</a> --}}
      <div class="card">
        <div class="card-header">
          <h1>{{$apart -> description}}</h1>
          <div class="">
            <a href="{{route('apart.edit',$apart -> id)}}">Edit</a>
            <a href="{{route('apart.delete', $apart -> id)}}">Delete</a>
          </div>
        </div>
        <div id="card-body-show" class="card-body">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="/img/{{$apart -> image}}" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="/img/{{$apart -> image}}" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="/img/{{$apart -> image}}" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <h2>Informazioni relative all'appartamento</h2>
          <ul>
              <li>Numero di letti: {{ $apart -> number_of_beds }}</li>
              <li>Numero di camere: {{ $apart -> number_of_rooms }}</li>
              <li>Numero di bagni: {{ $apart -> number_of_bathrooms }}</li>
              <li>Grandezza : {{ $apart -> square_meters }} m²</li>
              <li>Indirizzo: via <span style="text-transform: capitalize;">{{$apart -> address}}</span>, <span style="text-transform: capitalize;">{{$apart -> city}}</span>, <span style="text-transform: capitalize;">{{$apart -> state}}</span></li>
          </ul>
          <h2>Servizi aggiuntivi</h2>
          <ul>
            @foreach ($services as $serv)
              <li>{{ $serv -> service }}</li>
            @endforeach
          </ul>
        </div>
      </div>
      {{-- <a href="#">Statistiche</a>
      <a href="#">Sponsorizza l'appartamento</a> --}}

    </div>
  </div>
</div>



@endsection
