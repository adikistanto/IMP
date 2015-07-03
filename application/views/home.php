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
                $('li#circle_box a, li.menu_tile a').bind('click',function(event){
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
	<!--   ============================ header ==============================  -->
	<div id="header">
		<div id="wrapper">
			<div id="logo">
				<img style="margin-top:	15px;width:300px;height:50px"src="assets/images/logo.png" alt="icon-logo">
			</div>
			<div id="menu_header">
				<ul class="menu">
					<li class="menu_tile"><a href="#top">Move Top</a></li>
					<li class="menu_tile"><a href="index">Home</a></li>
					<li class="menu_tile"><a href="struktur">Struktur</a></li>
					<li class="menu_tile"><a href="program">Program</a></li>
					<li class="menu_tile"><a href="data">Database</a></li>
				</ul>
			</div>
		</div>
	</div>
	
	<!--   ============================ dekstop ==============================  -->
	<div id="top"></div>
	<div id="dekstop">
		<div id="wrapper">
			<div id="center_box" style="margin-top:20px;">
				<h1>SELAMAT DATANG</h1><br>
				<p>Ini adalah website resmi, di sini kamu akan mendapatkan informasi yang tepat.<br>
				Informasi tentang kami disajikan lengkap dan tepat. Untuk memberikan pengetahuan kepada pengunjung.</p>
			</div>
		</div>
			<div id="bottom_box">
				<div id="wrapper">
					<div id="center_box_big">
						<ul style="list-style:none">
							<li id="circle_box" style="text-align:center; margin-right:50px"><a href="#section4"><img style="margin-top:30px "src="assets/images/icon-galeri.png" alt="icon-event"></a><li>
							<li id="circle_box" style="text-align:center"><a href="#section3"><img style="margin-top:20px "src="assets/images/icon-event1.png" alt="Search"></a><li>
							<li id="circle_box" style="text-align:center"><a href="#section2"><img style="margin-top:20px "src="assets/images/news.png" alt="icon-news"></a><li>
							<li id="circle_box" style="text-align:center"><a href="#section1"><img style="margin-top:30px "src="assets/images/search.png" alt="Search"></a><li>
						</ul>
					</div>
				</div>
			</div>
	</div>

	<!--   ============================ section 1 ==============================  -->
	<div id="panel" style="background:#6B6060;">
		<div id="wrapper">
		
			<div id="mask2" style="background:#6B6060;">
			</div>
			
		
			<div id="section1">
				<div id="panel_title" class="panel_title_left" style="border-radius:15px">
					<h1 class="font2">Who am I ?</h1>
				</div>
				<div id="divclear"></div>
				<div id="content_box_big" class="big_left">
					<p class="font2" style="text-align:left; width:80%">
						It is a good practice to specify both the height and width attributes for an image.
						If these attributes are set, the space required for the image is reserved when the page is loaded.<br><br>
						However, without these attributes, the browser does not know the size of the image. 
						The effect will be that the page layout will change during loading (while the images load)
						Tim Prabowo-Hatta: Keterangan KPU Tak Sesuai Fakta...!<br><br>
						Okezone-Tim Advokasi Prabowo Subianto-Hatta Rajasa, Mahendradatta, menilai keterangan yang diberikan
						 Komisi Pemilihan Umum (KPU) dalam sidang pelanggaran kode etik penyelenggara pemilu yang digelar<br><br>
						 Dewan Kehormatan Penyelenggara Pemilu (DKPP) tidak sesuai fakta.
						"Jadi boleh saja dia memberikan pembelaan. Tapi mohon maaf pembelaannya tadi mungkin tidak sesuai dengan fakta-fakta yang ada,"
					</p>
				</div>
				<div id="content_box_mini" class="big_left">
					<!--<img style="margin:120px 20px 20px -30px; transform: rotate(30deg);"src="assets/images/who-am-i.png" alt="icon-event"> -->
				</div>
			</div>
		</div>
	<div id="mask3"style="background:#FF4F4F">
	</div>
	</div>
	
	
	<!--   ============================ section 2 ==============================  -->
	<div id="panel" style="background:#F7F6E8">
		<div id="wrapper">
			<div id="mask2"style="background:none">
			</div>
			<div id="mask3"style="background:none">
			</div>
		
			<div id="section2">
				<div id="panel_title" class="panel_title_right" >
					<h1 class="font1">News</h1>
				</div>
				<div id="divclear"></div>
				<div id="content_box_big" class="big_right">
					<div>
						<?php 
							foreach($newest_news as $newest_newses){ ?>
						<div id="news_unit">
							<div id="date_news_box"> 
								<?php	$nama_bulan = array('Bul','Jan','Feb','Mar','Apr','Mei','Jun','Jul','Agt','Sep','Okt','Nov','Des');
										$bul = intval(date("m", strtotime($newest_newses->date_news)));
										echo"<h4 class='font2'>".date("d", strtotime($newest_newses->date_news))."<br>
											 " .$nama_bulan[$bul]."</h4><br>";
								?>							
							</div>
							<div id="news_body">
								<div id="news_title">
									<h4><a class="a1" href="news/<?php echo $newest_newses->id_news; ?>"><?php echo $newest_newses->title_news; ?></a></h4>
								</div>
								<div id="news_content">
										<p><?php echo substr(strip_tags($newest_newses->content_news),0,150) . "..."; ?></p>
								</div>
							</div>
						</div>
						<?php }?>
					</div>
				</div>
				<div id="content_box_mini" class="big_right">
					<!--<img style="margin:80px 20px 20px 90px; transform: rotate(30deg);"src="assets/images/news-image.jfif" alt="icon-event">-->
				</div>
			</div>
		</div>
		<div id="mask3"style="background:#FF4F4F;box-shadow: 0px 5px 25px #888888">
		</div>
	</div>
	
	<div id="mask1"style="background:none">
	</div>
	
	
	<!--   ============================ section 3 ==============================  -->
	<div id="panel" style="background:#6B6060;box-shadow: 20px 5px 25px 10px #888888">
		<div id="wrapper">
			
			<div id="mask2"style="background:none">
			</div>
		
			<div id="section3">
				<div id="panel_title" class="panel_title_left">
					<h1 class="font2">Events</h1>
				</div>
				<div id="divclear"></div>
				<div id="content_box_one" class="big_left" style="padding-bottom:20px; background:#F7F6E8;border-radius:10px">
					<div id="event_box"><h4>Buka Puasa Bersama</h4>10 Agustus 2014<br>di Geedung Sudarto</div>
					<div id="event_box"><h4>Seminar Internasional</h4>10 Agustus 2014<br>di Geedung Sudarto</div>
					<div id="event_box"><h4>Lebaran</h4>10 Agustus 2014<br>di Geedung Sudarto</div>
					<div id="event_box"><h4>Upacara Kemerdekaan</h4>10 Agustus 2014<br>di Geedung Sudarto</div>
					<div id="event_box"><h4>Naik Gunung</h4>10 Agustus 2014<br>di Geedung Sudarto</div>
					<div id="event_box"><h4>Belanja</h4>10 Agustus 2014<br>di Geedung Sudarto</div>
					<div id="event_box"><h4>Rapat Kerja</h4>10 Agustus 2014<br>di Geedung Sudarto</div>
					<div id="event_box"><h4>Monitoring Nasional</h4>10 Agustus 2014<br>di Geedung Sudarto</div>
					<div id="event_box"><h4>Inspeksi Mendadak</h4>10 Agustus 2014<br>di Geedung Sudarto</div>
				</div>
				<div id="content_box_one" class="big_left">
					<!--<img style="margin:-80px 20px 20px -30px; transform: rotate(30deg);"src="assets/images/event-image.png" alt="icon-event">-->
				</div>
			</div>
		</div>
	</div>
	
	<div id="mask3"style="background:#6B6060;">
		</div>
	
	<!--   ============================ section 4 ==============================  -->
	<div id="panel" style="background:url('assets/images/bg_galeri.jpg') repeat-y;box-shadow: 0px 5px 25px #888888">
		<div id="wrapper">
			
			<div id="mask2"style="background:none">
			</div>
		
			<div id="section4">
				<div id="panel_title" class="panel_title_left">
					<h1 class="font1">Galery</h1>
				</div>
				<div id="divclear"></div>
				<div id="content_box_one" class="big_left" style="padding-bottom:20px; background:#FF4F4F">
					<div id="photo_box"><img style="height:200px;width:205px"src="assets/images/gallery/foto1.jpg" alt="Search"></div>
					<div id="photo_box"><img style="height:200px;width:205px"src="assets/images/gallery/foto1.jpg" alt="Search"></div>
					<div id="photo_box"><img style="height:200px;width:205px"src="assets/images/gallery/foto1.jpg" alt="Search"></div>
					<div id="photo_box"><img style="height:200px;width:205px"src="assets/images/gallery/foto1.jpg" alt="Search"></div>
					<div id="photo_box"><img style="height:200px;width:205px"src="assets/images/gallery/foto1.jpg" alt="Search"></div>
					<div id="photo_box"><img style="height:200px;width:205px"src="assets/images/gallery/foto1.jpg" alt="Search"></div>
					<div id="photo_box"><img style="height:200px;width:205px"src="assets/images/gallery/foto1.jpg" alt="Search"></div>
					<div id="photo_box"><img style="height:200px;width:205px"src="assets/images/gallery/foto1.jpg" alt="Search"></div>
				</div>
				<div id="content_box_one" class="big_left">
					<!--<img style="margin:-80px 20px 20px -30px; transform: rotate(30deg);"src="assets/images/event-image.png" alt="icon-event">-->
				</div>
			</div>
		</div>
	</div>
	
	<div id="mask3"style="background:#FF4F4F;box-shadow: 0px 5px 25px #888888">
		</div>
	
	<!--   ============================ footer ==============================  -->
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