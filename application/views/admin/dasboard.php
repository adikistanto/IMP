<!DOCTYPE html>
<html lang="en">
<head>
	<link href="../assets/css/global.css" rel="stylesheet">
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
					<!--<li class="menu_tile"><a href="#top">Move Top</a></li>-->
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
		<div id="panel_title" class="panel_title_left" style="border-radius:15px; margin-left:0px;margin-top:100px;">
			<h1 class="font1">Program ?</h1>
		</div>
		<div id="divclear"></div>
				<div id="content_box_one" class="big_left" style="padding-bottom:20px;padding-right:20px; background:#6B6060;border-radius:20px">
					<h2 class="font2">HRD</h2>
						<div id="event_box"><h4>Buka Puasa Bersama</h4>10 Agustus 2014<br>di Geedung Sudarto</div>
						<div id="event_box"><h4>Seminar Internasional</h4>10 Agustus 2014<br>di Geedung Sudarto</div>
						<div id="event_box"><h4>Lebaran</h4>10 Agustus 2014<br>di Geedung Sudarto</div>
						<div id="event_box"><h4>Upacara Kemerdekaan</h4>10 Agustus 2014<br>di Geedung Sudarto</div>
					<div id="divclear"></div>
					<h2 class="font2">Marketing</h2>
						<div id="event_box"><h4>Naik Gunung</h4>10 Agustus 2014<br>di Geedung Sudarto</div>
						<div id="event_box"><h4>Belanja</h4>10 Agustus 2014<br>di Geedung Sudarto</div>
						<div id="event_box"><h4>Rapat Kerja</h4>10 Agustus 2014<br>di Geedung Sudarto</div>
						<div id="event_box"><h4>Monitoring Nasional</h4>10 Agustus 2014<br>di Geedung Sudarto</div>
						<div id="event_box"><h4>Inspeksi Mendadak</h4>10 Agustus 2014<br>di Geedung Sudarto</div>
					<div id="divclear"></div>
					<h2 class="font2">Litbang</h2>
						<div id="event_box"><h4>Naik Gunung</h4>10 Agustus 2014<br>di Geedung Sudarto</div>
						<div id="event_box"><h4>Belanja</h4>10 Agustus 2014<br>di Geedung Sudarto</div>
						<div id="event_box"><h4>Rapat Kerja</h4>10 Agustus 2014<br>di Geedung Sudarto</div>
						<div id="event_box"><h4>Monitoring Nasional</h4>10 Agustus 2014<br>di Geedung Sudarto</div>
						<div id="event_box"><h4>Inspeksi Mendadak</h4>10 Agustus 2014<br>di Geedung Sudarto</div>
						<div id="event_box"><h4>Inspeksi Mendadak</h4>10 Agustus 2014<br>di Geedung Sudarto</div>
						<div id="event_box"><h4>Inspeksi Mendadak</h4>10 Agustus 2014<br>di Geedung Sudarto</div>
						<div id="event_box"><h4>Inspeksi Mendadak</h4>10 Agustus 2014<br>di Geedung Sudarto</div>
					<div id="divclear"></div>
					<h2 class="font2">Produksi</h2>
						<div id="event_box"><h4>Buka Puasa Bersama</h4>10 Agustus 2014<br>di Geedung Sudarto</div>
						<div id="event_box"><h4>Seminar Internasional</h4>10 Agustus 2014<br>di Geedung Sudarto</div>
						<div id="event_box"><h4>Lebaran</h4>10 Agustus 2014<br>di Geedung Sudarto</div>
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