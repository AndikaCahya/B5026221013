<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
 
class ChatController extends Controller
{
	public function indexChat()
	{
		$chat = DB::table('chat')
		->orderBy('id', 'asc')
        ->get();

        foreach ($chat as $p) {
            // Explode each chat message using space as a separator
            $word = explode(" ", $p->pesan);

            // Initialize an array to store the modified words
            $emoji = [];

            foreach ($word as $q) {
                switch($q){
                    case ":))":
                        $foto = "assets/img/1.png";
                        $emoji[] = "<img src='$foto' alt=':))' style='width:20px ; height:20px'/>";
                        break;
                    case ":3":
                        $foto = "/assets/img/2.png";
                        $emoji[] = "<img src='$foto' alt=':3' style='width:20px ; height:20px'/>";
                        break;
                    case ":P":
                        $foto = "/assets/img/3.png";
                        $emoji[] = "<img src='$foto' alt=':P' style='width:20px ; height:20px'/>";
                        break;
                    case ":C":
                        $foto = "/assets/img/4.png";
                        $emoji[] = "<img src='$foto' alt=':C' style='width:20px ; height:20px'/>";
                        break;
                    case ";)":
                        $foto = "/assets/img/5.png";
                        $emoji[] = "<img src='$foto' alt=';)' style='width:20px ; height:20px'/>";
                        break;
                    default:
                        $emoji[] = $q;
                        break;

                }
            }

            // Update the chat message with the modified content
            $p->pesan = implode(" ", $emoji);
        }

		return view('indexChat',['chat' => $chat]);
 
	}

	public function viewChat($id){

		$chat = DB::table('chat')
		->where('id',$id)
		->get();

		return view('viewChat',['chat' => $chat]);
	}
}