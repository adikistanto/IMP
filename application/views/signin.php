<!DOCTYPE html>
<html lang="en">
<head>
	<link href="assets/css/global.css" rel="stylesheet">
	<meta charset="utf-8">
	<title><?php echo $page_title ?> - IMP Undip</title>
</head>
		<link rel="icon" href="assets/images/imp.jpg" type="image/gif"> 
<body>
	<div id="container">
	</div>
	<div id="header">
		<div id="wrapper">
			<div id="logo">
				<img style="margin-top:	15px;width:300px;height:50px"src="assets/images/logo.png" alt="icon-logo">
			</div>
			<div id="menu_header">
				<ul class="menu">
					<!--<li class="menu_tile"><a href="#top">Move Top</a></li>-->
					<li class="menu_tile"><a href="newsadmin">News</a></li>
					<li class="menu_tile"><a href="strukturadmnin">Event</a></li>
					<li class="menu_tile"><a href="programadmin">Program</a></li>
					<li class="menu_tile"><a href="dataadmin">Database</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div id="top"></div>
	
	<div id="wrapper">
				<div id="center_box" style="margin-top:200px;margin-bottom:50px;text-align:left">
					<table style="background:linear-gradient(#F90929, #FC7E7E); padding:20px;box-shadow:3px 3px 3px #888888">
					<form method='POST' action="admin/auth/authenticate">
						<tr><td><h1>login</h1></td></tr>
						<tr><td width="250px" ><input style="width:250px;;height:30px" type=text name='username' placeholder='username'></td></tr>
						<tr><td><input style="width:250px;height:30px" type=password name='password'placeholder='password'></td></tr>
						<tr><td><input type=submit name="form_submit" value="LOGIN"></td></tr>
					</form>
					<?php
						if (!empty($errors)) {
							$info_ = '<div class="errormsgbox"><ol>';
							foreach ($errors as $key => $values) {
								$info_ .= '	<li>'.$values."</li>\n";
							}
							$info_ .= '</ol></div>';
							echo $info_;
						}
					?>
					</table>
					
				</div>
		<div id="divclear"></div>
	</div>
	<div id="mask1"style="background:none">
	</div>
	
	<div id="mask3"style="background:#FF4F4F;box-shadow: 0px 5px 25px #888888">
		</div>
	
	<div id="mask2"style="background:#544C4D">
	</div>
</body>
</html>