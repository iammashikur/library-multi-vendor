<?php

namespace App\DataTables;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class OrderReportDataTable extends DataTable
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
            ->filter(function($search){
                $search->whereBetween('created_at', [request('start_date'), request('end_date')])->get();
                
            })
            ->addColumn('customer', function($customer){
                return $customer->user->name;
            })
            ->addColumn('phone', function($phone){
                return $phone->user->phone;
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
        return $model
        ->where('library_id', Auth::user()->library->id)
        ->where('status', '!=', 1)
        ->with('user')
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
                    ->setTableId('order-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->orderBy(0)
                    ->buttons(
                        Button::make('copy'),
                        Button::make('print'),
                        Button::make('excel')
                    ); 
         
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make('id')->visible(false)->printable(false),
            Column::make('invoice'),
            Column::make('customer', 'user.name'),
            Column::make('phone', 'user.phone'),
            // Column::make('items'),
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
