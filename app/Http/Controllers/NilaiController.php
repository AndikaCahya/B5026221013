<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
 
class NilaiController extends Controller
{
	public function nilai()
	{
		$nilaikuliah = DB::table('nilaikuliah')
		->orderBy('ID', 'asc')->get();
        
        foreach($nilaikuliah as $n){
            switch(true){
                case($n->NilaiAngka >= 81):
                $n->NilaiHuruf = 'A';
                break;
                case($n->NilaiAngka >= 61):
                $n->NilaiHuruf = 'B';
                break;
                case($n->NilaiAngka >= 41):
                $n->NilaiHuruf = 'C';
                break;
                default:
                $n->NilaiHuruf = 'D';
                break;
            }
        $n->Bobot = $n->NilaiAngka * $n->SKS;
        }
		return view('nilai',['nilaikuliah' => $nilaikuliah]);
	}

	public function tambah()
	{
 
		// memanggil view tambah
		return view('tambahNilai');
 
	}
 
	public function store(Request $request)
	{
		DB::table('nilaikuliah')->insert([
			'ID' => $request->ID,
			'NRP' => $request->NRP,
			'NilaiAngka' => $request->NilaiAngka,
			'SKS' => $request->SKS
		]);
		return redirect('/nilaikuliah');
 
	}
}