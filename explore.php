<?PHP require 'includes/header.php'; ?>
	
	<div id="content">
	
		<!-- Make sure all your bars are the first things in your <body> -->
		<header class="bar-title">
			<button class="button" id="toggle-left">Menu</button>
			<h1 class="title">Explore</h1>
			<button class="button" id="toggle-right">Chat</button>
		</header>
		
		<div class="bar-standard bar-header-secondary">
			<input type="text" placeholder="Search people or tags">
		</div>
		
		<!-- Wrap all non-bar HTML in the .content div (this is actually what scrolls) -->
		<div class="content">
			
			<ul class="list main-list">
				<li>
					<a href="#">
						<strong>Editor's Picks</strong>
						<span class="chevron"></span>
					</a>
				</li>
				<li>
					<a href="#">
						<strong>Popular Now</strong>
						<span class="chevron"></span>
					</a>
				</li>
			</ul>
	
			<div class="media-grid">
				<div class="row">
					<div class="one-third">
						<a href="#"><img src="static/img/placeholders/95.gif"></a>
					</div>
					<div class="one-third">
						<a href="#"><img src="static/img/placeholders/95.gif"></a>
					</div>
					<div class="one-third">
						<a href="#"><img src="static/img/placeholders/95.gif"></a>
					</div>
				</div>
				<div class="row">
					<div class="one-third">
						<a href="#"><img src="static/img/placeholders/95.gif"></a>
					</div>
					<div class="one-third">
						<a href="#"><img src="static/img/placeholders/95.gif"></a>
					</div>
					<div class="one-third">
						<a href="#"><img src="static/img/placeholders/95.gif"></a>
					</div>
				</div>
			</div>
	
			<div class="separator">Trending</div>
			
			<table class="link-table">
				<tr>
					<td><a href="#" class="block-link">#EarthDay</a></td>
					<td><a href="#" class="block-link">#Monday</a></td>
				</tr>
				<tr>
					<td><a href="#" class="block-link">#math</a></td>
					<td><a href="#" class="block-link">#happyearthday</a></td>
				</tr>
				<tr>
					<td><a href="#" class="block-link">#mondays</a></td>
					<td><a href="#" class="block-link">#photography</a></td>
				</tr>
				<tr>
					<td><a href="#" class="block-link">#class</a></td>
					<td><a href="#" class="block-link">#LoPriore</a></td>
				</tr>
				<tr>
					<td><a href="#" class="block-link">#Finals</a></td>
					<td><a href="#" class="block-link">#model</a></td>
				</tr>
				<tr>
					<td><a href="#" class="block-link">#Sunshine</a></td>
					<td><a href="#" class="block-link">#CaliLife</a></td>
				</tr>
			</table>
			
		</div>
	</div>
	<?PHP require 'includes/footer.php'; ?>