
// /* 변수선언 */

// 	//슬라이드 
// 		var page = 0 , max = $(".menuSlide li").length-1, width=300;

// /* 메뉴 리스트 */
// $(".menuListBox li").click(function(){

// 	$.ajax({
// 		url: './api/menulist.php',
// 		method:'POST',
// 		success:function(data){
// 			// JSON.parse(string);
// 			data = JSON.parse(data);
// 			var str = '';
// 			for (var index in data){
// 				// debugger;
// 				str += '<li>'+data[index]+'</li>';
// 			}
// 			$(".menuList").html('<ul>' +str + '</ul>');
// 		}

// 	});
// })

// // var o = {
// // 	question: '질문1'
// // }



// // $.ajax({
// // 	url: '',
// // 	method: 'POST',
// // 	data: { key: 'value' }
// // });
// // n




// /* 메뉴 슬라이드 */
