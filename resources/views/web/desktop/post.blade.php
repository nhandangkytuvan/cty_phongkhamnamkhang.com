@extends('layout.desktop')
@section('title')
	<title>{{ $data['post']->post_name }} - {{ $setting->web_name }}</title>
@endsection('title')
@section('keyword')
	@include('seo.seo_post',['data'=>$data])
@endsection('keyword')
@section('css')
<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-sidebar.css') }}">
<link rel="stylesheet" href="{{ asset('public/font/post-detail-css.css') }}">
<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-post.css') }}">
@endsection('css')
@section('js')
@endsection('js')
@section('content')
@php $term = $data['post']->term;@endphp
<div class="banner">
	<div class="container">
		<div class="home">
			<div class="row1">
				<div class="container">
					<div class="flex flex1 justify-content-between">
						<div class="flex1col1 flex justify-content-center align-items-center">
							<div class="flex">
								<div class="flex justify-content-center align-items-center">
									<i class="fa fa-home"></i>
								</div>
								<div class="flex justify-content-center align-items-center">
									<a href="">Trang chủ</a> > 
								</div>
								<div class="flex justify-content-center align-items-center">
									<a href="{{ MyAPI::getUrlTermObj($term) }}">{{ $term->term_name }}</a>
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
<main class="container term post">
	<div class="flex flex0 justify-content-between">
		<div class="flex0col1">
			<h1 class="text-uppercase"><i></i> {{ $data['post']->post_name }}</h1>
			<div class="post-description">
			</div>
			<div class="post-detail">
				{!! $data['post']->post_detail !!}
			</div>
			<div class="post-footer">
				<div class="order1">
					<p class="text-justify">
						<span>Nhắc nhở:</span> Nếu muốn chữa khỏi bệnh, đầu tiên bệnh nhân cần xây dựng lòng tin có thể hồi phục, sau đó tích cực phối hợp với bác sĩ điều trị, nghiêm ngặt tuân theo yêu cầu của bác sĩ, có như vậy mới có thể hồi phục càng nhanh, bệnh nhân nếu như có gì bất thường thì cần phải đến bệnh viện kiểm tra thăm khám, vì bệnh tật sẽ không tự khỏi khi bạn kéo dài thời gian, nhưng chắc chắn do điều trị không kịp thời mà bệnh càng nặng lên, vì thế kịp thời đi khám, kiểm tra sớm, điều trị sớm mới là tốt.
					</p>
					<h4>Số điện thoại tư vấn : <a href="tel:18006181">18006181</a> - <a href="tel:043-9656999">043-9656999</a></h4>
					<ul>
						@php $post_pre = $term->post()->where('id','<',$data['post']->id)->orderBy('id','desc')->first(); @endphp
						@if($post_pre)
						<li>Bài trước : <a href="{{ MyAPI::getUrlPostObj($post_pre) }}">{{ $post_pre->post_name }}</a></li>
						@endif
						@php $post_next = $term->post()->where('id','>',$data['post']->id)->orderBy('id','asc')->first(); @endphp
						@if($post_next)
						<li>Bài sau : <a href="{{ MyAPI::getUrlPostObj($post_next) }}">{{ $post_next->post_name }}</a></li>
						@endif
					</ul>
				</div>
				<div class="order2">
					<h3>Tình trạng hiện tại của bạn là gì?</h3>
					<div class="flex flex1 flex-wrap-wrap">
						<div class="flex1col1 flex justify-content-center align-items-center" onclick="open_tuvan();" alt="Tư vấn">
							<div class="hvr-float-shadow">
								<h4 class="text-center"><i class="bg bg1"></i></h4>
								<h5 class="text-center">Xuất hiện triệu chứng</h5>
								<h6 class="text-center">Tìm phương pháp giải quyết phiền phức</h6>
								<h6 class="text-center"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Bấm vào đây</a></h6>
							</div>
						</div>
						<div class="flex1col1 flex justify-content-center align-items-center active"  onclick="open_tuvan();" alt="Tư vấn">
							<div class="hvr-float-shadow">
								<h4 class="text-center"><i class="bg bg2"></i></h4>
								<h5 class="text-center">Muốn đến thăm khám</h5>
								<h6 class="text-center">Hi vọng tìm được nguyên nhân gây bệnh</h6>
								<h6 class="text-center"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Bấm vào đây</a></h6>
							</div>
						</div>
						<div class="flex1col1 flex justify-content-center align-items-center"  onclick="open_tuvan();" alt="Tư vấn">
							<div class="hvr-float-shadow">
								<h4 class="text-center"><i class="bg bg3"></i></h4>
								<h5 class="text-center">Đã được chẩn đoán</h5>
								<h6 class="text-center">Tìm phương án điều trị nhanh, chính xác</h6>
								<h6 class="text-center"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Bấm vào đây</a></h6>
							</div>
						</div>
						<div class="flex1col1 flex justify-content-center align-items-center"  onclick="open_tuvan();" alt="Tư vấn">
							<div class="hvr-float-shadow">
								<h4 class="text-center"><i class="bg bg4"></i></h4>
								<h5 class="text-center">Tìm hiểu chi phí</h5>
								<h6 class="text-center">Muốn tìm hiểu chi phí để yên tâm điều trị</h6>
								<h6 class="text-center"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Bấm vào đây</a></h6>
							</div>
						</div>
						<div class="flex1col1 flex justify-content-center align-items-center"  onclick="open_tuvan();" alt="Tư vấn">
							<div class="hvr-float-shadow">
								<h4 class="text-center"><i class="bg bg5"></i></h4>
								<h5 class="text-center">Tư vấn tham khảo</h5>
								<h6 class="text-center">Trao đổi trực tuyến riêng với bác sĩ nam khoa</h6>
								<h6 class="text-center"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Bấm vào đây</a></h6>
							</div>
						</div>
						<div class="flex1col1 flex justify-content-center align-items-center"  onclick="open_tuvan();" alt="Tư vấn">
							<div class="hvr-float-shadow">
								<h4 class="text-center"><i class="bg bg6"></i></h4>
								<h5 class="text-center">Xếp số khám ngay</h5>
								<h6 class="text-center">Hưởng dịch vụ an toàn đơn giản không cần xếp hàng</h6>
								<h6 class="text-center"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Bấm vào đây</a></h6>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="post-related">
				@php  
					$term = $data['post']->term;
					$posts = $term->post()->where('id','<>',$data['post']->id)->limit(6)->get();
				@endphp
				<div class="flex justify-content-between flex2">
					<div class="flex2col1">
						<ul>
							@foreach($posts as $key => $post)
							<li>
								<h5>
									<i class="fa fa-circle" aria-hidden="true"></i>
									<a href="{{ MyAPI::getUrlPostObj($post) }}">{{ $post->post_name }}</a>
								</h5>
							</li>
							@php 
								unset($posts[$key]);
								if($key==2) break;
							@endphp
							@endforeach
						</ul>
					</div>
					<div class="flex2col1">
						<ul>
							@foreach($posts as $key => $post)
							<li>
								<h5>
									<i class="fa fa-circle" aria-hidden="true"></i>
									<a href="{{ MyAPI::getUrlPostObj($post) }}">{{ $post->post_name }}</a>
								</h5>
							</li>
							@php unset($posts[$key]) @endphp
							@endforeach
						</ul>
					</div>
				</div>
			</div>
			<div class="post-number">
				<h4>Hôm nay đã có</h4>
				<div>
					<div class="flex flex3 justify-content-between">
						<div class="flex3col1">
							<p>
								@foreach(Session::get('web_visitday') as $value)
								<span>{{ $value }}</span>
								@endforeach
								người tư vấn
							</p>
						</div>
						<div class="flex3col2">
							<div class="flex">
								<div class="flex4col1">
									<form action="{{ url('/search') }}">
										{{ csrf_field() }}
										<input type="text" name="keyword" placeholder="Nhập triệu chứng của bạn để được tư vấn">
									</form>
								</div>
								<div class="flex4col2 flex justify-content-center align-items-center">
									<div>
										<h3 class="text-center">
											<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><img src="{{ asset('public/images/desktop/icon-13.png') }}" class="center-block"></a>
										</h3>
										<h4 class="text-center"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Tư vấn trực tuyến</a></h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<script>
				$(document).ready(function() {
					setTimeout(function(){
						toastr8.windows({
							message:'Việc tìm kiếm sẽ nhanh hơn khi bạn trò chuyện với <a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">bác sĩ tư vấn</a> !', 
							title:"Mẹo nhỏ",
							iconClass: "fa fa-user-md",
							imgURI: ["{{ asset('public/images/desktop/logo-footer.png') }}"],
							timeOut:0,
							positionClass:'toast8-bottom-left',
						});
					}, 60000);
				});
			</script>
		</div>
		<div class="flex0col2">
			@include('web.desktop.slidebar')
		</div>
	</div>
</main>
@endsection('content')