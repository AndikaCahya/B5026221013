<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
 
class MouseController extends Controller
{
	public function indexMouse()
	{
    	// mengambil data dari table pegawai
		//$mouse = DB::table('mouse')->get();
		$mouse = DB::table('mouse')
		->orderBy('kodemouse', 'asc')
		->paginate(10);
 
    	// mengirim data pegawai ke view index
		return view('indexMouse',['mouse' => $mouse]);
 
	}
 
	// method untuk menampilkan view form tambah pegawai
	public function tambahMouse()
	{
 
		// memanggil view tambah
		return view('tambahMouse');
 
	}
 
	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('mouse')->insert([
			'kodemouse' => $request->kodemouse,
			'merkmouse' => $request->merkmouse,
			'stockmouse' => $request->stockmouse,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/mouse');
 
	}
 
	// method untuk edit data pegawai
	public function editMouse($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$mouse = DB::table('mouse')->where('kodemouse',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('editMouse',['mouse' => $mouse]);
 
	}
 
	// update data pegawai
	public function update(Request $request)
	{
		// update data pegawai
		DB::table('mouse')->where('kodemouse',$request->id)->update([
			'merkmouse' => $request->merkmouse,
			'stockmouse' => $request->stockmouse,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/mouse');
	}
 
	// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('mouse')->where('kodemouse',$id)->delete();
		
		// alihkan halaman ke halaman pegawai
		return redirect('/mouse');
	}

	public function cari(Request $request){
	// menangkap data pencarian
	$cari = $request->cari;
 
 	// mengambil data dari table pegawai sesuai pencarian data
	$mouse = DB::table('mouse')
	->where('merkmouse','like',"%".$cari."%")
	->orderBy('merkmouse', 'asc')
	->paginate();
 
    	// mengirim data pegawai ke view index
	return view('indexMouse',['mouse' => $mouse, 'cari' => $cari]);
 	}

	public function viewMouse($id){
		//mengambil data dari table pegawai sesuai id
		$mouse = DB::table('mouse')
		->where('kodemouse',$id)
		->get();

		return view('viewMouse',['mouse' => $mouse]);
	}


}