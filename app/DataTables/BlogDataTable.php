<?php

namespace App\DataTables;

use App\Models\Blog;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;
use Illuminate\Support\Str;

class BlogDataTable extends DataTable
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
            ->addColumn('category', function($category){
                return $category->category->name;
            })
            ->addColumn('image', function($image){
                return '<img class="img-fluid" src="'.asset("/uploads/images/$image->image").'" alt="">';
            })
            ->addColumn('Title', function($title){
                $data = Str::limit($title->title, 100, '...');
                return $data;
            })
            ->addColumn('body', function($Body){
                $data = Str::limit($Body->body, 140, '...');
                return $data;
            })
            ->addColumn('premium', function($premium){
                if($premium->is_premium == 1){
                    $data = '<div class="badge-outline col-orange"><i class="fas fa-crown"></i> Premium</div>';
                }else{
                    $data = '<div class="badge-outline col-brown">Normal</div>';
                }
                return $data;
            })
            ->addColumn('Status', function($status){
                if($status->status == 1){
                    $data = '<div class="badge btn-success">Active</div>';
                }else{
                    $data = '<div class="badge btn-warning">Pending</div>';
                }
                return $data;
            })
            ->addColumn('auther', function($auther){
               return $auther->user->name;
            })
            ->addColumn('action', function($action){
                return '<a class="btn-sm btn-primary" href="'.route('admin.blog.edit', $action->id).'"><i class="far fa-edit"></i></a> 
                        <a class="btn-sm btn-danger delete" href="'.route('admin.blog.destroy', $action->id).'"><i class="far fa-trash-alt"></i></a>';
            })
            ->rawColumns(['image', 'premium', 'body','Status', 'action']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Blog $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Blog $model)
    {
        if(Auth::user()->hasRole(['admin', 'manager'])){
            return $model->with(['category', 'user'])->newQuery();
        }elseif(Auth::user()->hasRole(['writer'])){
            return $model
            ->with(['category', 'user'])
            ->where('user_id', Auth::id())
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
                    ->setTableId('blog-table')
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
            Column::make('image')->width('80'),
            Column::make('Title', 'title')->width('180'),
            Column::make('body')->width('250'),
            Column::make('category', 'category.name')->width('80'),
            Column::make('Status', 'status'),
            Column::make('premium', 'is_premium')->width('100'),
            Column::make('auther', 'user.name')->width('80'),
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
        return 'Blog_' . date('YmdHis');
    }
}
