@extends('Layout.back')
@section('content')
    @if(isset($products))
        @foreach ($products as $article)
            <div class="card container">
                <div class=" descpCanada">
                    <img src="{{ ($article->image) }}" alt="Voyage banner" class="photo">
                    <h1 class ='r-titre'>{{ $article->name }}</h1>
                    <h2 id="price">{{ $article->price }}</h2>
                    <p class="description">{{ $article->description }}</p>
{{--                    <td class="center"><a href="{{URL::to('/delete/'.$article->name) }}"><span>Delete</span></a></td>--}}
                    <form method="post" action="/delete/{{$article->name}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit">delete</button>
                    </form>
                    <td class="center"><a href="{{URL::to('/backoffice/'.$article->id.'/edit') }}"><span>Modifier</span></a></td>

                </div>
            </div>
        @endforeach

    @endif
    @if(isset($value))
        @include('addbackoffice')
    @endif
@endsection





