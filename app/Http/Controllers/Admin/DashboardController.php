<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Book;
use App\Models\Category;
use App\Models\LibraryWallet;
use App\Models\Order;
use App\Models\Pdf;
use App\Models\Rating;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class DashboardController extends Controller
{

    public function Login(){
        return view('admin.login');
    }

    public function Dashboard(){
        if(auth()->user()->hasRole(['admin', 'manager'])){
            $query = Blog::get();
            $blogs = $query->count();
            $blogsPending = $query->where('status', 0)->count();
            $blogsApproved = $query->where('status', 1)->count();
        }elseif(auth()->user()->hasRole(['writer'])){
            $query = Blog::where('user_id', auth()->user()->id)->get();
            $blogs = $query->count();
            $blogsPending = $query->where('user_id', auth()->user()->id)->where('status', 0)->count();
            $blogsApproved = $query->where('user_id', auth()->user()->id)->where('status', 1)->count();
        }


        if(auth()->user()->hasRole(['admin', 'manager'])){
            $allBooks = Book::where('library_id', 1)->count();
            $ordersCompleted = Order::where('library_id', 1)->where('status', 1)->count();
            $ordersPending = Order::where('library_id', 1)->where('status', '!=', 1)->count();
            $libraryWallet = LibraryWallet::where('user_id', 1)->first();
            $totalEarning = $libraryWallet->total_amount;
        }elseif(auth()->user()->hasRole(['librarian'])){
            $allBooks = Book::where('user_id', auth()->user()->id)->count();
            $ordersCompleted = Order::where('library_id', auth()->user()->library->id)->where('status', 1)->count();
            $ordersPending = Order::where('library_id', auth()->user()->library->id)->where('status', '!=', 1)->count();
            $libraryWallet = LibraryWallet::where('user_id', auth()->user()->id)->first();
            $totalEarning = $libraryWallet->total_amount;
        }
            $pdf = Pdf::count();
            $categories = Category::count();
            $roles = Role::count();
            $ratings = Rating::count();

        if(auth()->user()->hasRole(['admin', 'manager'])){
            return view('admin.dashboard', compact(
                'blogs',
                'blogsPending',
                'blogsApproved',
                'allBooks',
                'ordersCompleted',
                'ordersPending',
                'totalEarning',
                'pdf',
                'categories',
                'roles',
                'ratings'
            ));
        }elseif(auth()->user()->hasRole(['writer'])){
            return view('admin.dashboard', compact(
                'blogs',
                'blogsPending',
                'blogsApproved',
            ));
        }elseif(auth()->user()->hasRole(['librarian'])){
            return view('admin.dashboard', compact(
                'allBooks',
                'ordersCompleted',
                'ordersPending',
                'totalEarning',
            ));
        }
    }

    public function Settings(){
        return view('admin.settings');
    }

}
