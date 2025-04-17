@extends('admin-panel.layout')

@vite('resources/css/_components/table.css')

@section('title')
    Users
@endsection

@section('admin-content')
    <p class="title-content">Users</p>
    <table>
        <thead>
        <tr>
            <th>№</th>
            <th>Name</th>
            <th>E-mail</th>
            <th>Created At</th>
            <th>Updated At</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->created_at->format('d.m.Y H:i') }}</td>
                <td>{{ $user->updated_at->format('d.m.Y H:i') }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
