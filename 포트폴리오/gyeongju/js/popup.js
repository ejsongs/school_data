$("button").click(function(){
	$(".popup").css("display","none");
});

$(".festivalList li").click(function(){
	$(".popup").css("display","block");
	$(".popup h3").html($(this).find("p").text());
	$(".popup .text").html($(this).find(".hidden").text());

});

