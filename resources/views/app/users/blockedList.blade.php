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
            {{-- <div class="col-md-6 text-right">

                <a href="{{ route('users.create') }}" class="btn btn-primary">
                    <i class="icon ion-md-add"></i>Create
                </a>

            </div> --}}
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div style="display: flex; justify-content: space-between;">
                <h4 class="card-title my-3">Blocked User List</h4>
            </div>

            <div class="table-responsive">
                <table class="table table-borderless table-hover">
                    <thead>
                        <tr>
                            <th class="text-left">
                                Name
                            </th>
                            <th class="text-left">
                                Email
                            </th>
                            <th class="text-left">
                                Username
                            </th>
                            <th class="text-center">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($users as $user)
                        <tr>
                            <td>{{ $user->name ?? '-' }}</td>
                            <td>{{ $user->email ?? '-' }}</td>
                            <td>{{ $user->username ?? '-' }}</td>
                            <td class="text-center" style="width: 134px;">
                                <div
                                    role="group"
                                    aria-label="Row Actions"
                                    class="btn-group"
                                >


                                    <a href="{{ route('users.show', ['id',$user->_id]) }}">
                                        <button
                                            type="button"
                                            class="btn btn-sm btn-outline-primary mx-1"
                                        >
                                          Show
                                        </button>
                                    </a>

                                    <form
                                        action="{{ route('users.unblock') }}"
                                        method="POST"
                                        onsubmit="return confirm('are you sure')"
                                    >
                                        @csrf
                                        <input type="hidden" name="id" value="{{$user->_id}}">
                                        <button
                                            type="submit"
                                            class="btn btn-sm btn-outline-danger mx-1r"
                                        >

                                            Unblock
                                        </button>
                                    </form>
                                    {{-- @endcan --}}
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="3">
                                No Items found
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="3">{!! $users->render() !!}</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
