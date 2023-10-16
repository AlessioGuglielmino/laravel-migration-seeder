@extends('home')

@section('main-content')

  <section class="container mt-5">

    @forelse($trains as $train)
      <p>
        <strong>codice treno</strong>: {{ $train->codice_treno }} <br>
        <strong>stazione di partenza</strong>: {{ $train->stazione_di_partenza }} <br>
        <strong>stazione di arrivo </strong>: {{ $train->stazione_di_arrivo }}
        <strong>orario di partenza </strong>: {{ $train->orario_di_partenza }}
        <strong>orario di arrivo </strong>: {{ $train->orario_di_arrivo }}

      </p>
      <hr>
    @empty
      <h2>Non ci sono risultati</h2>
    @endforelse
  </section>
@endsection