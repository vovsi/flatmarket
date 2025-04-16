@extends('admin-panel.layout')

@vite('resources/css/_components/table.css')

@section('title')
    Control Contacts
@endsection

@section('admin-content')
    <p class="title-content">Contacts</p>
    <form class="input-form" method="post" action="{{ route('admin.contacts.store') }}">
        @csrf
        <input type="text" name="phone" placeholder="Phone" value="{{ old('phone') }}">
        <input type="email" name="email" placeholder="E-mail" value="{{ old('email') }}">
        <input type="text" name="address" placeholder="Address" value="{{ old('address') }}">
        <input type="text" name="time_work" placeholder="Time work" value="{{ old('time_work') }}">
        <input type="submit" value="Add" class="btn">
    </form>
    <table>
        <thead>
            <tr>
                <th>№</th>
                <th>Phone</th>
                <th>E-mail</th>
                <th>Address</th>
                <th>Time work</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contacts as $contact)
                <tr data-id="{{ $contact->id }}">
                    <td>{{ $loop->iteration }}</td>
                    <td class="contact-update" data-column="phone">{{ $contact->phone }}</td>
                    <td class="contact-update" data-column="email">{{ $contact->email }}</td>
                    <td class="contact-update" data-column="address">{{ $contact->address }}</td>
                    <td class="contact-update" data-column="time_work">{{ $contact->time_work }}</td>
                    <td>
                        <form action="{{ route('admin.contacts.destroy', ['model' => $contact->id]) }}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" class="btn-sub" title="Delete" value="🗑️">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
