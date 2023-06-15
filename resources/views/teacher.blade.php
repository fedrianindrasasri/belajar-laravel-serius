@extends('layouts.mainlayout')

@section('title', 'Teacher')

@section('container')
    <h1>
        Halaman Teacher</h1>
    <h3>Teacher List</h3>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Guru</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dataTeacher as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
