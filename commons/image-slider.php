
<div id="sliderWrap">
	<div id="slideshow">
		<ul id="slides">
			<li>
				<div id="singleSlide">
					<img src="media/images/slider/img1.png" width="450" height="235" alt="Image One" />
					<div class="sliderText">
					<h2>Header 1</h2><hr />
					<div class="desc">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
					</div>
					</div>
				</div>
			</li>
			<li>
				<div id="singleSlide">
				<img src="media/images/slider/img2.png" width="450" height="235" alt="Image Two" />
				<div class="sliderText">
					<h2>Header 2</h2><hr />
					<div class="desc">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
					</div>
					</div>
				</div>
			</li>
			<li>
				<div id="singleSlide">
				<img src="media/images/slider/img3.png" width="450" height="235" alt="Image Three" />
				<div class="sliderText">
					<h2>Header 3</h2><hr />
					<div class="desc">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
					</div>
					</div>
				</div>
			</li>
			<li>
				<div id="singleSlide">
				<img src="media/images/slider/img4.png" width="450" height="235" alt="Image Four" />
				<div class="sliderText">
					<h2>Header 4</h2><hr />
					<div class="desc">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
					</div>
					</div>
				</div>
			</li>
		</ul>
				
		<div id="sliderButtons">
			<ul>
				<li class="red"><a href="#">Minor in AAST</a></li>
			</ul>
		</div>
				
	</div>
	<ul id="pagination" class="pagination">
		<li onclick="slideshow.pos(0)"></li>
		<li onclick="slideshow.pos(1)"></li>
		<li onclick="slideshow.pos(2)"></li>
		<li onclick="slideshow.pos(3)"></li>
		<!-- <li id="pausePlay"><a onclick="javascript.pausePlay()"></a></li> -->
	</ul>
	<div id="control" class="pause"><a href=""></a></div>
	
<script type="text/javascript">
			var clicked = false;
			var btn = document.getElementById("control");
			btn.onclick = test;			
			function test() {
				clicked = !clicked;
				if(clicked)
				{
					btn.className = "play";
					slideshow.pause();
				}
				else
				{
					btn.className = "pause";
					slideshow.auto();
				}
				
			}
		</script>

<script type="text/javascript">
var slideshow=new TINY.fader.fade('slideshow',{
	id:'slides',
	auto:3,
	resume:true,
	navid:'pagination',
	activeclass:'current',
	visible:true,
	position:0
});
</script>
</div>
