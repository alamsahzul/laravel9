<tr>
    <td>NIDN</td>
    <td>
        {{ Form::number('nidn', null, ['class' => 'form-control', 'placeholder' => 'Masukkan Nim']) }}
    </td>
</tr>
<tr>
    <td>Nama Lengkap</td>
    <td>
        {{ Form::text('nama', null, ['class' => 'form-control', 'placeholder' => 'Masukkan Nama']) }}
    </td>
</tr>
<tr>
    <td>email</td>
    <td>
        {{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Masukkan Email']) }}
    </td>
</tr>
<tr>
    <td>Status Dosen</td>
    <td>
        {{ Form::radio('status_dosen', '1', ['class' => 'form-control', 'placeholder' => 'Status Dosen']) }}
        Aktif
        <br>
        {{ Form::radio('status_dosen', '0', ['class' => 'form-control', 'placeholder' => 'Status Dosen']) }} Tidak
        Aktif
    </td>
</tr>
<tr>
    <td>HP</td>
    <td>
        {{ Form::text('hp', null, ['class' => 'form-control', 'placeholder' => 'Masukkan Nomor HP']) }}
    </td>
</tr>
<tr>
    <td>Department</td>
    <td>
        {{ Form::select('department', $deparments, null, ['class' => 'form-control']) }}
    </td>
</tr>
<tr>
    <td>HP</td>
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
</tr>
