@extends('layout.desktop')
@section('title')
	<title>{{ $setting->web_name }}</title>
@endsection('title')
@section('keyword')
<meta property="og:url" content="{{ url('/') }}" />
<meta property="og:type" content="article" />
<meta property="og:title" content="{{ $setting->web_name }}" />
<meta property="og:description" content="{{ $setting->web_description }}" />
<meta property="og:image" content="{{ asset('public/img/'.$setting->web_logo) }}">

<meta name="og:keyword" content="{{ $setting->web_keyword }}">
<meta name="twitter:card" content="summary" />
<meta name="twitter:description" content="{{ $setting->web_description }}" />
<meta name="twitter:title" content="{{ $setting->web_name }}" />
<meta name="twitter:image" content="{{ asset('public/img/'.$setting->web_logo) }}" />
<link rel="canonical" href="{{ url('/') }}" />

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
			<div class="title1 container">
				<div class="flex flex1">
					<div><h2 class="text-uppercase color1">về chúng tôi</h2></div>
					<div><h2 class="text-uppercase color2">about us</h2></div>
				</div>
				<h5>Sức khỏe của bạn là món quà tuyệt với nhất đối với chúng tôi</h5>
			</div>
			<div class="container middle">
				<div class="flex flex2 justify-content-between">
					<div class="flex2col1">
						<p class="text-justify">
							Phòng khám Nam Khang Hà Nội là cơ sở y tế chuyên điều trị nam khoa hiếm có ở khu vực Hà Nội, phòng khám đạt tiêu chuẩn y tế JCI quốc tế, hội tụ đội ngũ chuyên gia cao cấp trong và ngoài nước, dịch vụ chất lượng cao, môi trường khám chữa bệnh ấm cúng đạt chất lượng 5 sao, vượt qua mô hình truyền thống của ngành y tế Hà Nội, mở ra thời đại mới về khám điều trị bệnh nam khoa đỉnh cao tại Hà Nội, kết hợp với dịch vụ đặc biệt chuyên khoa, chuyên bệnh, chuyên trị, xây dựng thương hiệu chuyên nghiệp về nam khoa trên toàn quốc.
						</p>
					</div>
					<div class="flex2col2">
						<div class="flex3 flex justify-content-between global1">
							<div class="col1 flex align-items-center justify-content-center">
								<div class="flex">
									<div class="flex justify-content-center align-items-center">
										<div><i class="bg1 dis-inline-block"></i></div>
									</div>
									<div class="flex justify-content-center align-items-center">
										<div>
											<h3>TIN MỚI</h3>
											<h4>News and information</h4>
										</div>
									</div>
								</div>
							</div>
							<div class="col2 flex align-items-center justify-content-center">
								<div>
									<h5 class="text-center"><a href="">xem thêm</a></h5>
								</div>
							</div>
						</div>
						<div class="posts">
							<h2 class="text-uppercase text-center post-name"><a href="">NGUYÊN NHÂN VIÊM TUYẾN TIỀN LIỆT Ở NAM GIỚI</a></h2>
							<p class="post-description">
								Viêm tuyến tiền liệt là một trong những bệnh phổ biến của nam giới ở các lứa tuổi với tần số là từ 5 - 8%. Trong đó, 35 - 40% trường hợp là đàn ông ở độ tuổi 20 - 40. Các bác sỹ ... <a href="">chi tiết</a>
							</p>
							<div>
								<ul>
									<li>
										<div class="flex justify-content-between">
											<div>
												<h5><i class="bg2"></i><a href="">Chế độ ăn uống tốt cho người viêm tuyến tiền liệt</a></h5>
											</div>
											<div>
												<h6>17/04/2017</h6>
											</div>
										</div>
									</li>
									<li>
										<div class="flex justify-content-between">
											<div>
												<h5><i class="bg2"></i><a href="">Chế độ ăn uống tốt cho người viêm tuyến tiền liệt</a></h5>
											</div>
											<div>
												<h6>17/04/2017</h6>
											</div>
										</div>
									</li>
									<li>
										<div class="flex justify-content-between">
											<div>
												<h5><i class="bg2"></i><a href="">Chế độ ăn uống tốt cho người viêm tuyến tiền liệt</a></h5>
											</div>
											<div>
												<h6>17/04/2017</h6>
											</div>
										</div>
									</li>
									<li>
										<div class="flex justify-content-between">
											<div>
												<h5><i class="bg2"></i><a href="">Chế độ ăn uống tốt cho người viêm tuyến tiền liệt</a></h5>
											</div>
											<div>
												<h6>17/04/2017</h6>
											</div>
										</div>
									</li>
									<li>
										<div class="flex justify-content-between">
											<div>
												<h5><i class="bg2"></i><a href="">Chế độ ăn uống tốt cho người viêm tuyến tiền liệt</a></h5>
											</div>
											<div>
												<h6>17/04/2017</h6>
											</div>
										</div>
									</li>
								</ul>
							</div>
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
									<h5 class="text-center"><i class="bg1"></i></h5>
									<h5 class="text-center"><a href="">Dài bao quy đầu</a></h5>
								</div>
							</div>
							<div class="flex justify-content-center align-items-center">
								<div>
									<h5 class="text-center"><i class="bg1"></i></h5>
									<h5 class="text-center"><a href="">Dài bao quy đầu</a></h5>
								</div>
							</div>
							<div class="flex justify-content-center align-items-center">
								<div>
									<h5 class="text-center"><i class="bg1"></i></h5>
									<h5 class="text-center"><a href="">Dài bao quy đầu</a></h5>
								</div>
							</div>
							<div class="flex justify-content-center align-items-center">
								<div>
									<h5 class="text-center"><i class="bg1"></i></h5>
									<h5 class="text-center"><a href="">Dài bao quy đầu</a></h5>
								</div>
							</div>
							<div class="flex justify-content-center align-items-center">
								<div>
									<h5 class="text-center"><i class="bg1"></i></h5>
									<h5 class="text-center"><a href="">Dài bao quy đầu</a></h5>
								</div>
							</div>
							<div class="flex justify-content-center align-items-center">
								<div>
									<h5 class="text-center"><i class="bg1"></i></h5>
									<h5 class="text-center"><a href="">Dài bao quy đầu</a></h5>
								</div>
							</div>
							<div class="flex justify-content-center align-items-center">
								<div>
									<h5 class="text-center"><i class="bg1"></i></h5>
									<h5 class="text-center"><a href="">Dài bao quy đầu</a></h5>
								</div>
							</div>
							<div class="flex justify-content-center align-items-center">
								<div>
									<h5 class="text-center"><i class="bg1"></i></h5>
									<h5 class="text-center"><a href="">Dài bao quy đầu</a></h5>
								</div>
							</div>
							<div class="flex justify-content-center align-items-center">
								<div>
									<h5 class="text-center"><i class="bg1"></i></h5>
									<h5 class="text-center"><a href="">Dài bao quy đầu</a></h5>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
@endsection('content')