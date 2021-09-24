<?php

namespace App\DataTables;

use App\Models\Pdf;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class PdfDataTable extends DataTable
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
            ->addColumn('image', function($image){
                return '<img class="img-fluid" width="100" src="'.asset("/uploads/images/$image->image").'" alt="">';
            })
            ->addColumn('Status', function($status){
                if($status->status == 1){
                    $data = '<div class="badge btn-success">Active</div>';
                }else{
                    $data = '<div class="badge btn-danger">Desabled</div>';
                }
                return $data;
            })
            ->addColumn('action', function($action){
                return '<a class="btn-sm btn-primary" href="'.route('admin.pdf.edit', $action->id).'"><i class="far fa-edit"></i></a>
                        <a class="btn-sm btn-danger delete" href="'.route('admin.pdf.destroy', $action->id).'"><i class="far fa-trash-alt"></i></a>';
            })
            ->rawColumns(['Status', 'action', 'image']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Pdf $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Pdf $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('pdf-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->orderBy(0);
                    // ->dom('Bfrtip')
                    // ->buttons(
                    //     Button::make('create'),
                    //     Button::make('export'),
                    //     Button::make('print'),
                    //     Button::make('reset'),
                    //     Button::make('reload')
                    // );
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
            Column::make('image'),
            Column::make('title'),
            Column::make('Status','status'),
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
        return 'Pdf_' . date('YmdHis');
    }
}
