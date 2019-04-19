@extends('layouts.master')

@section('title')
    {{ $title }}
@endsection

@section('head')
    {{-- Page specific CSS includes should be defined here; this .css file does not exist yet, but we can create it --}}
@endsection

@section('content')
<div class="wrapper">
   <div class="content">
      <!-- card -->
      <div class="card">
        <form id="form-new-project" name="form-new-project" method="POST" action="/project/create" enctype="multipart/form-data">
        </form>
      </div>
      <!-- end card -->
   </div>
</div>
@endsection
