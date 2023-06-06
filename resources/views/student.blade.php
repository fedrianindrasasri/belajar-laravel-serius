@extends('layouts.mainlayout')

@section('title', 'Student')

@section('container')
    <h1>Halaman Student</h1>
    <h3>Student List</h3>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Student</th>
                <th>Jenis Kelamin</th>
                <th>NIM</th>
                <th>Kelas</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($studentList as $item)
                <tr>

                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->gender }}</td>
                    <td>{{ $item->nim }}</td>
                    <td>{{ $item->classroom['name'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
