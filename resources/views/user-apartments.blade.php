@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          <h1>I miei annunci</h1>
        </div>
        <div class="card-body">
          <a href="{{ route('apart.create') }}">Crea annuncio</a>
          <ul>
            @foreach ($aparts as $apart)
              <li> {{ $apart -> description }}</li>
              <a href="#">Show</a>
              <a href="{{route('apart.edit',$apart -> id)}}">Edit</a>
            @endforeach
          </ul>

        </div>
      </div>
    </div>
  </div>
</div>



@endsection
