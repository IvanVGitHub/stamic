@extends('layouts.app')

@section('content')
    <div class="my-5 d-flex align-items-center justify-content-center" style="min-height: 70vh">
        <div style="max-width: 350px" class="flex-grow-1">

            <x-jet-validation-errors class="mb-4" />

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="d-flex justify-content-between align-items-center my-4">
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <input id="email" class="form-control form-control-sm mt-1 ms-3" type="email" name="email" :value="old('email')" required autofocus />
                </div>

                <div class="d-flex justify-content-between align-items-center my-4">
                    <x-jet-label for="password" value="{{ __('Password') }}" />
                    <input id="password" class="form-control form-control-sm mt-1 ms-3" type="password" name="password" required autocomplete="current-password" />
                </div>

                <div class="block mt-4">
                    <label for="remember_me" class="flex items-center">
                        <x-jet-checkbox id="remember_me" name="remember" />
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">
                    <button class="btn btn-outline-secondary">
                        {{ __('Log in') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
