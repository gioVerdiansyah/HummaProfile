<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TargetLayanan;
use App\Models\LayananPerusahaan;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\LayananStore;
use App\Http\Requests\LayananUpdate;
use App\Http\Requests\LayananRequest;

class LayananPerusahaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $layanan = LayananPerusahaan::latest();

        if ($request->input('query')) {
            $layanan->where('nama_layanan', 'LIKE', '%' . $request->input('query') . '%');
        }

        $targetLayananId = is_null($request->ct) ? 1 : 2;
        $layanan->where('target_layanan_id', $targetLayananId);

        $layanan = $layanan->paginate(10);

        return view('admin.pengaturan.layanan.index', compact('layanan'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categoris = TargetLayanan::all();
        return view('admin.pengaturan.layanan.create', compact('categoris'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LayananRequest $request)
    {
        // dd($request->all());
        try {
            DB::beginTransaction();

            foreach ($request->input("layanan-group") as $row) {
                LayananPerusahaan::create([
                    'target_layanan_id' => $row['target_layanan_id'],
                    'nama_layanan' => $row['layanan'],
                    'descripsi_layanan' => $row['descripsi_layanan']
                ]);
            }

            DB::commit();
            return to_route('layanan-perusahaan.index')->with('message', [
                'icon' => 'success',
                'title' => "Berhasil!",
                'text' => "Berhasil membuat Layanan baru!"
            ]);
        } catch (\Exception $e) {
            DB::rollBack();

            return back()->with('message', [
                'icon' => 'error',
                'title' => 'Gagal!',
                'text' => "Ada kesalahan server, gagal membuat Layanan baru"
            ]);
        }
    }

    public function editLayanan(string $layanan)
    {
        $layanan = LayananPerusahaan::findOrFail($layanan);
        return view('admin.pengaturan.layanan.edit', compact('layanan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LayananUpdate $request, string $id)
    {
        dd($request->all());
        try {
            DB::beginTransaction();

            $layanan = LayananPerusahaan::where('id', $id)->first();
            if (!$layanan) {
                return back()->with('message', [
                    'icon' => 'error',
                    'title' => 'Gagal!',
                    'text' => "Layanan tidak di temukan"
                ]);
            }
            $layanan->nama_layanan = $request->nama_layanan;
            $layanan->descripsi_layanan = $request->descripsi;
            $layanan->target_layanan_id = $request->target_layanan_id;
            $layanan->save();

            DB::commit();
            return to_route('layanan-perusahaan.index')->with('message', [
                'icon' => 'success',
                'title' => 'Berhasil!',
                'text' => "Berhasil mengupdate layanan"
            ]);
        } catch (\Throwable $th) {
            DB::rollBack();

            return back()->with('message', [
                'icon' => 'error',
                'title' => 'Gagal!',
                'text' => "Ada kesalahan server, gagal mengupdate Layanan"
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            DB::beginTransaction();

            $layanan = LayananPerusahaan::where('id', $id)->first();
            if (!$layanan) {
                return back()->with('message', [
                    'icon' => 'error',
                    'title' => 'Gagal!',
                    'text' => 'Layanan tidak ada!'
                ]);
            }
            $layanan->delete();

            DB::commit();
            return back()->with('message', [
                'icon' => 'success',
                'title' => 'Berhasil!',
                'text' => 'Berhasil mengapus layanan'
            ]);
        } catch (\Exception $th) {
            DB::rollBack();
            return back()->with('message', [
                'icon' => 'error',
                'title' => 'Gagal!',
                'text' => "Ada kesalahan server, gagal menghapus Layanan"
            ]);
        }
    }
}
