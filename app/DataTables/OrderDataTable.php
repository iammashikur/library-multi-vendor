<?php

namespace App\DataTables;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class OrderDataTable extends DataTable
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
            ->addColumn('items', function($items){
                $data = '';
                foreach($items->orderItems as $item){
                    $data .= $item->book->title.'<br>';
                }

                return $data;
            })
            ->addColumn('Status', function($status){
                if($status->status == 0){
                    $data = '<div class="badge btn-warning">Pending</div>';
                }elseif($status->status == 1){
                    $data = '<div class="badge btn-success">Delivered</div>';
                }elseif($status->status == 2){
                    $data = '<div class="badge btn-info">Confirmed</div>';
                }elseif($status->status == 3){
                    $data = '<div class="badge btn-danger">Cancelld</div>';
                }

                return $data;
            })
            ->addColumn('action', function($action){
                return '<a class="btn-sm btn-info" href="'.route('admin.order.show', $action->id).'"><i class="far fa-eye"></i></a>';
            })
            ->rawColumns(['Status', 'action', 'items']);

    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Order $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Order $model)
    {
        if(auth()->user()->hasRole(['admin', 'manager', 'manager'])){
            return $model
            ->where('library_id', 1) // 1 is default admin library
            ->where('status', '!=', 1)
            ->with('orderItems.book')
            ->newQuery();
        }else{
            return $model
            ->where('library_id', Auth::user()->library->id)
            ->where('status', '!=', 1)
            ->with('orderItems.book')
            ->newQuery();
        }
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('order-table')
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
            Column::make('id'),
            Column::make('invoice'),
            Column::make('items'),
            Column::make('total_price'),
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
        return 'Order_' . date('YmdHis');
    }
}
