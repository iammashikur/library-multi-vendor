<?php

namespace App\DataTables;

use App\Models\LibraryWallet;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class LibraryPaymentDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('library_name', function($libraryName){
                return $libraryName->user->library->name;
            })
            ->addColumn('user_name', function($userName){
                return $userName->user->name;
            })
            ->addColumn('user_phone', function($userPhone){
                return $userPhone->user->phone;
            })
            ->addColumn('logo', function($logo){
                return '<img class="img-fluid" src="'.asset("/uploads/images/$logo->logo").'" alt="">';
            })
            ->addColumn('Status', function($status){
                if($status->status == 0){
                    $data = '<span class="badge badge-danger">unpaid</span>';
                }else{
                    $data = '<span class="badge badge-success">paid</span>';
                }

                return $data;

            })
            ->addColumn('action', function($action){
                if($action->status == 1){
                    return '<a class="btn-sm btn-secondary"  >Pay</a>';
                }
                return '<a class="btn-sm btn-info pay" href="'.route('admin.library-payment.update', $action->id).'">Pay</a>';
            })
            ->rawColumns(['action', 'Status', 'logo']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\LibraryPayment $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(LibraryWallet $model)
    {
        return $model
            ->with(['user', 'user.library'])
            ->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('librarypayment-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->orderBy(0);

    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make('id')->visible(false),
            Column::make('logo'),
            Column::make('library_name', 'user.library.name'),
            Column::make('user_name', 'user.name'),
            Column::make('user_phone', 'user.phone'),
            Column::make('total_amount'),
            Column::make('Status', 'status'),
            Column::computed('action')
                  ->exportable(false)
                  ->printable(false)
                  ->width(100)
                  ->addClass('text-center'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'LibraryPayment_' . date('YmdHis');
    }
}
