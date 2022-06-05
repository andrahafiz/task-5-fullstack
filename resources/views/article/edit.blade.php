@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Categorie') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('categorie.update', $categorie->id) }}">
                        @method('PUT')  
                        @csrf
                        <div class="mb-3">
                          <label for="nameinput" class="form-label">Categorie Name</label>
                          <input type="text" class="form-control @error('name') is-invalid @enderror" id="nameinput" aria-describedby="name" name="name" value="{{ $categorie->name}}">
                          @error('name')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                          @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
