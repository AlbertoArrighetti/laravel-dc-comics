@extends('layouts/app')

@section('content')

<div class="container py-5">
    <h1 class="mb-3">Comics List</h1>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">Title</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
        @foreach ($comics as $comic)
          <tr>

              <td>{{$comic->title}}</td>
            
            <td><a href="{{route('comics.show', $comic->id)}}">visualizza dettagli</a></td>
            
        </tr>
        @endforeach
        </tbody>
      </table>
</div>
@endsection