<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\BlogDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use App\Models\Category;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;
use File;
class BlogController extends Controller
{
    // useing image trait
    use ImageTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(BlogDataTable $dataTables)
    {
        return $dataTables->render('admin.blog_all');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where('type', 0)->orderBy('name', 'asc')->get();
        return view('admin.blog_create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogRequest $request, Blog $blog)
    {
        /** Save image on dir */
        $imagePath         = $this->MakeImage($request, 'image', public_path('/uploads/images/'));

        /** Save request data to db */
        $blog->user_id     = Auth::id();
        $blog->category_id = $request->category_id;
        $blog->image       = $imagePath;
        $blog->title       = $request->title;
        $blog->body        = $request->body;
        $blog->tags        = json_encode($request->tags);
        $blog->is_premium  = $request->is_premium ? 1 : 0;
        $blog->save();
        toast('Blog Created!','success')->width('300px')->padding('10px');
        return redirect()->route('admin.blog.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        $categories = Category::where('type', 0)->orderBy('name', 'asc')->get();
        
        return view('admin.blog_update', compact('categories', 'blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BlogRequest $request, Blog $blog)
    {
        if($request->hasFile('image')){
            /** Removing old image */
            File::delete(public_path("/uploads/images/$blog->image"));
            /** Save image on dir */
            $imagePath   = $this->MakeImage($request, 'image', public_path('/uploads/images/'));
            /** Saveing to db */
            $blog->image = $imagePath;
        }
        if($request->status and Auth::user()->hasRole(['admin', 'manager'])){
            $blog->status = 1;
        }else{
            $blog->status = 0;
        }
        /** Save request data to db */
        $blog->user_id     = Auth::id();
        $blog->category_id = $request->category_id;
        $blog->title       = $request->title;
        $blog->body        = $request->body;
        $blog->tags        = json_encode($request->tags);
        $blog->is_premium  = $request->is_premium ? 1 : 0;
        $blog->save();
        toast('Blog Created!','success')->width('300px')->padding('10px');
        return redirect()->route('admin.blog.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        File::delete(public_path("/uploads/images/$blog->image"));
        $blog->delete();
    }
}
