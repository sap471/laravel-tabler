@extends('dashboard.layouts.master')

@section('content')
    <x-pages.header title="Profile" />

    <x-pages.body>
        @if (session('status'))
            <div class="alert alert-success bg-white">
                {{ session('status') }}
            </div>
        @endif

        @if ($errors->all())
            <div class="alert alert-danger bg-white">
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon alert-icon" width="24" height="24"
                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
                        <path d="M12 8v4"></path>
                        <path d="M12 16h.01"></path>
                    </svg>
                </div>
                <span>
                    {{ implode('', $errors->all('<div>:message</div>')) }}
                </span>
            </div>
        @endif

        <div class="card">
            <div class="row g-0">
                <div class="col-12 col-md-3 border-end">
                    <div class="card-body">
                        <h4 class="subheader">
                            {{ __('Account Settings') }}
                        </h4>
                        <div class="list-group list-group-transparent">
                            <a href="./settings.html"
                                class="list-group-item list-group-item-action d-flex align-items-center active">
                                {{ __('My Account') }}
                            </a>
                        </div>
                        <h4 class="subheader mt-4">{{ __('Experience') }}</h4>
                        <div class="list-group list-group-transparent">
                            <a href="#" class="list-group-item list-group-item-action">
                                {{ __('Give Feedback') }}
                            </a>
                        </div>
                    </div>
                </div>
                <form method="POST" action="{{ route('user-profile-information.update') }}"
                    class="col-12 col-md-9 d-flex flex-column">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <h2 class="mb-4">My Account</h2>
                        <h3 class="card-title">Profile Details</h3>
                        <div class="row align-items-center">
                            <div class="col-auto"><span class="avatar avatar-xl"
                                    style="background-image: url({{ Auth::user()->picture ?? asset('/img/avatar.png') }})"></span>
                            </div>
                            <div class="col-auto"><a href="#" class="btn">
                                    Change avatar
                                </a></div>
                            <div class="col-auto"><a href="#" class="btn btn-ghost-danger">
                                    Delete avatar
                                </a></div>
                        </div>
                        <h3 class="card-title mt-4">Profile</h3>
                        <div class="row g-3">
                            <x-input.text name="name" type="text" label="Name" value="{{ $user->name }}"
                                formClass="" errorBags="updateProfileInformation" />
                        </div>
                        <h3 class="card-title mt-4">Email</h3>
                        <p class="card-subtitle">This contact will be shown to others publicly, so choose it carefully.</p>
                        <div>
                            <div class="row g-2">
                                <div class="col-auto">
                                    <x-input.text name="email" type="email" value="{{ $user->email }}"
                                        formClass="" />
                                </div>
                                <div class="col-auto">
                                    <a href="#" class="btn">
                                        Change
                                    </a>
                                </div>
                            </div>
                        </div>
                        <h3 class="card-title mt-4">Password</h3>
                        <p class="card-subtitle">
                            You can set a permanent password if you don't want to use temporary login codes.
                        </p>
                        <x-modal name="change-password" label="Set New Password" title="Change Password"
                            action="user-password.update">
                            @csrf
                            @method('put')

                            <x-input.text name="current_password" type="password" label="Current Password" :placeholder="'**********'"
                                errorBags="updatePassword" required />
                            <x-input.text name="password" type="password" label="New Password" :placeholder="'**********'"
                                errorBags="updatePassword" required />
                            <x-input.text name="password_confirmation" type="password" label="Confirm New Password"
                                :placeholder="'**********'" errorBags="updatePassword" required />


                            <x-slot name="footer">
                                <div class="btn-list justify-content-end">
                                    <button type="button" class="btn me-auto" data-bs-dismiss="modal">
                                        {{ __('Close') }}
                                    </button>
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Save') }}
                                    </button>
                                </div>
                            </x-slot>
                        </x-modal>
                    </div>
                    <div class="card-footer bg-transparent mt-auto">
                        <div class="btn-list justify-content-end">
                            <button type="submit" class="btn btn-primary">
                                Submit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </x-pages.body>
@endsection

@push('scripts')
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            const changePasswordModal = new bootstrap.Modal(document.getElementById('modal-change-password'))

            @if ($errors->updatePassword->all())
                changePasswordModal.show();
            @endif
        });
    </script>
@endpush
