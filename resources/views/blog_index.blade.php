@extends('layouts.master')

@section('content')



<section class="section-sm">
	<div class="container">
		<div class="row">
			<div class="col-md-10 offset-md-1 col-lg-9 offset-lg-0">
				<!-- Article 01 -->



                <div class="row">


                    @foreach ($blogs as $blog)


                    <div class="col-md-6">
                        <article>
                            <!-- Post Image -->
                            <div class="image">
                                <img src="{{ url('/uploads/images').'/'.$blog->image }}" alt="article-01">
                            </div>
                            <!-- Post Title -->
                            <h3>{{$blog->title}}</h3>
                            <ul class="list-inline">
                                <li class="list-inline-item">by <a href="">{{App\Models\User::find($blog->user_id)->name}}</a></li>
                                <li class="list-inline-item">{{ Carbon\Carbon::parse($blog->created_at)->format('M d Y') }}</li>
                            </ul>
                            <!-- Post Description -->
                            <p class="">{!! Str::words($blog->body, '20'); !!}</p>
                            <!-- Read more button -->
                            <a href="{{ url('/blog/').'/'.$blog->id }}" class="btn btn-transparent">Read More</a>
                        </article>
                    </div>

                    @endforeach

                </div>



				{{$blogs->links()}}




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
