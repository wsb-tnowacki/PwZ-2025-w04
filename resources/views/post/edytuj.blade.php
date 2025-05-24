@extends('layout.layout')
@section('tytul', 'Edycja postu')
@section('podtytul', 'Edytuj post')
@section('tresc')
@isset($post)
<form action="{{route('post.update',$post->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="for-group">
        <label for="tytul" class="form-label">Tytuł</label>
        <input type="text" class="form-control" id="tytul" name="tytul" value="@if(old('tytul') !== null){{old('tytul')}}@else{{$post->tytul}}@endif" placeholder="Podaj tytuł">
        @if ($errors->has('tytul'))
            @foreach ($errors->get('tytul') as $error)
                <div style="color:red">{{$error}}</div>
            @endforeach
        @endif
    </div>
    <div class="for-group">
        <label for="autor" class="form-label">Autor</label>
        <input type="text" class="form-control" id="autor" name="autor" value="@if(old('autor') !== null){{old('autor')}}@else{{$post->autor}}@endif" placeholder="Podaj autora">
        @error('autor')
        <div style="color:red">{{$message}}</div>
        @enderror
    </div>
    <div class="for-group">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="@if(old('email') !== null){{old('email')}}@else{{$post->email}}@endif" placeholder="Podaj email autora">
        @error('email')
        <div style="color:red">{{$message}}</div>
        @enderror
    </div>
    <div class="for-group">
        <label for="tresc" class="form-label">Treść</label>
        <textarea class="form-control" name="tresc" id="tresc" cols="30" rows="4">@if(old('tresc') !== null){{old('tresc')}}@else{{$post->tresc}}@endif</textarea>
        @error('tresc')
        <div style="color:red">{{$message}}</div>
        @enderror
    </div>
    <button class="btn btn-success m-1" type="submit">Zmień post</button>
</form>    
@endisset
<a href="{{route('post.index')}}"><button class="btn btn-primary m-1" type="submit">Powrót do listy</button></a>
@endsection
