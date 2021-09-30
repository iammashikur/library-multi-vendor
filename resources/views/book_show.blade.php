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



                                <form action="{{route('cart_add')}}" method="POST">

                                    @csrf
                                    <input type="hidden" value="{{$book->id}}" name="book_id">
                                    <input type="hidden" value="{{$book->library_id}}" name="library_id">

                                    <small class="mb-1 mt-4">কোয়ান্টিটি </small>
                                    <div class="mb-4">


                                        <span class="input-number-decrement">–</span>
                                            <input class="input-number" name="quantity" type="text" value="1" min="1" max="10">
                                        <span class="input-number-increment">+</span>

                                    </div>

                                <button class="btn btn-primary text-white" type="submit">
                                    <i class="fas fa-cart-plus    "></i>
                                    কার্টে যোগ করুন</button>


                                </form>


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

.input-number {
width: 80px;
padding: 0 12px;
vertical-align: top;
text-align: center;
outline: none;
}

.input-number,
.input-number-decrement,
.input-number-increment {
border: 1px solid #ccc;
height: 40px;
user-select: none;
}

.input-number-decrement,
.input-number-increment {
display: inline-block;
width: 30px;
line-height: 38px;
background: #f1f1f1;
color: #444;
text-align: center;
font-weight: bold;
cursor: pointer;
}
.input-number-decrement:active,
.input-number-increment:active {
background: #ddd;
}

.input-number-decrement {
border-right: none;
border-radius: 4px 0 0 4px;
}

.input-number-increment {
border-left: none;
border-radius: 0 4px 4px 0;
}
</style>

@endpush


@push('scripts')

<script>
    (function() {

 window.inputNumber = function(el) {

   var min = el.attr('min') || false;
   var max = el.attr('max') || false;

   var els = {};

   els.dec = el.prev();
   els.inc = el.next();

   el.each(function() {
     init($(this));
   });

   function init(el) {

     els.dec.on('click', decrement);
     els.inc.on('click', increment);

     function decrement() {
       var value = el[0].value;
       value--;
       if(!min || value >= min) {
         el[0].value = value;
       }
     }

     function increment() {
       var value = el[0].value;
       value++;
       if(!max || value <= max) {
         el[0].value = value++;
       }
     }
   }
 }
})();

inputNumber($('.input-number'));
</script>

@endpush
