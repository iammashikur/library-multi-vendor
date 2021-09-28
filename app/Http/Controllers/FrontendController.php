<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\City;
use App\Models\District;
use App\Models\Library;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }

    public function search_libraries(Request $request){

        $libraries = Library::where('city_id', $request->city)->paginate('10');
        return view('search_library', compact('libraries'));
    }

    public function library_show(Request $request){

        $library = Library::find($request->id);
        return view('library_show', compact('library'));

    }

    public function book_show(Request $request){

        $book = Book::find($request->id);
        return view('book_show',compact('book'));

    }

    public function cart_show(Request $request){

        return view('cart_show');

    }

    public function cart_add(Request $request){

        return view('cart_add');

    }


    public function districts(Request $request){

        $districts = District::where('division_id', $request->division_id)->get();
        return $districts;

    }


    public function cities(Request $request){

        $cities = City::where('district_id', $request->district_id)->get();
        return $cities;

    }
}
