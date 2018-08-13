// 변수선언
var i ,j; 
var allNum = []; // 0-9(처음 만들어진 수 )
var resultNum = [];  //랜덤함수의 배열 
var randomNum;  //만들어진 랜덤함수 
var userNum = [];  // 사용자가 입력한 랜덤수 
var copyResultNum = resultNum; 
var strike = 0; 
var ball = 0; 
var list = 0;

// 개선해야할 것 
/*
	1. for문으로 랟덤함수 자리 찾기 
*/


// 함수, 기능 
// 게임 실행

// 중복없는 난수 생성. 
	for (i = 0; i <10; i++){
		allNum.push(i);
	}
	
	for (i = 0; i<4; i++){

		randomNum = Math.floor(Math.random()*allNum.length);
		resultNum.push(allNum[randomNum]);
		allNum.splice(randomNum,1);
		
	} 
	console.log(resultNum); 
	
	// 랜덤값 자리
		// var ran1 = copyResultNum.splice(0,1); 
		// var ran2 = copyResultNum.splice(0,1); 
		// var ran3 = copyResultNum.splice(0,1); 
		// var ran4 = copyResultNum.splice(0,1); 

	// consle
	// console.log(allNum);
	// console.log(ran1 , ran2, ran3, ran4 ); 




// 확인버튼 눌렀을때, 
function check(){
// 변수선언
	var num1 = $("#one").val(); 
	var num2 = $("#two").val();
	var num3 = $("#three").val();
	var num4 = $("#four").val();
	var userNum = parseInt(userNum);

	
	var x = num1;
	var y = num2;
	var z = num3;
	var i = num4; 

	var strike = 0; 
	var ball = 0; 

// 숫자로 변환. 
	num1 = parseInt(num1);
	num2 = parseInt(num2);
	num3 = parseInt(num3);
	num4 = parseInt(num4);	

//사용자가 입력한 숫자들을 모음. 
	userNum = [num1, num2, num3, num4]; 
	// console.log(userNum);
	console.log(x,y,z,i )
// 빈자리가 없는지 검사 합니다. 
	if(x===""||y===""||z===""||z===""||i===""){
		alert("숫자를 입력하세요. "); 
	}
// out, homerun 
	$("form input").on("keyup keypress",function(){
		var regNumber = /^[0-9]*$/;
		if(!regNumber.test($(this).val())) {
    		alert("숫자만 입력해라 ");
    	}
	});
// strike , ball 
	for(i=0;i<4;i++){
		for(j=0;j<4;j++){
			if(resultNum[i] == userNum[j]){
				if(i==j){
					strike++
				}else{
					ball++; 
				}
			}
		}
	}
	if(strike == 4){
		alert("homerun!");
	} else if(strike==0 && ball == 0) {
		alert("out"); 
	}
	$("tbody tr").eq(list).find('td').eq(1).text(userNum);
	$("tbody tr").eq(list).find('td').eq(2).text("strike" + strike +", ball: " + ball);
	list++; 
	// console.log("ball : " + ball +", strike: "+ strike)
// input 초기화
	$("form input").val(''); 
	

}

// 포커스 자동이동 
$(function(){
	$("form input").keyup(function(){
		var charLimit = $(this).attr("maxlength");
		if(this.value.length >= charLimit){
			$(this).next("input").focus();
			return false; 
		}
	});
});