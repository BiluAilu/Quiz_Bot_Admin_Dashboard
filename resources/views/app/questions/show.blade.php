@extends('layout.app')

@section('content')
<style>
    .question-detail-title {
        font-size: 1.5em; /* Adjust the font size as needed */
    }
</style>
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title question-detail-title text-center">
                <a href="{{ route('question.index') }}" class="mr-4">
                    <i class="icon ion-md-arrow-back"></i>
                </a>
                <u>

                    Question detail
                </u>
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <dl class="row">
                        <dt class="col-sm-3">Category</dt>
                        <dd class="col-sm-9">{{ $question->category ?? '-' }}</dd>

                        <dt class="col-sm-3">Level</dt>
                        <dd class="col-sm-9">{{ $question->level ?? '-' }}</dd>

                        <dt class="col-sm-3">Question</dt>
                        <dd class="col-sm-9">{{ $question->title ?? '-' }}</dd>
                    </dl>
                </div>
                <div class="mb-4">
                    <h5>Choices</h5>
                    <ul class="list-group">
                        @foreach ($question->choices ?? [] as $index => $choice)
                            <li class="list-group-item">
                                <strong>Choice {{ $index + 1 }}:</strong> {{ $choice ?? '-' }}
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="mb-4">
                    <dl  class="row">
                        <dt class="col-sm-3">Answer</dt>
                    <dd class="col-sm-9">{{ $question->answer ?? '-' }}</dd>
                </dl>
                    {{-- <h5>Answer</h5>
                    <span> <b>
                        {{ $question->answer ?? '-' }}
                        </b>
                    </span> --}}
                </div>

                @if ($question->status == "requested")
                    <div role="group" aria-label="Row Actions" class="btn-group">
                        <form action="{{ route('question.approve') }}" method="POST">
                            @csrf
                            <input type="hidden" value="{{ $question->_id }}" name="_id">
                            <button type="submit" class="btn btn-sm btn-outline-success mx-1">Approve</button>
                        </form>
                        <form action="{{ route('question.reject') }}" method="POST">
                            @csrf
                            <input type="hidden" value="{{ $question->_id }}" name="_id">
                            <button type="submit" class="btn btn-sm btn-outline-danger mx-1">Reject</button>
                        </form>
                    </div>
                @endif
            </div>

            <div class="mt-4 text-right">
                <a href="{{ route('question.index') }}" class="btn btn-sm btn-outline-danger mx-1">
                    Back
                </a>
            </div>

        </div>
    </div>

</div>
@endsection
