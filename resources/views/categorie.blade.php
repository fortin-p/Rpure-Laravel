@extends("Layout.layout")
@section('content')
    <div class="card">

        @foreach ($products as $article)
{{--{{dd($article)}}--}}
                <div class="card">
                    <header class="card-header">
                        <p class="r-titre card-header-title">{{$article->name}}</p>
                        <div class="select">
                            {{-- @dd($article->category) --}}
                            <p class="description">{{ $article->category->name}}</p>

                            </select>
                        </div>

                    </header>
        @endforeach

    </div>

@endsection
