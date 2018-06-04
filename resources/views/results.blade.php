<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>{{$query}} - {{$settings->site_name}}</title>

	@extends('layouts.frontend')


	@section('content')

	<div class="slider display-table center-text">
		<h1 class="title display-table-cell"><b>Search results: {{$query}}</b></h1>
	</div><!-- slider -->

	<section class="blog-area section">
		<div class="container">

			<div class="row">

				@if($posts->count() > 0)

					@foreach($posts as $post)
					<div class="col-lg-4 col-md-6">
						<div class="card h-100">
							<div class="single-post post-style-1">

								<div class="blog-image"><img src="{{$post->featured_url}}" alt="{{$post->title}}"></div>

								<a class="avatar" href="#"><img src="{{asset('app/images/icons8-team-355979.jpg')}}" alt="Profile Image"></a>

								<div class="blog-info">

									<h4 class="title"><a href="{{route('post.single', ['slug' => $post->slug])}}"><b>{{$post->title}}</b></a></h4>

									<ul class="post-footer">
										<li><a href="#"><i class="ion-calendar"></i>{{$post->created_at->toFormattedDateString()}}</a></li>
	                                    <li><a href="{{route('category.single', ['id' => $post->category->id])}}"><i class="ion-pricetag"></i>{{$post->category->name}}</a></li>
	                                    <li><a href="#"><i class="ion-chatbubble"></i>6</a></li>
									</ul>

								</div><!-- blog-info -->
							</div><!-- single-post -->
						</div><!-- card -->
					</div><!-- col-lg-4 col-md-6 -->

					<!-- <a class="load-more-btn" href="#"><b>LOAD MORE</b></a> -->

					@endforeach

				@else

				<div class="col-lg-4">
						<!-- <h1 class="text-center" style="">No results found!</h1> -->
					</div>
					<div class="col-lg-4">
						<h2 class="text-center" style="">No results found!</h2>
					</div>

				@endif

			</div><!-- row -->

			

		</div><!-- container -->
	</section><!-- section -->


@endsection