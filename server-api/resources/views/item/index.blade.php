@extends('layout.app')

@section('title', 'Item List')

@section('header')
    Data Items
@endsection

@section('content')
    <a href="#" class="bg-blue-500 text-white px-4 py-2 rounded">Add New Item</a>
    <table class="table-auto w-full mt-4 bg-white shadow-md rounded">
        <thead>
            <tr class="bg-gray-200 text-left">
                <th class="px-4 py-2">#</th>
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Description</th>
                <th class="px-4 py-2">Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $index => $item)
                <tr>
                    <td class="border px-4 py-2">{{ $index + 1 }}</td>
                    <td class="border px-4 py-2">{{ $item['name'] }}</td>
                    <td class="border px-4 py-2">{{ $item['description'] }}</td>
                    <td class="border px-4 py-2">Rp {{ number_format($item['price'], 2) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
