@extends('layouts/app')

@section('content')

<div class="container py-5">
    
    <div class="card mb-3">
        <div class="row g-0">

          <div class="col-md-4">
            <img src="{{$comic->thumb}}" class="img-fluid rounded-start" alt="{{$comic->title}}">
          </div>
          
          <div class="col-md-8">

            <div class="card-body">

              <h5 class="card-title mb-5 text-center ">{{$comic->title}}</h5>

              <p class="card-text">{{$comic->description}}</p>
              <p class="card-text"><small class="text-body-secondary">{{$comic->price}}</small></p>
              <p class="card-text">Type: <small class="text-body-secondary">{{$comic->type}}</small></p>
              <p class="card-text">Series: <small class="text-body-secondary">{{$comic->series}}</small></p>
           

              <div class="card-text px-3 mb-3">Written by: 
                <small class="text-body-secondary ">{{$comic->writers}}</small>
              </div>
              
              <div class="card-text px-3">Art by: 
                <small class="text-body-secondary ">{{$comic->artists}}</small>
              </div>
            </div>

          </div>
        </div>
    </div>

    <br>
    <div class="d-flex justify-content-center ">
        <a href="{{route('comics.index')}}" class="btn btn-success">Back to list</a>
    </div>
</div>

@endsection