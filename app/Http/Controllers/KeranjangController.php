<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
 
class KeranjangController extends Controller
{
	public function index()
	{
		$keranjangbelanja = DB::table('keranjangbelanja')
				->orderBy('ID', 'asc')->get(); 
		return view('indexKeranjang',['keranjangbelanja' => $keranjangbelanja]);
	}

	public function viewkeranjangbelanja($id)
	{
		// mengambil data keranjangbelanja berdasarkan id yang dipilih
		$keranjangbelanja = DB::table('keranjangbelanja')->where('keranjangbelanja_id',$id)->get();
		// passing data keranjangbelanja yang didapat ke view edit.blade.php
		return view('lihat',['keranjangbelanja' => $keranjangbelanja]);
 
	}
 
	// method untuk menampilkan view form tambah keranjangbelanja
	public function tambah()
	{
 		return view('tambahKeranjang');

	}
 
	// method untuk insert data ke table keranjangbelanja
	public function store(Request $request)
	{
		// insert data ke table keranjangbelanja
		DB::table('keranjangbelanja')->insert([
			'KodeBarang' => $request->KodeBarang,
			'Jumlah' => $request->Jumlah,
			'Harga' => $request->Harga,
		]);
		// alihkan halaman ke halaman keranjangbelanja
		return redirect('/keranjangbelanja');
	}

 
	// method untuk hapus data keranjangbelanja
	public function hapus($id)
	{
		// menghapus data keranjangbelanja berdasarkan id yang dipilih
		DB::table('keranjangbelanja')->where('ID',$id)->delete();
		
		// alihkan halaman ke halaman keranjangbelanja
		return redirect('/keranjangbelanja');
	}

	public function cari(Request $request)
	{
		$cari = $request->cari;
 
		$keranjangbelanja = DB::table('keranjangbelanja')
		->where('keranjangbelanja_nama','like',"%".$cari."%")
		->paginate();
 
		return view('index',['keranjangbelanja' => $keranjangbelanja]);
 
	}
}