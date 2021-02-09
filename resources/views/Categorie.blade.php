@extends("Layout.layout")
@section('content')
    <div class="card">

        @foreach ($products as $article)
            {{dd($article->categorie)}}
                <div class="card">
                    <header class="card-header">
                        <p class="r-titre card-header-title">{{$article->name}}</p>
                        <div class="select">
                            <p class="description">{{ $article->categorie->name }}</p>
                            </select>
                        </div>

                    </header>
        @endforeach

    </div>

@endsection
