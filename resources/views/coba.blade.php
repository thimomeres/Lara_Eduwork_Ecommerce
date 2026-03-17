@extends('layout')
@section('title', 'contoh halaman blade')
@section('header','ini teks header')
@section('content')
    <h1>ini teks content</h1>
    <x-alert>
        <strong>Perhatian!</strong> Ini adalah pesan penting.
    </x-alert>
@endsection