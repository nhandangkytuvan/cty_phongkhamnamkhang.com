$(document).ready(function() {
	$('.home .row5 .flex2col2 .flex4col1 a').hover(function() {
		var index = $(this).parents('.home .row5 .flex2col2 div.flex4col1').index();
		$(this).addClass('active');
		$(this).parents('.home .row5 .flex2col2 div.flex4col1').siblings('div').find('a').removeClass('active');
		$('.home .row5 .tab-contents-1 >div').eq(index).addClass('active');
		$('.home .row5 .tab-contents-1 >div').eq(index).siblings('div').removeClass('active');
		// $('.home .row6 .flex1col2').children('div').eq(index).addClass('active');
		// $('.home .row6 .flex1col2').children('div').eq(index).siblings('div').removeClass('active');
	}, function() {
		
	});
});
// function open_tuvan(){
// 	window.open("http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en","_blank");
// }