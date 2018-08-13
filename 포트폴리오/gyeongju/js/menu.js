function change() {
	var nowCategori = $("#foodCategori").val();
	console.log(nowCategori);
	$(".foodList li").hide();
	$(".foodList").find("."+nowCategori).show();
}

// var nowCategori = $("#foodCategori option:selected").val();
var nowCategori = $("#foodCategori").val();
console.log("기존 : "+nowCategori)
$(".foodList").find("."+nowCategori).show();


