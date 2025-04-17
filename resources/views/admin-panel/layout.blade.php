@extends('layout')

@section('sub-menu')
    <div>
        <a href="{{ route('admin.contacts.index') }}" class="btn-sub">
            Contacts
        </a>
        <a href="{{ route('admin.users.index') }}" class="btn-sub">
            Users
        </a>
    </div>
@endsection

@section('content')
    @yield('admin-content')
@endsection
