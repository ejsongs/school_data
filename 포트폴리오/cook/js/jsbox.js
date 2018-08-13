// 변수선언 
var box = 1;
var menuLength = $("#steak li").length; 

// 첫번재 ul 
$("#main ul li").click(function(){
	$("#bottom").css("display","none");
	$("#top").css("display" , "block");
})
$("#after ul li").click(function(){
	$("#top").css("display" , "none");
	$("#bottom").css("display" ,"block");
})
// 2번째 addClass now 
$(".menuList li").click(function(){
	$(".menuList li").css("color" ,"black")
	$(this).addClass("nowFood");
	$(this).css("color" , 'red');
	$(".btnBox Button").css("display" , "block");
	var nowIndex = $(this).index();
	console.log(nowIndex);
	
	console.log($(".menuList ul").index())
});

// 메뉴가 3개 이하 일때, 
// if(){
// 		$(".slide button").css("display","none");
// 		$(".slide ul").stop(); 
// 		$(".slide p ").css("display","block");
// 		$(".show").css("display","none");

// 	}else {
// 		$(".slide button").css("display" , "block");
// 	}

/*
	$(function(){
	var page = 0, max = $(".slide_photos li").length-1;
	function prev() {
		if (page != 0){
			slide(--page); 
		} else {
			page = max; 
			slide(max); 
		}
	} 

	function next() {
		if (page != max) {
			slide(++page);
		} else {
			page = 0;
			slide(0); 
		}
	}

	function slide(idx){
		$(".slide_photos").stop().animate({"margin-left" : -(idx*100)+"%"});
		console.log(idx); 
	}
	 setInterval(next,5000);
})
*/
//left
	$(".left").click(function(e){
		box++; 
		var page = $(".slide li").length; 
		console.log(page);
		$(".slide li").removeClass("now");
		$(".slide ul").animate({
			 marginLeft: '-=300px'
		},1500)
	// addClass
		$(".slide li").eq(box).removeClass("now").delay(1200).queue(function(){
			$(this).addClass("now").dequeue();
		});
	});

//right
	$(".right").click(function(e){
		alert("");
		box--; 
		var page = $(".slide li").length; 
		console.log(page);
		$(".slide li").removeClass("now");
		$(".slide ul").animate({
			 marginLeft: '+=300px'
		},1500)
	// addClass
		$(".slide li").eq(box).removeClass("now").delay(1200).queue(function(){
			$(this).addClass("now").dequeue();
		});
	});

//li클릭했을 때 바뀌는 거. 
	$(".hansang").click(function(){
		$(".slide ul ").css("display" ,"none");
		$("#hansang").css("display","block");
	});
	$(".salad").click(function(){
		$(".slide ul ").css("display" ,"none");
		$("#salad").css("display","block");
	});
	$(".pizza").click(function(){
		$(".slide ul ").css("display" ,"none");
		$("#pizza").css("display","block");
	});

	$(".steak").click(function(){
		$(".slide ul ").css("display" ,"none");
		$("#steak").css("display","block");
	});
	$(".pasta").click(function(){
		$(".slide ul").css("display" ,"none");
		$("#pasta").css("display","block");
	});
	$(".pilaf").click(function(){
		$(".slide ul").css("display" ,"none");
		$("#pilaf").css("display","block");
	});
	$(".side").click(function(){
		$(".slide ul").css("display" ,"none");
		$("#side").css("display","block");
	});
	$(".beverage").click(function(){
		$(".slide ul").css("display" ,"none");
		$("#beverage").css("display","block");
	});



