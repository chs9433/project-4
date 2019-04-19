@extends('layouts.master')

@section('title')
    {{ $title }}
@endsection

@section('head')
    {{-- Page specific CSS includes should be defined here; this .css file does not exist yet, but we can create it --}}
@endsection

@section('content')
<div class="container-fluid">
    <h1>{{ $title }}</h1>

    <p>
        Details about this book will go here...
    </p>
</div>
@endsection
