<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\LibraryPaymentDataTable;
use App\Http\Controllers\Controller;
use App\Models\LibraryWallet;
use App\Models\PaymentHistory;
use Illuminate\Http\Request;

class LibraryPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(LibraryPaymentDataTable $dataTable)
    {
        /**
         *  if it's last day of month we will reset
         *  payment status and set unpaid
         */
        $today = \Carbon\Carbon::now()->toDateString();
        $lastDayOfMonth =    \Carbon\Carbon::parse($today)->endOfMonth()->toDateString();

        if($today == $lastDayOfMonth){
           LibraryWallet::query()->update(['status' => 0]);
        }
        
        return $dataTable->render('admin.library_payment_all');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $update = LibraryWallet::find($id);
        if($update->status == 0){
            // add previos id and amount to payment history table
            $addToPaymentHistory = new PaymentHistory();
            $addToPaymentHistory->user_id = $update->id;
            $addToPaymentHistory->library_id = $update->user->library->id;
            $addToPaymentHistory->paid_amount = $update->total_amount;
            $addToPaymentHistory->save();
            // update library wallet
            $update->status = 1;
            $update->total_amount = 0;
            $update->save();
        }

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
