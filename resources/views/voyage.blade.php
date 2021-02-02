@section('title')
    R-Pure
@endsection
@section('titre')
    Voyage, voyage
@endsection
@section('photoCanada')
    <img src="{{ asset('images/canada.jpg') }}" alt="Voyage banner" class="photo">
@endsection
@section('iconePanier')
<a href=""> <img src="{{ asset('images/Panier.png') }}" alt="panier" class="panier"> </a>
@endsection
@section('detailsButton')
    <button class="detailsbutton"
            type="button">
        Details
    </button>
@endsection

@include('display_voyage')




