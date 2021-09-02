<?php

namespace App\DataTables;

use App\Models\Book;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class BookDataTable extends DataTable
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
                return '<img class="img-fluid" src="'.asset("/uploads/images/$image->cover_image").'" alt="">';
            })
            ->addColumn('Library', function($library){
                return $library->library->name;
            })
            ->addColumn('Category', function($category){
                return $category->category->name;
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
                return '<a class="btn-sm btn-primary" href="'.route('admin.book.edit', $action->id).'"><i class="far fa-edit"></i></a> 
                        <a class="btn-sm btn-danger delete" href="'.route('admin.book.destroy', $action->id).'"><i class="far fa-trash-alt"></i></a>';
            })
            ->rawColumns(['image', 'Status', 'action'])
            ;

    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Book $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Book $model)
    {
        return $model->with(['category', 'library'])->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('book-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->scrollX(true)
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
            Column::make('title')->width('250'),
            Column::make('Category', 'category.name')->width('100'),
            Column::make('Library', 'library.name')->width(250),
            Column::make('price')->width('50'),
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
        return 'Book_' . date('YmdHis');
    }
}
