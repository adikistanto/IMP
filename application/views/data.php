<!DOCTYPE html>
<html lang="en">
<head>
	<link href="assets/css/global.css" rel="stylesheet">
	<meta charset="utf-8">
	<title><?php echo $page_title ?> - IMP Undip</title>
</head>
		<link rel="icon" href="assets/images/imp.jpg" type="image/gif">
		<script type="text/javascript" src="assets/js/jquery.min.js"></script>		
        <script type="text/javascript" src="assets/js/jquery.easing.1.3.js"></script>
        <script type="text/javascript">
            $(function() {
                $('li#circle_box a,  li.menu_tile a').bind('click',function(event){
                    var $anchor = $(this);
                    
                    $('html, body').stop().animate({
                        scrollTop: $($anchor.attr('href')).offset().top
                    }, 1000,'easeInOutExpo');
                    /*
                    if you don't want to use the easing effects:
                    $('html, body').stop().animate({
                        scrollTop: $($anchor.attr('href')).offset().top
                    }, 1000);
                    */
                    event.preventDefault();
                });
            });
        </script>
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
					<li class="menu_tile"><a href="index">Home</a></li>
					<li class="menu_tile"><a href="struktur">Struktur</a></li>
					<li class="menu_tile"><a href="program">Program</a></li>
					<li class="menu_tile"><a href="data">Database</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div id="top"></div>
	
	<div id="wrapper" style="background-color: #F7F6E8;box-shadow: 3px 3px 3px 3px #888888;border-radius:40px;">
		<div id="panel_title" class="panel_title_left" style="border-radius:15px; margin-top:100px;margin-left:0px">
			<h1 class="font1">Database ?</h1>
		</div>
		<div id="divclear"></div>
		<div id="content_box_one" class="big_left" style="padding:30px;">
			<select style="margin-bottom:20px; height:40px;width:300px;border-radius:3px">
				<option>pilih angkatan</option>
				<option>2014</option>
				<option>2013</option>
				<option>2012</option>
				<option>2011</option>
				<option>2010</option>
			</select>
			<table >
				<tr style="background:linear-gradient(#F90929, #FC7E7E);font-weight:bold; text-align:center; height:50px">
					<td width="50px">No</td>
					<td width="200px">Nama</td>
					<td width="230px">Alamat</td>
					<td width="150px">Asal Sekolah</td>
					<td width="150px">Jurusan</td>
					<td width="150px">Angkatan</td>
					<td width="150px">Status</td>
				</tr>
				<?php 
				for ($ctr=1;$ctr<=10;$ctr++){
				if ($ctr%2==0){ $bg ='#6B6060';}else{ $bg = 'white';} ?>
				<tr style="background:<?php echo $bg ?>; text-align:center;height:30px">
					<td width="50px">No</td>
					<td width="200px">Nama</td>
					<td width="230px">Alamat</td>
					<td width="150px">Asal Sekolah</td>
					<td width="150px">Jurusan</td>
					<td width="150px">Angkatan</td>
					<td width="150px">Status</td>
				</tr>
				<?php }?>
			</table>
		</div>
	</div>
	<div id="mask1"style="background:none">
	</div>
	
	<div id="mask3"style="background:#FF4F4F;box-shadow: 0px 5px 25px #888888">
		</div>
	
	<div id="footer">
		<div id="wrapper">
			<div id="content_box_big" class="big_left">
				<h1 class="font2">Contact</h1>
				<table>
					<tr>
						<td><img style="margin-top:20px ;height:30px;width:30px"src="assets/images/icon-phone.png" alt="Search"></td>
						<td style="padding-left:15px"><h4 class="font2" >08977631260</h4></td>
					</tr><tr>
						<td><img style="margin-top:20px ;height:30px;width:30px"src="assets/images/icon-email.png" alt="Search"></td>
						<td style="padding-left:15px"><h4 class="font2">adikistanto1@gmail.com</h4></td>
					</tr>
					</tr><tr>
						<td><img style="margin-top:20px ;height:30px;width:30px"src="assets/images/icon-location.png" alt="Search"></td>
						<td  style="padding-left:15px"><h4 class="font2">Perum. Villa Tembalang no C4<br>
							Tembalang, Semarang.</h4></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</body>
</html>