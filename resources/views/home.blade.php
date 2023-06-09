@extends('layouts.main')
@section('title', 'home')
@section('content')
    @if (session('alert_berhasil'))
        <div class="alert alert-primary mt-3">
            <strong>{{ session('alert_berhasil') }}</strong>
        </div>
    @endif
    <div class="jumbotron">
        <h1 class="display-4">HELLO EVERYBODY</h1>
        <p class="lead">SEMANGAT</p>
        <hr class="my-4">
        <p>GOODBAY</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </p>
    </div>
@endsection
