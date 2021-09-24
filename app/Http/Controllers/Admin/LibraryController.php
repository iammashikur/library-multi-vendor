<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LibraryRequest;
use App\Models\Library;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use File;
class LibraryController extends Controller
{
    use ImageTrait;

    public function __construct()
    {
        $this->middleware(['role:librarian|admin']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $library = Library::where('user_id', Auth::id())->first();
        return view('admin.library_all', compact('library'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LibraryRequest $request, Library $library)
    {
        if($library->where('user_id', Auth::id())->first()){
            // if library exist then update
            $updateLibrary = $library->where('user_id', Auth::id())->first();

            $updateLibrary->name = $request->name;
            $updateLibrary->district_id = $request->district_id;
            $updateLibrary->division_id = $request->division_id;
            $updateLibrary->city_id = $request->city_id;
            $updateLibrary->address = $request->address;
            $updateLibrary->description = $request->description;

            /**
             *  if banner or logo exist on request then update banner or logo in db
             *  and save it local and delete previous files
             */
            if($request->hasFile('logo')){
                File::delete(public_path('/uploads/images/'. $updateLibrary->logo));
                $logoPath = $this->MakeImage($request, 'logo', public_path('/uploads/images/'));
                $updateLibrary->logo = $logoPath;
            }

            if($request->hasFile('banner')){
                File::delete(public_path('/uploads/images/'. $updateLibrary->banner));
                $bannerPath = $this->MakeImage($request, 'banner', public_path('/uploads/images/'));
                $updateLibrary->banner = $bannerPath;
            }

            $updateLibrary->save();
        }else{

            // if do not library exist then create one
            $library->name = $request->name;
            $library->district_id = $request->district_id;
            $library->division_id = $request->division_id;
            $library->city_id = $request->city_id;
            $library->address = $request->address;
            $library->description = $request->description;
            $library->user_id = Auth::id();

            /**
             *  if banner or logo exist on request then update banner or logo in db
             *  and save it local
             */
            if($request->hasFile('logo')){
                $logoPath = $this->MakeImage($request, 'logo', public_path('/uploads/images/'));
                $library->logo = $logoPath;
            }

            if($request->hasFile('banner')){
                $bannerPath = $this->MakeImage($request, 'banner', public_path('/uploads/images/'));
                $library->banner = $bannerPath;
            }

            $library->save();
        }
        toast('Info Updated!','success')->width('300px')->padding('10px');
        return redirect()->route('admin.library.index');
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
