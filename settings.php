<?PHP require 'includes/header.php'; ?>
	
	<div id="content">
	
		<!-- Make sure all your bars are the first things in your <body> -->
		<header class="bar-title">
			<button class="button" id="toggle-left">Menu</button>
			<h1 class="title">Settings</h1>
			<button class="button" id="toggle-right">Chat</button>
		</header>
		
		<!-- Wrap all non-bar HTML in the .content div (this is actually what scrolls) -->
		<div class="content">
			
			<div class="settings">
				
				<div class="center">
					<img src="static/img/jakiestfu.jpeg" class="profile-image">
				</div>
				
				<form>
					
					<div class="group main">
						<div><input type="text" class="bold" value="Jacob Kelley"></div>
						<div><textarea>Lead Developer at Dyrdek Enterprises. I code and shit</textarea></div>
						<div><input type="text" value="Los Angeles, CA"></div>
					</div>
					
					<h5>Account</h5>
					<div class="group">
						<div>
							<label>Email</label>
							<input type="text" value="Enter Email">
						</div>
						<div>
							<label>Phone</label>
							<input type="text" value="Enter phone number">
						</div>
						<div>
							<a href="#">
								<label>Reset Password</label>
								<span class="chevron"></span>
							</a>
						</div>
					</div>
					
					<h5>Friends</h5>
					<div class="group">
						<div>
							<a href="#">
								<label>Find people</label>
								<span class="chevron"></span>
							</a>
						</div>
						<div>
							<a href="#">
								<label>Invite via text</label>
								<span class="chevron"></span>
							</a>
						</div>
						<div>
							<a href="#">
								<label>Invite via email</label>
								<span class="chevron"></span>
							</a>
						</div>
					</div>
					
					<h5>Social Networks</h5>
					<div class="group">
						<div>
							<label>Twitter</label>
							<input type="text" value="Connected">
						</div>
						<div>
							<label>Facebook</label>
							<input type="text" value="Connected">
						</div>
					</div>
					
					<h5>Support</h5>
					<div class="group">
						<div>
							<a href="#">
								<label>Feedback</label>
								<span class="chevron"></span>
							</a>
						</div>
						<div>
							<a href="#">
								<label>Terms of Service</label>
								<span class="chevron"></span>
							</a>
						</div>
						<div>
							<a href="#">
								<label>Privacy Policy</label>
								<span class="chevron"></span>
							</a>
						</div>
						<div>
							<a href="#">
								<label>Attribution</label>
								<span class="chevron"></span>
							</a>
						</div>
					</div>
					
					<a href="#" class="big-button warning">Log Out</a>
					
				</form>
				
			</div>
			
			
		</div>
	</div>
<?PHP require 'includes/footer.php'; ?>