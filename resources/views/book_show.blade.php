@extends('layouts.master')

@section('content')



<section class="section-sm">
	<div class="container">

		<div class="row">

			<div class="col-lg-12 col-md-12">


                @push('style')
                    <style>

                        .book-view{
                            background: #fff;
                            border-radius: 5px;
                            text-align: left;

                        }

                        .book-view img{
                            border: 1px solid rgb(240, 240, 240);
                            padding: 10px;
                        }

                        .book-view h1{
                            font-weight: 100;
                            font-size: 25px
                        }

                        .book-view p > strong{
                            color: rgb(86 114 249);
                            font-weight: 100;
                        }

                    </style>
                @endpush


                <div class="book-view mt-4">

                    <div class="row">

                        <div class="col-md-4 col-12">

                            <div class="p-md-5 p-4">
                                <img src="{{$book->cover_image}}" alt="" class="w-100 ">
                            </div>



                        </div>

                        <div class="col-md-5 col-12">



                            <div class="book-details mt-md-5 mt-0 pl-4 p-md-0 mb-5">
                                <h1>{{$book->title}}</h1>
                                <p>By <strong>মুহম্মদ জাফর ইকবাল</strong></p>
                                <p>Category : <i>উপন্যাস</i></p>


                                <h1>৳ {{$book->price}}</h1>


                                <a class="btn btn-primary" href="{{route('cart_add', ['id' => $book->id])}}" role="button">
                                    <i class="fas fa-cart-plus    "></i>
                                    কার্টে যোগ করুন</a>
                            </div>





                        </div>

                        <div class="col-md-3 col-12" style="display: block; background:#f7f7f7">

                        </div>


                    </div>

                </div>















				<!-- pagination -->
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
