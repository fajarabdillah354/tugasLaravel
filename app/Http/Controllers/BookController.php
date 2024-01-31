<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function home(){
        return view('home');
    }

    public function index(){
        $books = DB::table('book')->get();
        return view('index',['book'=>$books]);
    }

    public function cari($id){
        $books = DB::table('book')->where('ID_BUKU',$id)->get();
        return view('index',['book'=>$books]);
    }
    
}
