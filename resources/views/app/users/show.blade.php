@extends('layout.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a href="{{ route('users.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                User Detail
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>Name</h5>
                    <span>{{ $user->name ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>Email</h5>
                    <span>{{ $user->email ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>Username</h5>
                    <span>{{ $user->username ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>Phone Number</h5>
                    <span>{{ $user->phone_number ?? '-' }}</span>
                </div>
            </div>



            <div class="mt-4">
                <a href="{{ route('users.index') }}" class="btn btn-light">
                    <i class="icon ion-md-return-left"></i>
                    back
                </a>


            </div>
        </div>
    </div>
</div>
@endsection
