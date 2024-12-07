@extends('layout.app')

@section('title', 'Client List')

@section('header')
    Data Clients
@endsection

@section('content')
    <a href="#" class="bg-blue-500 text-white px-4 py-2 rounded">Add New Client</a>
    <table class="table-auto w-full mt-4 bg-white shadow-md rounded">
        <thead>
            <tr class="bg-gray-200 text-left">
                <th class="px-4 py-2">#</th>
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Email</th>
                <th class="px-4 py-2">Phone</th>
                <th class="px-4 py-2">Address</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $index => $client)
                <tr>
                    <td class="border px-4 py-2">{{ $index + 1 }}</td>
                    <td class="border px-4 py-2">{{ $client['name'] }}</td>
                    <td class="border px-4 py-2">{{ $client['email'] }}</td>
                    <td class="border px-4 py-2">{{ $client['phone'] }}</td>
                    <td class="border px-4 py-2">{{ $client['address'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
