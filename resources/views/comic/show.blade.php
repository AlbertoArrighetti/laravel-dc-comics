@extends('layouts/app')

@section('content')

<div class="container py-5">
    
    <div>
        {{$comic->title}}
    </div>

    <br>
    <a href="{{route('comics.index')}}">Torna alla lista</a>
</div>

@endsection