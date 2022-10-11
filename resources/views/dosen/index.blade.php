@extends('template')
@section('title', 'Data Dosen')
@section('content')
    <h5>Data Dosen</h5>
    <hr>
    <a class="btn btn-primary btn-sm" href="/dosen/create">Tambah Data</a>
    <hr>
    @if (session()->has('messages'))
        @include('alert')
        <hr>
    @endif
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th>NIDN</th>
                <th>Nama Dosen</th>
                <th>Email</th>
                <th>Status Dosen</th>
                <th>Nomor HP</th>
                <th>TTL</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dosen as $d)
                <tr>
                    <td>{{ $d->nidn }}</td>
                    <td>{{ $d->nama }}</td>
                    <td>{{ $d->email }}</td>
                    <td>{{ $d->status_dosen == 1 ? 'Aktif' : 'Tidak Aktif' }}</td>
                    <td>{{ $d->hp }}</td>
                    <td>{{ $d->ttl }}</td>
                    <td>
                        {{ Form::open(['url' => 'dosen/' . $d->id, 'method' => 'delete']) }}
                        {{ Form::submit('Hapus', ['class' => 'btn btn-danger btn-sm']) }}
                        {{ Form::close() }}
                        <a href="/dosen/{{ $d->id }}/edit" class="btn btn-warning btn-sm">Ubah</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
