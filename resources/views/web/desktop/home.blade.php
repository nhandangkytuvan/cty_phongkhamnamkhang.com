@extends('layout.desktop2')
@section('title')
	<title>{{ $setting->web_name }}</title>
@endsection('title')
@section('keyword')
	@include('seo.seo_home')
@endsection('keyword')
@section('css')
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/hover/css/hover.css') }}">
	<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-home.css') }}">
@endsection('css')
@section('content')
	<div class="baner">
		<div class="slick-home">
			<div>
				<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
					<img src="{{ asset('public/images/desktop/home-1.png') }}" alt="" class="center-block">
				</a>
			</div>
		</div>
		<script>
			$('.slick-home').slick({
			  	slidesToShow: 1,
			  	slidesToScroll: 1,
			  	autoplay: true,
			  	autoplaySpeed: 2000,
			});	
		</script>
	</div>
	<main class="home">
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
		<div class="row2">
			<div class="container">
				<div class="title1 container">
					<div class="flex flex1">
						<div><h2 class="text-uppercase color1">về chúng tôi</h2></div>
						<div><h2 class="text-uppercase color2">about us</h2></div>
					</div>
					<h5>Sức khỏe của bạn là món quà tuyệt với nhất đối với chúng tôi</h5>
				</div>
				<div class="flex flex2 justify-content-between">
					<div class="flex2col1">
						<p class="text-justify">
							&nbsp;&nbsp;&nbsp;&nbsp;Phòng khám Nam Khang Hà Nội là 1 trong những cơ sở y tế hàng đầu chuyên điều trị các bệnh nam khoa tại Hà Nội. Phòng khám chuyên điều trị tất cả các bệnh: viêm tuyến tiền liệt, tăng sinh tuyến tiền liệt, u nang tuyến tiền liệt, phì đại tuyến tiền liệt, liệt dương, xuất tinh sớm, yếu sinh lý, rối loạn cương dương, dài bao quy đầu, hẹp bao quy đầu, kéo dài dương vật, tăng kích thước dương vật, viêm quy đầu, viêm niệu đạo, viêm bàng quang, viêm tinh hoàn, tinh trùng ít, không có tinh trùng, xuất tinh ra máu, tinh trùng yếu, sùi mào gà, bệnh lậu, giang mai, mụn rộp sinh dục.
						</p>
						<p>
   							&nbsp;&nbsp;&nbsp;&nbsp;Phòng khám đạt chuẩn y tế JCI quốc tế, tại đây hội tụ đội ngũ chuyên gia hàng đầu trong và ngoài nước,
   							với chất lượng dịch vụ tốt nhất đạt tiêu chuẩn 5 sao. Đây được xem là phòng khám điều trị các bệnh nam khoa đỉnh cao số 1 tại Hà 	Nội. Uy tín, trách nhiệm sức khỏe người bệnh luôn được đặt lên hàng đầu. 
						</p>
					</div>
					<div class="flex2col2">
						<img src="{{ asset('public/images/desktop/sua-1.png') }}" class="center-block">
					</div>
				</div>
				<div class="">
					<a href="{{ url('ve-chung-toi') }}" class="">TÌM HIỂU CHI TIẾT</a>
				</div>
			</div>
		</div>
		<div class="row3">
			<div class="container">
				<div class="global2">
					<div class="flex">
						<div class="col1"><i class="bg1"></i></div>
						<div class="col2">N</div>
						<div class="col3 flex justify-content-center align-items-center">
							<div>
								<h2 class="text-uppercase">Đội ngũ y bác sỹ</h2>
								<h3>anjian doctor</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="flex flex2 justify-content-between">
					<div class="flex2col1">
						<h3 class="text-center">Đội ngũ bác sỹ khám chữa bệnh nam khoa<br>chuyên nghiệp tại Hà Nội</h3>
						<p class="text-justify">
							Phòng khám hội tụ đội ngũ y bác sỹ chuyên nghiệp, tích lũy từ 20 đến 30 năm kinh nghiệm thăm khám lâm sàng, trong đó có những bác sỹ nước ngoài, vô cùng chuyên nghiệp trong lĩnh vực điều trị nam khoa.
						</p>
					</div>
					<div class="flex2col1">
						<h3 class="text-center">Có kinh nghiệm phong phú trong điều trị<br>các bệnh nam khoa</h3>
						<p class="text-justify">
							Dựa vào đội ngũ y bác sỹ nhiều năm kinh nghiệm lâm sàng, đã điều trị thành công cho rất nhiều ca bệnh phức tạp. Hợp tác với nhiều bác sỹ chuyên khoa, đã cứu chữa khỏi cho rất nhiều bệnh nhân mắc bệnh nguy hiểm.
						</p>
					</div>
				</div>
				<div class="img1">
					<img src="{{ asset('public/images/desktop/home-4.png') }}" class="center-block">
				</div>
			</div>
		</div>
		<div class="row4">
			<div class="container">
				<div class="global2">
					<div class="flex">
						<div class="col1"><i class="bg1"></i></div>
						<div class="col2">A</div>
						<div class="col3 flex justify-content-center align-items-center">
							<div>
								<h2 class="text-uppercase">Kỹ thuật nam khoa</h2>
								<h3>ndrology technology</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="flex flex2 justify-content-between">
					<div class="flex2col1 active">
						<div class="">
							<div class="img1">
								<h3><a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en"><img src="{{ asset('public/images/desktop/home-5.png') }}" class="center-block"></a></h3>
							</div>
							<div class="img2" style="display: none;">
								<h3><a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en"><img src="{{ asset('public/images/desktop/home-9.png') }}" class="center-block"></a></h3>
							</div>
						</div>
					</div>
					<div class="flex2col1">
						<div class="">
							<div class="img1">
								<h3><a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en"><img src="{{ asset('public/images/desktop/home-6.png') }}" class="center-block"></a></h3>
							</div>
							<div class="img2" style="display: none;">
								<h3><a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en"><img src="{{ asset('public/images/desktop/home-10.png') }}" class="center-block"></a></h3>
							</div>
						</div>
					</div>
					<div class="flex2col1">
						<div class="">
							<div class="img1">
								<h3><a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en"><img src="{{ asset('public/images/desktop/home-7.png') }}" class="center-block"></a></h3>
							</div>
							<div class="img2" style="display: none;">
								<h3><a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en"><img src="{{ asset('public/images/desktop/home-11.png') }}" class="center-block"></a></h3>
							</div>
						</div>
					</div>
					<div class="flex2col1">
						<div class="">
							<div class="img1">
								<h3><a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en"><img src="{{ asset('public/images/desktop/home-8.png') }}" class="center-block"></a></h3>
							</div>
							<div class="img2" style="display: none;">
								<h3><a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en"><img src="{{ asset('public/images/desktop/home-12.png') }}" class="center-block"></a></h3>
							</div>
						</div>
					</div>
				</div>
				<div class="flex flex3 justify-content-between">
					<div class="flex3col1 flex align-items-center justify-content-center">
						<div class="">
							<h3 class="text-uppercase text-center">Nhiều kỹ thuật hơn</h3>
							<h4 class="text-uppercase text-center">MORE TECHNOLOGY</h4>
						</div>
					</div>
					<div class="flex3col2">
						<div>
							<div class="panel-heading flex justify-content-center align-items-center">
								<h4 class="text-center">Thủ thuật chỉnh hình cơ quan sinh dục</h4>
							</div>
							<div class="panel-body flex">
								<div class="flex justify-content-center align-items-center">
									<div>
										<h5><i class="bg1"></i><a href="{{ MyAPI::getUrlPostID(3) }}">Thủ thuật kéo dài dương vật định vị CF</a><i class="fa fa-play-circle"></i></h5>
										<h5><i class="bg1"></i><a href="{{ MyAPI::getUrlPostID(10) }}">Thủ thuật cắt bao quy đầu Hàn Quốc</a><i class="fa fa-play-circle"></i></h5>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="flex3col2">
						<div>
							<div class="panel-heading flex justify-content-center align-items-center">
								<h4 class="text-center">Điều trị bệnh lý tuyến tiền liệt</h4>
							</div>
							<div class="panel-body flex">
								<div class="flex justify-content-center align-items-center">
									<div>
										<h5><i class="bg1"></i><a href="{{ MyAPI::getUrlPostID(11) }}">Kỹ thuật can thiệp cắt bỏ tuyến tiền liệt</a><i class="fa fa-play-circle"></i></h5>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="flex3col2">
						<div class="flex flex4">
							<div class="flex4col1 flex justify-content-start align-items-center">
								<h4>Điều trị vô sinh nam giới</h4>
							</div>
							<div class="flex4col2 flex justify-content-start align-items-center">
								<h5><i class="bg1"></i><a href="{{ MyAPI::getUrlPostID(4) }}">Liệu pháp lập thể 4 hạng mục</a><i class="fa fa-play-circle"></i></h5>
							</div>
						</div>
						<div class="flex flex4">
							<div class="flex4col1 flex justify-content-start align-items-center">
								<h4>Điều trị bệnh lậu</h4>
							</div>
							<div class="flex4col2 flex justify-content-start align-items-center">
								<h5><i class="bg1"></i><a href="{{ MyAPI::getUrlPostID(5) }}">Liệu pháp DHA</a><i class="fa fa-play-circle"></i></h5>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row5">
			<div class="container">
				<div class="global2">
					<div class="flex">
						<div class="col1"><i class="bg1"></i></div>
						<div class="col2">S</div>
						<div class="col3 flex justify-content-center align-items-center">
							<div>
								<h2 class="text-uppercase">Trung tâm phục hồi chức năng sinh lý</h2>
								<h3>exual function rehabilitation center</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="flex flex2 justify-content-between">
					<div class="flex2col1">
						<div>
							<h4><a href=""><img src="{{ asset('public/images/desktop/home-13.gif') }}" class="center-block" style="width: 100%;"></a></h4>
						</div>
						<div class="flex flex3 flex-wrap-wrap justify-content-between align-content-between">
							<div class="flex3col1 flex align-items-center">
								<div class="flex">
									<div class="flex justify-content-center align-items-center">
										<h5><i></i></h5>
									</div>
									<div class="flex justify-content-center align-items-center">
										<h5 class="text-center">
											<a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en">Hỏi nguyên nhân gây bệnh</a>
										</h5>
									</div>
								</div>
							</div>
							<div class="flex3col1 flex align-items-center">
								<div class="flex">
									<div class="flex justify-content-center align-items-center">
										<h5><i></i></h5>
									</div>
									<div class="flex justify-content-center align-items-center">
										<h5 class="text-center">
											<a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en">Hỏi triệu chứng</a>
										</h5>
									</div>
								</div>
							</div>
							<div class="flex3col1 flex align-items-center">
								<div class="flex">
									<div class="flex justify-content-center align-items-center">
										<h5><i></i></h5>
									</div>
									<div class="flex justify-content-center align-items-center">
										<h5 class="text-center">
											<a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en">Hỏi chi phí</a>
										</h5>
									</div>
								</div>
							</div>
							<div class="flex3col1 flex align-items-center">
								<div class="flex">
									<div class="flex justify-content-center align-items-center">
										<h5><i></i></h5>
									</div>
									<div class="flex justify-content-center align-items-center">
										<h5 class="text-center">
											<a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en">Hỏi nguy hại</a>
										</h5>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="flex2col2 flex align-content-between flex-wrap-wrap">
						<div class="tabs-buttons-1 flex flex4 justify-content-between width-100">
							<div class="flex4col1">
								<div><h4 class="text-center"><a class="active flex align-items-center justify-content-center">Liệt dương</a></h4></div>
							</div>
							<div class="flex4col1">
								<div><h4 class="text-center"><a class="flex align-items-center justify-content-center">Xuất tinh sớm</a></h4></div>
							</div>
							<div class="flex4col1">
								<div><h4 class="text-center"><a  class="flex align-items-center justify-content-center">Rối loạn cương dương</a></h4></div>
							</div>
							<div class="flex4col1">
								<div><h4 class="text-center"><a class="flex align-items-center justify-content-center">Yếu sinh lý</a></h4></div>
							</div>
						</div>
						<div class="tabs-contents-1 width-100">
							<div class="active">
								<div class="flex flex5 justify-content-between">
									<div class="flex5col1 flex flex-wrap-wrap align-content-between">
										@php
											$term = MyAPI::getTermID(8);
											$posts =  $term->post()->limit(6)->latest()->get();
										@endphp
										@if(count($posts))
										<div class="width-100">
											<h2 class="text-uppercase text-center">
												<a href="{{ MyAPI::getUrlPostObj($posts[0]) }}">{{ $posts[0]->post_name }}</a>
											</h2>
										</div>
										<div class="width-100">
											<p class="text-justify">
												{{ MyAPI::getLimitWord($posts[0]->post_description,30) }}... 
												<a href="{{ MyAPI::getUrlPostObj($posts[0]) }}">chi tiết</a>
											</p>
										</div>
										@php unset($posts[0]) ; @endphp
										@endif
										<div class="width-100">
											<ul>
												@foreach($posts as $post)
												<li><h5><i></i><a href="{{ MyAPI::getUrlPostObj($post) }}">{{ $post->post_name }}</a></h5></li>
												@endforeach
											</ul>
										</div>
										<div class="flex flex6 width-100">
											<div class="flex6col1 flex align-items-center justify-content-center">
												<h5 class="text-center"><a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en">Cương cứng kém</a></h5>
											</div>
											<div class="flex6col1 flex align-items-center justify-content-center">
												<h5 class="text-center"><a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en">Không thể cương cứng được</a></h5>
											</div>
											<div class="flex6col1 flex align-items-center justify-content-center">
												<h5 class="text-center"><a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en">Cương cứng khó khăn</a></h5>
											</div>
											<div class="flex6col1 flex align-items-center justify-content-center">
												<h5 class="text-center"><a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en">Quy đầu không cương cứng</a></h5>
											</div>
										</div>
									</div>
									<div class="flex5col2 flex flex-wrap-wrap align-content-between">
										<div class="width-100"><h5 class="text-center"><i></i>Bài viết được quan tâm</h5></div>
										<div class="width-100">
											<ul>
												@php 
													$posts = $term->post()->limit(8)->get();
												@endphp
												@foreach($posts as $post)
												<li>
													<h5><i></i><a href="{{ MyAPI::getUrlPostObj($post) }}">{{ $post->post_name }}</a></h5>
												</li>
												@endforeach
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div>
								<div class="flex flex5 justify-content-between">
									<div class="flex5col1 flex flex-wrap-wrap align-content-between">
										@php
											$term = MyAPI::getTermID(10);
											$posts =  $term->post()->limit(6)->latest()->get();
										@endphp
										@if(count($posts))
										<div class="width-100">
											<h2 class="text-uppercase text-center">
												<a href="{{ MyAPI::getUrlPostObj($posts[0]) }}">{{ $posts[0]->post_name }}</a>
											</h2>
										</div>
										<div class="width-100">
											<p class="text-justify">
												{{ MyAPI::getLimitWord($posts[0]->post_description,30) }}... 
												<a href="{{ MyAPI::getUrlPostObj($posts[0]) }}">chi tiết</a>
											</p>
										</div>
										@php unset($posts[0]) ; @endphp
										@endif
										<div class="width-100">
											<ul>
												@foreach($posts as $post)
												<li><h5><i></i><a href="{{ MyAPI::getUrlPostObj($post) }}">{{ $post->post_name }}</a></h5></li>
												@endforeach
											</ul>
										</div>
										<div class="flex flex6 width-100">
											<div class="flex6col1 flex align-items-center justify-content-center">
												<h5 class="text-center"><a href="">Quy đầu mẫn cảm</a></h5>
											</div>
											<div class="flex6col1 flex align-items-center justify-content-center">
												<h5 class="text-center"><a href="">xuất tinh sớm</a></h5>
											</div>
											<div class="flex6col1 flex align-items-center justify-content-center">
												<h5 class="text-center"><a href="">quan hệ thời gian ngắn</a></h5>
											</div>
										</div>
									</div>
									<div class="flex5col2 flex flex-wrap-wrap align-content-between">
										<div class="width-100"><h5 class="text-center"><i></i>Bài viết được quan tâm</h5></div>
										<div class="width-100">
											<ul>
												@php 
													$posts = $term->post()->limit(8)->get();
												@endphp
												@foreach($posts as $post)
												<li>
													<h5><i></i><a href="{{ MyAPI::getUrlPostObj($post) }}">{{ $post->post_name }}</a></h5>
												</li>
												@endforeach
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div>
								<div class="flex flex5 justify-content-between">
									<div class="flex5col1 flex flex-wrap-wrap align-content-between">
										@php
											$term = MyAPI::getTermID(9);
											$posts =  $term->post()->limit(6)->latest()->get();
										@endphp
										@if(count($posts))
										<div class="width-100">
											<h2 class="text-uppercase text-center">
												<a href="{{ MyAPI::getUrlPostObj($posts[0]) }}">{{ $posts[0]->post_name }}</a>
											</h2>
										</div>
										<div class="width-100">
											<p class="text-justify">
												{{ MyAPI::getLimitWord($posts[0]->post_description,30) }}... 
												<a href="{{ MyAPI::getUrlPostObj($posts[0]) }}">chi tiết</a>
											</p>
										</div>
										@php unset($posts[0]) ; @endphp
										@endif
										<div class="width-100">
											<ul>
												@foreach($posts as $post)
												<li><h5><i></i><a href="{{ MyAPI::getUrlPostObj($post) }}">{{ $post->post_name }}</a></h5></li>
												@endforeach
											</ul>
										</div>
										<div class="flex flex6 width-100">
											<div class="flex6col1 flex align-items-center justify-content-center">
												<h5 class="text-center"><a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en">Liệt dương</a></h5>
											</div>
											<div class="flex6col1 flex align-items-center justify-content-center">
												<h5 class="text-center"><a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en">cương cứng kém</a></h5>
											</div>
											<div class="flex6col1 flex align-items-center justify-content-center">
												<h5 class="text-center"><a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en">Không cương cứng được</a></h5>
											</div>
											<div class="flex6col1 flex align-items-center justify-content-center">
												<h5 class="text-center"><a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en">Thời gian cương cứng ngắn</a></h5>
											</div>
										</div>
									</div>
									<div class="flex5col2 flex flex-wrap-wrap align-content-between">
										<div class="width-100"><h5 class="text-center"><i></i>Bài viết được quan tâm</h5></div>
										<div class="width-100">
											<ul>
												@php 
													$posts = $term->post()->limit(8)->get();
												@endphp
												@foreach($posts as $post)
												<li>
													<h5><i></i><a href="{{ MyAPI::getUrlPostObj($post) }}">{{ $post->post_name }}</a></h5>
												</li>
												@endforeach
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div>
								<div class="flex flex5 justify-content-between">
									<div class="flex5col1 flex flex-wrap-wrap align-content-between">
										@php
											$term = MyAPI::getTermID(35);
											$posts =  $term->post()->limit(6)->latest()->get();
										@endphp
										@if(count($posts))
										<div class="width-100">
											<h2 class="text-uppercase text-center">
												<a href="{{ MyAPI::getUrlPostObj($posts[0]) }}">{{ $posts[0]->post_name }}</a>
											</h2>
										</div>
										<div class="width-100">
											<p class="text-justify">
												{{ MyAPI::getLimitWord($posts[0]->post_description,30) }}... 
												<a href="{{ MyAPI::getUrlPostObj($posts[0]) }}">chi tiết</a>
											</p>
										</div>
										@php unset($posts[0]) ; @endphp
										@endif
										<div class="width-100">
											<ul>
												@foreach($posts as $post)
												<li><h5><i></i><a href="{{ MyAPI::getUrlPostObj($post) }}">{{ $post->post_name }}</a></h5></li>
												@endforeach
											</ul>
										</div>
										<div class="flex flex6 width-100">
											<div class="flex6col1 flex align-items-center justify-content-center">
												<h5 class="text-center"><a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en">Lãnh cảm</a></h5>
											</div>
											<div class="flex6col1 flex align-items-center justify-content-center">
												<h5 class="text-center"><a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en">không thể cương cứng</a></h5>
											</div>
											<div class="flex6col1 flex align-items-center justify-content-center">
												<h5 class="text-center"><a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en">thời gian quan hệ ngắn</a></h5>
											</div>
										</div>
									</div>
									<div class="flex5col2 flex flex-wrap-wrap align-content-between">
										<div class="width-100"><h5 class="text-center"><i></i>Bài viết được quan tâm</h5></div>
										<div class="width-100">
											<ul>
												@php 
													$posts = $term->post()->limit(8)->get();
												@endphp
												@foreach($posts as $post)
												<li>
													<h5><i></i><a href="{{ MyAPI::getUrlPostObj($post) }}">{{ $post->post_name }}</a></h5>
												</li>
												@endforeach
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="img1">
					<h2><a href="" class="hvr-shadow"><img src="{{ asset('public/images/desktop/home-15.png') }}" class="center-block"></a></h2>
				</div>
				<div class="global2">
					<div class="flex">
						<div class="col1"><i class="bg1"></i></div>
						<div class="col2">S</div>
						<div class="col3 flex justify-content-center align-items-center">
							<div>
								<h2 class="text-uppercase">Trung tâm phục hồi chức năng sinh lý</h2>
								<h3>exual function rehabilitation center</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="flex flex2 justify-content-between">
					<div class="flex2col1">
						<div>
							<h4><a href=""><img src="{{ asset('public/images/desktop/home-18.gif') }}" class="center-block" style="width: 100%;"></a></h4>
						</div>
						<div class="flex flex3 flex-wrap-wrap justify-content-between align-content-between">
							<div class="flex3col1 flex align-items-center">
								<div class="flex">
									<div class="flex justify-content-center align-items-center">
										<h5><i></i></h5>
									</div>
									<div class="flex justify-content-center align-items-center">
										<h5 class="text-center"><a href="">Hỏi nguyên nhân gây bệnh</a></h5>
									</div>
								</div>
							</div>
							<div class="flex3col1 flex align-items-center">
								<div class="flex">
									<div class="flex justify-content-center align-items-center">
										<h5><i></i></h5>
									</div>
									<div class="flex justify-content-center align-items-center">
										<h5 class="text-center"><a href="">Hỏi triệu chứng</a></h5>
									</div>
								</div>
							</div>
							<div class="flex3col1 flex align-items-center">
								<div class="flex">
									<div class="flex justify-content-center align-items-center">
										<h5><i></i></h5>
									</div>
									<div class="flex justify-content-center align-items-center">
										<h5 class="text-center"><a href="">Hỏi chi phí</a></h5>
									</div>
								</div>
							</div>
							<div class="flex3col1 flex align-items-center">
								<div class="flex">
									<div class="flex justify-content-center align-items-center">
										<h5><i></i></h5>
									</div>
									<div class="flex justify-content-center align-items-center">
										<h5 class="text-center"><a href="">Hỏi nguy hại</a></h5>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="flex2col2 flex align-content-between flex-wrap-wrap">
						<div class="tabs-buttons-2 flex flex4 justify-content-between width-100">
							<div class="flex4col1">
								<div>
									<h4 class="text-center">
										<a class="active flex align-items-center justify-content-center">Bệnh lý tuyến tiền liệt</a>
									</h4>
								</div>
							</div>
							<div class="flex4col1">
								<div>
									<h4 class="text-center">
										<a class="flex align-items-center justify-content-center">Chỉnh hình cơ quan sinh dục</a>
									</h4>
								</div>
							</div>
							<div class="flex4col1">
								<div>
									<h4 class="text-center">
										<a class="flex align-items-center justify-content-center">Bệnh xã hội</a>
									</h4>
								</div>
							</div>
							<div class="flex4col1">
								<div>
									<h4 class="text-center">
										<a class="flex align-items-center justify-content-center">Viêm nhiễm niệu đạo</a>
									</h4>
								</div>
							</div>
							<div class="flex4col1">
								<div>
									<h4 class="text-center">
										<a class="flex align-items-center justify-content-center">Vô sinh nam</a>
									</h4>
								</div>
							</div>
						</div>
						<div class="tabs-contents-2 width-100">
							<div class="active">
								<div class="flex flex5 justify-content-between">
									<div class="flex5col1 flex flex-wrap-wrap align-content-between">
										@php 
											$term = MyAPI::getTermID(2);
											$term_childs = $term->children()->pluck('id')->toArray();
											$posts = App\Post::whereIn('term_id',$term_childs)->limit(6)->latest()->get();
										@endphp
										@if(count($posts))
										<div class="width-100">
											<h2 class="text-uppercase text-center">
												<a href="{{ MyAPI::getUrlPostObj($posts[0]) }}">{{ $posts[0]->post_name }}</a>
											</h2>
										</div>
										<div class="width-100">
											<p class="text-justify">
												{{ MyAPI::getLimitWord($posts[0]->post_description,30) }}... 
												<a href="{{ MyAPI::getUrlPostObj($posts[0]) }}">chi tiết</a>
											</p>
										</div>
										@php unset($posts[0]) ; @endphp
										@endif
										<div class="width-100">
											<ul>
												@foreach($posts as $post)
												<li><h5><i></i><a href="{{ MyAPI::getUrlPostObj($post) }}">{{ $post->post_name }}</a></h5></li>
												@endforeach
											</ul>
										</div>
										<div class="flex flex6 width-100">
											<div class="flex6col1 flex align-items-center justify-content-center">
												<h5 class="text-center">
													<a href="{{ MyAPI::getUrlTermID(3) }}">Viêm tuyến tiền liệt</a>
												</h5>
											</div>
											<div class="flex6col1 flex align-items-center justify-content-center">
												<h5 class="text-center">
													<a href="{{ MyAPI::getUrlTermID(5) }}">Tăng sinh tuyến tiền liệt</a>
												</h5>
											</div>
											<div class="flex6col1 flex align-items-center justify-content-center">
												<h5 class="text-center">
													<a href="{{ MyAPI::getUrlTermID(4) }}">U nang tuyến tiền liệt</a>
												</h5>
											</div>
											<div class="flex6col1 flex align-items-center justify-content-center">
												<h5 class="text-center">
													<a href="{{ MyAPI::getUrlTermID(6) }}">Phì đại tuyến tiền liệt</a>
												</h5>
											</div>
										</div>
									</div>
									<div class="flex5col2 flex flex-wrap-wrap align-content-between">
										<div class="width-100"><h5 class="text-center"><i></i>Bài viết được quan tâm</h5></div>
										<div class="width-100">
											<ul>
												@php 
													$posts = App\Post::whereIn('term_id',$term_childs)->limit(7)->get();
												@endphp
												@foreach($posts as $post)
												<li>
													<h5><i></i><a href="{{ MyAPI::getUrlPostObj($post) }}">{{ $post->post_name }}</a></h5>
												</li>
												@endforeach
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div>
								<div class="flex flex5 justify-content-between">
									<div class="flex5col1 flex flex-wrap-wrap align-content-between">
										@php 
											$term = MyAPI::getTermID(12);
											$term_childs = $term->children()->pluck('id')->toArray();
											$posts = App\Post::whereIn('term_id',$term_childs)->limit(6)->latest()->get();
										@endphp
										@if(count($posts))
										<div class="width-100">
											<h2 class="text-uppercase text-center">
												<a href="{{ MyAPI::getUrlPostObj($posts[0]) }}">{{ $posts[0]->post_name }}</a>
											</h2>
										</div>
										<div class="width-100">
											<p class="text-justify">
												{{ MyAPI::getLimitWord($posts[0]->post_description,30) }}... 
												<a href="{{ MyAPI::getUrlPostObj($posts[0]) }}">chi tiết</a>
											</p>
										</div>
										@php unset($posts[0]) ; @endphp
										@endif
										<div class="width-100">
											<ul>
												@foreach($posts as $post)
												<li><h5><i></i><a href="{{ MyAPI::getUrlPostObj($post) }}">{{ $post->post_name }}</a></h5></li>
												@endforeach
											</ul>
										</div>
										<div class="flex flex6 width-100">
											<div class="flex6col1 flex align-items-center justify-content-center">
												<h5 class="text-center">
													<a href="{{ MyAPI::getUrlTermID(13) }}">Dài bao quy đầu</a>
												</h5>
											</div>
											<div class="flex6col1 flex align-items-center justify-content-center">
												<h5 class="text-center">
													<a href="{{ MyAPI::getUrlTermID(15) }}">Hẹp bao quy đầu</a>
												</h5>
											</div>
											<div class="flex6col1 flex align-items-center justify-content-center">
												<h5 class="text-center">
													<a href="{{ MyAPI::getUrlTermID(14) }}">Kéo dài dương vật </a>
												</h5>
											</div>
											<div class="flex6col1 flex align-items-center justify-content-center">
												<h5 class="text-center">
													<a href="{{ MyAPI::getUrlTermID(16) }}">Tăng kích thước dương vật</a>
												</h5>
											</div>
										</div>
									</div>
									<div class="flex5col2 flex flex-wrap-wrap align-content-between">
										<div class="width-100"><h5 class="text-center"><i></i>Bài viết được quan tâm</h5></div>
										<div class="width-100">
											<ul>
												@php 
													$posts = App\Post::whereIn('term_id',$term_childs)->limit(7)->get();
												@endphp
												@foreach($posts as $post)
												<li>
													<h5><i></i><a href="{{ MyAPI::getUrlPostObj($post) }}">{{ $post->post_name }}</a></h5>
												</li>
												@endforeach
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div>
								<div class="flex flex5 justify-content-between">
									<div class="flex5col1 flex flex-wrap-wrap align-content-between">
										@php 
											$term = MyAPI::getTermID(27);
											$term_childs = $term->children()->pluck('id')->toArray();
											$posts = App\Post::whereIn('term_id',$term_childs)->limit(6)->latest()->get();
										@endphp
										@if(count($posts))
										<div class="width-100">
											<h2 class="text-uppercase text-center">
												<a href="{{ MyAPI::getUrlPostObj($posts[0]) }}">{{ $posts[0]->post_name }}</a>
											</h2>
										</div>
										<div class="width-100">
											<p class="text-justify">
												{{ MyAPI::getLimitWord($posts[0]->post_description,30) }}... 
												<a href="{{ MyAPI::getUrlPostObj($posts[0]) }}">chi tiết</a>
											</p>
										</div>
										@php unset($posts[0]) ; @endphp
										@endif
										<div class="width-100">
											<ul>
												@foreach($posts as $post)
												<li><h5><i></i><a href="{{ MyAPI::getUrlPostObj($post) }}">{{ $post->post_name }}</a></h5></li>
												@endforeach
											</ul>
										</div>
										<div class="flex flex6 width-100">
											<div class="flex6col1 flex align-items-center justify-content-center">
												<h5 class="text-center"><a href="{{ MyAPI::getUrlTermID(28) }}">Sùi mào gà</a></h5>
											</div>
											<div class="flex6col1 flex align-items-center justify-content-center">
												<h5 class="text-center"><a href="{{ MyAPI::getUrlTermID(31) }}">Mụn rộp sinh dục</a></h5>
											</div>
											<div class="flex6col1 flex align-items-center justify-content-center">
												<h5 class="text-center"><a href="{{ MyAPI::getUrlTermID(29) }}">Giang mai</a></h5>
											</div>
											<div class="flex6col1 flex align-items-center justify-content-center">
												<h5 class="text-center"><a href="{{ MyAPI::getUrlTermID(30) }}">Bệnh lậu</a></h5>
											</div>
										</div>
									</div>
									<div class="flex5col2 flex flex-wrap-wrap align-content-between">
										<div class="width-100"><h5 class="text-center"><i></i>Bài viết được quan tâm</h5></div>
										<div class="width-100">
											<ul>
												@php 
													$posts = App\Post::whereIn('term_id',$term_childs)->limit(7)->get();
												@endphp
												@foreach($posts as $post)
												<li>
													<h5><i></i><a href="{{ MyAPI::getUrlPostObj($post) }}">{{ $post->post_name }}</a></h5>
												</li>
												@endforeach
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div>
								<div class="flex flex5 justify-content-between">
								<div class="flex5col1 flex flex-wrap-wrap align-content-between">
									@php 
										$term = MyAPI::getTermID(17);
										$term_childs = $term->children()->pluck('id')->toArray();
										$posts = App\Post::whereIn('term_id',$term_childs)->limit(6)->latest()->get();
									@endphp
									@if(count($posts))
									<div class="width-100">
										<h2 class="text-uppercase text-center">
											<a href="{{ MyAPI::getUrlPostObj($posts[0]) }}">{{ $posts[0]->post_name }}</a>
										</h2>
									</div>
									<div class="width-100">
										<p class="text-justify">
											{{ MyAPI::getLimitWord($posts[0]->post_description,30) }}... 
											<a href="{{ MyAPI::getUrlPostObj($posts[0]) }}">chi tiết</a>
										</p>
									</div>
									@php unset($posts[0]) ; @endphp
									@endif
									<div class="width-100">
										<ul>
											@foreach($posts as $post)
											<li><h5><i></i><a href="{{ MyAPI::getUrlPostObj($post) }}">{{ $post->post_name }}</a></h5></li>
											@endforeach
										</ul>
									</div>
									<div class="flex flex6 width-100">
										<div class="flex6col1 flex align-items-center justify-content-center">
											<h5 class="text-center"><a href="{{ MyAPI::getUrlTermID(18) }}">Viêm quy đầu</a></h5>
										</div>
										<div class="flex6col1 flex align-items-center justify-content-center">
											<h5 class="text-center"><a href="{{ MyAPI::getUrlTermID(20) }}">Viêm niệu đạo</a></h5>
										</div>
										<div class="flex6col1 flex align-items-center justify-content-center">
											<h5 class="text-center"><a href="{{ MyAPI::getUrlTermID(19) }}">Viêm bàng quang</a></h5>
										</div>
										<div class="flex6col1 flex align-items-center justify-content-center">
											<h5 class="text-center"><a href="{{ MyAPI::getUrlTermID(21) }}">Viêm tinh hoàn</a></h5>
										</div>
									</div>
								</div>
								<div class="flex5col2 flex flex-wrap-wrap align-content-between">
									<div class="width-100"><h5 class="text-center"><i></i>Bài viết được quan tâm</h5></div>
									<div class="width-100">
										<ul>
											@php 
												$posts = App\Post::whereIn('term_id',$term_childs)->limit(7)->get();
											@endphp
											@foreach($posts as $post)
											<li>
												<h5><i></i><a href="{{ MyAPI::getUrlPostObj($post) }}">{{ $post->post_name }}</a></h5>
											</li>
											@endforeach
										</ul>
									</div>
								</div>
								</div>
							</div>
							<div>
								<div class="flex flex5 justify-content-between">
								<div class="flex5col1 flex flex-wrap-wrap align-content-between">
									@php 
										$term = MyAPI::getTermID(22);
										$term_childs = $term->children()->pluck('id')->toArray();
										$posts = App\Post::whereIn('term_id',$term_childs)->limit(6)->latest()->get();
									@endphp
									@if(count($posts))
									<div class="width-100">
										<h2 class="text-uppercase text-center">
											<a href="{{ MyAPI::getUrlPostObj($posts[0]) }}">{{ $posts[0]->post_name }}</a>
										</h2>
									</div>
									<div class="width-100">
										<p class="text-justify">
											{{ MyAPI::getLimitWord($posts[0]->post_description,30) }}... 
											<a href="{{ MyAPI::getUrlPostObj($posts[0]) }}">chi tiết</a>
										</p>
									</div>
									@php unset($posts[0]) ; @endphp
									@endif
									<div class="width-100">
										<ul>
											@foreach($posts as $post)
											<li><h5><i></i><a href="{{ MyAPI::getUrlPostObj($post) }}">{{ $post->post_name }}</a></h5></li>
											@endforeach
										</ul>
									</div>
									<div class="flex flex6 width-100">
										<div class="flex6col1 flex align-items-center justify-content-center">
											<h5 class="text-center"><a href="{{ MyAPI::getUrlTermID(23) }}">Tinh trùng ít</a></h5>
										</div>
										<div class="flex6col1 flex align-items-center justify-content-center">
											<h5 class="text-center"><a href="{{ MyAPI::getUrlTermID(25) }}">Không có tinh trùng</a></h5>
										</div>
										<div class="flex6col1 flex align-items-center justify-content-center">
											<h5 class="text-center"><a href="{{ MyAPI::getUrlTermID(24) }}">Xuất tinh ra máu</a></h5>
										</div>
										<div class="flex6col1 flex align-items-center justify-content-center">
											<h5 class="text-center"><a href="{{ MyAPI::getUrlTermID(26) }}">Tinh trùng yếu</a></h5>
										</div>
									</div>
								</div>
								<div class="flex5col2 flex flex-wrap-wrap align-content-between">
									<div class="width-100"><h5 class="text-center"><i></i>Bài viết được quan tâm</h5></div>
									<div class="width-100">									
										<ul>
											@php 
												$posts = App\Post::whereIn('term_id',$term_childs)->limit(7)->get();
											@endphp
											@foreach($posts as $post)
											<li>
												<h5><i></i><a href="{{ MyAPI::getUrlPostObj($post) }}">{{ $post->post_name }}</a></h5>
											</li>
											@endforeach
										</ul>
									</div>
								</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row6">
			<div class="container">
				<div class="global2">
					<div class="flex">
						<div class="col1"><i class="bg1"></i></div>
						<div class="col2">R</div>
						<div class="col3 flex justify-content-center align-items-center">
							<div>
								<h2 class="text-uppercase">Ví dụ trường hợp hồi phục</h2>
								<h3>ehabilitation case centre</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="slick-hp">
					<div class="flex justify-content-between flex2">
						<div class="flex2col1">
							<img src="{{ asset('public/images/desktop/hp-1.png') }}" class="center-block width-100">
						</div>
						<div class="flex2col2 flex flex-wrap-wrap align-content-between">
							<div class="flex flex3 justify-content-between width-100">
								<div class="flex3col1 flex align-content-around flex-wrap-wrap">
									<div class="flex justify-content-between">
										<div class="flex align-items-center justify-content-center">
											<h5>Bệnh nhân</h5>
										</div>
										<div class="flex align-items-center justify-content-center">
											<h5>Anh Đoàn</h5>
										</div>
									</div>
									<div class="flex justify-content-between">
										<div class="flex align-items-center justify-content-center">
											<h5>Triệu trứng</h5>
										</div>
										<div class="flex align-items-center justify-content-center">
											<h5>Viêm tuyến tiền liệt</h5>
										</div>
									</div>
								</div>
								<div class="flex3col2">
									<div>
										<span class="number">5</span>
										<span class="number">6</span>
										<span class="number">2</span>
										<span class="number">1</span>
										<span>nam giới đã phục hồi</span>
									</div>
								</div>
							</div>
							<div class="order2 width-100">
								<h2 class="text-center color1">
									Thanh niên ưu tú nơi làm việc và “cuộc chạm trán” với <span class="color2">viêm tuyến tiền liệt</span>
								</h2>
								<p class="text-justify">
									Bệnh viêm tuyến tiền liệt của tôi cuối cùng cũng đã điều trị khỏi rồi!” Anh Đoàn năm nay 29 tuổi, là giám đốc bộ phận của một công ty, cuối năm công việc bận rộn, thường xuyên phải làm thêm, ở cơ quan thì ngồi cả ngày, rất ít khi vận động, cả ngày bận rộn ở cơ quan, sau khi về nhà thì anh thích uống chút bia rượu để giải tỏa áp lực... 
									<a href="{{ MyAPI::getUrlPostID(13) }}">(chi tiết)</a>
								</p>
								<div class="footer1">
									<a href="{{ MyAPI::getUrlPostID(13) }}">Xem chi tiết hơn</a>
									<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Tư vấn trực tuyến</a>
								</div>
							</div>
						</div>
					</div>
					<div class="flex justify-content-between flex2">
						<div class="flex2col1">
							<img src="{{ asset('public/images/desktop/hp-2.png') }}" class="center-block width-100">
						</div>
						<div class="flex2col2 flex flex-wrap-wrap align-content-between">
							<div class="flex flex3 justify-content-between width-100">
								<div class="flex3col1 flex align-content-around flex-wrap-wrap">
									<div class="flex justify-content-between">
										<div class="flex align-items-center justify-content-center">
											<h5>Bệnh nhân</h5>
										</div>
										<div class="flex align-items-center justify-content-center">
											<h5>Anh Quân</h5>
										</div>
									</div>
									<div class="flex justify-content-between">
										<div class="flex align-items-center justify-content-center">
											<h5>Triệu trứng</h5>
										</div>
										<div class="flex align-items-center justify-content-center">
											<h5>Viêm quy đầu</h5>
										</div>
									</div>
								</div>
								<div class="flex3col2">
									<div>
										<span class="number">5</span>
										<span class="number">6</span>
										<span class="number">2</span>
										<span class="number">1</span>
										<span>nam giới đã phục hồi</span>
									</div>
								</div>
							</div>
							<div class="order2 width-100">
								<h2 class="text-center color1">
									Phòng khám nam khang Hà Nội cứu chữa bệnh <span class="color2">viêm quy đầu</span> của tôi
								</h2>
								<p class="text-justify">
									Như hiện nay, có rất nhiều người đã nhầm lẫn và điều trị bệnh viêm bao quy đầu như các bệnh xã hội khác, trung quy cũng vì bản thân họ không có những kiến thức đầy đủ về bệnh xã hội. Anh Quân chính là một bệnh nhân như vậy...
									<a href="{{ MyAPI::getUrlPostID(18) }}">(chi tiết)</a>
								</p>
								<div class="footer1">
									<a href="{{ MyAPI::getUrlPostID(18) }}">Xem chi tiết hơn</a>
									<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Tư vấn trực tuyến</a>
								</div>
							</div>
						</div>
					</div>
					<div class="flex justify-content-between flex2">
						<div class="flex2col1">
							<img src="{{ asset('public/images/desktop/hp-3.png') }}" class="center-block width-100">
						</div>
						<div class="flex2col2 flex flex-wrap-wrap align-content-between">
							<div class="flex flex3 justify-content-between width-100">
								<div class="flex3col1 flex align-content-around flex-wrap-wrap">
									<div class="flex justify-content-between">
										<div class="flex align-items-center justify-content-center">
											<h5>Bệnh nhân</h5>
										</div>
										<div class="flex align-items-center justify-content-center">
											<h5>Anh Đạt</h5>
										</div>
									</div>
									<div class="flex justify-content-between">
										<div class="flex align-items-center justify-content-center">
											<h5>Triệu trứng</h5>
										</div>
										<div class="flex align-items-center justify-content-center">
											<h5>Tiểu ra máu</h5>
										</div>
									</div>
								</div>
								<div class="flex3col2">
									<div>
										<span class="number">5</span>
										<span class="number">6</span>
										<span class="number">2</span>
										<span class="number">1</span>
										<span>nam giới đã phục hồi</span>
									</div>
								</div>
							</div>
							<div class="order2 width-100">
								<h2 class="text-center color1">
									<span class="color2">Tiểu máu</span> ảnh hưởng nghiêm trọng cuộc sống và công việc của anh ấy
								</h2>
								<p class="text-justify">
									Anh Đạt, năm nay 38 tuổi, khỏe mạnh, đang trong giai đoạn sự nghiệp tương đối thành công. Với đặc trưng của công việc anh ngồi cả ngày, công việc cuối năm lại rất bận rộn, thường xuyên làm thêm và đi ra ngoài tiếp khách hàng. Anh Đạt xuất hiện đi tiểu gấp, thỉnh thoảng có cảm giác đau buốt...
									<a href="{{ MyAPI::getUrlPostID(20) }}">(chi tiết)</a>
								</p>
								<div class="footer1">
									<a href="{{ MyAPI::getUrlPostID(20) }}">Xem chi tiết hơn</a>
									<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Tư vấn trực tuyến</a>
								</div>
							</div>
						</div>
					</div>
					<div class="flex justify-content-between flex2">
						<div class="flex2col1">
							<img src="{{ asset('public/images/desktop/hp-4.png') }}" class="center-block width-100">
						</div>
						<div class="flex2col2 flex flex-wrap-wrap align-content-between">
							<div class="flex flex3 justify-content-between width-100">
								<div class="flex3col1 flex align-content-around flex-wrap-wrap">
									<div class="flex justify-content-between">
										<div class="flex align-items-center justify-content-center">
											<h5>Bệnh nhân</h5>
										</div>
										<div class="flex align-items-center justify-content-center">
											<h5>Anh Tuấn</h5>
										</div>
									</div>
									<div class="flex justify-content-between">
										<div class="flex align-items-center justify-content-center">
											<h5>Triệu trứng</h5>
										</div>
										<div class="flex align-items-center justify-content-center">
											<h5>Xuất tinh sớm</h5>
										</div>
									</div>
								</div>
								<div class="flex3col2">
									<div>
										<span class="number">5</span>
										<span class="number">6</span>
										<span class="number">2</span>
										<span class="number">1</span>
										<span>nam giới đã phục hồi</span>
									</div>
								</div>
							</div>
							<div class="order2 width-100">
								<h2 class="text-center color1">
									<span class="color2">Xuất tinh sớm</span> có thể tự khỏi được không? Trường hợp phục hồi chức năng xuất tinh sớm giải đáp thắc mắc của bạn.
								</h2>
								<p class="text-justify">
									Xuất tinh sớm có thể tự khỏi được không? Có rất nhiều nam giới lên trên trang tư vấn trực tuyến của phòng khám Nam Khang Hà Nội có thắc mắc về vấn đề xuất tinh sớm này. Xuất tinh sớm có tự khỏi được không? Xuất tinh sớm uống thuốc gì tốt....
									<a href="{{ MyAPI::getUrlPostID(17) }}">(chi tiết)</a>
								</p>
								<div class="footer1">
									<a href="{{ MyAPI::getUrlPostID(17) }}">Xem chi tiết hơn</a>
									<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Tư vấn trực tuyến</a>
								</div>
							</div>
						</div>
					</div>
					<div class="flex justify-content-between flex2">
						<div class="flex2col1">
							<img src="{{ asset('public/images/desktop/hp-5.png') }}" class="center-block width-100">
						</div>
						<div class="flex2col2 flex flex-wrap-wrap align-content-between">
							<div class="flex flex3 justify-content-between width-100">
								<div class="flex3col1 flex align-content-around flex-wrap-wrap">
									<div class="flex justify-content-between">
										<div class="flex align-items-center justify-content-center">
											<h5>Bệnh nhân</h5>
										</div>
										<div class="flex align-items-center justify-content-center">
											<h5>Anh Trưởng</h5>
										</div>
									</div>
									<div class="flex justify-content-between">
										<div class="flex align-items-center justify-content-center">
											<h5>Triệu trứng</h5>
										</div>
										<div class="flex align-items-center justify-content-center">
											<h5>Liệt dương</h5>
										</div>
									</div>
								</div>
								<div class="flex3col2">
									<div>
										<span class="number">5</span>
										<span class="number">6</span>
										<span class="number">2</span>
										<span class="number">1</span>
										<span>nam giới đã phục hồi</span>
									</div>
								</div>
							</div>
							<div class="order2 width-100">
								<h2 class="text-center color1">
									<span class="color2">Bất lực</span> trở thành một chất xúc tác cho việc ly hôn, anh ấy gần như suy sụp
								</h2>
								<p class="text-justify">
									Anh Trưởng năm nay 31 tuổi, đã lấy vợ đã 5 năm. Vốn có cuộc sống hạnh phúc, nhưng những năm gần đây vợ chồng anh rất ít khi nói chuyện với nhau. Nguyên nhân là do những năm gần đây, Anh Trưởng vì lo cho công việc và cuộc sống, thời gian làm thêm và tiếp xúc khách hàng cũng nhiều hơn...
									<a href="{{ MyAPI::getUrlPostID(21) }}">(chi tiết)</a>
								</p>
								<div class="footer1">
									<a href="{{ MyAPI::getUrlPostID(21) }}">Xem chi tiết hơn</a>
									<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Tư vấn trực tuyến</a>
								</div>
							</div>
						</div>
					</div>
					<div class="flex justify-content-between flex2">
						<div class="flex2col1">
							<img src="{{ asset('public/images/desktop/hp-6.png') }}" class="center-block width-100">
						</div>
						<div class="flex2col2 flex flex-wrap-wrap align-content-between">
							<div class="flex flex3 justify-content-between width-100">
								<div class="flex3col1 flex align-content-around flex-wrap-wrap">
									<div class="flex justify-content-between">
										<div class="flex align-items-center justify-content-center">
											<h5>Bệnh nhân</h5>
										</div>
										<div class="flex align-items-center justify-content-center">
											<h5>Anh Phong</h5>
										</div>
									</div>
									<div class="flex justify-content-between">
										<div class="flex align-items-center justify-content-center">
											<h5>Triệu trứng</h5>
										</div>
										<div class="flex align-items-center justify-content-center">
											<h5>Sùi mào gà</h5>
										</div>
									</div>
								</div>
								<div class="flex3col2">
									<div>
										<span class="number">5</span>
										<span class="number">6</span>
										<span class="number">2</span>
										<span class="number">1</span>
										<span>nam giới đã phục hồi</span>
									</div>
								</div>
							</div>
							<div class="order2 width-100">
								<h2 class="text-center color1">
									Cảnh báo: bệnh nhân bị <span class="color2">sùi mào gà</span>
								</h2>
								<p class="text-justify">
									Bệnh sử: Tháng 5 năm 2016 anh Phong có quan hệ tình dục với một cô gái ở trung tâm massage, sau đó xuất hiện những biểu hiện bất thường, tháng 6 anh đi kiểm tra phát hiện bị mắc bệnh sùi mào gà, ngay sau đó anh đã điều trị và khỏi bệnh....
									<a href="{{ MyAPI::getUrlPostID(15) }}">(chi tiết)</a>
								</p>
								<div class="footer1">
									<a href="{{ MyAPI::getUrlPostID(15) }}">Xem chi tiết hơn</a>
									<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Tư vấn trực tuyến</a>
								</div>
							</div>
						</div>
					</div>
					<div class="flex justify-content-between flex2">
						<div class="flex2col1">
							<img src="{{ asset('public/images/desktop/hp-7.png') }}" class="center-block width-100">
						</div>
						<div class="flex2col2 flex flex-wrap-wrap align-content-between">
							<div class="flex flex3 justify-content-between width-100">
								<div class="flex3col1 flex align-content-around flex-wrap-wrap">
									<div class="flex justify-content-between">
										<div class="flex align-items-center justify-content-center">
											<h5>Bệnh nhân</h5>
										</div>
										<div class="flex align-items-center justify-content-center">
											<h5>Anh Toàn</h5>
										</div>
									</div>
									<div class="flex justify-content-between">
										<div class="flex align-items-center justify-content-center">
											<h5>Triệu trứng</h5>
										</div>
										<div class="flex align-items-center justify-content-center">
											<h5>Mụn rộp sinh dục</h5>
										</div>
									</div>
								</div>
								<div class="flex3col2">
									<div>
										<span class="number">5</span>
										<span class="number">6</span>
										<span class="number">2</span>
										<span class="number">1</span>
										<span>nam giới đã phục hồi</span>
									</div>
								</div>
							</div>
							<div class="order2 width-100">
								<h2 class="text-center color1">
									<span class="color2">Vượt qua mụn rộp</span>, xây dựng lại gia đình hạnh phúc
								</h2>
								<p class="text-justify">
									Anh Toàn, 38 tuổi, bản thân anh vốn là một người khỏe mạnh, luôn đầy sức sống, có một gia đình hạnh phúc và tự mở công ty để kinh doanh.Vì điều trị mụn rộp sinh dục, một gia đinh giàu có cũng phải điêu đứng....
									<a href="{{ MyAPI::getUrlPostID(16) }}">(chi tiết)</a>
								</p>
								<div class="footer1">
									<a href="{{ MyAPI::getUrlPostID(16) }}">Xem chi tiết hơn</a>
									<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Tư vấn trực tuyến</a>
								</div>
							</div>
						</div>
					</div>
					<div class="flex justify-content-between flex2">
						<div class="flex2col1">
							<img src="{{ asset('public/images/desktop/hp-8.png') }}" class="center-block width-100">
						</div>
						<div class="flex2col2 flex flex-wrap-wrap align-content-between">
							<div class="flex flex3 justify-content-between width-100">
								<div class="flex3col1 flex align-content-around flex-wrap-wrap">
									<div class="flex justify-content-between">
										<div class="flex align-items-center justify-content-center">
											<h5>Bệnh nhân</h5>
										</div>
										<div class="flex align-items-center justify-content-center">
											<h5>Anh Lâm</h5>
										</div>
									</div>
									<div class="flex justify-content-between">
										<div class="flex align-items-center justify-content-center">
											<h5>Triệu trứng</h5>
										</div>
										<div class="flex align-items-center justify-content-center">
											<h5>Vô sinh nam</h5>
										</div>
									</div>
								</div>
								<div class="flex3col2">
									<div>
										<span class="number">5</span>
										<span class="number">6</span>
										<span class="number">2</span>
										<span class="number">1</span>
										<span>nam giới đã phục hồi</span>
									</div>
								</div>
							</div>
							<div class="order2 width-100">
								<h2 class="text-center color1">
									Điều trị khỏi chứng <span class="color2">tinh trùng yếu</span>, vợ mang thai.
								</h2>
								<p class="text-justify">
									 Chuyên gia phòng khám Nam Khang Hà Nội kiểm tra lần đầu cho thấy, bộ phận sinh dục của anh Lâm phát triển bình thường, tinh hoàn không có bất thường, “Phòng thí nghiệm nam khoa” phân tích tinh dịch: màu trắng đục, lượng tinh dịch 3.5ml, độ nhày (++)...
									<a href="{{ MyAPI::getUrlPostID(14) }}">(chi tiết)</a>
								</p>
								<div class="footer1">
									<a href="{{ MyAPI::getUrlPostID(14) }}">Xem chi tiết hơn</a>
									<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Tư vấn trực tuyến</a>
								</div>
							</div>
						</div>
					</div>
					<div class="flex justify-content-between flex2">
						<div class="flex2col1">
							<img src="{{ asset('public/images/desktop/hp-9.png') }}" class="center-block width-100">
						</div>
						<div class="flex2col2 flex flex-wrap-wrap align-content-between">
							<div class="flex flex3 justify-content-between width-100">
								<div class="flex3col1 flex align-content-around flex-wrap-wrap">
									<div class="flex justify-content-between">
										<div class="flex align-items-center justify-content-center">
											<h5>Bệnh nhân</h5>
										</div>
										<div class="flex align-items-center justify-content-center">
											<h5>Anh Vũ</h5>
										</div>
									</div>
									<div class="flex justify-content-between">
										<div class="flex align-items-center justify-content-center">
											<h5>Triệu trứng</h5>
										</div>
										<div class="flex align-items-center justify-content-center">
											<h5>Dài bao quy đầu</h5>
										</div>
									</div>
								</div>
								<div class="flex3col2">
									<div>
										<span class="number">5</span>
										<span class="number">6</span>
										<span class="number">2</span>
										<span class="number">1</span>
										<span>nam giới đã phục hồi</span>
									</div>
								</div>
							</div>
							<div class="order2 width-100">
								<h2 class="text-center color1">
									Vợ bị mắc bệnh viêm phụ khoa, thủ phạm thực sự lại chính là do <span class="color2">dài bao quy đầu</span>
								</h2>
								<p class="text-justify">
									Bệnh nhân Vũ, giới tình nam, 28 tuổi. Anh Vũ và vợ là bạn học thời đại học, sau khi tốt nghiệp họ đã cùng nhau đi đến hôn nhân. Trong cuộc sống và công việc họ luôn hỗ trợ lẫn nhau, cuộc sống hôn nhân của họ đang hạnh phúc như vậy, nhưng nửa năm gần đây anh Vũ lại phát hiện ra vợ mình trở nên chán nản...
									<a href="{{ MyAPI::getUrlPostID(19) }}">(chi tiết)</a>
								</p>
								<div class="footer1">
									<a href="{{ MyAPI::getUrlPostID(19) }}">Xem chi tiết hơn</a>
									<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Tư vấn trực tuyến</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<script>
					$('.slick-hp').slick({
					  	slidesToShow: 1,
					  	slidesToScroll: 1,
					  	autoplay: true,
					  	autoplaySpeed: 2000,
					});	
				</script>
			</div>
		</div>
		<div class="row7">
			<div class="container">
				<div class="global2">
					<div class="flex">
						<div class="col1"><i class="bg1"></i></div>
						<div class="col2">B</div>
						<div class="col3 flex justify-content-center align-items-center">
							<div>
								<h2 class="text-uppercase">Bảo đảm thương hiệu thực lực</h2>
								<h3>rand and strength guarantee</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="flex flex1 justify-content-between">
					<div class="flex1col1 active">
						<h3>
							<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="hvr-glow">
								<img src="{{ asset('public/images/desktop/sua-2.png') }}" class="center-block">
							</a>
						</h3>
						<div class="slickmy slick-th1">
							<div>
								<img src="{{ asset('public/images/desktop/th1.png') }}" class="center-block">
							</div>
							<div>
								<img src="{{ asset('public/images/desktop/th2.png') }}" class="center-block">
							</div>
							<div>
								<img src="{{ asset('public/images/desktop/th3.png') }}" class="center-block">
							</div>
							<div>
								<img src="{{ asset('public/images/desktop/th4.png') }}" class="center-block">
							</div>
						</div>
						<script>
							$('.slick-th1').slick({
							  	//slidesToShow: 1,
							  	//slidesToScroll: 1,
							  	// autoplay: true,
							  	// autoplaySpeed: 2000,
							});	
						</script>
					</div>
					<div class="flex1col2">
						<h3>
							<a href="{{ MyAPI::getUrlTermID(33) }}" class="hvr-glow">
								<img src="{{ asset('public/images/desktop/sua-3.png') }}" class="center-block">
							</a>
						</h3>
						<div class="slickmy slick-th2">
							<div>
								<img src="{{ asset('public/images/desktop/th5.png') }}" class="center-block">
							</div>
							<div>
								<img src="{{ asset('public/images/desktop/th6.png') }}" class="center-block">
							</div>
							<div>
								<img src="{{ asset('public/images/desktop/th7.png') }}" class="center-block">
							</div>
							<div>
								<img src="{{ asset('public/images/desktop/th8.png') }}" class="center-block">
							</div>
						</div>
						<script>
							$('.slick-th2').slick({
							  	//slidesToShow: 1,
							  	//slidesToScroll: 1,
							  	// autoplay: true,
							  	// autoplaySpeed: 2000,
							});	
						</script>
					</div>
					<div class="flex1col3">
						<h3>
							<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="hvr-glow">
								<img src="{{ asset('public/images/desktop/sua-4.png') }}" class="center-block">
							</a>
						</h3>
						<div class="slickmy slick-th3">
							<div>
								<img src="{{ asset('public/images/desktop/th9.png') }}" class="center-block">
							</div>
							<div>
								<img src="{{ asset('public/images/desktop/th10.png') }}" class="center-block">
							</div>
							<div>
								<img src="{{ asset('public/images/desktop/th11.png') }}" class="center-block">
							</div>
							<div>
								<img src="{{ asset('public/images/desktop/th12.png') }}" class="center-block">
							</div>
						</div>
						<script>
							$('.slick-th3').slick({
							  	//slidesToShow: 1,
							  	//slidesToScroll: 1,
							  	// autoplay: true,
							  	// autoplaySpeed: 2000,
							});	
						</script>
					</div>
				</div>
			</div>
		</div>
	</main>
@endsection('content')