@extends('layouts/app')

@section('content')

    <div class="container py-5">
        <h1 class="text-center mb-4">Add a new comic</h1>

        <form action="{{route('comics.store')}}" method="POST">
            @csrf
    
            <div class="mb-3">
              <label for="title" class="form-label">Title :</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" required name="title" value="{{old('title')}}">
                @error('title')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
    


            <div class="mb-3">
                <label for="description" class="form-label">Description :</label>
                <textarea type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{old('description')}}</textarea>
                    @error('description')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
            </div>
    
            <div class="mb-3">
                <label for="thumb" class="form-label">Add a URL for a Thumb :</label>
                <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" value="{{old('thumb')}}">
                    @error('thumb')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
            </div>

            <div class="row">
                <div class="mb-3 col">
                    <label for="price" class="form-label">Price :</label>
                    <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" required name="price" placeholder='es: $20.00' value="{{old('price')}}">
                        @error('price')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                </div>
    
                <div class="mb-3 col">
                    <label for="series" class="form-label">Series :</label>
                    <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" required name="series" value="{{old('series')}}">
                        @error('series')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                </div>
        
                <div class="mb-3 col">
                    <label for="sale_date" class="form-label">Sales Date :</label>
                    <input type="date" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" required name="sale_date" placeholder='YY-MM-DD' value="{{old('sale_date')}}">
                        @error('sale_date')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                </div>

                <div class="mb-3 col">
                    <label for="type" class="form-label">Type :</label>
                    <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" required name="type" value="{{old('type')}}">
                        @error('type')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                </div>
            </div>


            <div class="mb-3">
                <label for="artists" class="form-label">Artists :</label>
                <textarea type="text" class="form-control @error('artists') is-invalid @enderror" id="artists" required name="artists" placeholder='es: name, name, ...'>{{old('artists')}}</textarea>
                    @error('artists')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
            </div>

            <div class="mb-5">
                <label for="writers" class="form-label">Writers :</label>
                <textarea type="text" class="form-control @error('writers') is-invalid @enderror" id="writers" required name="writers" placeholder='es: name, name, ...'>{{old('writers')}}</textarea>
                    @error('writers')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
            </div>



    
            <div class="d-flex justify-content-center gap-5">
                <button type="submit" class="btn btn-light ">Create a new comic</button>
                
                <a class="btn btn-success " href="{{route('comics.index')}}">back to list</a>
            </div>

        </form>
    </div>
@endsection