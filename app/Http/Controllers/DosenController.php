<?php

namespace App\Http\Controllers;


use App\Models\Lecture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\DosenStoreRequest;
use App\Models\Deparment;


class DosenController extends Controller
{
    public function index()
    {
        $data['dosen'] = Lecture::all();
        return view('dosen.index', $data);
    }
    public function create()
    {
        $data['deparments'] = Deparment::pluck('nama_deparment', 'id');
        return view('dosen.create', $data);
    }
    public function store(DosenStoreRequest $request)
    {
        Lecture::create($request->all());
        Session::flash('messages', 'Data berhasil disimpan');
        return redirect('dosen');
    }
    public function edit($id)
    {
        $data['dosen'] = Lecture::find($id);
        return view('dosen.edit', $data);
    }
    public function update(Request $request, $id)
    {
        $dosen = Lecture::find($id);
        $dosen->update($request->all());
        return redirect('dosen');
    }
    public function destroy(Request $request, $id)
    {
        $dosen = Lecture::find($id);
        $dosen->delete($request->all());
        return redirect('dosen');
    }
}
