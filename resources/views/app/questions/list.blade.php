@extends('layout.app')

@section('content')
<section class="content">

    <div class="card">

        <div class="card-header p-0 pt-1 border-bottom-0">
            <div class="d-flex justify-content-between">
                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="schedule-tab" data-bs-toggle="tab"  data-toggle="pill" href="#approved-tabs"
                            role="tab" aria-controls="custom-tabs-one-tabs" aria-selected="false"
                            onclick="">Approved Questions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="on-progress-tab" data-bs-toggle="tab" data-toggle="pill" href="#rejected-tabs" role="tab"
                            onclick="" aria-controls="tabs-on-progress" aria-selected="false">Rejected
                            Questions</a>
                    </li>


                </ul>
            </div>
        </div>


        <div class="card-body">


            <div class="tab-content" id="records-of-requested">
                <div class="tab-pane fade active show " id="approved-tabs" role="tabpanel"
                    aria-labelledby="custom-tabs-three-home-tab">




                    <div style="display: flex; justify-content: space-between;">
                        <h4 class="card-title my-3">Approved Questions</h4>
                    </div>
                    <div class="searchbar mt-0 mb-4">
                        <div class="row">
                            <div class="col-md-6">
                                <form>
                                    <div class="input-group">
                                        <input
                                            id="indexSearch"
                                            type="text"
                                            name="searchApproved"
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
                            {{-- <div class="col-md-6 text-right">

                                <a href="{{ route('users.create') }}" class="btn btn-primary">
                                    <i class="icon ion-md-add"></i>Create
                                </a>

                            </div> --}}
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-borderless table-hover">
                            <thead>
                                <tr>
                                    <th class="text-left">
                                        Question Title
                                    </th>
                                    <th class="text-left">
                                        Question Catagory
                                    </th>
                                    <th class="text-left">
                                        Question Level
                                    </th>
                                    <th class="text-left">
                                        User ID
                                    </th>
                                    <th class="text-left">
                                        Action
                                    </th>


                                </tr>
                            </thead>
                            <tbody>
                                @forelse($approved_questions as $question)
                                <tr>
                                    <td>{{ $question->title ?? '-' }}</td>
                                    <td>{{ $question->category ?? '-' }}</td>
                                    <td>{{ $question->level ?? '-' }}</td>
                                    <td>{{ $question->user_id ?? '-' }}</td>

                                    <td class="">
                                        <div role="group" aria-label="Row Actions" class="btn-group">

                                            <a href="{{route('question.show',$question)}}" class="btn btn-sm btn-outline-info mx-1">
                                                Show
                                            </a>


                                        </div>





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
                                <tr>
                                    <td colspan="4">{!! $approved_questions->render() !!}</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>


                </div>
                <div class="tab-pane fade" id="rejected-tabs" role="tabpanel"
                    aria-labelledby="custom-tabs-three-home-tab">



                    <div style="display: flex; justify-content: space-between;">
                        <h4 class="card-title  my-3">Rejected Questions</h4>
                    </div>
                    <div class="searchbar mt-0 mb-4">
                        <div class="row">
                            <div class="col-md-6">
                                <form>
                                    <div class="input-group">
                                        <input
                                            id="indexSearch"
                                            type="text"
                                            name="searchRejected"
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
                            {{-- <div class="col-md-6 text-right">

                                <a href="{{ route('users.create') }}" class="btn btn-primary">
                                    <i class="icon ion-md-add"></i>Create
                                </a>

                            </div> --}}
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-borderless table-hover">
                            <thead>
                                <tr>
                                    <th class="text-left">
                                        Question Title
                                    </th>
                                    <th class="text-left">
                                        Question Catagory
                                    </th>
                                    <th class="text-left">
                                        Question Level
                                    </th>
                                    <th class="text-left">
                                        User ID
                                    </th>
                                    <th class="text-left">
                                        Action
                                    </th>


                                </tr>
                            </thead>
                            <tbody>
                                @forelse($rejected_questions as $question)
                                <tr>
                                    <td>{{ $question->title ?? '-' }}</td>
                                    <td>{{ $question->category ?? '-' }}</td>
                                    <td>{{ $question->level ?? '-' }}</td>
                                    <td>{{ $question->user_id ?? '-' }}</td>

                                    <td class="">
                                        <div role="group" aria-label="Row Actions" class="btn-group">

                                            <a href="{{route('question.show',$question)}}" class="btn btn-sm btn-outline-info mx-1">
                                                Show
                                            </a>


                                        </div>


                                            {{-- <i class=""></i> --}}


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
                                <tr>
                                    <td colspan="4">{!! $rejected_questions->render() !!}</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>


            </div>


        </div>


    </div>
</section>

@endsection
