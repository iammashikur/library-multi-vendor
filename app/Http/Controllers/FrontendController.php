<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Cart;
use App\Models\Cart_library;
use App\Models\City;
use App\Models\District;
use App\Models\Library;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        $cart = Cart::where('user_id', Auth::user()->id)->get();
        return view('cart_show',compact('cart'));

    }

    public function cart_add(Request $request){






        if(Cart::where(['user_id' => Auth::user()->id, 'book_id' => $request->book_id])->count() == 1){
           foreach(Cart::where(['user_id' => Auth::user()->id, 'book_id' => $request->book_id])->get() as $item){
            $cart = Cart::find($item->id);
            $cart->quantity =  $cart->quantity+$request->quantity;
            $cart->save();

           }
        }
        else{

            $cart = new Cart();
            $cart->book_id = $request->book_id;
            $cart->library_id = $request->library_id;
            $cart->quantity = $request->quantity;
            $cart->user_id = Auth::user()->id;
            $cart->status = 0;
            $cart->save();

        }

        $CartLibrary = Cart_library::where([
            'user_id' => Auth::user()->id,
            'library_id' => $request->library_id,
        ]);

        if($CartLibrary->count() == 0){
            $cartLib = new Cart_library();
            $cartLib->cart_id =  $cart->id;
            $cartLib->library_id =  $cart->library_id;
            $cartLib->user_id =  Auth::user()->id;
            $cartLib->save();
        }

        toast('Book added to cart!','success')->width('300px')->padding('10px')->position($position = 'bottom-end')->autoClose(1500);


        //Redirect to book page after addtocart login

        if(login_redirect()){

            return redirect()->route('book_show',['id' => $request->id]);
        }

        return redirect()->back();

    }

    public function cart_remove(Request $request){


        Cart::find($request->id)->delete();

        toast('Item removed from cart!','success')->width('300px')->padding('10px')->position($position = 'bottom-end')->autoClose(1500);

        return redirect()->back();

    }



    public function checkout(){


        $CartLibrary = Cart_library::where([
            'user_id' => Auth::user()->id,
        ]);

        foreach($CartLibrary->get() as $item){

            $cart = Cart::where([
                'user_id' => Auth::user()->id,
                'library_id' => $item->id,
            ])->get();

            $total = 0;

            foreach($cart as $books){
                $total += \App\Models\Book::find($books->book_id)->price * $books->quantity;
            }

            $order = new Order();
            $order->invoice =  rand(6,6);
            $order->library_id =  $item->library_id;
            $order->user_id =   Auth::user()->id;
            $order->total_price = $total;
            $order->status = 0;
            $order->save();

            foreach($cart as $books){
                $order_item = new OrderItem();
                $order_item->order_id =  $order->id;
                $order_item->book_id =  $books->book_id;
                $order_item->quantity =  $books->quantity;
                $order_item->unit_price = \App\Models\Book::find($books->book_id)->price;
                $order_item->sum_price  = \App\Models\Book::find($books->book_id)->price * $books->quantity;
                $order_item->save();
            }

        }

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
