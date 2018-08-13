var height = $(".text").height(); 
var max = $(".text p").length; 
var count = 0; 
console.log(height);
// 마우스 오버, 떠나기했을때 기능 -> text 보이고 지우기. 
$(".list li").mouseover(function(){
	$(this).find(".text").css({"height" :"0" , "padding" : "0 20px" , "transition" : ".5s"});
	$(this).find(".text div").fadeOut("fast");
}); 
$(".list li").mouseleave(function(){
	$(this).find(".text").css({"height" :"70px" , "padding" : "20px" , "transition" : ".5s"});
	$(this).find(".text div").fadeIn("slow");
});

// 팝업창 띄우기 
$(".list li").click(function(){
	// $(this).addClass("A");
	$(".popup").css("display","block");
	// 내용 불러오기 
	$(".popup h3").html($(this).find(".name").text());
	$(".popup h4").html($(this).find(".date").text());
	$(".popup .explain").html($(this).find(".explain").text());

});

// 팝업창 닫기 
$(".close").click(function(){
	$(".popup").css("display","none");
});

setInterval(function(){
	if(count != max+1){
		bright(count);
		count++;
	}
},1200)
function bright(idx){
	if(idx != max){
		for (i = 0; i<5; i++){
			console.log(i);
			$(".loop p").eq(idx).toggleClass('bright').delay(200).queue(function(){
				$(".loop p").eq(idx).toggleClass('bright').dequeue();
			});
		}
	}else{
		$(".loop p").toggleClass("bright");
	}
}

$(".portfolio li").click(function(){
	var nowClass = $(this).find("span").text();
	console.log(nowClass+".jpg");
	$(".popup .image img").attr('src', "./image/"+nowClass+".png");
	// $(".popup h3").closest("a").attr("href" , "../"+nowClass+"/index.php");
	// console.log(nowClass);
		$(".view").find("a").attr("href" , "../"+nowClass+"/index.php");
		$(".view").click(function(){
			// console.log(nowClass);
			$(this).find("a").attr("href" , "../" +nowClass+ "/index.php");
			
		});
});

// popup 의 배경 클릭시 닫히는 기능
$(".popup").click(function(e){
	var $target = $(e.target).hasClass("bg");
	if($target === true){
		$(".popup").hide();
	}
	console.log($target);
});

// document.querySelector(".popup").addEventListener('click', function(e){
// 	console.log(e)
// })
