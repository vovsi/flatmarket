@extends('layout')

@section('title')
    Contacts
@endsection

@section('content')
    <p class="title-content">Contacts of company</p>
    @foreach($contacts as $contact)
        <div>
            <p>Phone: {{ $contact->phone }}</p>
            <p>E-mail: {{ $contact->email }}</p>
            <p>Address: {{ $contact->address }}</p>
            <p>Time work: {{ $contact->time_work }}</p>
        </div>
    @endforeach
@endsection
