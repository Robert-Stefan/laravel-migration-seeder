@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>PACCHETTI VIAGGIO</h1>

       @foreach ($plans as $plan)
        <article>
            <h2>{{ $plan->title }}</h2>
            <p>{{ $plan->description }}</p>
            <p>GIORNI: {{ $plan->days }}</p>
            <p>PREZZO: {{ $plan->price }} €</p>
            <p>VOTO: {{ $plan->energy_rating }}</p>
        </article>
        @endforeach
    </div>
@endsection