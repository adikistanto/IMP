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
			<h1 class="font1">Struktur ?</h1>
		</div>
		
		<div id="divclear"></div>
				<div id="content_box_one" class="big_left">
					<img style="margin:20px 20px 20px 150px" src="assets/images/bagan.bmp" alt="icon-event">
				</div>
		<div id="divclear"></div>
				<div id="content_box_big" class="big_left">
					<div>
					<?php for ($ctr=1;$ctr<=8;$ctr++){?>
						<div id="news_unit">
							<div id="profil_box"> 
								<img style="height:70px; width:70px; border-radius:35px" src="assets/images/imp.jpg" alt="icon-event">
							</div>
							<div id="news_body">
								<div id="news_title">
									<h4><?php echo "Nama Profile" ?></h4>
								</div>
								<div id="news_content">
									<p><?php echo "Kdang aku heran ama orang2, nge'add, nginvite, nge'ping.
									Giliran d koNfirm, aCC and d pong. KgaK ada respon apapun .. Trus mksd'y gmnaa cobaa ??" ?></p>
								</div>
							</div>
						</div>
					<?php } ?>
					</div>
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