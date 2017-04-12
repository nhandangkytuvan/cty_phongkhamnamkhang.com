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
});
function open_tuvan(){
	window.open("http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en","_blank");
}