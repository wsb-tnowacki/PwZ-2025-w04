@extends('layout.layout')
@section('tytul','O nas')
@section('podtytul', 'O nas')
@section('tresc')
    <div>
        Treść dla strony O nas.
        <div>
            {{--
            <ol>
                @isset($zadania)
                <?php foreach ($zadania ?? '' as $zadanie ) : ?>
                <li><?= $zadanie ?></li>
                <?php endforeach; ?>
                @endisset 
            </ol>
            --}}
            <ol>
            @isset($zadania)
            @foreach ($zadania as $zadanie)
                <li>{{ $zadanie}}</li>
            @endforeach 
            @endisset  
            </ol>
           
        </div>
    </div>
@endsection