@extends('layout.app')

@section('page-title', 'homepage')

@section('content')

<section class="container">   

    @foreach ($movies as $movie)
    <section class="d-inline-flex p-3">
    <div class="card" style="width: 18rem;">
        <img src="http://placeimg.com/640/480/tech/grayscale" alt="photo">
        <div class="card-body">
          <h5 class="card-title">{{$movie->title}}</h5>
          <p class="card-text">Original Title: {{$movie->original_title}}</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Vote: {{$movie->vote}}</li>
          <li class="list-group-item">Nationality: {{$movie->nationality}}</li>
          <li class="list-group-item">Date: {{$movie->date}}</li>
        </ul>
      </div> 
    </section>     
    @endforeach

@endsection


