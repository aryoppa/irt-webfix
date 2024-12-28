@extends('layouts.logged-navbar')

@section('content')
<div class="container-fluid p-1 vh-100 d-flex flex-column justify-content-center align-items-center" style="background-color: #3E6D81;">
    <div class="container p-5 mb-4 bg-white shadow" style="max-height: 65vh; overflow-y: auto;">
        <h2 class="mb-4 text-center text-primary fw-bold" style="font-family: 'Roboto', sans-serif; font-size: 2.5rem;">
            Rekomendasi
        </h2>
        <p class="text-dark text-center" style="font-size: 1.25rem; line-height: 1.8; margin-bottom: 2rem;">
            {!! nl2br($rekomendasi['recommendation']) !!}
        </p>
        <div class="text-center">
            <a href="{{ url('irt/wrong_answer') }}" class="btn btn-primary">Lihat Jawaban Salah</a>
        </div>
    </div>
</div>
@endsection