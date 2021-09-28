
@extends('layouts.master')

@section('content')




    <!--===============================
    =            Hero Area            =
    ================================-->

    <section class="hero-area bg-1 text-center overly">
        <!-- Container Start -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Header Contetnt -->
                    <div class="content-block">
                        <h1>গ্রন্থঘর</h1>
                        <p>বাংলাদেশের এক নম্বর বই বিক্রির ওয়েবসাইট, যেখানে আপনি যেকোনো ধরনের বই, <br> দ্রুত হোম ডেলিভারি পেতে পারেন</p>
                        <div class="short-popular-category-list text-center">
                            <!-- <h2>Popular Category</h2> -->
                            <!-- <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="category.html"><i class="fa fa-bed"></i> Hotel</a></li>
                                <li class="list-inline-item">
                                    <a href="category.html"><i class="fa fa-grav"></i> Fitness</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="category.html"><i class="fa fa-car"></i> Cars</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="category.html"><i class="fa fa-cutlery"></i> Restaurants</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="category.html"><i class="fa fa-coffee"></i> Cafe</a>
                                </li>
                            </ul> -->
                        </div>

                    </div>
                    <!-- Advance Search -->
                    <div class="advance-search">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-12 col-md-12 align-content-center">
                                            <form method="GET" action="{{route('search_libraries')}}">
                                                <div class="form-row">

                                                    @push('scripts')

                                                    <script>
                                                        $("#division").on('change', function(){
                                                            var sel = $("#division").find(":selected").val();
                                                            $.ajax({
                                                            type: "GET",
                                                            url: "{{ url('districts') }}?division_id=" + sel,
                                                            success: function(res) {
                                                                    if (res) {
                                                                        $("#district").empty();
                                                                        $("#district").append('<option>জেলা</option>');
                                                                        $.each(res, function(key, value) {

                                                                            $("#district").append('<option value="' + value.id + '">' + value.name +
                                                                                '</option>');
                                                                        });

                                                                        $("#city").empty();
                                                                        $("#city").append('<option>শহর</option>');

                                                                        $('select').niceSelect('update');
                                                                    }else{
                                                                        $("#district").empty();
                                                                        $("#district").append('<option>জেলা</option>');


                                                                    }
                                                                }
                                                            });
                                                        });

                                                        $("#district").on('change input', function(){
                                                            var sel = $("#district").find(":selected").val();
                                                            $.ajax({
                                                            type: "GET",
                                                            url: "{{ url('cities') }}?district_id=" + sel,
                                                            success: function(res) {
                                                                    if (res) {
                                                                        $("#city").empty();
                                                                        $("#city").append('<option>শহর</option>');
                                                                        $.each(res, function(key, value) {


                                                                            $("#city").append('<option value="' + value.id + '">' + value.name +
                                                                                '</option>');
                                                                        });
                                                                        $('select').niceSelect('update');
                                                                    }else{

                                                                        $("#city").empty();
                                                                        $("#city").append('<option>শহর</option>');

                                                                    }
                                                                }
                                                            });
                                                        });
                                                    </script>

                                                    @endpush

                                                    <div class="form-group col-md-3">
                                                        <select class="w-100 form-control mt-lg-1 mt-md-2" id="division" name="division" required>
                                                            <option>বিভাগ</option>

                                                            @foreach (App\Models\Division::get() as $division)
                                                            <option value="{{ $division->id }}">{{ $division->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="form-group col-md-3">


                                                        {{-- <div id="sel">

                                                        </div> --}}
                                                        <select class="w-100 form-control mt-lg-1 mt-md-2" id="district" name="district" required>

                                                            <option>জেলা</option>

                                                        </select>
                                                    </div>

                                                    <div class="form-group col-md-3">
                                                        <select class="w-100 form-control mt-lg-1 mt-md-2" id="city" name="city" required>
                                                            <option>শহর</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group col-md-3 align-self-center">
                                                        <button type="submit" class="btn btn-primary w-100" style="border-radius: 30px;">
                                                            <i class="fa fa-search"></i>
                                                            এখনই খুঁজুন</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Container End -->
    </section>

    <!--===================================
    =            Client Slider            =
    ====================================-->


    <!--===========================================
    =            Popular deals section            =
    ============================================-->

    <section class="popular-deals section bg-gray">
        <div class="container">


            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2>সবচেয়ে বেশি বিক্রি হওয়া বই</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, magnam.</p>
                    </div>
                </div>
            </div>



            @push('style')

            <style>



                .book{
                    background: #fff;
                    transition: transform 1s;
                    padding: 5px;
                    border-radius: 5px;
                    box-shadow: 0 1px 4px rgb(0 0 0 / 10%);

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

            <div class="row">
                @foreach (App\Models\Book::get() as $item)

                <div class="col-md-3 col-6 mb-4">


                    <a href="{{url('/book/').'/'.$item->id}}">
                      <div class="book">

                          <img class="book-cover" src="{{$item->cover_image}}" alt="" width="100%">
                          <div class="book-info">
                              <h1>
                                      {{ $item->title }}
                              </h1>
                              <h2>
                                      {{ $item->writer }}
                              </h2>

                              <p>
                                মূল্য : {{ $item->price }} ৳
                              </p>

                          </div>

                         </div>
                    </a>


                </div>

                @endforeach

            </div>


            <div class="row">
                <div class="col-md-12 mt-5">
                    <div class="section-title">
                        <h2>সবচেয়ে বেশি বিক্রি হওয়া বই</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, magnam.</p>
                    </div>
                </div>
            </div>


        </div>
    </section>




@endsection


@push('style')
<style>
    .bg-1 {
  background: url("{{url('/uploads/images/cover2.jpg')}}");
  background-size: cover;
  background-repeat: no-repeat;
}
</style>

@endpush
