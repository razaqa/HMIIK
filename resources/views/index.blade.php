@extends('main')

@section('title', config('app.name'))

@section('extra-css')
<!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> -->
@endsection

@section('content')
<header class="masthead">
  <div class="container">
    <div class="intro-text">
      <div class="intro-heading text-uppercase">HMIK UI 2018</div>
      <div class="intro-lead-in">Sinergis, Dekat, Berkelanjutan</div>
      <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Info</a>
    </div>
  </div>
</header>

@endsection

@section('extra-js')
<!-- <script type="application/javascript" src="{{ asset('js/app.js') }}"></script> -->
@endsection
