@extends('layouts.master')

@section('content')



<section class="section-sm">
	<div class="container">

		<div class="row">

            <div class="col-12">




                @push('style')

                <style>

                    .lib-header{
                        margin-bottom: 100px;
                    }

                    .lib-header .cover{

                        border-radius: 10px;
                        height: 200px;
                        object-fit: cover;
                    }

                    .lib-header .logo{
                        height: 160px;
                        width: 160px;
                        display: block;
                        position: absolute;
                        top: 110px;
                        left: 0;
                        right: 0;
                        margin-left: auto;
                        margin-right: auto;
                        border-radius: 50%;
                        border: 4px solid #ffffff;
                        box-shadow: 0 1px 4px rgb(0 0 0 / 40%);


                    }

                    .lib-info{
                        margin-bottom: 20px;
                    }


                    .lib-info h1{

                        font-weight: 700;
                        margin: 10px 0;
                        color: black;
                        font-size: 40px;
                    }

                    .lib-info h2{
                        font-weight: 500;
                        margin: 10px 0;
                        color: black;
                        font-size: 15px;
                    }

                    .search-btn{
                        padding: 10px !important;
                        width: 50px !important;
                        border: 1px solid #e6e7e8;
                        box-shadow: 0 1px 4px rgb(0 0 0 / 40%);
                    }

                    .search-input{
                        border-radius: 25px 0px 0px 25px;
                        font-size: 14px;
                        box-shadow: 0 1px 4px rgb(0 0 0 / 40%);
                    }

                    .book{
                        background: #fff;
                        transition: transform 1s;
                        padding: 5px;
                        border-radius: 5px;
                        box-shadow: 0 1px 4px rgb(0 0 0 / 40%);

                    }

                    .book:hover{
                        transform: perspective(800px) rotateY(20deg);
                        transition: transform 1s scale(1.1);
                        cursor: pointer;


                    }

                    .book-cover{

                    }

                    .book h1{

                        margin-top: 10px;
                        font-size: 20px;
                        font-weight: 100;
                    }

                    .book h2{
                        font-size: 16px
                    }

                </style>

                @endpush

                <div class="lib-header">
                    <img src="{{url('/uploads/images/').'/'.App\Models\Library::find($library->id)->banner}}" alt="" class="cover w-100">
                    <img class="logo" src="{{url('/uploads/images/').'/'.App\Models\Library::find($library->id)->logo}}" alt="">
                </div>


                <div class="lib-info">
                    <h1>
                        {{$library->name}}
                    </h1>
                    <h2>
                        {{$library->address}}
                    </h2>

                </div>





                <div class="row">
                    <div class="col-md-3 mt-4 mb-4">

                    <!-- Another variation with a button -->

                    <form action="{{url('library/'.Request::segment(2).'/search')}}">
                        <div class="input-group mt-4">
                            <input name="query" type="text" class="form-control bg-white search-input" placeholder="এই লাইব্রেরিতে অনুসন্ধান করুন !">
                            <div class="input-group-append">
                            <button class="btn btn-secondary search-btn" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                            </div>
                        </div>
                    </form>


                        <div class="widget price-range w-100 mt-4">

                            <h4 class="widget-header">মূল্য পরিসীমা</h4>

                            <form action="">

                                <div class="block">
                                    @php
                                        if(isset($_GET["range"])){

                                            $ar = explode(',', $_GET["range"]);

                                            $start = $ar[0];
                                            $end   = $ar[1];

                                        }
                                        else{

                                            $start = 0;
                                            $end   = 5000;
                                        }
                                    @endphp
                                     <input name="range" class="range-track w-100" type="text" data-slider-min="0" data-slider-max="5000" data-slider-step="5"
                                                    data-slider-value="[<?= $start ?>,<?= $end ?>]">
                                            <div class="d-flex justify-content-between mt-2">
                                                    <span class="value">৳<?= $start ?> - ৳<?= $end ?></span>
                                            </div>


                                            <center>
                                                <button class="btn btn-sm btn-primary mt-4">দেখান</button>
                                            </center>


                                </div>



                            </form>


                        </div>

                        <!-- Category Widget -->
					<div class="widget category">
						<!-- Widget Header -->
						<h5 class="widget-header">বইয়ের বিভাগ</h5>
						<ul class="category-list">

                            @foreach (App\Models\Category::where('type',1)->get() as $item)
                            <li><a href="{{url('blog/category'.'/'.$item->id)}}">{{$item->name}} <span class="float-right">
								<span class="badge badge-primary">{{App\Models\Book::where('category_id', $item->id )->count()}}</span>
                            </span></a></li>


                            @endforeach




						</ul>
					</div>

                    </div>
                    <div class="col-md-9 mt-4 mb-4">
                        <div class="row">
                            @php
                                if(isset($_GET["query"])){
                                    $data = App\Models\Book::where('library_id', $library->id)
                                    ->where('title', 'LIKE', "%{$_GET['query']}%")
                                    ->paginate('10');
                                }
                                elseif(isset($_GET["range"])){


                                    $arr = $_GET["range"];
                                    $arr = explode(',', $arr);


                                    $data = App\Models\Book::where('library_id', $library->id)
                                    ->whereBetween('price', $arr)
                                    ->paginate(10)->appends(request()->query());
                                }
                                else {

                                    $data = App\Models\Book::where('library_id', $library->id)->paginate('10');


                                }
                            @endphp

                            @foreach ($data as $item)

                            <div class="col-md-3 col-6 mt-4 mb-3">
                                <a href="{{url('/book/1')}}">
                                  <div class="book">

                                      <img class="book-cover" src="{{url('/uploads/images').'/'.$item->cover_image}}" alt="" width="100%">
                                      <div class="book-info">
                                          <h1>
                                                  {{$item->title}}
                                          </h1>
                                          <h2>
                                                {{$item->writer}}
                                          </h2>

                                          <p>
                                              Price : {{$item->price}}
                                          </p>

                                      </div>

                                     </div>
                                </a>

                             </div>

                        @endforeach




                       </div>


                       <div class="mt-4">
                        {{$data->links()}}
                       </div>


                    </div>
                </div>






















            </div>

        </div>
	</div>
</section>

@endsection

@push('style')

<style>

    .btn-sm{
        font-size: 12px;
        letter-spacing: 1px;
        display: inline-block;
        padding: 5px 30px;
        border-radius: 16px;
    }
    .img-fluid{
        border-radius: 10px;
    }
</style>

@endpush
