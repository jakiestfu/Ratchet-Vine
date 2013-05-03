<?PHP require 'includes/header.php'; ?>
	
	<div id="content">
	
		<!-- Make sure all your bars are the first things in your <body> -->
		<header class="bar-title">
			<button class="button" id="toggle-left">Menu</button>
			<h1 class="title">Feed</h1>
			<button class="button" id="toggle-right">Chat</button>
		</header>
		
		<!-- Wrap all non-bar HTML in the .content div (this is actually what scrolls) -->
		<div class="content">
			
			<div class="feed">
				<?PHP for($i=0; $i<10; $i++){ ?>
				<div class="entry">
					
					<div class="media"><a href="#"><img src="static/img/placeholders/600.gif"></a></div>
					<div class="the-post">
						<div class="avatar">
							<a href="#"><img src="static/img/placeholders/40.gif"></a>
						</div>
						<div class="entry-content">
							<div class="author">
								<a href="#">jakiestfu</a>
								<span><?PHP echo ($i+1); ?>h</span>
							</div>
							<div class="excerpt">Venice</div>
							
							<hr />
							
							<div>
								<a href="#"><?PHP echo rand(500,10000); ?> people</a> like this
							</div>
							
							<hr />
							
							<div>
								<a href="#" class="light">See <?PHP echo rand(50,200); ?> older comments</a>
							</div>
							
							<div class="comments">
							
								<div><a href="#">Username123</a> CHECK OUT MY POSTS SHOW ME SOME LOVE! #######!!!!!!!!! I'LL FOLLOW BACK! LIKE MY POSTS AND ILL LIKE YOURS!!</div>
								<div><a href="#">Sara McIntyre</a> Heeey everyone please take one minute of your boring life to check out my posts! Then follow me.</div>
								<div><a href="#">Guy Rostein</a> Follow for follow</div>
								
								<div><a href="#">Username123</a> CHECK OUT MY POSTS SHOW ME SOME LOVE! #######!!!!!!!!! I'LL FOLLOW BACK! LIKE MY POSTS AND ILL LIKE YOURS!!</div>
								<div><a href="#">Sara McIntyre</a> Heeey everyone please take one minute of your boring life to check out my posts! Then follow me.</div>
								<div><a href="#">Guy Rostein</a> Follow for follow</div>
							
							</div>
						</div>
					</div>
				</div>
				<?PHP } ?>
			</div>
			
		</div>
	</div>
<?PHP require 'includes/footer.php'; ?>