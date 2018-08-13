	$(window).scroll(function(){
	if($(window).scrollTop()>=20){
		$("header").addClass("on");
	}
	else{
		$("header").removeClass("on");
	}
});