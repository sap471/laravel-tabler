@extends('auth.layout.default', [
    'title' => 'Register',
])

@section('content')
    <div class="card card-md">
        <form method="POST" action="{{ route('register') }}" class="card-body">
            @csrf
            <h2 class="h2 text-center mb-4">
                {{ __('Register new account') }}
            </h2>

            <x-input.text name="name" type="text" label="Name" autofocus />
            <x-input.text name="email" type="email" label="Email Address" placeholder="admin@example.com" />
            <x-input.text name="password" type="password" label="Password" :placeholder="'**********'" />
            <x-input.text name="password_confirmation" type="password" label="Confirm Password" :placeholder="'**********'" />

            <div class="form-footer">
                <button type="submit" class="btn btn-primary w-100">
                    {{ __('Register') }}
                </button>
            </div>
        </form>
    </div>


    <div class="text-center text-secondary mt-3">
        Don't have account yet? <a href="{{ route('login') }}" tabindex="-1">Sign in</a>
    </div>
@endsection
