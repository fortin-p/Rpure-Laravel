@extends('Layout.back')
@section('content')
       <div class="card container">
           <div class=" descpCanada">
               <img src="{{ ($products['image']) }}" alt="Voyage banner" class="photo">
               <h1 class ='r-titre'>name: {{ $products['name'] }}</h1>
               <h2 id="price">price: {{ $products['price'] }}</h2>
               <h2 id="price"> weight :{{ $products['weight'] }}</h2>
               <h2 id="price">quantity :{{ $products['quantity'] }}</h2>
               <h2 id="price">id :{{ $products['categorie_id'] }}</h2>
               <h2 class="description"> description :{{ $products['description'] }}</h2>
           </div>
       </div>

@endsection

