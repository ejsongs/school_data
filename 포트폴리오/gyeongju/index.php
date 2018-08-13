
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
	<title>Gyeongju</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="./js/jquery.bxslider.js"></script>
	<link href="./css/jquery.bxslider.css" rel="stylesheet" />

	<link rel="stylesheet" href="./css/index.css">
	<link rel="stylesheet" href="./css/common.css">

</head>
<body>
	<div class="wrap">
        <?php 
        include "./layout/header.php";
     ?>
	<!-- content -->
        <div class="slide_box">
        <h1 class="slide_text hidden">경주 </h1>
        	<div class="slide_view">
        		<ul class="bxslider">
        			<li id="slide1">
        				<span class="out">동궁</span>
        				
        			</li>
        			<li id="slide2">
        				<span class="out"></span>
        				
        			</li>
        			<li id="slide3">
        				<span class="out">경주 한옥</span>
        				
        			</li>
        			<li id="slide4">
        				<span class="out"></span>
        				
        			</li>
        			<li id="slide5">
        				<span class="out"></span>
        			
        			</li>
        			<li id="slide6">
        				<span class="out"></span>
        				
        			</li>
        			<li id="slide7">
        				<span class="out"></span>
        				
        			</li>
        			<li id="slide8">
        				<span class="out"></span>
        				
        			</li>
        			<li id="slide9">
        				<span class="out"></span>
        				
        			</li>
        		</ul>
        	</div>
        </div>
        <!-- div class="content">
        	<ul>
        		<li class="illust">
        			<span>Symbol</span>
					<img src="./img/symbolImg.png" alt="신라시대 이미지 "> 
        		</li>
        		<li class="year">
        			<span>경주로 불린지</span>
        			<div class="callName">935</div>
        		</li>
        		<li class="vision">
					<span>경주는 	</span>
					<div >희망도시</div>
        		</li>
        	</ul>
        </div> -->
     <!--//content-->
	     <?php 
	     	include "./layout/footer.php";
	      ?>
	</div>
    <script src="./js/menu.js"></script>
	<script src="./js/hamburger.js"></script>
	<script>
		$('.bxslider').bxSlider ({
		  mode:'horizontal', //default : 'horizontal', options: 'horizontal', 'vertical', 'fade'
		  speed:500, //default:500 이미지변환 속도
		  auto: true, //default:false 자동 시작
		  captions: true, // 이미지의 title 속성이 노출된다.
		  autoControls: true, //default:false 정지,시작 콘트롤 노출, css 수정이 필요
		});
	</script>

</body>

</html> 