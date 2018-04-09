@extends('layouts.game')
@section('title', 'Chracters')
@section('content')
  @if(Session::has('status'))
  <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('status') }}</p>
  @endif
  <h1>Chracters</h1>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Class</th>
      </tr>
    </thead>
  @foreach ($characters as $character)
    <tr>
      <td><a href="{{ route('character.edit',['id' => $character->id]) }}">{{ $character->name }}</a></td>
      <td>{{ $character->classes->name }}</td>
    </tr>
  @endforeach
  </table>
@endsection