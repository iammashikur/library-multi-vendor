<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\OrderReportDataTable;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderReport;
use Illuminate\Http\Request;

class OrderReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(OrderReportDataTable $dataTable, Request $request)
    {
        $totalSub = Order::whereBetween('created_at', [$request->start_date, $request->end_date])->sum('total_price');
        return $dataTable->render('admin.order_report_all', compact('totalSub'));

    }

    public function search(Request $request)
    {
        return $request;
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OrderReport  $orderReport
     * @return \Illuminate\Http\Response
     */
    public function show(OrderReport $orderReport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OrderReport  $orderReport
     * @return \Illuminate\Http\Response
     */
    public function edit(OrderReport $orderReport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OrderReport  $orderReport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OrderReport $orderReport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OrderReport  $orderReport
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrderReport $orderReport)
    {
        //
    }
}
