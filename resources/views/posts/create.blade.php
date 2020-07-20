@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header font-weight-bold">Créer un post</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="legende">Légende</label>
                                    
                            <input id="legende" 
                                type="text" 
                                class="form-control @error('legende') is-invalid @enderror" 
                                name="legende" value="{{ old('legende') }}"
                                autocomplete="legende" autofocus>
                                
                            @error('legende')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>  
        
                        <div class="form-group">
                            <label for="description">Description du post</label>
                            <input id="description" 
                                    type="text" 
                                    class="form-control @error('description') is-invalid @enderror" 
                                    name="description" value="{{ old('description') }}"
                                    autocomplete="description" autofocus>
                                    
                            @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
        
                        <div class="form-group">
                            <label for="categorie">Couleur de la bière</label>
                            <select name="categorie" id="categorie" class="custom-select @error('categorie') is-invalid @enderror" >
                                <option value="0">Indéterminée</option>
                                <option value="1">Blanche</option>
                                <option value="2">Blonde</option>
                                <option value="3">Brune</option>
                                <option value="4">Ambrée</option>
                                <option value="5">Rosée</option>
                                <option value="6">Noire</option>
                            </select>
                            @error('categorie')
                                {{ $errors->first('categorie') }}
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="image">Image</label>
                            <input id="image"
                                    type="file" 
                                    class="form-control-file @error('image') is-invalid @enderror"  
                                    name="image" value="{{ old('image') }}"
                                    autocomplete="image" autofocus>
                            @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
        
                        <div class="form-group pt-3">
                            <button class="btn btn-dark">Créer mon post
                            </button>
                        </div>     
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
