$(".openMenu").click(function(){
	$(this).toggle();
	//transform: rotate(360deg); transition-duration: 2s
	$(".closeMenu").show();
	$("header").show();
	$("header").animate({
		"marginLeft" : "+=500px"
	},500);
});
$(".closeMenu").click(function(){
	$(this).toggle();
	$(".openMenu").toggle();
	$("header").animate({
		"marginLeft" : "-=500px"
	},800);
	
});