<?php

namespace App\Http\Controllers;


use App\Models\Lecture;
use App\Models\Deparment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\DosenStoreRequest;


class DosenController extends Controller
{
    public function index()
    {
        // $data['dosen'] = Lecture::orderBy('nama', 'desc')
        Log::info('user mengakases halaman dosen pada' . date('Y-m-d H:i:s'));
        //     ->get();
        $data['dosen'] = Lecture::with('departement')->get();
        return view('dosen.index', $data);
    }
    public function create()
    {
        $data['departement'] = Deparment::pluck('nama_deparment', 'id');
        return view('dosen.create', $data);
    }
    public function store(DosenStoreRequest $request)
    {
        Log::debug((array) $request->all());

        Lecture::create($request->all());
        Session::flash('messages', 'Data berhasil disimpan');
        return redirect('dosen');
    }
    public function edit($id)
    {
        $data['dosen'] = Lecture::find($id);
        $data['departement'] = Deparment::pluck('nama_deparment', 'id');
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
