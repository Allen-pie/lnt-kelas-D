@extends('layout.master')

@section('title', 'Collection Page')

@section('content')

@include('components.navbar')

<section class="row gap-5 row-cols-auto justify-content-center">
    @include('components.card')
    @include('components.card')
    @include('components.card')
    @include('components.card')
    @include('components.card')
    @include('components.card')
    @include('components.card')
    @include('components.card')
</section>
@endsection