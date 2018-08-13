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