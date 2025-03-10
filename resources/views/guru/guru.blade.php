@extends('layout.app')

@section('body')
    <div class="mb-3">
        <h1>Halaman Guru</h1>
    </div>
    <div class="mb-3 justify-content-between align-item-center d-flex">
        <h2>Selamat datang {{ Auth::user()->name }}</h2>
    </div>
    @if (Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table table-primary">
            <th>Nama</th>
            <th>Mata pelajaran</th>
            <th>Keluhan</th>
            <th>File Tugas</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            @if ($siswa->count() > 0)
                @foreach ($siswa as $sw)
                <tr>
                    <td class="align-center">{{ $sw->nama }}</td>
                    <td class="align-center">{{ $sw->mapel }}</td>
                    <td class="align-center">{{ $sw->keluhan }}</td>
                    <td class="align-center">{{ $sw->file }}</td>
                    <td class="align-center">
                        <div class="btn btn-group">
                            <a href="{{ route('show', $sw->id) }}" class="btn btn-secondary">Show</a>
                            <a href="{{ route('balas', $sw->id) }}" class="btn btn-warning">Balas</a>
                            <form action="{{ route('destroy', $sw->id) }}" method="POST" class="btn btn-danger" onsubmit="return confirm('Hapus?')">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger" type="submit">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            @else
            <tr>
            <td class="align-center">
                Tidak Ada Keluhan
            </td>
            </tr>
            @endif
        </tbody>
    </table>
@endsection