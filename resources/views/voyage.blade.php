@section('title')
    R-Pure
@endsection
@section('titre')
    Voyage, voyage
@endsection
@section('photoCanada')

@endsection
@section('iconePanier')
<a href=""> <img src="{{ asset('images/Panier.png') }}" alt="panier" class="panier"> </a>
@endsection
@section('detailsButton')
  <a href ="/cart"  <button class="detailsbutton"
            type="button">
        Details
    </button>
@endsection


@include('display_voyage')





