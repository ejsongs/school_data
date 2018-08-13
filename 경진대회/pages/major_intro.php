<link rel="stylesheet" href="/css/major_intro.css">
	
<div class="container">
	<aside>
		<ul>
			<li>게임영상과</li>
			<li>공간정보학과</li>
			<li>유비쿼터스과</li>
		</ul>
	</aside>
	<div class="contents">
		<div class="major">
			<div class="game">
				<h1>게임영상과</h1>
				<hr class="text_under">
				<p class="ex">게임 영상과는 그래픽, 기획, 게임 프로그래밍분야로 구성되어 있다 그래픽분야에선 2D와 3D로 또 한 번 나뉘며 2D에서는 시대에 경향에 맞춰 '대중적인 美' 를 찾아 대중적으로 사람들의 기준을 만족하게 하는 데에 초점을 두며 3D에서는 2D의 퀄리티에 따라는 데에 초점을 두고 모델링 하여 최대한 일치율을 높이는 데에 힘쓴다. 기획분야에선 게임의 전체적인 이야깃거리 구성과 조작키 등을 설계한다. 게임 프로그래밍분야에선 기획이 설계한 걸 실행시키는 일을 한다. 오류가 나지 않는 데에 초점을 둔다.</p>
				<div class="image"><img src="../image/game_king.PNG" alt="마왕의 그녀들" title="마왕의 그녀들"></div>
				<h3>Programs of Study</h3>
				<ul>
					<li><span class="study">&gt; </span> 포토샵 /일러스트</li>
					<li><span class="study">&gt; </span> VR</li>
					<li><span class="study">&gt; </span> 3D</li>
					<li><span class="study">&gt; </span> JAVA</li>
					<li><span class="study">&gt; </span> 안드로이드</li>
					<li><span class="study">&gt; </span> C</li>
					<li><span class="study">&gt; </span> 게임기획</li>
				</ul>
			</div>
			<div class="gps">
				<h1>공간정보학과</h1>
				<hr class="text_under">
				<p class="ex">공간정보학과는 공간정보서비스에 대해 공부하며 공간정보서비스를 app와 web에 접목하는 일들을 한다. 더욱 다양한 종류와 다양한 방법의 공간정보서비스를 제공하는 것에 초점을 맞추고 이를 위해 app와 web에 대한 교육도 이루어진다.</p>
				<div class="image"><img src="../image/map.jpg" alt="지도" title="지도"></div>
				<h3>Programs of Study</h3>
				<ul>
					<li><span class="study">&gt; </span> 위치공간서비스</li>
					<li><span class="study">&gt; </span> 공간실무</li>
					<li><span class="study">&gt; </span> 3D</li>
					<li><span class="study">&gt; </span> JAVA</li>
					<li><span class="study">&gt; </span> 안드로이드</li>
					<li><span class="study">&gt; </span> C</li>
					<li><span class="study">&gt; </span> DRONE</li>
				</ul>
			</div>
			<div class="major_ubi">
				<h1>유비쿼터스과</h1>
				<hr class="text_under">
				<p class="ex">유비쿼터스과에서는 웹, 네트워크, 사물인터넷 분야로 구성되어 있다.웹 분야에서는 말 그대로 웹사이트를 디자인, 구현, 유지보수 등을 하는 일을 공부하며네트워크분야에서는 네트워크를 구현, 유지보수 하는 일을 배우는데 네트워크 파트에서는 보안에 초점을 두고 공부하게 된다.사물인터넷에서는 사람과 물건을 연결해주는 기술을  배우게된다.</p>
				<div class="image"><img src="../image/Ubiquitous.png" alt="사물인터넷" title="사물인터넷"></div>
				<h3>Programs of Study</h3>
				<ul>
					<li><span class="study">&gt; </span> 유비쿼터스</li>
					<li><span class="study">&gt; </span> 네트워크</li>
					<li><span class="study">&gt; </span> IOT</li>
					<li><span class="study">&gt; </span> WEB / APP</li>
					<li><span class="study">&gt; </span> 포토샵 / 일러스트 </li>
					<li><span class="study">&gt; </span> C</li>
					<li><span class="study">&gt; </span> JAVA</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<script>
$(function(){
	$("aside li").click(function(){
		var major_idx = $(this).index();
		$(".major > div").hide();
		$(".major > div:nth-child("+(major_idx+1)+")").show();
	});
});
</script>
