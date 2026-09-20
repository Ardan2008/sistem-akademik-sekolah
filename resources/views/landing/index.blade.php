@extends('layouts.landing')

@section('title', 'Beranda')

@section('content')

    @include('landing.sections.beranda')

    @include('landing.sections.tentang')

    @include('landing.sections.fitur')

    @include('landing.sections.cara-kerja')

    @include('landing.sections.manfaat')

    @include('landing.sections.ajakan')

    @include('landing.sections.faq')

@endsection