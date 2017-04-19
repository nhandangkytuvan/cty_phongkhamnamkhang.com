@extends('layout.desktop')
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
			<div class="container middle">
				<div class="flex flex2 justify-content-between">
					<div class="flex2col1">
						<div class="slick-home2">
							<div>
								<h2>
									<a href="#">
										<img src="{{ asset('public/images/desktop/slide-1.png') }}" class="center-block" style="width: 100%;">
									</a>
								</h2>
							</div>
							<div>
								<h2>
									<a href="#">
										<img src="{{ asset('public/images/desktop/slide-2.png') }}" class="center-block" style="width: 100%;">
									</a>
								</h2>
							</div>
							<div>
								<h2>
									<a href="#">
										<img src="{{ asset('public/images/desktop/slide-3.png') }}" class="center-block" style="width: 100%;">
									</a>
								</h2>
							</div>
							<div>
								<h2>
									<a href="#">
										<img src="{{ asset('public/images/desktop/slide-4.png') }}" class="center-block" style="width: 100%;">
									</a>
								</h2>
							</div>
						</div>
						<script>
							$('.slick-home2').slick({
							  	slidesToShow: 1,
							  	slidesToScroll: 1,
							  	autoplay: true,
							  	autoplaySpeed: 2000,
							  	dots: true,
							});	
						</script>
					</div>
					<div class="flex2col2">
						<div class="title1 container">
							<div class="flex flex1">
								<div><h2 class="text-uppercase color1">về chúng tôi</h2></div>
								<div><h2 class="text-uppercase color2">about us</h2></div>
							</div>
							<h5>Sức khỏe của bạn là món quà tuyệt với nhất đối với chúng tôi</h5>
						</div>
						<p class="text-justify">
							Phòng khám Nam Khang Hà Nội là cơ sở y tế chuyên điều trị nam khoa hiếm có ở khu vực Hà Nội, phòng khám đạt tiêu chuẩn y tế JCI quốc tế, hội tụ đội ngũ chuyên gia cao cấp trong và ngoài nước, dịch vụ chất lượng cao, môi trường khám chữa bệnh ấm cúng đạt chất lượng 5 sao, vượt qua mô hình truyền thống của ngành y tế Hà Nội, mở ra thời đại mới về khám điều trị bệnh nam khoa đỉnh cao tại Hà Nội, kết hợp với dịch vụ đặc biệt chuyên khoa, chuyên bệnh, chuyên trị, xây dựng thương hiệu chuyên nghiệp về nam khoa trên toàn quốc.
						</p>
						<div class="text-center">
							<a href="{{ url('ve-chung-toi') }}" class="hvr-float-shadow">Xem chi tiết</a>
						</div>
					</div>
					<div class="flex2col3">
						<div class="global1">
							<div class="col1 flex align-items-center">
								<div class="flex">
									<div class="flex justify-content-center align-items-center">
										<div><i class="bg1 dis-inline-block"></i></div>
									</div>
									<div class="flex justify-content-center align-items-center">
										<div>
											<h3 class="text-uppercase">tư vấn bệnh</h3>
											<h4>Disease counseling</h4>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="flex flex-wrap-wrap">
							<div class="flex justify-content-center align-items-center">
								<div>
									<h5 class="text-center">
										<a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en">
											<i class="bg1"></i>
										</a>
									</h5>
									<h5 class="text-center">
										<a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en">Dài bao<br>quy đầu</a>
									</h5>
								</div>
							</div>
							<div class="flex justify-content-center align-items-center">
								<div>
									<h5 class="text-center">
										<a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en">
											<i class="bg2"></i>
										</a>
									</h5>
									<h5 class="text-center">
										<a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en">Tinh dịch<br>vàng</a>
									</h5>
								</div>
							</div>
							<div class="flex justify-content-center align-items-center">
								<div>
									<h5 class="text-center">
										<a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en">
											<i class="bg3"></i>
										</a>
									</h5>
									<h5 class="text-center">
										<a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en">Không cương<br>cứng</a>
									</h5>
								</div>
							</div>
							<div class="flex justify-content-center align-items-center">
								<div>
									<h5 class="text-center">
										<a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en">
											<i class="bg4"></i>
										</a>
									</h5>
									<h5 class="text-center">
										<a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en">Nhu cầu sinh dục giảm</a>
									</h5>
								</div>
							</div>
							<div class="flex justify-content-center align-items-center">
								<div>
									<h5 class="text-center">
										<a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en">
											<i class="bg5"></i>
										</a>
									</h5>
									<h5 class="text-center">
										<a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en">Đi tiểu<br>khó</a>
									</h5>
								</div>
							</div>
							<div class="flex justify-content-center align-items-center">
								<div>
									<h5 class="text-center">
										<a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en">
											<i class="bg6"></i>
										</a>
									</h5>
									<h5 class="text-center">
										<a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en">Rối loạn<br>xuất tinh</a>
									</h5>
								</div>
							</div>
							<div class="flex justify-content-center align-items-center">
								<div>
									<h5 class="text-center">
										<a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en">
											<i class="bg7"></i>
										</a>
									</h5>
									<h5 class="text-center">
										<a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en">Quy đầu<br>bất thường</a>
									</h5>
								</div>
							</div>
							<div class="flex justify-content-center align-items-center">
								<div>
									<h5 class="text-center">
										<a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en">
											<i class="bg8"></i>
										</a>
									</h5>
									<h5 class="text-center">
										<a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en">Lỗ niệu đạo<br>ra mủ</a>
									</h5>
								</div>
							</div>
							<div class="flex justify-content-center align-items-center">
								<div>
									<h5 class="text-center">
										<a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en">
											<i class="bg9"></i>
										</a>
									</h5>
									<h5 class="text-center">
										<a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en">Kéo dài<br>dương vật</a>
									</h5>
								</div>
							</div>
						</div>
					</div>
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
				<div class="flex justify-content-between flex2">
					<div class="flex2col1">
						<img src="{{ asset('public/images/desktop/home-16.png') }}" class="center-block">
					</div>
					<div class="flex2col2">
						<div class="flex flex3 justify-content-between">
							<div class="flex3col1 flex align-content-around flex-wrap-wrap">
								<div class="flex justify-content-between">
									<div class="flex align-items-center justify-content-center">
										<h5>Bệnh nhân</h5>
									</div>
									<div class="flex align-items-center justify-content-center">
										<h5>Nguyễn Anh Tuấn</h5>
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
						<div class="order2">
							<h2 class="text-center color1"><span class="color2">Dài bao quy đầu</span> lâu năm không điều trị, hại người hại mình</h2>
							<p class="text-justify">
								Tôi và vợ quen nhau từ rất lâu, chúng tôi hết mực yêu thương nhau, sau thời gian 3 năm, vì lý do khoảng cách nên chúng tôi rất trân trọng mối quan hệ này, cuối cùng 2 bên cha mẹ cũng đồng ý, năm ngoái chúng tôi quyết định kết hôn. Chúng tôi đang trong thời gian hưởng thụ hạnh phúc thì... <a href="">(chi tiết)</a>
							</p>
							<div class="footer1">
								<a href="{{ MyAPI::getUrlTermID(34) }}">Ví dụ nhiều hơn</a>
								<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Tư vấn trực tuyến</a>
							</div>
						</div>
					</div>
				</div>
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
					<div class="flex1col1">
						<h3>
							<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="hvr-glow">
								<img src="{{ asset('public/images/desktop/home-19.png') }}" class="center-block">
							</a>
						</h3>
					</div>
					<div class="flex1col2">
						<h3>
							<a href="{{ MyAPI::getUrlTermID(33) }}" class="hvr-glow">
								<img src="{{ asset('public/images/desktop/home-20.png') }}" class="center-block">
							</a>
						</h3>
					</div>
					<div class="flex1col3">
						<h3>
							<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="hvr-glow">
								<img src="{{ asset('public/images/desktop/home-21.png') }}" class="center-block">
							</a>
						</h3>
					</div>
				</div>
			</div>
		</div>
	</main>
@endsection('content')