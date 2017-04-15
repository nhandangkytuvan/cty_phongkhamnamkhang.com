@extends('layout.desktop')
@section('title')
	<title>{{ $data['term']->term_name }} - {{ $setting->web_name }}</title>
@endsection('title')
@section('keyword')
	@include('seo.seo_term',['data'=>$data])
@endsection('keyword')
@section('css')
	<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-pagination.css') }}">
	<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-sidebar.css') }}">
	<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-term.css') }}">
@endsection('css')
@section('js')
@endsection('js')
@section('content')
<div class="banner">
	<div class="container">
		<div class="home">
			<div class="row1">
				<div class="container">
					<div class="flex flex1 justify-content-between">
						<div class="flex1col1 flex justify-content-center align-items-center">
							<div class="flex">
								<div>
									<h5 class="color1">Từ khóa phổ biến:</h5>
								</div>
								<div>
									<h5 class="color2"><a href="">Sinh dục giảm sút -</a></h5>
								</div>
								<div>
									<h5 class="color2"><a href="">Thời gian quan hệ ngắn -</a></h5>
								</div>
								<div>
									<h5 class="color2"><a href="">Xuất tinh nhanh</a></h5>
								</div>
							</div>
						</div>
						<div class="flex1col2 flex justify-content-center align-items-center">
							<div class="flex">
								<div class="flex justify-content-center align-items-center">
									<i class="bg1 dis-inline-block"></i>
								</div>
								<div class="flex justify-content-center align-items-center">
									<h5>Tìm kiếm nhiều hơn</h5>
								</div>
								<div>
									<form action="">
										<div class="flex justify-content-center align-items-center">
											<div class="flex">
												<div>
													<input type="text" placeholder="Nhập từ khóa">
												</div>
												<div>
													<button type="submit" class="text-center"><i class="fa fa-search"></i></button>
												</div>
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
	</div>
</div>
<main class="container term">
	<div class="flex flex0 justify-content-between">
		<div class="flex0col1">
			<div class="flex flex1 justify-content-between">
				<div class="flex1col1">
					<h3>
						<a href="{{ MyAPI::getUrlTermObj($data['term']) }}">
							@if($data['term']->term_avatar)
								<img src="{{ asset('public/img/'.$data['term']->term_avatar) }}" class="center-block">
							@else
								<img src="{{ asset('public/images/desktop/term-3.png') }}" class="center-block">
							@endif
						</a>
					</h3>
				</div>
				<div class="flex1col2 flex flex-wrap-wrap align-content-between">
					<div class="term-name flex align-items-center">
						<div class="flex3 flex">
							<div class="flex3col1">
								<h1 class="text-uppercase">{{ $data['term']->term_name }}</h1>
							</div>
							<div class="flex3col2">
								
							</div>
						</div>
					</div>
					<div class="post-first">
						@php 
							$post_first = $data['term']->post()->first();
						@endphp
						<h2 class="text-uppercase text-center">{{ $post_first->post_name }}</h2>
						<p>{{ MyAPI::getLimitWord($post_first->post_description,40) }} <a href="">Chi tiết</a></p>
					</div>
					<div class="flex flex2 flex-wrap-wrap justify-content-between align-content-between">
						<div class="flex2col1 flex align-items-center justify-content-center">
							<h5>
								<a href="#">Triệu chứng</a>
							</h5>
						</div>
						<div class="flex2col1 flex align-items-center justify-content-center">
							<h5>
								<a href="#">
									Nguyên nhân
								</a>
							</h5>
						</div>
						<div class="flex2col1 flex align-items-center justify-content-center">
							<h5>
								<a href="#">Nguy hại</a>
							</h5>
						</div>
						<div class="flex2col1 flex align-items-center justify-content-center">
							<h5>
								<a href="#">Điều trị</a>
							</h5>
						</div>
						<div class="flex2col1 flex align-items-center justify-content-center">
							<h5>
								<a href="#">Chi phí</a>
							</h5>
						</div>
						<div class="flex2col1 flex align-items-center justify-content-center">
							<h5>
								<a href="#">Phòng khám</a>
							</h5>
						</div>
					</div>
				</div>
			</div>
			<div class="posts">
				@php $posts = $data['term']->post()->paginate(7); @endphp
				@foreach($posts as $post)
				<div class="post">
					<div class="flex flex4 justify-content-between">
						<div class="flex4col1 flex align-items-center">
							<h3><a href="{{ MyAPI::getUrlPostObj($post) }}">{{ $post->post_name }}</a></h3>
						</div>	
						<div class="flex4col2 flex align-items-center">
							<div class="flex flex5 justify-content-between">
								<div class="flex5col1 flex align-items-center justify-content-center">
									<a href="tel:1800 - 6181"><img src="{{ asset('public/images/desktop/term-5.png') }}" class="center-block"></a>
								</div>
								<div class="flex5col2 flex align-items-center justify-content-center">
									<h5><a href="">1800 - 6181</a></h5>
								</div>
								<div class="flex5col3 flex align-items-center justify-content-center">
									<h5><a href="">Tư vấn</a></h5>
								</div>
							</div>
						</div>
					</div>
					<p>
						{{ MyAPI::getLimitWord($post->post_description,50) }}
						<a href="{{ MyAPI::getUrlPostObj($post) }}">Chi tiết</a>
					</p>
				</div>
				@endforeach
			</div>
			<div class="my_pagination">
				{{ $posts->links() }}
			</div>
			<div>
				<h5><a href=""><img src="{{ asset('public/images/desktop/term-6.png') }}" class="center-block"></a></h5>
			</div>
		</div>
		<div class="flex0col2">
			@include('web.desktop.slidebar')
		</div>
	</div>
</main>
@endsection('content')