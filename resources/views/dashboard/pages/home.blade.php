@extends('dashboard.layouts.master', [
    'title' => 'Dashboard',
])

@section('content')
    <x-pages.header title="Dashboard" subtitle="Overview" />
    <x-pages.body>
        <div class="card">
            <div class="card-body">
                {{ greetings() }}, <span class="fw-bold">{{ Auth::user()->name }}</span>!
            </div>
        </div>
    </x-pages.body>
@endsection
