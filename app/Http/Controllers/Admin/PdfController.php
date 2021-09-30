<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\PdfDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\PdfRequest;
use App\Models\Category;
use App\Models\Pdf;
use App\Traits\ImageTrait;
use App\Traits\SaveFileTrait;
use Illuminate\Http\Request;
use File;

class PdfController extends Controller
{
    use ImageTrait, SaveFileTrait;

    public function __construct()
    {
        $this->middleware(['role:admin|manager']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PdfDataTable $dataTable)
    {
        return $dataTable->render('admin.pdf_all');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where('type', 1)->get();
        return view('admin.pdf_create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PdfRequest $request, Pdf $pdf)
    {
        $imagePath = $this->MakeImage($request, 'image', public_path('/uploads/images/'));

        $pdfPath = $this->MakeFile($request, 'pdf', '/pdfs/');

        $pdf->title = $request->title;
        $pdf->image = $imagePath;
        $pdf->pdf = $pdfPath;
        $pdf->category = $request->category;
        $pdf->description = $request->description;
        $request->status ? $pdf->status = 1 : $pdf->status = 0;
        $pdf->save();

        toast('Pdf Created!','success')->width('300px')->padding('10px');
        return redirect()->route('admin.pdf.index');

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Pdf $pdf)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pdf $pdf)
    {
        $categories = Category::where('type', 1)->get();
        return view('admin.pdf_update', compact('categories', 'pdf'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PdfRequest $request, Pdf $pdf)
    {

        $pdf->title = $request->title;
        $pdf->category = $request->category;
        $pdf->description = $request->description;
        $request->status ? $pdf->status = 1 : $pdf->status = 0;

        if($request->hasFile('image')){
            File::delete(public_path('/uploads/images/'.$pdf->image));
            $imagePath = $this->MakeImage($request, 'image', public_path('/uploads/images/'));
            $pdf->image = $imagePath;
        }

        if($request->hasFile('pdf')){
            File::delete(public_path('/uploads/pdfs/'.$pdf->pdf));
            $pdfPath = $this->MakeFile($request, 'pdf', 'pdfs/');
            $pdf->pdf = $pdfPath;
        }

        $pdf->save();

        toast('Pdf Updated!','success')->width('300px')->padding('10px');
        return redirect()->route('admin.pdf.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(pdf $pdf)
    {
        // deleting files from storage and db
        File::delete(public_path('/uploads/images/'.$pdf->image));
        File::delete(public_path('/uploads/pdfs/'.$pdf->pdf));
        $pdf->delete();
    }
}
