<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Book;


class BookController extends Controller
{
    public function create(Request $request){
        try{
            $author_id = Auth::id();
            $book_data = array("book_name"=>$request->book_name,"book_price"=>$request->book_price,"user_id"=>$author_id,"book_status"=>1);
            Book::create($book_data);
            return view('admin/createBook');
        }catch(ModelNotFoundException $exception){
            return back()->withError($exception->getMessage())->withInput(); 
        }
    }
    public function showCreateBookPage(){
        return view('admin/createBook');
    }
    public function showBooks(){
        //$array = ["name" =>"asda"];
        return view('admin/showBooks');
    }
}
