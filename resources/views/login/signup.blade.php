@extends('layout')

@section('title')
    SignUp
@endsection

@section('content')
    <p class="title-content">SingUp</p>
    <form id="signupForm" class="input-form" method="post" action="{{ route('register') }}">
        @csrf
        <input type="text" placeholder="Name" name="name"  required>
        <input type="email" placeholder="E-mail" name="email" required>
        <input type="password" placeholder="Password" name="password" required>
        <input type="password" placeholder="Repeat password" name="password_confirmation" required>
        <input type="submit" value="SignUp" class="btn">
    </form>
@endsection
