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
    </div>
    <div class="container p-5 bg-white shadow" style="max-height: 45vh; overflow-y: auto;">
        @php
            $wrongAnswersCount = collect($results)->where('is_correct', false)->count();
        @endphp
        <p class="text-dark text-center" style="font-size: 1.25rem; line-height: 1.8; margin-bottom: 2rem;">
            Anda menjawab {{ $wrongAnswersCount }} soal dengan jawaban yang salah, berikut adalah pertanyaan yang gagal Anda jawab dengan benar:
        </p>
        <div class="text-dark" style="font-size: 1.125rem;">
            <ul class="list-group">
                @foreach ($results as $item)
                    @if (!$item['is_correct'])
                        <li class="list-group-item mb-3 shadow-sm">
                            <strong>Soal:</strong> {{ $item['question_text'] }}<br>
                            <strong>Jawaban Anda:</strong> <span class="text-danger">{{ $item['answer'] }}</span><br>
                            <strong>Jawaban Benar:</strong> <span class="text-success">{{ $item['key_answer'] }}</span>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
