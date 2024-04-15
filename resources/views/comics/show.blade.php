@extends('layouts/app')

@section('content')

<div class="container py-5">
    
    <div class="card mb-3">
        <div class="row g-0">

          <div class="col-md-4 p-4">
            <img src="{{$comic->thumb}}" class="img-fluid rounded-start" alt="{{$comic->title}}">
          </div>
          
          <div class="col-md-8">

            <div class="card-body my-2 ">

              <h5 class="card-title mb-4 fs-2 text-center ">{{$comic->title}}</h5>

              <p class="card-text">{{$comic->description}}</p>
              <p class="card-text fw-bold pb-3 ">{{$comic->price}}</p>
              <p class="card-text fw-bold ">Type: <small class="text-body-secondary">{{$comic->type}}</small></p>
              <p class="card-text fw-bold ">Series: <small class="text-body-secondary">{{$comic->series}}</small></p>
           

              <div class="card-text mb-3 fw-bold ">Written by: 
                <small class="text-body-secondary">{{$comic->writers}}</small>
              </div>
              
              <div class="card-text fw-bold ">Art by: 
                <small class="text-body-secondary">{{$comic->artists}}</small>
              </div>
            </div>

          </div>
        </div>
    </div>

    <br>
    <div class="d-flex justify-content-between ">
      <div class="d-flex gap-4">
        <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-warning ">Modify</a>
        <a href="{{route('comics.index')}}" class="btn btn-success">Back to list</a>
      </div>
      <div>
        {{-- button for destroy --}}
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Delete Item
        </button>
      </div>
    </div>


    
    
    {{-- Modal for destroy --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content">

          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Item</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body">
            Are you sure that you want to delete the comic item:  "{{$comic->title}}" ?
          </div>


          <div class="modal-footer d-flex gap-3 ">

              <button type="button" class="btn btn-success " data-bs-dismiss="modal">Back</button>
              
              
              <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                  @csrf
                  @method("DELETE")
                  
                  <button class="btn btn-danger">Go ahed</button>
              </form>

          </div>

        </div>
      </div>
  </div>




</div>

@endsection