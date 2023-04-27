@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12 grid-margin">

        @if (session('message'))
            <div class="alert alert-success">{{ session('message') }}</div> 
        @endif
        <div class="card">
            <div class="card-header">
                <h4>Categorie
                    <a href="{{ url('admin/category/create') }}" class="btn btn-primary float-end">Aggiungi Categoria</a>
                </h4>
            </div>
        </div>
    </div>
</div>
@endsection