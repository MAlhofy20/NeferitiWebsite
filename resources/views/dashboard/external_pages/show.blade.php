@extends('dashboard.layout')

@section('content')

<x-dashboard.header>
    <div class="text-xl font-bold">{{ $page['title_'.lang()] }}</div>
</x-dashboard.header>

<div class=" bg-white rounded-lg shadow p-6 h-full">
    <iframe src="{{ $page['link'] }}" style="width:100%; height:600px; border:none;"></iframe>

<div>

    @endsection