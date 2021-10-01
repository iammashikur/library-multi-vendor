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
                    <img src="{{url('/').'/'.$library->banner}}" alt="" class="cover w-100">
                    <img class="logo" src="data:image/jpeg;base64,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" alt="">
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
                        <div class="input-group mt-4">
                            <input type="text" class="form-control bg-white search-input" placeholder="এই লাইব্রেরিতে অনুসন্ধান করুন !">
                            <div class="input-group-append">
                            <button class="btn btn-secondary search-btn" type="button">
                                <i class="fas fa-search"></i>
                            </button>
                            </div>
                        </div>

                        <div class="widget price-range w-100 mt-4">
                            <h4 class="widget-header">Price Range</h4>
                            <div class="block">
                                                <input class="range-track w-100" type="text" data-slider-min="0" data-slider-max="5000" data-slider-step="5"
                                                data-slider-value="[0,5000]">
                                        <div class="d-flex justify-content-between mt-2">
                                                <span class="value">$10 - $5000</span>
                                        </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-9 mt-4 mb-4">
                        <div class="row">


                            @foreach (App\Models\Book::where('library_id', $library->id)->get() as $item)

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
                    </div>
                </div>






















            </div>

        </div>
	</div>
</section>

@endsection

@push('style')

<style>
    .img-fluid{
        border-radius: 10px;
    }
</style>

@endpush
