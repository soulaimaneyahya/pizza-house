@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('You are logged in!') }}
                    <h3 class="my-3">Welcome back <span class="text-muted" >{{ucwords( Auth::user()->name) }}</span></h3>
                    <p><a href="{{ route('admin.index') }}" class="btn btn-secondary"><i class="bi bi-table"></i> &nbsp; Pizzas Orders</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
