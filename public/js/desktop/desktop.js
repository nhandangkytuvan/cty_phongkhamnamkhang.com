$(document).ready(function() {
	$('.tabs-buttons-1 .flex4col1 a').hover(function() {
		var index = $(this).parents('.tabs-buttons-1 div.flex4col1').index();
		$(this).addClass('active');
		$(this).parents('.tabs-buttons-1 div.flex4col1').siblings('div').find('a').removeClass('active');
		$('.tabs-contents-1 >div').eq(index).addClass('active');
		$('.tabs-contents-1 >div').eq(index).siblings('div').removeClass('active');
	}, function() {
		
	});
	$('.tabs-buttons-2 .flex4col1 a').hover(function() {
		var index = $(this).parents('.tabs-buttons-2 div.flex4col1').index();
		$(this).addClass('active');
		$(this).parents('.tabs-buttons-2 div.flex4col1').siblings('div').find('a').removeClass('active');
		$('.tabs-contents-2 >div').eq(index).addClass('active');
		$('.tabs-contents-2 >div').eq(index).siblings('div').removeClass('active');
	}, function() {
		
	});
	var myinter = setInterval( home_kythuatnamkhoa, 3000);
	$('div.row4 div.img1').hover(function() {
		clearInterval(myinter);
  		$(this).fadeOut();
  		$(this).siblings('div').fadeIn();
	}, function() {
		myinter = setInterval( home_kythuatnamkhoa, 3000);
	});
	$('div.row4 div.img2').hover(function() {
		clearInterval(myinter);
	}, function() {
  		$(this).fadeOut();
  		$(this).siblings('div').fadeIn();
  		myinter = setInterval( home_kythuatnamkhoa, 3000);
	});
	// $('div.row4 div.img2').hover(function() {
	// }, function() {
 //  		$(this).fadeOut();
 //  		$(this).siblings('div').fadeIn();
	// });
});
function open_tuvan(){
	window.open("http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en","_blank");
}
function home_kythuatnamkhoa(){
	var obj = $(".row4 .flex2col1.active");
	$(".row4 .flex2col1.active >div>div").each(function(index, el) {
		if($(el).css('display') == 'none'){
			$(el).fadeIn();
		}else{
			$(el).fadeOut();
		}
	});
	if(obj.next().length){
		obj.removeClass('active');
		obj.next().addClass('active');
	}else{
		obj.removeClass('active');
		$(".row4 .flex2col1").first().addClass('active');
	}
}