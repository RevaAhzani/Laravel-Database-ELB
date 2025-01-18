@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <di class="card-body">
                    <div class="notif">
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert" style="width: 100%;">
                                {{ session('success') }}
                                <a data-bs-dismiss="alert"></a>
                            </div>
                        @endif

                        @if (session('info'))
                            <div class="alert alert-info alert-dismissible fade show" role="alert" style="width: 100%;">
                                {{ session('info') }}
                                <a data-bs-dismiss="alert"></a>
                            </div>
                        @endif
                    </div>

                    <div class="row">
                        <div class="col-8">
                            <h1>Data Siswa</h1>
                        </div>
                        <div class="col-3">
                            <a href="{{ route('create') }}" class="btn btn-primary">Tambah Data</a>
                        </div>
                    </div>

                    <table class="table table-striped table-hover">
                        <thead>
                            <tr class="table-dark">
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Kelas</th>
                                <th scope="col">Jurusan</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($students as $student)
                        <tbody>
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $student['nama'] }}</td>
                                <td>{{ $student['kelas'] }}</td>
                                <td>{{ $student['jurusan'] }}</td>
                                <td class="aksi">
                                    <a href="{{ route('detail', $student->id) }}" class="btn btn-success">Detail</a>
                                    <a href="{{ route('edit', $student->id) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('delete', $student->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>      
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
