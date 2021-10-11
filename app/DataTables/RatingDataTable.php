<?php

namespace App\DataTables;

use App\Models\Rating;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class RatingDataTable extends DataTable
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
                return '<img class="img-fluid" src="'.asset("/uploads/images/".$image->book->cover_image).'" alt="">';
            })
            ->addColumn('action', function($action){
                return '<a class="btn-sm btn-danger delete" href="'.route('admin.rating.destroy', $action->id).'"><i class="far fa-trash-alt"></i></a>';
            })
            ->rawColumns(['action', 'image']);

    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Rating $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Rating $model)
    {
        return $model
            ->with(['book', 'user'])
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
                    ->setTableId('rating-table')
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
            Column::make('image')->width('100')->addClass('text-center'),
            Column::make('book.title', 'book.title'),
            Column::make('user.name', 'user.name'),
            Column::make('rating'),
            Column::make('comment'),
            Column::computed('action')
                  ->exportable(false)
                  ->printable(false)
                  ->width(60)
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
        return 'Rating_' . date('YmdHis');
    }
}
