@extends('layouts/app')

@section('content')

    <div class="container py-5">
        <h1 class="text-center mb-4">Edit a comic</h1>

        
        <form action="{{route('comics.update', $comic->id)}}" method="POST">
            @csrf
            @method('PUT')
    
            <div class="mb-3">
              <label for="title" class="form-label">Title :</label>
              <input type="text" value="{{old('title') ?? $comic->title}}" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required>
                    @error('title')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
            </div>
    
            <div class="mb-3">
                <label for="description" class="form-label">Description :</label>
                <textarea type="text" class="form-control @error('description') is-invalid @enderror" id="description" rows='6' name="description">{{old('description') ?? $comic->description}}</textarea>
                    @error('description')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
            </div>
    
            <div class="mb-3">
                <label for="thumb" class="form-label">Add a URL for a Thumb :</label>
                <input type="text" value="{{old('thumb') ?? $comic->thumb}}" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb">
                    @error('thumb')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
            </div>

            <div class="row">
                <div class="mb-3 col">
                    <label for="price" class="form-label">Price :</label>
                    <input type="text" value="{{old('price') ?? $comic->price}}" class="form-control @error('price') is-invalid @enderror" id="price" name="price" placeholder='es: $20.00' required>
                        @error('price')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                </div>
    
                <div class="mb-3 col">
                    <label for="series" class="form-label">Series :</label>
                    <input type="text" value="{{old('series') ?? $comic->series}}" class="form-control @error('series') is-invalid @enderror" id="series" name="series" required>
                        @error('series')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                </div>
        
                <div class="mb-3 col">
                    <label for="sale_date" class="form-label">Sales Date :</label>
                    <input type="date" value="{{old('sale_date') ?? $comic->sale_date}}" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" placeholder='YY-MM-DD' required>
                        @error('sale_date')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                </div>

                <div class="mb-3 col">
                    <label for="type" class="form-label">Type :</label>
                    <input type="text" value="{{old('type') ?? $comic->type}}" class="form-control @error('type') is-invalid @enderror" id="type" name="type" required>
                        @error('type')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                </div>
            </div>


            <div class="mb-3">
                <label for="artists" class="form-label">Artists :</label>
                <textarea type="text" class="form-control @error('artists') is-invalid @enderror" id="artists" name="artists" placeholder='es: name, name, ...' required>{{old('artists') ?? $comic->artists}}</textarea>
                    @error('artists')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
            </div>

            <div class="mb-5">
                <label for="writers" class="form-label">Writers :</label>
                <textarea type="text" class="form-control @error('writers') is-invalid @enderror" id="writers" name="writers" placeholder='es: name, name, ...' required>{{old('writers') ?? $comic->writers}}</textarea>
                    @error('writers')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
            </div>

            
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary  ">Save changes</button>
                
                <a class="btn btn-success " href="{{route('comics.show', $comic->id)}}">Cancel changes</a>
            </div>

        </form>

    </div>
@endsection