@extends('auth.layout.default', [
    'title' => 'Login',
])

@section('content')
    <div class="card card-md">
        <form method="POST" action="{{ route('login') }}" class="card-body">
            @csrf
            <h2 class="h2 text-center mb-4">
                {{ __('Login to your account') }}
            </h2>

            <x-input.text name="email" type="email" label="Email Address" placeholder="admin@example.com" autofocus />

            <div class="mb-2">
                <label class="form-label">
                    Password

                    @if (Route::has('password.request'))
                        <span class="form-label-description">
                            <a href="{{ route('password.request') }}">
                                {{ __('I forgot password') }}
                            </a>
                        </span>
                    @endif
                </label>
                <div class="input-group input-group-flat">
                    <input type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
                        name="password" id="password" value="{{ old('password') }}" placeholder="**********"
                        autocomplete="off">
                    <span class="input-group-text">
                        <a href="#" id="show-password" class="link-secondary" data-bs-toggle="tooltip"
                            aria-label="Show password" data-bs-original-title="Show password">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-eye">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                <path
                                    d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-eye-off d-none">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M10.585 10.587a2 2 0 0 0 2.829 2.828" />
                                <path
                                    d="M16.681 16.673a8.717 8.717 0 0 1 -4.681 1.327c-3.6 0 -6.6 -2 -9 -6c1.272 -2.12 2.712 -3.678 4.32 -4.674m2.86 -1.146a9.055 9.055 0 0 1 1.82 -.18c3.6 0 6.6 2 9 6c-.666 1.11 -1.379 2.067 -2.138 2.87" />
                                <path d="M3 3l18 18" />
                            </svg>
                        </a>
                    </span>
                </div>
            </div>

            <div class="mb-2">
                <label class="form-check">
                    <input type="checkbox" class="form-check-input" name="remember" />
                    <span class="form-check-label">
                        {{ __('Remember me on this device') }}
                    </span>
                </label>
            </div>
            <div class="form-footer">
                <button type="submit" class="btn btn-primary w-100">Sign in</button>
            </div>
        </form>
    </div>


    <div class="text-center text-secondary mt-3">
        Don't have account yet? <a href="{{ route('register') }}" tabindex="-1">Sign up</a>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('show-password').addEventListener('click', function(e) {
                e.preventDefault();

                if (document.getElementById('password').type === 'password') {
                    document.getElementById('password').type = 'text';
                    document.querySelector('.icon-tabler-eye-off').classList.remove('d-none');
                    document.querySelector('.icon-tabler-eye').classList.add('d-none');
                } else {
                    document.getElementById('password').type = 'password';
                    document.querySelector('.icon-tabler-eye-off').classList.add('d-none');
                    document.querySelector('.icon-tabler-eye').classList.remove('d-none');
                }
            });

            document.getElementById('password').addEventListener('keyup', function(event) {
                if (event.keyCode === 13) {
                    document.querySelector('form').submit();
                }
            })

            document.querySelector('form').addEventListener('submit', function(event) {
                event.preventDefault();
                document.getElementById('password').value = document.getElementById('password').value
                    .trim();
                document.querySelector('form').submit();
            })
        })
    </script>
@endpush
