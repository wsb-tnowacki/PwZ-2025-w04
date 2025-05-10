@extends('layout.layout')
@section('tytul','Dodanie posty')
@section('podtytul', 'Dodaj post')
@section('tresc')
<form action="{{route('posty.store')}}" method="post">
    @csrf
  <div class="for-group">
    <label for="tytul" class="form-label">Tytuł</label>
    <input type="text" class="form-control" id="tytul" placeholder="Podaj tytuł postu">
  </div>
  <div class="for-group">
    <label for="autor" class="form-label">Autor</label>
    <input type="text" class="form-control" id="autor" placeholder="Podaj autora postu">
  </div>
  <div class="for-group">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" placeholder="Podaj email autora postu">
  </div>
  <div class="for-group">
    <label for="tresc" class="form-label">Treść</label>
    <textarea name="tresc" class="form-control" id="tresc" cols="4" rows="5"></textarea>
  </div>
  <button class="btn btn-success m-1" type="submit">Dodaj post</button>
</form>

@endsection
