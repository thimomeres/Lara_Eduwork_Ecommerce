@extends('layout')
@section('title', 'Contoh View dengan Controller')
@section('header',$title)
@section('content')
    <ol>
        @foreach($products as $product)
            <li>{{ $product }}</li>
        @endforeach
    </ol>
@endsection 
