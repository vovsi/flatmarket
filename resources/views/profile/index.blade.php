@extends('layout')

@section('title')
    Profile
@endsection

@section('content')
    <p class="title-content">My profile</p>
    <form id="profileForm" class="input-form" method="post" action="{{ route('profile.update') }}">
        @csrf
        <input type="text" placeholder="Name" name="name" required value="{{ old('name', $name) }}">
        <input type="email" placeholder="E-mail" name="email" required value="{{ old('email', $email) }}">
        <input type="submit" value="Save" class="btn">
    </form>
    <form id="passForm" class="input-form" method="post" action="{{ route('profile.updatePass') }}">
        @csrf
        <input type="password" placeholder="Password" name="password" required>
        <input type="password" placeholder="Repeat password" name="password_confirmation" required>
        <input type="submit" value="Save" class="btn">
    </form>
@endsection
