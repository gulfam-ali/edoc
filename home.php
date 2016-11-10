<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	
	<link rel=stylesheet href="bs/css/bootstrap.min.css">
	<link rel=stylesheet href="css/common.css">
	<title>Welcome</title>
	
	<style>
		body{
			font-family:'open sans';
			background:#f0f0f0;
			z-index:1;
		}
		#welcome-img{
			background:url('img/new.jpg') no-repeat;
			background-size:cover;
			overflow:hidden;
			padding:10em 0;
		}
		
		#site-logo{
			font-size:2.2em;
			font-family:'open sans semibold';
			font-weight:800;
			color:#009688;
			text-shadow:0pt 0pt 0pt #009688;
		}
		a:hover{
			text-decoration:none;
		}
		.glyphicon{
			font-size:1.6em;
			color:#555;
		}
		#head-bar .glyphicon{
			color:#777;
			font-size:1.2em;
		}
		.lead{
			font-size:1.2em;
			font-weight:400;
			color:#666;
		}
		
		#login-signup a{
			padding:0.84em 0.4em;
			color:#fff;
		}
		
		#login-signup a:hover{
			text-decoration:none;
			background:#2196f3;
			text-shadow:0pt 0pt 1pt #09f;
		}
		
		#nav-side-md{
			list-style: none;
			margin: 0;
			padding: 1em 0 1em 1.2em;
			font-size:1.1em;
			margin-left: -18px;
		}
		
		
		#nav-side-md li{
			padding:0.6em 1.4em;
			border-left:0.4em solid #f0f0f0;
		}
		#nav-side-md li:hover{
			background:#ddd;
			border-left:0.4em solid #07f;
			color:#009688;
		}
		#nav-side-md a li{
			color:#555;
		}
		#nav-side-md a:hover{
			text-decoration:none;
		}
		
		#nav-side-md #active{
			color:#009688;
			border-left:0.4em solid #07f;
		}
		
		#nav-side-md .glyphicon{
			font-size:1.1em;
		}
	</style>
</head>

<body>

<div id=header class="container" style="background:#fff;border-bottom:0.1pt solid #eee;margin:0 auto;width:100%;padding:0.2em 2em;">
	<div class="row">
		<div class="col-md-4" id=site-logo>edoc</div>
		<div class="col-md-4"></div>
		<div id="login-signup" class="col-md-4" style="text-align:right;line-height:2.6em;font-size:1.3em;">
			<a href="#">Logout</a>
		</div>
	</div>
</div>

<div id="head-bar" style="background:#fdfdfd;z-index:999;border-bottom:0.1pt solid #ddd;margin:0 auto;width:100%;padding:0.4em 2em;box-shadow: 0pt 1pt 2pt #999;">
	<div class="row">
		<div class="col-md-4">
			<button class="btn btn-link"><span class="glyphicon glyphicon-plus"></span></button>
		</div>
		
		<div class="col-md-4"></div>
		
		<div class="col-md-4" style="text-align:right;vertical-align:middle;">
			
			
			<input type="text" name="find-name" style="background:#fff;border:0.1pt solid #d4d4d4;padding:0.4em;font-family:'Helvetica';color:#009688;border-radius:0.2em;">
			<button class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>

			<button class="btn btn-link"><span class="glyphicon glyphicon-cog"></span></button>
		</div>
	</div>
</div>

<div id="wrapper" class="row" style="background:#f0f0f0;bottom:0pt;margin:0 auto;">

	<div class="col-md-2 col-sm-3" style="min-height:80%;background:#f0f0f0;z-index:1;bottom:0pt;border-right:0.1pt solid #ddd;padding:0;">
		<div id=left-nav-container style="font-size:1em;font-family:'open sans';font-weight:400;">
			<ul id="nav-side-md" class="hidden-xs">
					
				<a href="activity.php"><li id="active"><span class="glyphicon glyphicon-hdd"></span> &nbsp; My edoc</li></a>
				<br />
				<a href="activity.php"><li ><span class="glyphicon glyphicon-user"></span> &nbsp; My Profile</li></a>
				<a href="profile.php"><li ><span class="glyphicon glyphicon-tasks"></span> &nbsp; Edit Profile</li></a>
						
				<br />
				<a href="pin-stories.php"><li ><span class="glyphicon glyphicon-share"></span> &nbsp; Shared with me</li></a>
				<a href="pin-stories.php"><li ><span class="glyphicon glyphicon-star"></span> &nbsp; Starred</li></a>
				
				<a href="pin-stories.php"><li ><span class="glyphicon glyphicon-check"></span> &nbsp; Delete Multiple</li></a>
				<a href="pin-stories.php"><li ><span class="glyphicon glyphicon-trash"></span> &nbsp; Trash</li></a>
			
			</ul>
		</div>
	</div>
	
	<div class="col-md-10" id="main-space" style="min-height:80%;background:#fff;">
		<div class="row" id="file-attributes-head" style="font-family:'open sans semibold';font-size:1.1em;background:#f4f4f4;border-bottom:0.1pt solid #ddd;padding:0.8em 2em;">
			<div class="col-md-7">Name</div>
			
			<div class="col-md-2">Last Modified</div>
			
			<div class="col-md-1" style="text-align:right;vertical-align:middle;">File Size</div>
			
			<div class="col-md-2" style="text-align:right;vertical-align:middle;">Share/Delete</div>
		</div>
		
		<?php
		for($i=1;$i<10;$i++)
		{
		?>
		<div class="row" style="border-bottom:0.1pt solid #eee;padding:0.6em 2em;color:#666;">
			<div class="col-md-7">
				<a href="#">How to get started with drive</a>
			</div>
			
			<div class="col-md-2"> Aug 27, 2017</div>
			
			<div class="col-md-1" style="text-align:right;vertical-align:middle;">
				3.5 MB
			</div>
			
			<div class="col-md-2" style="font-size:0.8em;text-align:center;">
				<span class="glyphicon glyphicon-share-alt"></span>
				&nbsp;&nbsp;&nbsp;&nbsp;
				<span class="glyphicon glyphicon-trash"></span>
			</div>
		</div>
		<?php
		}
		
		?>
	</div>
	
</div>



</body>

</html>