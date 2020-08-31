<h1>lista studenti </h1>

@foreach ($students as $studente)
  {{ $studente['nome'] }}
  {{ $studente['cognome'] }}
@endforeach
