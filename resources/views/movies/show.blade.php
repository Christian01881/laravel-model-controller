@extends('layouts.general')


@section('content')
    <main class="d-flex">
        <div class="w-30">
            <img class="bg-image" src="{{ $movie->image }}" alt="">
        </div>
        <div class="w-50">
            <h1 class="text-center pt-5">{{ $movie->title }}</h1>
            <p class="pt-4 ps-5 fs-5">Titolo originale: <span><strong>{{ $movie->original_title }}</strong></span></p>
            <p class="pt-2 ps-5 fs-5">Nazionalità: <span><strong>{{ $movie->nationality }}</strong></span></p>
            <p class="pt-2 ps-5 fs-5">Data di uscita: <span><strong>{{ $movie->date }}</strong></span></p>
            <p class="pt-2 ps-5 fs-5">Votazione: <span><strong>{{ $movie->vote /2 }} <i class="fa-solid fa-star"></i></strong></span></p>
            <h5 class="text-end m-top"><a class="link" href="{{ route('home') }}"><i class="fa-solid fa-arrow-left"></i> Torna alla lista dei film</a></h5>
        </div>
    </main>
@endsection
