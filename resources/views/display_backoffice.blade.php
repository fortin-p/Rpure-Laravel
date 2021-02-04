@extends('Layout.back')
@section('content')

    <div class="card container">
        <div class=" descpCanada">
            <img src="{{ ($products->image) }}" alt="Voyage banner" class="photo">
            <h1 class ='r-titre'>{{ $products->name }}</h1>
            <h2 id="price">{{ $products->price }}</h2>
            <p class="description">{{ $products->description }}</p>
        </div>
    </div>

@endsection
