@extends('layouts/app')

@section('content')

<div class="container py-5">
    <h1 class="mb-3">Comics List</h1>

    <table class="table mb-5 ">
        <thead>
          <tr>
            <th scope="col" class="pb-4">Title</th>
            <th>Price</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
        @foreach ($comics as $comic)
          <tr>

            <td>{{$comic->title}}</td>
            <td>{{$comic->price}}</td>
            
            <td><a href="{{route('comics.show', $comic->id)}}">view details</a></td>
            
        </tr>
        @endforeach
        </tbody>
      </table>


      <a href="{{route('comics.create')}}" class="btn btn-primary ">
        Create a new element
      </a>
</div>
@endsection