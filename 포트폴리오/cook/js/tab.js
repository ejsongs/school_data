$(".faqTab").click(function(){
	$(".notice").css("display","none");
	$(".faq").css("display","block");
});

$(".noticeTab").click(function(){
	$(".faq").css("display","none");
	$(".notice").css("display","block");
	
});
$(".tab li").click(function(){
	$(".tab li").removeClass("now");
	$(this).addClass("now");
	$(".now").find("")
});

$(".arrow img").click(function(){
	$(".bottomList").removeClass("now");
	$(".answer").css("display","none");
	$(this).parents(".bottomList").addClass("now");
	$(".now .answer").css("display","block");
});
 $(".bottom .title").click(function(){
 	$(".bottomContent").hide();
 	$(this).parents(".noticeList").find(".bottomContent").show(); 
 });