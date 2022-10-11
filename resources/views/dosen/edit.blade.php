@extends('template')
@section('title', 'Tambah Dosen')
@section('content')
    <table class="table table-border">
        <h5 class="text-uppercase">Form Input Data Dosen</h5>
        {{ Form::model($dosen, ['url' => 'dosen/' . $dosen->id, 'method' => 'PUT']) }}
        @include('dosen.form')
        {{-- <tr>
            <td>NIDN</td>
            <td>
                {{ Form::number('nidn', null, ['class' => 'form-control']) }}
            </td>
        </tr>
        <tr>
            <td>Nama Lengkap</td>
            <td>
                {{ Form::text('nama', null, ['class' => 'form-control']) }}
            </td>
        </tr>
        <tr>
            <td>email</td>
            <td>
                {{ Form::email('email', null, ['class' => 'form-control']) }}
            </td>
        </tr>
        <tr>
            <td>Status Dosen</td>
            <td>
                {{ Form::radio('status_dosen', '1', ['class' => 'form-control']) }}
                Aktif
                <br>
                {{ Form::radio('status_dosen', '0', ['class' => 'form-control']) }}
                Tidak Aktif
            </td>
        </tr>
        <tr>
            <td>HP</td>
            <td>
                {{ Form::text('hp', null, ['class' => 'form-control']) }}
            </td>
        </tr>
        <tr>
            <td>TTL</td>
            <td>
                {{ Form::date('ttl', null, ['class' => 'form-control']) }}
            </td>
        </tr>

        <tr>
            <td></td>
            <td>
                {{ Form::submit('Simpan Data', ['class' => 'btn btn-success btn-sm']) }}
                <a href="/dosen" class="btn btn-primary btn-sm">Kembali</a>
            </td>
        </tr> --}}
        {!! Form::close() !!}
    </table>
@endsection
