@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Categorie') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-striped table-bordered">
                        <thead>
                          <tr>
                            <th scope="col" style="width: 10%;">No</th>
                            <th scope="col">Name Categorie</th>
                            <th scope="col" class="text-center" style="width: 35%;">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $categorie)
                                <tr class="align-middle">
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{$categorie->name}}</td>
                                    <td class="text-center">
                                        <a href="">
                                            <button type="button" class="btn btn-labeled btn-primary btn-sm mb-0 d-inline">
                                                <span class="btn-label"><i class="fa fa-edit"></i></span>Edit</button>
                                        </a>
                                        <form method="post" class="d-inline" action="{{ route('categorie.destroy', $categorie->id) }}">
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
