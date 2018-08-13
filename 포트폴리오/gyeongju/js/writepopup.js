$("#write").click(function(){
	console.log("a");
	$(".popupbg").css("display","block");
});
$("#finish").click(function(){
	alert("감사합니다.");
});
$("#exit").click(function(){
	$(".popupbg").css("display","none");
});

$("input").focus(function(){
	$(this).val("");
});
$("textarea").focus(function(){
	$(this).val("")
});

