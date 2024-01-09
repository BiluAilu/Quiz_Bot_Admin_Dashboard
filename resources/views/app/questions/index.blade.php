@extends('layout.app')

@section('content')
<div class="container">
    <div class="searchbar mt-0 mb-4">
        <div class="row">
            <div class="col-md-6">
                <form>
                    <div class="input-group">
                        <input
                            id="indexSearch"
                            type="text"
                            name="search"
                            placeholder="search"
                            value="{{ $search ?? '' }}"
                            class="form-control"
                            autocomplete="off"
                        />
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-primary">
                                <i class="icon fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div style="display: flex; justify-content: space-between;">
                <h4 class="card-title">Questions To be Approved</h4>
            </div>

            <div class="table-responsive">
                <table class="table table-borderless table-hover">
                    <thead>
                        <tr>
                            <th class="text-left">
                                Question Catagory
                            </th>
                            <th class="text-left">
                                Question Level
                            </th>
                            <th class="text-left">
                                Question Title
                            </th>
                            <th class="text-left">
                                Action
                            </th>


                        </tr>
                    </thead>
                    <tbody>
                        @forelse($questions as $question)
                        <tr>
                            <td>{{ $question->title ?? '-' }}</td>
                            <td>{{ $question->category ?? '-' }}</td>
                            <td>{{ $question->level ?? '-' }}</td>

                            <td class="text-center">
                                <div role="group" aria-label="Row Actions" class="btn-group">

                                    <a href="{{route('question.show',$question)}}" class="btn btn-sm btn-outline-info mx-1">
                                        Show
                                    </a>

                                    <form action="{{route('question.approve')}}" method="POST">

                                        @csrf
                                        <input type="hidden" value="{{$question->_id}}" name="_id">


                                        <button class="btn btn-sm btn-outline-success mx-1">Approve</button>
                                    </form>
                                    <form action="{{route('question.reject')}}" method="POST">

                                        @csrf
                                        <input type="hidden" value="{{$question->_id}}" name="_id">


                                        <button class="btn btn-sm btn-outline-danger mx-1">Reject</button>
                                    </form>
                                </div>


                                    {{-- <i class=""></i> --}}


                            </td>



                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4">
                               No item
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                    <tfoot>
                        {{-- <tr>
                            <td colspan="4">{!! $questions->render() !!}</td>
                        </tr> --}}
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
