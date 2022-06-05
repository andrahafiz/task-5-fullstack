@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card">
                <div class="card-header">{{ __('Detail Article') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">Judul</h5>
                        <hr/>
                        <p class="card-text">{{ $article->title }}</p>
                        <h5 class="card-title">Category</h5>
                        <hr/>
                        <p class="card-text">{{ $article->categories->name }}</p>
                        <h5 class="card-title">Author</h5>
                        <hr/>
                        <p class="card-text">{{ $article->authors->name }}</p>
                        <h5 class="card-title">Created</h5>
                        <hr/>
                       
                        <p class="card-text"> {{ date('l, d-M-Y', strtotime( $article->created_at) )}}</p>
                        <h5 class="card-title">Content</h5>
                        <hr/>
                        <p class="card-text">{!! $article->content !!}</p>
                        <h5 class="card-title">Image</h5>
                        <hr/>
                        <p class="card-text"><img src="..." class="img-fluid" alt="..."></p>
                      </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
