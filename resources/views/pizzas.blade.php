@extends('layouts.layout')
@section('content')
    <h1>Pizzas</h1>
            @for($i=0;$i < 10 ; $i++)
                <p>pizza {{$i}}</p>
            @endfor
@endsection