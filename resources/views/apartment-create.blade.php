@extends('layouts.main-layout')
@section('header')
  @include('partials.header2')
@endsection


@section('content')
<div class="container">

  <div class="row justify-content-center">
    <div class="col-md-8">
      <div id="mycreate" class="card">

        <div class="card-header">
          <h1 class="text-center">Aggiungi un annuncio</h1>
        </div>
        <div class="card-body">
          <form action="{{route('apart.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('POST')


            <div class="card-body">
              <form action="{{route('apart.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('POST')

                <div class="form-group">
              <label class="col-md-4 col-form-label text-md-right" for="description">Descrizione appartamento</label>
              <input id="description" type="text" class=" @error('description') is-invalid @enderror col-md-6" name="description" value="" required autocomplete="description" autofocus >
                @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
              <label class="col-md-4 col-form-label text-md-right" for="number_of_rooms">Numero di stanze</label>
              <input id="number_of_rooms" type="number" class=" @error('number_of_rooms') is-invalid @enderror col-md-6" name="number_of_rooms" value="" required autocomplete="number_of_rooms" autofocus>
              @error('number_of_rooms')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
            <div class="form-group">
              <label class="col-md-4 col-form-label text-md-right" for="number_of_beds">Numero di letti</label>
              <input id="number_of_beds" type="number" class=" @error('number_of_beds') is-invalid @enderror col-md-6" name="number_of_beds" value="" required autocomplete="number_of_beds" autofocus>
              @error('number_of_beds')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
            <div class="form-group">
              <label class="col-md-4 col-form-label text-md-right" for="number_of_bathrooms">Numero di bagni</label>
              <input id="number_of_bathrooms" type="number" class=" @error('number_of_bathrooms') is-invalid @enderror col-md-6" name="number_of_bathrooms" value="" required autocomplete="number_of_bathrooms" autofocus>
              @error('number_of_bathrooms')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
            <div class="form-group">
              <label class="col-md-4 col-form-label text-md-right" for="square_meters">Metri quadri</label>
              <input id="square_meters" type="number" class=" @error('square_meters') is-invalid @enderror col-md-6" name="square_meters" value="" required autocomplete="square_meters" autofocus>
              @error('square_meters')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
            <div class="form-group">
              <label class="col-md-4 col-form-label text-md-right" for="address">Via</label>
              <input id="address" type="text" class=" @error('address') is-invalid @enderror col-md-6" name="address" value="" required autocomplete="address" autofocus>
              @error('address')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
            <div class="form-group">
              <label class="col-md-4 col-form-label text-md-right" for="city">Città</label>
              <input id="city" type="text" class=" @error('city') is-invalid @enderror col-md-6" name="city" value="" required autocomplete="city" autofocus>
              @error('city')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
            <div class="form-group">
              <label class="col-md-4 col-form-label text-md-right" for="state">Paese</label>
              <input id="state" type="text" class=" @error('state') is-invalid @enderror col-md-6" name="state" value="" required autocomplete="state" autofocus>
              @error('state')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

            <div class="form-group">
              <label class="col-md-4 col-form-label text-md-right" for="image">Select Image</label>
              <input id="img-inp" type="file" class="form-control-file
                                  @error('image') is-invalid @enderror col-md-6" id="image" name="image">

                                  @error('image')
                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror

            </div>

            <h3 id="my-serv-ag" class="text-center">Servizi aggiuntivi</h3>

            <div id="serv-agiunt">
              <div class="form-group">
                <label for="wifi">WIFI</label>
                <input type="checkbox" name="wifi" value="1">
              </div>
              <div class="form-group">
                <label for="parking">Parcheggio</label>
                <input type="checkbox" name="parking" value="2">
              </div>
              <div class="form-group">
                <label for="sauna">Sauna</label>
                <input type="checkbox" name="sauna" value="3">
              </div>
              <div class="form-group">
                <label for="sea_view">Vista mare</label>
                <input type="checkbox" name="sea_view" value="4">
              </div>
              <div class="form-group">
                <label for="pool">Piscina</label>
                <input type="checkbox" name="pool" value="5">
              </div>
              <div class="form-group">
                <label for="reception">Reception</label>
                <input type="checkbox" name="reception" value="6">
              </div>
            </div>

            <button id="mycreate-btn" class="btn btn-primary" type="submit" name="button">Crea</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
