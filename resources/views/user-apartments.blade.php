@extends('layouts.main-layout')

@section('header')
  @include('partials.header2')
@endsection

@section('content')
{{-- <div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          <h1 class="text-center">I miei annunci</h1>
        </div>
        <div class="card-body">
          <a href="{{ route('apart.create') }}">Crea annuncio</a>
          <ul>
            @foreach ($aparts as $apart)
              <li> {{ $apart -> description }}</li>
              <a href="{{route('apart.show',$apart -> id)}}">Show</a>
              <a href="{{route('apart.edit',$apart -> id)}}">Edit</a>
              <a href="{{route('apart.delete', $apart -> id)}}">Delete</a>
            @endforeach
          </ul>

        </div>
      </div>
    </div>
  </div>
</div> --}}

<div class="container">

    <div class="row justify-content-center">
      <div class="col-md-8">

        <h2 class="text-center bg-light pb-3 pt-3 mb-0">I miei annunci</h2>
        {{-- <a class="btn btn-primary btn-lg btn-block mb-3" href="{{route('apart.create')}}">Aggiungi Nuovo Appartamento</a> --}}


            @foreach ($aparts as $apart)

            <div class="card">
              <div class="card-body">
                <div class="d-flex flex-row flex-wrap">

                    <div class="p-2">
                      <div class="image">
                        <img src="{{asset('img/'. $apart->image )}}"  alt="no-image-found">
                      </div>
                    </div>

                    <div class="  pl-3 col-12 col-md-6 p-2 d-flex flex-column ">

                        <div class="border-bottom border-dark">
                          <h5 class="">{{ $apart -> description }}
                            <br>
                            <small class="text-muted"> {{ $apart -> address }} - {{ $apart -> city }} - - {{ $apart -> state }}  </small>
                          </h5>
                        </div>

                        <div class="flex-grow-1 text-secondary">
                          <div class="pt-2">
                            <span> {{ $apart -> square_meters }} mq  </span>
                        </div>
                          <div class="">
                            <span class="pt-2"> Stanze: {{ $apart -> number_of_rooms }} </span>
                          </div>
                          <div class="">
                            <span class="pt-2"> Letti: {{ $apart -> number_of_beds }}  </span>
                          </div>
                        </div>

                        <div class="mt-auto text-secondary">

                          {{-- <a class="btn btn-light" href="#">Dettagli</a>
                          <a class="btn btn-light" href="{{route('apart.edit',$apart -> id)}}">Modifica</a> --}}

                          <a class="btn btn-light" href="{{route('apart.show',$apart -> id)}}">Show</a>
                          <a class="btn btn-light" href="{{route('apart.edit',$apart -> id)}}">Edit</a>
                          <a class="btn btn-light" href="{{route('apart.delete', $apart -> id)}}">Delete</a>
                        </div>

                    </div>

                </div>
              </div>
            </div>

          @endforeach

        </div>
     </div>

  </div>

@endsection
