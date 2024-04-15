@extends('layouts/app')

@section('content')

    <div class="container py-5">
        <h1 class="text-center mb-4">Add a new comic</h1>

        <form action="{{route('comics.store')}}" method="POST">
            @csrf
    
            <div class="mb-3">
              <label for="title" class="form-label">Title :</label>
              <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}">
            </div>
    
            <div class="mb-3">
                <label for="description" class="form-label">Description :</label>
                <textarea type="text" class="form-control" id="description" name="description">{{old('description')}}</textarea>
            </div>
    
            <div class="mb-3">
                <label for="thumb" class="form-label">Add a URL for a Thumb :</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{old('thumb')}}">
            </div>

            <div class="row">
                <div class="mb-3 col">
                    <label for="price" class="form-label">Price :</label>
                    <input type="text" class="form-control" id="price" name="price" placeholder='es: $20.00' value="{{old('price')}}">
                </div>
    
                <div class="mb-3 col">
                    <label for="series" class="form-label">Series :</label>
                    <input type="text" class="form-control" id="series" name="series" value="{{old('series')}}">
                </div>
        
                <div class="mb-3 col">
                    <label for="sale_date" class="form-label">Sales Date :</label>
                    <input type="date" class="form-control" id="sale_date" name="sale_date" placeholder='YY-MM-DD' value="{{old('sale_date')}}">
                </div>

                <div class="mb-3 col">
                    <label for="type" class="form-label">Type :</label>
                    <input type="text" class="form-control" id="type" name="type" value="{{old('type')}}">
                </div>
            </div>


            <div class="mb-3">
                <label for="artists" class="form-label">Artists :</label>
                <textarea type="text" class="form-control" id="artists" name="artists" placeholder='es: name, name, ...'>{{old('artists')}}</textarea>
            </div>

            <div class="mb-5">
                <label for="writers" class="form-label">Writers :</label>
                <textarea type="text" class="form-control" id="writers" name="writers" placeholder='es: name, name, ...'>{{old('writers')}}</textarea>
            </div>


            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>
                            {{$error}}
                        </li>
                        @endforeach
                    </ul>
                </div>
            @endif



    
            <div class="d-flex justify-content-center gap-5">
                <button type="submit" class="btn btn-light ">Create a new comic</button>
                
                <a class="btn btn-success " href="{{route('comics.index')}}">back to list</a>
            </div>

        </form>
    </div>
@endsection