<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Karyawan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class AbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $absensi = Absensi::all();
        $today = Carbon::now()->setTimezone('Asia/Jakarta')->format('d-m-Y H-i-s');

        return view('absensi.index', compact('today', 'absensi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $today = Carbon::now()->setTimezone('Asia/Jakarta')->format('Y-m-d H-i-s');

        $karyawan = Karyawan::all();
        $absensi = Absensi::all();
        return view('absensi.create', compact('absensi', 'karyawan', 'today'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_karyawan' => 'required',
            'jam_masuk' => 'required',
            'jam_pulang' => 'required',
            'keterangan' => 'required',
        ]);

        $absensi = new Absensi();
        $absensi->id_karyawan = $request->id_karyawan;
        $absensi->tanggal = date('Y-m-d');

        if ($request->has('jam_masuk')) {
            $absensi->jam_masuk = date('H:i:s');
            $absensi->jam_pulang = null;
        } elseif ($request->has('jam_pulang')) {
            $absensi->jam_pulang = date('H:i:s');
        }

        $absensi->save();

        return redirect()->back()->with('success', 'Absensi berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function show(Absensi $absensi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function edit(Absensi $absensi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Absensi $absensi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Absensi $absensi)
    {
        //
    }
}
