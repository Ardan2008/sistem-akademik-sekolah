@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    <section class="hero">
        <h1>Sistem Akademik Sekolah</h1>
        <p>Kelola data akademik siswa, nilai, dan informasi sekolah dalam satu sistem.</p>
        <a href="{{ route('login') }}" class="btn">Masuk ke Sistem</a>
    </section>
@endsection
