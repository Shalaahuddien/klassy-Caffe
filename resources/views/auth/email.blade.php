@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-succes" role="alert">{{ session('status') }}</div>
            </div>

            @endif

            <form method="POST" action="{{ route('password.email') }}">

        @csrf

        <div class="row mb-3">
            
        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

        <div class="col-md-6">

        <input id="email" type="email" class="form-control" @error('email') is value="">

        </div>
    
    </div>

            </form>

            </div>
        </div>
    </div>
</div>