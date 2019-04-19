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
         <a href="/form/create/project" style="none">
            <div class="icon"><i class="fas fa-plus-circle fa-2x"></i></div>
            <p class="title">New Project</p>
            <p class="text">Click to create a new project.</p>
        </a>
      </div>
      <!-- end card -->
      <!-- card -->
      <div class="card">
           <a href="/form/load/project" style="none">
            <div class="icon"><i class="fas fa-folder-open fa-2x"></i></div>
            <p class="title">Load Project</p>
            <p class="text">Click to see or edit an existing project.</p>
      </div>
      <!-- end card -->
      <!-- card -->
      <div class="card">
           <a href="/form/load/pm-tools" style="none">
            <div class="icon"><i class="fas fa-toolbox fa-2x"></i></div>
            <p class="title">PM Tools</p>
            <p class="text">Click to view various Project Management tools.</p>
      </div>
      <!-- end card -->
   </div>
</div>
@endsection

@section('alerts')
<div class="container"><em>{{ $alert }}</em></div>
@endsection
