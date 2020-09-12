@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header font-weight-bold">Modification de mes informations</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('profiles.update', ['user' => $user]) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        <div class="form-group">
                            <label for="titre">Titre</label>
                                    
                            <input id="titre" 
                                type="text" 
                                class="form-control @error('titre') is-invalid @enderror" 
                                name="titre" value="{{ old('titre') ?? $user->profile->titre }}"
                                autocomplete="titre" autofocus>
                                
                            @error('titre')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>  
        
                        <div class="form-group">
                            <label for="presentation">Présentation</label>
                            <textarea id="presentation" 
                                    type="text" 
                                    class="form-control @error('presentation') is-invalid @enderror" 
                                    name="presentation" autocomplete="presentation" autofocus>
                                    {{ old('presentation') ?? $user->profile->presentation }}
                            </textarea>
                                    
                            @error('presentation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="url">URL</label>
                                    
                            <input id="url" 
                                type="text" 
                                class="form-control @error('url') is-invalid @enderror" 
                                name="url" value="{{ old('url') ?? $user->profile->url }}"
                                autocomplete="url" autofocus>
                                
                            @error('url')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
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
                            <button class="btn btn-dark">Valider les modifications
                            </button>
                        </div>     
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
