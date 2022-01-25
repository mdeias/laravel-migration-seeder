@extends('layouts.main')

@section('content')
    <main class="p-5">
        <h1>viaggi</h1>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Nome Viaggio</th>
                <th scope="col">durata</th>
                <th scope="col">partenza</th>
                <th scope="col">destinazione</th>
                <th scope="col">descrizione</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($travels as $travel)
                <tr>
                    <th scope="row">{{ $travel->id }}</th>
                    <td>{{ $travel->titolo}}</td>
                    <td>{{ $travel->durata }}</td>
                    <td>{{ $travel->partenza }}</td>
                    <td>{{ $travel->destinazione }}</td>
                    <td>{{ $travel->descrizione }}</td>
                  </tr> 
                @endforeach
              
            </tbody>
          </table>
    </main>
@endsection