@extends('layouts.master')
@section('content')
    <div class="title m-b-md">
        Raising the bar
        @if(\Illuminate\Support\Facades\Session::has('not-login'))
            <div class="not-login">
                <p class="text-danger">{{ Session::get('not-login') }}</p>
            </div>
        @endif
    </div>
    <a href="{{ route('user.logout') }}">
        <button type="button" class="btn btn-outline-primary">Đăng xuất</button>
    </a>
    <hr>
@endsection
