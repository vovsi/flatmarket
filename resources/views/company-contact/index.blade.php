@extends('layout')

@vite('resources/css/company-contact/index.css')

@section('title')
    Contacts
@endsection

@section('content')
    <p class="title-content">Contacts of company</p>
    <ul>
        @foreach($contacts as $contact)
            <li class="contacts-item">
                <p>Phone: {{ $contact->phone }}</p>
                <p>E-mail: {{ $contact->email }}</p>
                <p>Address: {{ $contact->address }}</p>
                <p>Time work: {{ $contact->time_work }}</p>
            </li>
        @endforeach
    </ul>
@endsection
