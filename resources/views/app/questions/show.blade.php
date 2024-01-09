@extends('layout.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a href="{{ route('question.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
               Question detail
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>Category</h5>
                    <span>{{ $question->category ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>Level</h5>
                    <span>{{ $question->level ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>Question </h5>
                    <span>{{ $question->title ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>Choice A </h5>
                    <span>{{ $question->choices[0] ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>Choice A </h5>
                    <span>{{ $question->choices[1] ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>Choice B </h5>
                    <span>{{ $question->choices[2] ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>Choice D </h5>
                    <span>{{ $question->choices[3] ?? '-' }}</span>
                </div>



                <div role="group" aria-label="Row Actions" class="btn-group">

                  

                    <form action="{{route('question.approve')}}" method="POST">

                        @csrf
                        <input type="hidden" value="{{$question->_id}}" name="_id">


                        <button class="btn btn-sm btn-outline-success mx-1">Approve</button>
                    </form>
                    <form action="{{route('question.approve')}}" method="POST">

                        @csrf
                        <input type="hidden" value="{{$question->_id}}" name="_id">


                        <button class="btn btn-sm btn-outline-danger mx-1">Reject</button>
                    </form>
                </div>

            </div>

            <div class="mt-4">
                <a href="{{ route('question.index') }}" class="btn btn-light">
                    <i class="icon ion-md-return-left"></i>
                   Back
                </a>


            </div>
        </div>
    </div>
</div>
@endsection
