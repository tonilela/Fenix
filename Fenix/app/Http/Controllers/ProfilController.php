<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ProfilController extends Controller
{
    public function index($slug){

        return view('profile.index');

    }
    public function uploadPicture(Request $request){

        $file = $request->file('picture');
        $filename = $file->getClientOriginalName();
        $path='public/img';
        $file->move($path,$filename);
        $user_id=Auth::user()->id;
        DB::table('users')->where('id',$user_id)->update(['picture'=>$filename]);
        return back();

        /*

         * */
    }
}
