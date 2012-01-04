<?php
session_start();

if (empty($_SESSION[username]) AND empty($_SESSION[passuser])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=index.php><b>LOGIN</b></a></center>";
}
else{
include "content.php";
?>
<!DOCTYPE HTML>
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Admin Panel</title>
	
	<!-- Imports General CSS and jQuery CSS -->
	<link href="css/screen.css" rel="stylesheet" media="screen" type="text/css" />
	
	<!-- CSS for Fluid and Fixed Widths - Double to prevent flickering on change -->
	<link href="css/fixed.css" rel="stylesheet" media="screen" type="text/css" />
	<link href="css/fixed.css" rel="stylesheet" media="screen" type="text/css" class="width" />
	
	<!-- CSS for Theme Styles - Double to prevent flickering on change -->
	<link href="css/theme/blue.css" rel="stylesheet" media="screen" type="text/css" />
	<link href="css/theme/blue.css" rel="stylesheet" media="screen" type="text/css" class="theme" />
	
	<!-- jQuery thats loaded before document ready to prevent flickering - Rest are found at the bottom -->
	<script type="text/javascript" src="js/jquery-1.4.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.cookie.js"></script>
	<script type="text/javascript" src="js/jquery.styleswitcher.js"></script>
	<script type="text/javascript" src="js/jquery.visualize.js"></script>
	
</head>

<body>

<!-- Start: Page Wrap -->
<div id="wrap" class="container_24">
	
	
	<!-- Header Grid Container: Start -->
	<div class="grid_24">
		
		<!-- User Panel: Start -->
		<div id="userpanel">
			
			<!-- User: Start -->
			<ul id="user" class="dropdown">
				<li class="topnav">
					<!-- User Name -->
					<a href="#" class="top icon user"><?php echo"$_SESSION[namalengkap]";?></a>
					
					<!-- User Dropdown Content: Start -->
					<ul class="subnav">  
			            <li><a href="forms.html" class="icon settings">Settings</a></li>  
			            <li><a href="#messages" class="icon chatbubbles popup">Messages</a></li> 
			            <li><a href="logout.php" class="icon lock">Log out</a></li>  
			        </ul>  
			        <!-- User Dropdown Content: End -->
				</li>
			</ul>
			<!-- User: End -->
			
			<!-- Messages: Start -->
			<ul class="messages">
				<!-- Messages amount with Popup and Tip -->
				<li><a href="#messages" class="newmsg tip popup" title="16 Messages"> <span>16</span></a></li>
			</ul>
			<!-- Messages: End -->
			
			<!-- Messages Popup Content: Start -->
			<div class="box_content padding hide" id="messages">
				<form>	
				  
					<!-- Message From User: Start -->
					<h6>
						<span class="icon user"></span> <a href="#">Jenny</a> <span class="nobold">says</span>
						<small class="right grey nobold">2 hours ago</small> 
					</h6>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit,
						sed do eiusmod tempor incididunt ut labore et dolore magna 
						aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
					</p> 
					<!-- Message From User: End -->
					
					<!-- Message From User: Start -->
					<h6>
						<span class="icon user"></span> <a href="#">Jenny</a> <span class="nobold">says</span>
						<small class="right grey nobold">15 hours ago</small> 
					</h6>
					<p>
						Sed do eiusmod tempor incididunt ut labore et dolore magna 
						aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
					</p>
					<!-- Message From User: End -->
					
					<!-- Quick Reply: Start -->
					<div class="field">
						<label>
							<span class="icon chatbubbles"></span>
							Quick Reply
						</label>
						<textarea cols="50" rows="7"></textarea>
					</div>
				  
				  <button>Send</button>
				  <button class="secondary" type="reset">Reset</button>
				  <button disabled="">Disabled Button</button>
				  <!-- Quick Reply: End -->
				  
			    </form>
			</div>
			<!-- Messages Popup Content: End -->
									
		</div>
		<!-- User Panel: End -->
		
		<!-- Header: Start -->
		<div id="header">
				
			<!-- Logo: Start -->
			<a href="dashboard.html" id="logo">Simplpan - Admin Panel</a>
			<!-- Logo: End -->
			
			<!-- Navigation: Start -->
			<ul id="navigation" class="dropdown">
				<li><a class="dashboard active" href="dashboard.html">Dashboard</a></li>
				
				<!-- Navigation Dropdown Menu Item: Start -->
				<li class="topnav">
					<a class="frames" href="#">Category</a>
					
					<!-- Navigation Dropdown Menu Item Content: Start -->
					<ul class="subnav">
						<li><a href="typography.html" class="icon pages">New Category</a></li> 
			            <li><a href="grid.html" class="icon blocks">All Categories</a></li>  
			        </ul> 
			        <!-- Navigation Dropdown Menu Item Content: End --> 
				</li>
				<!-- Navigation Dropdown Menu Item: End -->
				
				<!-- Navigation Dropdown Menu Item: Start -->
				<li class="topnav">
					<a class="pages" href="#">Pages</a>
					
					<!-- Navigation Dropdown Menu Item Content: Start -->
					<ul class="subnav">
			            <li><a href="accordion.html" class="icon pages">New Page</a></li>  
			            <li><a href="tabs.html" class="icon blocks">All Pages</a></li>
			              
			        </ul>  
			        <!-- Navigation Dropdown Menu Item Content: End --> 
				</li>
				<!-- Navigation Dropdown Menu Item: End -->
				
				<!-- Navigation Menu Item: Start -->
				<li class="topnav">
					<a class="pictures" href="gallery.html">Gallery</a>
					<ul class="subnav">
						<li><a href="#" class="icon pages">Add New Images</a></li>
						<li><a href="#" class="icon blocks">All Images</a></li>
					</ul>
				</li>
				<!-- Navigation Menu Item: End -->
			</ul>
			<!-- Navigation: End -->
			
		</div>
		<!-- Header: End -->
		
		<!-- Breadcrumb Bar: Start -->
		<div id="breadcrumb">
			
			<!-- Breadcrumb: Start -->
			<ul class="left">
				<li class="icon dashboard"><a href="#">Dashboard</a></li>
			</ul>
			<!-- Breadcrumb: End -->
			
			<!-- Breadcrumb Icon Links: Start -->
			<ul class="right">
				<li><a href="#" class="icon support tip" title="FAQ">FAQ</a></li>
				<li><a href="#" class="icon home tip" title="Home">Home</a></li>
			</ul>
			<!-- Breadcrumb Icon Links: End -->
			
		</div>
		<!-- Breadcrumb Bar: End -->
		
	</div>
	<!-- Header Grid Container: End -->


<!-- 100% Box Grid Container: Start -->
<div class="grid_24">
	<?php
		$s = $_GET['validity'];		
		if(empty($s)){
			echo"<div class=\"notice info\"><p>Belum ada pluginsnya BROW!</p></div>";
		}else{
			content($s);	
		}
	?>	
</div>
<!-- 100% Box Grid Container: End -->

<!-- Footer Grid: Start -->
<div class="grid_24">

	<!-- Footer: Start -->
	<div id="footer">
		
		<p class="left">
			Copyright &#169; 2011 <a href="http://www.bintangkreatif.com">Bintang Kreatif</a>.
		</p>
		
		<!-- Footer Icon Navigation: Start -->
		<ul class="right">
			<li><a href="#" class="icon dashboard tip active" title="Dashboard">Dashboard</a></li>
			<li><a href="#" class="icon pages tip" title="Pages">Pages</a></li>
			<li><a href="#" class="icon users tip" title="Users">Users</a></li>
			<li><a href="#" class="icon settings tip" title="Settings">Settings</a></li>
			<li><a href="#" class="icon support tip" title="Support">Support</a></li>
			<li><a href="#" class="icon home tip" title="Home">Home</a></li>
		</ul>
		<!--Footer Icon Navigation: End -->
		
	</div>
	<!-- Footer: End -->
	
</div>
<!-- Footer Grid: End -->

</div>
<!-- End: Page Wrap -->

	<!-- jQuery libs - Rest are found in the head section (at top) -->
	<script type="text/javascript" src="js/jquery.visualize-tooltip.js"></script>
	<script type="text/javascript" src="js/jquery-animate-css-rotate-scale.js"></script>
	<script type="text/javascript" src="js/jquery-ui-1.8.13.custom.min.js"></script>
	<script type="text/javascript" src="js/jquery.poshytip.min.js"></script>
	<script type="text/javascript" src="js/jquery.quicksand.js"></script>
	<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="js/jquery.facebox.js"></script>
	<script type="text/javascript" src="js/jquery.uniform.min.js"></script>
	<script type="text/javascript" src="js/jquery.wysiwyg.js"></script>
	<script type="text/javascript" src="js/syntaxHighlighter/shCore.js"></script>
	<script type="text/javascript" src="js/syntaxHighlighter/shBrushXml.js"></script>
	<script type="text/javascript" src="js/syntaxHighlighter/shBrushJScript.js"></script>
	<script type="text/javascript" src="js/syntaxHighlighter/shBrushCss.js"></script>
	<script type="text/javascript" src="js/syntaxHighlighter/shBrushPhp.js"></script>
	
	<!-- jQuery Customization -->
	<script type="text/javascript" src="js/custom.js"></script>

</body>
</html>
<?php
}
?>