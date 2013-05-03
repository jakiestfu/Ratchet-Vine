		<div class="snap-drawer snap-drawer-left" id="left-drawer">
			<ul class="list">
				<li class="list-divider">You</li>
				<li><a href="profile.php"><img src="static/img/placeholders/50.gif" class="avatar"> jakiestfu</a></li>
				<li class="list-divider">Templates</li>
				<li><a href="explore.php">Explore</a></li>
				<li><a href="feed.php">Feed</a></li>
				<li><a href="settings.php">Settings</a></li>
				<li class="list-divider">Filler List</li>
				<li>List item 1 <span class="chevron"></span></li>
				<li>List item 2 <span class="chevron"></span></li>
				<li>List item 3 <span class="chevron"></span></li>
				<li>List item 4 <span class="chevron"></span></li>
				<li>List item 5 <span class="chevron"></span></li>
				<li>List item 6 <span class="chevron"></span></li>
				<li>List item 7 <span class="chevron"></span></li>
				<li>List item 8 <span class="chevron"></span></li>
				<li>List item 9 <span class="chevron"></span></li>
				<li>List item 10 <span class="chevron"></span></li>
			</ul>
		</div>
		<div class="snap-drawer snap-drawer-right" id="right-drawer">
			<ul class="list">
				<?PHP for($i=0; $i<20; $i++){ ?>
				<li><a href="profile.php"><img src="static/img/placeholders/50.gif" class="avatar"> Friend Name <?PHP echo $i+1; ?></a> <span class="chevron"></span></li>
				<?PHP } ?>
			</ul>
		</div>