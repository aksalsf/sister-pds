@extends('template-admin')
    @section('title', 'Dasbor')
    @section('content-admin')
        <div class="d-flex rounded p-5 shadow w-100 min-vh-100 bg-light justify-content-around align-items-center">
            <h1 class="fw-bold">{{ $greeting }}</h1>
            <img src="{{ asset('images/robo-arm.png') }}" class="col-5">
        </div>
    @endsection