@extends('layout.layout')
@section('content')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<div class="panel panel-default">
    <div class="panel-heading">
        <h2 class="panel-title">Formulaire d'ajout d'article</h2>
    </div>
    <div class="panel-body">
        <form class="" action="" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="firstname" placeholder="firstname">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" name="lastname" placeholder="lastname">
            </div>

            <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

@endsection
