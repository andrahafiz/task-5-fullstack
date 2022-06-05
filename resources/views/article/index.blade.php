@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card">
                <div class="card-header">{{ __('Article') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-striped table-bordered">
                        <thead>
                          <tr>
                            <th scope="col" style="width: 8%;">No</th>
                            <th scope="col">Title</th>
                            <th scope="col">Content</th>
                            <th scope="col">Category</th>
                            <th scope="col" class="text-center" style="width: 20%;">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($articles as $article)
                                <tr class="align-middle">
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{$article->title}}</td>
                                    <td>{{ Str::limit($article->content,500,'...')}}</td>
                                    <td>{{$article->categories->name}}</td>
                                    <td class=" text-center">
                                        <a href="{{ route('article.show', $article->id) }}" class="d-block">
                                            <button type="button" class="btn btn-labeled btn-secondary btn-sm">
                                                <span class="btn-label"><i class="fa fa-eye"></i></span>Detail</button>
                                        </a>
                                        <a href="{{ route('article.show', $article->id) }}" class="d-block" >
                                            <button type="button" class="btn btn-labeled btn-primary btn-sm ">
                                                <span class="btn-label"><i class="fa fa-edit"></i></span>Edit</button>
                                        </a>
                                        <form method="post" class="d-block" action="{{ route('article.destroy', $article->id) }}">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-labeled btn-danger btn-sm mb-0">
                                                <span class="btn-label"><i class="fa fa-trash"></i></span>Delete</button>
                                            </form>
                                </td>
                                </tr>
                            @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
