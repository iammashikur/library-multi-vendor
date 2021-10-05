@extends('layouts.master')

@section('content')



<section class="section-sm">
	<div class="container">
		<div class="row">
			<div class="col-md-10 offset-md-1 col-lg-9 offset-lg-0">
				<article class="single-post">
					<h3>{{ $blog->title }}</h3>
					<ul class="list-inline">
						<li class="list-inline-item">by <a href="">{{App\Models\User::find($blog->user_id)->name}}</a></li>
						<li class="list-inline-item">{{ Carbon\Carbon::parse($blog->created_at)->format('M d Y') }}</li>
					</ul>

					<img src="{{ url('/uploads/images').'/'.$blog->image }}" alt="{{$blog->title}}">

                    {!! $blog->body !!}

                    <ul class="social-circle-icons list-inline">
				  		<li class="list-inline-item text-center"><a class="fa fa-facebook" href=""></a></li>
				  		<li class="list-inline-item text-center"><a class="fa fa-twitter" href=""></a></li>
				  		<li class="list-inline-item text-center"><a class="fa fa-google-plus" href=""></a></li>
				  		<li class="list-inline-item text-center"><a class="fa fa-pinterest-p" href=""></a></li>
				  		<li class="list-inline-item text-center"><a class="fa fa-linkedin" href=""></a></li>
				  	</ul>
				</article>


				{{-- <div class="block comment">
					<h4>Leave A Comment</h4>
					<form action="#">
						<!-- Message -->
						<div class="form-group mb-30">
						    <label for="message">Message</label>
						    <textarea class="form-control" id="message" rows="8"></textarea>
						</div>
						<div class="row">
							<div class="col-sm-12 col-md-6">
								<!-- Name -->
								<div class="form-group mb-30">
								    <label for="name">Name</label>
								    <input type="text" class="form-control" id="name">
								</div>
							</div>
							<div class="col-sm-12 col-md-6">
								<!-- Email -->
								<div class="form-group mb-30">
								    <label for="email">Email</label>
								    <input type="email" class="form-control" id="email">
								</div>
							</div>
						</div>
						<button class="btn btn-transparent">Leave Comment</button>
					</form>
				</div> --}}
			</div>
			<div class="col-md-10 offset-md-1 col-lg-3 offset-lg-0">
				<div class="sidebar">
					<!-- Search Widget -->
					<div class="widget search p-0">
						<div class="input-group">
						    <input type="text" class="form-control" id="expire" placeholder="Search...">
						    <span class="input-group-addon"><i class="fa fa-search"></i></span>
					    </div>
					</div>


					<!-- Category Widget -->
					<div class="widget category">
						<!-- Widget Header -->
						<h5 class="widget-header">Categories</h5>
						<ul class="category-list">

                            @foreach (App\Models\Category::where('type',0)->get() as $item)
                            <li><a href="{{url('blog/category'.'/'.$item->id)}}">{{$item->name}} <span class="float-right">
								<span class="badge badge-primary">{{App\Models\Blog::where('category_id', $item->id )->count()}}</span>
                            </span></a></li>


                            @endforeach




						</ul>
					</div>

					{{-- <div class="widget archive">
						<!-- Widget Header -->
						<h5 class="widget-header">Archives</h5>
						<ul class="archive-list">
							<li><a href="">January 2017</a></li>
							<li><a href="">February 2017</a></li>
							<li><a href="">March 2017</a></li>
							<li><a href="">April 2017</a></li>
							<li><a href="">May 2017</a></li>
						</ul>
					</div> --}}
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

    article {
    text-align: left;
}
</style>

@endpush
