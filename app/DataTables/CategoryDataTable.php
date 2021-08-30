<?php

namespace App\DataTables;

use App\Models\Category;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class CategoryDataTable extends DataTable
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
            ->addIndexColumn()
            ->addColumn('types', function($type){
                if($type->type == 0){
                    $data = '<span class="badge badge-secondary">Blog</span>';
                }else{
                    $data = '<span class="badge badge-info">Book</span>';
                }

                return $data;

            })
            ->addColumn('action', function($action){
                return '<a class="btn-sm btn-primary" href="'.route('admin.category.edit', $action->id).'"><i class="far fa-edit"></i></a> 
                        <a class="btn-sm btn-danger delete" href="'.route('admin.category.destroy', $action->id).'"><i class="far fa-trash-alt"></i></a>';
            })
            ->rawColumns(['types', 'action']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Category $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Category $model)
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
                    ->setTableId('category-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->orderBy(1);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::computed('DT_RowIndex', 'No')
            ->width(20),
            Column::make('id')->visible(false),
            Column::make('name'),
            Column::make('slug'),
            Column::make('types', 'type'),
            Column::computed('action')
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
        return 'Category_' . date('YmdHis');
    }
}
