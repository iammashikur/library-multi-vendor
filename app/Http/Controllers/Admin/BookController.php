<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\BookDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\BookRequest;
use App\Models\Book;
use App\Models\Category;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use File;
class BookController extends Controller
{
    use ImageTrait;

    public function __construct()
    {
        $this->middleware(['role:admin|librarian']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(BookDataTable $dataTable)
    {
        return $dataTable->render('admin.book_all');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where('type', 1)->get();
        return view('admin.book_create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookRequest $request, Book $book)
    {
        /** Save image on dir */
        $imagePath = $this->MakeImage($request, 'cover_image', public_path('/uploads/images/'));

        /** Save request data to db */
        $book->user_id     = Auth::id();
        $book->library_id  = Auth::user()->library->id;
        $book->category_id = $request->category_id;
        $book->cover_image = $imagePath;
        $book->title       = $request->title;
        $book->price       = $request->price;
        $book->stock       = $request->stock;
        $book->description = $request->description;
        $book->writer      = $request->writer;
        $book->num_of_page = $request->num_of_page;
        $book->publisher   = $request->publisher;
        $book->tags        = json_encode($request->tags);
        $book->status      = $request->status ? 1 : 0;
        $book->save();
        toast('Book Created!','success')->width('300px')->padding('10px');
        return redirect()->route('admin.book.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        $categories = Category::where('type', 1)->get();
        return view('admin.book_update', compact('book', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(BookRequest $request, Book $book)
    {
        // return $request;
        if($request->hasFile('cover_image')){
            /** Deleteing previous image */
            File::delete(public_path("/uploads/images/$book->cover_image"));
            /** Save image on dir */
            $imagePath = $this->MakeImage($request, 'cover_image', public_path('/uploads/images/'));
            $book->cover_image = $imagePath;
        }

         /** Save request data to db */
         $book->user_id     = Auth::id();
         $book->library_id  = Auth::user()->library->id;
         $book->category_id = $request->category_id;
         $book->title       = $request->title;
         $book->price       = $request->price;
         $book->stock       = $request->stock;
         $book->description = $request->description;
         $book->writer      = $request->writer;
         $book->num_of_page = $request->num_of_page;
         $book->publisher   = $request->publisher;
         $book->tags        = json_encode($request->tags);
         $book->status      = $request->status ? 1 : 0;
         $book->save();
         toast('Book Updated!','success')->width('300px')->padding('10px');
        return redirect()->route('admin.book.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        File::delete(public_path("/uploads/images/$book->cover_image"));
        $book->delete();
    }
}
