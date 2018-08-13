// var a = ['a', 'b']

// var j = {
// 	'key': 'value'
// }

function getRandomNumber(){
	var n = Math.floor( Math.random() * (quizes.length) );
	if ( n === num ){
		return getRandomNumber();
	}
	return n;
}


//퀴즈문제와 답 변수 
var quizes = [
	{
		'question': '때리면 살고 안 때리면 죽는것은?',
		'answer': '팽이' ,
		'explain' : '팽이는 때리지 않고 있으면 쓰러집니다.'
	},
	{
		'question': '소가 이민을 가면??',
		'answer': '이민우' , 
		'explain' : '이민을 간 소(소 우,牛).'
	}, 
	{
		'question' : '펭귄이 다니는 중학교는?',
		'answer' : '냉방중' , 
		'explain' : '냉방중中 학교.'
	},
	{
		'question' : '모든 사람이 어쩔수 없이 먹는 것은?',
		'answer' : '나이',
		'explain' : '우리 모두 한살 한살 나이를 먹습니다. '
	},
	{
		'question' : '텔레토비 	뽀와 헤어질 때 하는 말은? ',
		'answer' : '뽀빠이',
		'explain' : '뽀 BYE'
	},
	{
		'question' : '사람이 가장 많이 말하는 소리는?',
		'answer' : '숨소리',
		'explain' : '사람은 평생 숨을 쉬면서 삽니다. '
	},{
		'question' : '떡 중에 가장 빨리 먹는 떡은?',
		'answer' : '헐레벌떡',
		'explain' : '급하게 헐레벌떡 먹으니 헐레벌"떡"'
	},{
		'question' : '사람들이 가장 좋아하는 물은?',
		'answer' : '선물',
		'explain' : '선물 싫어하는 살마 있으신가요?'
	},{
		'question' : '사람들이 즐겨 먹는 피는?',
		'answer' : '커피',
		'explain' : '매일 한잔 씩 마시는 커피~'
	},{
		'question' : '매일 잠만 자는 소는?',
		'answer' : '주무소',
		'explain' : '빨리 주무소(소 우, 牛)'
	},{
		'question' : '갓은 갓인데 못쓰는 갓은?',
		'answer' : '쑥갓',
		'explain' : '쑥갓은 채소라 머리에 쓸 수 없어요'
	},{
		'question' : '화가 날 때 쓰는 알파벳은?',
		'answer' : 'A',
		'explain' : '화날 때 하는 말"에이!(A)" '
	},{
		'question' : '차도녀의 반대말은?',
		'answer' : '인도녀',
		'explain' : '차도의 반대말은 인도'
	},{
		'question' : '차가운 물이 나오지 않는 지하철 역은?',
		'answer' : '온수역',
		'explain' : '온수(뜨거운 물)만 나와서 온수역?'
	},{
		'question' : '가까이 있지만 서로 못 보는 것은?',
		'answer' : '눈',
		'explain' : '왼쪽, 오른쪽 눈은 가깝지만 서로 볼 수 없다.'
	}
];

//퀴즈의 max값
var max = quizes.length; 
//퀴즈의 배열 
var num = getRandomNumber();

// 퀴즈를 맞춘 횟수
var passCount = 0;

//h2에 퀴즈의 num 값을 써줌. 
$(".quiz h2").html(quizes[num].question); 
//전송 
$("form").submit(function(){
	// alert($(".answer").val());
	//답이 같으면 정답이라고 띄운다. 
	if($(".answer").val() == quizes[num].answer){
		$(".quiz form").hide(); 
		$(".quiz .correct").show();
		$(".check").hide();
	}  else {
		alert("틀렸습니다! 다시 풀어보세요. ");
	}
}); 

//right
$(".right").click(function(){
	if(num === max ){
		alert("마지막 문제였습니다!"); 
	}
	num = getRandomNumber();
	passCount++;
	$(".quiz h2").html(quizes[num].question);
	$(".answer").val(''); 
	$(".quiz form").show(); 
	$(".quiz .correct").hide(); 
	$(".check").show(); 
	
});

// left
$(".left").click(function(){
	num--;
	$(".quiz h2").html(quizes[num].question);
	$(".answer").val(''); 
	$(".quiz form").show(); 
	$(".quiz .correct").hide(); 
	$(".check").show(); 
});

// 정답버튼
$(".check button").click(function(){
	alert(quizes[num].answer +" : " + quizes[num].explain); 
	num = getRandomNumber();
	passCount++;
	$(".quiz h2").html(quizes[num].question);
	$(".answer").val(''); 
});


// var todaysDateDestination = getTodaysDateDestination();
// function getTodaysDateDestination() {
// 	var date = ['수유' , '쌍문' ,'노원'];
// 	var today = Math.floor(Math.random() * date.length);
// 	return date[today]; 
// }
// console.info("오늘의 데이트는" + todaysDateDestination + "에서 하겠습니다. ");

