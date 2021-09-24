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

                                <div class="form-group col-md-3">
                                    <select class="w-100 form-control mt-lg-1 mt-md-2">
                                        <option>District</option>
                                        <option value="1">Top rated</option>
                                        <option value="2">Lowest Price</option>
                                        <option value="4">Highest Price</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-3">
                                    <select class="w-100 form-control mt-lg-1 mt-md-2">
                                        <option>Division</option>
                                        <option value="1">Top rated</option>
                                        <option value="2">Lowest Price</option>
                                        <option value="4">Highest Price</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-3">
                                    <select class="w-100 form-control mt-lg-1 mt-md-2">
                                        <option>City</option>
                                        <option value="1">Top rated</option>
                                        <option value="2">Lowest Price</option>
                                        <option value="4">Highest Price</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-3 align-self-center">
                                    <button type="submit" class="btn btn-primary w-100" style="border-radius: 30px;">

                                        <i class="fa fa-search    "></i>

                                        Search Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


                <div class="row">

                @for ($i=1 ; $i <= 100; $i++)



                    <div class="col-md-4 mb-4">
                        <!-- ad listing list  -->
                        <div class="library-list">
                            <div class="row p-lg-3 p-sm-5 p-4">
                                <div class="col-lg-4">
                                    <a href="single.html">
                                        <img src="{{url('/uploads/images/cover2.jpg')}}" class="img-fluid mb-4 mb-md-0" alt="">
                                    </a>
                                </div>
                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="ad-listing-content">
                                                <div>
                                                    <a href="single.html" class="font-weight-bold">ইসলামিয়া লাইব্রেরী</a>
                                                </div>
                                                <ul class="list-inline mt-2 mb-3">

                                                    <li class="list-inline-item"><a href="">
                                                        <i class="fas fa-map-marked-alt    "></i>
                                                        Y, 9 নূরজাহান সড়ক, ঢাকা 1207</a></li>
                                                </ul>
                                                <p>
                                                    ইসলামিয়া লাইব্রেরী শুধুমাত্র মোহাম্মদপুরের বাসিন্দাদের জন্য নয়, এটি অন্যান্য স্থানেও পরিচিত।
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                @endfor

                </div>










				<!-- pagination -->
				<div class="pagination justify-content-center py-4">
					<nav aria-label="Page navigation example">
						<ul class="pagination">
							<li class="page-item">
								<a class="page-link" href="#" aria-label="Previous">
									<span aria-hidden="true">&laquo;</span>
									<span class="sr-only">Previous</span>
								</a>
							</li>
							<li class="page-item"><a class="page-link" href="#">1</a></li>
							<li class="page-item active"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item">
								<a class="page-link" href="#" aria-label="Next">
									<span aria-hidden="true">&raquo;</span>
									<span class="sr-only">Next</span>
								</a>
							</li>
						</ul>
					</nav>
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
