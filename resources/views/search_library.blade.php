@extends('layouts.master')

@section('content')



<section class="section-sm">
	<div class="container">

		<div class="row">

			<div class="col-lg-12 col-md-12">



                <div class="card mb-3" style="border-radius: 15px">
                    <div class="col-lg-12 col-md-12 align-content-center mt-4 mb-4">
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


                <div class="row">

                @foreach ($libraries as $lib)



                    <div class="col-md-4 mb-4">

                        <!-- ad listing list  -->
                        <div class="library-list">
                            <div class="row p-lg-3 p-sm-5 p-4">
                                <div class="col-lg-4">
                                    <a href="{{url('/library').'/'.$lib->id}}">
                                        <img src="{{url('/uploads/images/cover2.jpg')}}" class="img-fluid mb-4 mb-md-0" alt="">
                                    </a>
                                </div>
                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="ad-listing-content">
                                                <div>
                                                    <a href="{{url('/library').'/'.$lib->id}}" class="font-weight-bold">{{$lib->name}}</a>
                                                </div>
                                                <ul class="list-inline mt-2 mb-3">

                                                    <li class="list-inline-item"><a href="{{url('/library').'/'.$lib->id}}">
                                                        <i class="fas fa-map-marked-alt    "></i>
                                                        {{$lib->address}}</a></li>
                                                </ul>
                                                <p>
                                                    {{$lib->description}}
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                @endforeach

                </div>







                <div class="justify-content-center py-4">

                    {{$libraries->links()}}

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
