<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\upload;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
// CONTROLLER CHUNG DO PN VIẾT CÓ GIẢI THÍCH RÕ RÀNG
class adminsv extends Controller
{


	// HÀM LOAD DATA VỀ TRANG CHỦ
	function homeLoad() {
		$data['data'] = DB::table('modimg')->orderBy('stt', 'asc')->get(); //GET dữ liệu từ database
			return view('home',$data); // Trả dữ liệu về cùng view home
	}


	// HÀM LOAD DATA VỀ MODHOME 
	function getData() {
		$data['data'] = DB::table('modimg')->orderBy('stt', 'asc')->get(); //GET dữ liệu từ database
			return view('adminDash/modhome',$data); // Trả dữ liệu về cùng view adminDash/modhome
	}

	// HÀM UPLOAD
	public function upload(Request $request){
		 $tieude = $request->input('tieude');
		 $mota = $request->input('mota');
		 $imgurl_r = rand(11111, 999999);
		 $a=upload::create(['tieude'=>$tieude,'mota'=>$mota,'imgurl'=>$imgurl_r.'.jpg']);
		if (Input::hasFile('fileToUpload')) {
			$file = Input::file('fileToUpload');
			$file->move('img', $imgurl_r.'.'.$file->getClientOriginalExtension());
	}
	$data['data'] = DB::table('modimg')->orderBy('stt', 'asc')->get();
	return view('adminDash/modhome',$data); // Trả dữ liệu về cùng view adminDash/modhome
	}


	// HÀM XÓA SLIDE ẢNH
	function rmData(Request $request) {

		// ĐỊNH NGHĨA 1 SỐ BIẾN GET DỮ LIỆU TỪ THÀNH PHẦN BÊN FRONTEND
		$btn = $request->input('btn'); // GET dữ liệu từ các thành phần có ID tương ứng (bên front end)
		$tieude = $request->input('title'); // tương tự cái trên
		$mota = $request->input('desc'); // tương tự cái trên
		$urlimg = $request->input('del'); // tương tự cái trên
		$stt = $request->input('stt'); // tương tự cái trên

		// READY TO GO ! :D
		if ($btn == 'save'){ // Nếu giá trị trả về của btn là save -> bên front end (modhome.blade.php) có 2 nút cùng tên là btn, 1 nút có giá trị là save, 1 nút là remove, nếu nhận giá trị trả về là save thì...
			if ($tieude != null){
				DB::table('modimg')->where('imgurl', $urlimg)->update(['tieude' => $tieude]);
			}
			if ($mota != null){
				DB::table('modimg')->where('imgurl', $urlimg)->update(['mota' => $mota]);
			}
			if ($stt != null){
				DB::table('modimg')->where('imgurl', $urlimg)->update(['stt' => $stt]);
			}
		}
		if ($btn == 'remove'){ // Nếu nhận giá trị trả về là remove thì...
			$urlimg = $request->input('del');
			DB::table('modimg')->where('imgurl', $urlimg)->delete();
			File::delete('img/'.$urlimg);
		}
		$data['data'] = DB::table('modimg')->orderBy('stt', 'asc')->get(); // Query lại dữ liệu
		return view('adminDash/modhome',$data); // Trả dữ liệu về cùng view adminDash/modhome
	}

	// CHÚC ĐÍNH MAY MẮN !
	// THÂN _PN_ !
	// GOODLUCK MY FRIEND ;)

}
