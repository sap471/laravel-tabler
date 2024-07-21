@extends('auth.layout.default')

@section('content')
    <form class="card card-md" action="{{ route('password.request') }}" method="post" autocomplete="off" novalidate>
        @csrf
        <div class="card-body">
            <h2 class="card-title text-center mb-4">
                {{ __('Forgot password') }}
            </h2>
            <p class="text-secondary mb-4">
                {{ __('Enter your email address and your password will be reset and emailed to you.') }}
            </p>

            @if (session('status'))
                <div class="alert alert-success mb-4">
                    {{ session('status') }}
                </div>
            @endif

            <x-input.text name="email" type="email" label="Email Address" placeholder="admin@example.com" autofocus />

            <div class="form-footer">
                <button type="submit" class="btn btn-primary w-100">
                    <!-- Download SVG icon from http://tabler-icons.io/i/mail -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                        stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" />
                        <path d="M3 7l9 6l9 -6" />
                    </svg>
                    {{ __('Send Password Reset Link') }}
                </button>
            </div>
        </div>
    </form>
    <div class="text-center text-secondary mt-3">
        {!! sprintf(__('Forget it, <a href="%s">send me back</a> to the sign in screen.'), route('login')) !!}
    </div>
@endsection
