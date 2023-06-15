@extends('layouts.mainlayout')

@section('title', 'Extracurriculer')

@section('container')
    <h1>Halaman Ekskul</h1>
    <h3>Ekskul List</h3>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Ekskul</th>
                <th>Anggota</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ekskul as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->name }}</td>
                    <td>
                        @foreach ($item->student as $student)
                            - {{ $student->name }}<br />
                        @endforeach
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
