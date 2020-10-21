@extends('layouts.main-layout')
@section('header')
  @include('partials.header2')
@endsection

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          <h1 class="text-center">Modifica informazini riguardanti il tuo appartamento</h1>
        </div>
        <div class="card-body">
          <form action="{{route('apart.update',$apart -> id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('POST')

            <div class="form-group">
                  <label class="col-md-4 col-form-label text-md-right" for="description">Descrizione appartamento</label>
                  <input id="description" type="text" class=" @error('description') is-invalid @enderror col-md-6" name="description" value="{{$apart -> description}}" required autocomplete="description" autofocus >
                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                  <label class="col-md-4 col-form-label text-md-right" for="number_of_rooms">Numero di stanze</label>
                  <input id="number_of_rooms" type="number" class=" @error('number_of_rooms') is-invalid @enderror col-md-6" name="number_of_rooms" value="{{$apart -> number_of_rooms}}" required autocomplete="number_of_rooms" autofocus>
                  @error('number_of_rooms')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label class="col-md-4 col-form-label text-md-right" for="number_of_beds">Numero di letti</label>
                  <input id="number_of_beds" type="number" class=" @error('number_of_beds') is-invalid @enderror col-md-6" name="number_of_beds" value="{{$apart -> number_of_beds}}" required autocomplete="number_of_beds" autofocus>
                  @error('number_of_beds')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label class="col-md-4 col-form-label text-md-right" for="number_of_bathrooms">Numero di bagni</label>
                  <input id="number_of_bathrooms" type="number" class=" @error('number_of_bathrooms') is-invalid @enderror col-md-6" name="number_of_bathrooms" value="{{$apart -> number_of_bathrooms}}" required autocomplete="number_of_bathrooms" autofocus>
                  @error('number_of_bathrooms')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label class="col-md-4 col-form-label text-md-right" for="square_meters">Metri quadri</label>
                  <input id="square_meters" type="number" class=" @error('square_meters') is-invalid @enderror col-md-6" name="square_meters" value="{{$apart -> square_meters}}" required autocomplete="square_meters" autofocus>
                  @error('square_meters')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label class="col-md-4 col-form-label text-md-right" for="address">Via</label>
                  <input id="address" type="text" class=" @error('address') is-invalid @enderror col-md-6" name="address" value="{{$apart -> address}}" required autocomplete="address" autofocus>
                  @error('address')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label class="col-md-4 col-form-label text-md-right" for="city">Città</label>
                  <input id="city" type="text" class=" @error('city') is-invalid @enderror col-md-6" name="city" value="{{$apart -> city}}" required autocomplete="city" autofocus>
                  @error('city')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label class="col-md-4 col-form-label text-md-right" for="state">Paese</label>
                  <input id="state" type="text" class=" @error('state') is-invalid @enderror col-md-6" name="state" value="{{$apart -> state}}" required autocomplete="state" autofocus>
                  @error('state')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>

            <div id="form-img-layout" class="form-group">

              <label class="col-md-4 col-form-label text-md-right" for="image">Immagine</label>
              <input id="img-inp" type="file" value="{{ old('image') }}" class="form-control
                                @error('image') is-invalid @enderror col-md-6" name="image" >

              @error('image')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
              <div class="col-md-4 col-form-label text-md-right"></div>
              <div id="my-img-inp" class="col-md-6">
                <img src="{{asset('img/'. $apart->image)}}" alt="{{$apart -> image}}">
              </div>
            </div>

            <h3 class="text-center">Servizi aggiuntivi</h3>
            <div id="serv-agiunt">
              <div class="form-group">
                <label for="wifi">WIFI</label>
                <input type="checkbox" name="wifi"

                @foreach ($services as $service)
                  @if ($service->id == 1)
                    checked
                  @endif
                @endforeach

                value="1">
              </div>

              <div class="form-group">
                <label for="parking">Parcheggio</label>
                <input type="checkbox" name="parking"

                @foreach ($services as $service)
                  @if ($service->id == 2)
                    checked
                  @endif
                @endforeach

                value="2">
              </div>

              <div class="form-group">
                <label for="sauna">Sauna</label>
                <input type="checkbox" name="sauna"

                @foreach ($services as $service)
                  @if ($service->id == 3)
                    checked
                  @endif
                @endforeach

                value="3">
              </div>

              <div class="form-group">
                <label for="sea_view">Vista mare</label>
                <input type="checkbox" name="sea_view"

                @foreach ($services as $service)
                  @if ($service->id == 4)
                    checked
                  @endif
                @endforeach

                value="4">
              </div>

              <div class="form-group">
                <label for="pool">Piscina</label>
                <input type="checkbox" name="pool"

                @foreach ($services as $service)
                  @if ($service->id == 5)
                    checked
                  @endif
                @endforeach

                value="5">
              </div>

              <div class="form-group">
                <label for="reception">Reception</label>
                <input type="checkbox" name="reception"

                @foreach ($services as $service)
                  @if ($service->id == 6)
                    checked
                  @endif
                @endforeach

                value="6">
              </div>
            </div>


            <button id="myupdate-btn" class="btn btn-primary" type="submit" name="button">Aggiorna</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
