@extends('layouts.mainlayout')

@section('title', 'Class')

@section('container')
    <h1>Halaman Class</h1>
    <h3>Class List</h3>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Student</th>
                <th>Jumlah Murid</th>
                <th>Teacher</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dataClass as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->name }}</td>
                    <td>
                        @foreach ($item->student as $students)
                            - {{ $students->name }}<br />
                        @endforeach
                    </td>
                    <td>{{ count($item->student) }}</td>
                    <td>{{ $item->teacher->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
