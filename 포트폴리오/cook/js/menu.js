var listlength = $(".menuList li").length;
var firstSlice = $(".menuList li").slice(4).css("display" , "none");
var menulistBoxli = $(".menulistBox > li");
console.log(listlength);
// 4개를 제외한 모든것을 dis :none;
$(".menuList li").slice(4).css("display" , "none");

$(".menuListBox > ul > li").click(function(){
	var first = $(this).index()*4;
	var last = first + 4   ; 
	$(".menuList li").css("display" , "none");
	$(".menuList li").slice(first,last).css("display" , "block");
	console.log(first);
	console.log(last);

});
$(".menuListBox > ul>  li").click(function(){
	$(".menuListBox li").removeClass("bright");
	$(this).addClass("bright");
});
;

	// 특정 뮨자열 찾기 
	//$("h4:contains('한상')").parents("li").addClass("show");
