@extends('layouts.general')

@section('content')
<main class="container d-flex flex-wrap gap-3">
    @foreach ($movies as $movie)
        <div class="card text-center">
            <img class="card-img-top" src="{{ $movie->image }}" alt="">
            <div class="card-body">
                <h5 class="py-5"><a class="link" href="{{ route('show', $movie->id) }}">Mostra di più <i class="fa-solid fa-arrow-right"></i></a></h5>
            </div>
        </div>
    @endforeach
</main>
@endsection
