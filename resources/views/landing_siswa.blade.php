<!DOCTYPE html>
<!--[if IE 9]>
<html class="ie ie9" lang="en-US">
<![endif]-->
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<link href="{{ asset('landing/icon/icon.jpg')}}" rel="icon">
  	<link href="{{ asset('landing/icon/icon.jpg')}}" rel="mts-icon">

	<title>MTs.Badrussalam Surabaya</title>


	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>

	

    <link rel="stylesheet" href="{{ asset('landing/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{ asset('landing/css/animate.css')}}">
	<link rel="stylesheet" href="{{ asset('landing/css/jquery-ui.css')}}">
	<link rel="stylesheet" href="{{ asset('landing/css/simple-line-icons.css')}}">
	<link rel="stylesheet" href="{{ asset('landing/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{ asset('landing/css/icon-font.css')}}">
	<link rel="stylesheet" href="{{ asset('landing/css/educa.css')}}">

	<link rel="stylesheet" href="{{ asset('landing/rs-plugin/css/settings.css')}}">

	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->

</head>
<body>

	
	<div class="sidebar-menu-container" id="sidebar-menu-container">

		<div class="sidebar-menu-push">

			<div class="sidebar-menu-overlay"></div>

			<div class="sidebar-menu-inner">

				<header class="site-header">
					<div id="main-header" class="main-header header-sticky">
						<div class="inner-header container clearfix">
							<div class="logo">
								<a href="./"><img src="{{ asset('landing/icon/icon2.png')}}" alt=""></a>
							</div>
							<div class="header-right-toggle pull-right hidden-md hidden-lg">
								<a href="javascript:void(0)" class="side-menu-button"><i class="fa fa-bars"></i></a>
							</div>
							<div class="header-info hidden-sm hidden-xs">
								<ul>
                                
                                @foreach($kontak as $p)
                                
                                <li><i class="fa fa-phone"></i>{{$p->phone}}</li>
                                <li><i class="fa fa-envelope-o"></i>{{$p->email}}</li>
                                
                                @endforeach 
                                
                                <li class="language">
									</li>
									<li><a href="#">Apply Now</a></li>
								</ul>
							</div>
		                    <nav class="main-navigation text-left hidden-xs hidden-sm">
								<ul>
									<li><a href="./" class="menu">Home</a>
									</li>
									<li><a href="{{ url('about-us')}}" class="menu">Profil</a>
									</li>
									<li><a href="{{ url('guru-page')}}" class="menu">Guru</a>
									</li>
									<li><a href="" class="has-submenu">Kesiswaan</a>
										<ul class="sub-menu">
											<li><a href="{{ url('siswa-page')}}">Prestasi Siswa</a></li>
										</ul>
									</li>
									<li><a href="{{ url('berita-page')}}" class="menu">Berita</a>
									</li>
									<li><a href="{{ url('pengumuman-page')}}" class="menu">Pengumuman</a>
									</li>
									<li><a href="{{ url('agenda-page')}}" class="menu">Agenda</a>
									</li>
									<li><a href="{{ url('gallery')}}" class="menu">Galeri</a>
									</li>
									<li><a href="{{ url('download-page')}}" class="menu">Download</a>
									</li>
									<li><a href="{{ url('contact')}}" class="menu">Hubungi Kami</a>
									</li>
									<li></li>
								</ul>
							</nav>
						</div>
					</div>
				</header>

				<div id="search">
				    <button type="button" class="close">×</button>
				    <form>
				        <input type="search" value="" placeholder="type keyword(s) here" />
				        <button type="submit" class="btn btn-primary"><span>Search</span></button>
				    </form>
				</div>

				<div class="page-heading news-heading">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h1>Prestasi Siswa</h1>
								<span>Dokumentasi Prestasi Siswa</span>
								<div class="page-list">
									<ul>
										<li class="active"><a href="./">Home</a></li>
										<li><i class="fa fa-angle-right"></i></li>
										<li><a href="{{ url('siswa-page')}}">Prestasi Siswa</a></li>
									</ul>
								</div>
							</div>	
						</div>
					</div>
				</div>

				<section class="classic-news">
					<div class="container">
						<div class="row">
                            @foreach($siswa as $p)
							<div class="col-md-6">
								<div class="classic-posts">
                                    
									<div class="classic-item">
										<a href="{{ url('siswa-page/'.$p->id)}}"><img class="img-responsive" src="{{asset('storage/'.$p->gambarsis)}}" style="width: 80%;height:50%;" alt=""></a>
										<a href="{{ url('siswa-page/'.$p->id)}}"><h4>{{ $p->judulsis}}</h4></a>
										<p>{{ Str::limit($p->deskripsisis, 60)}}</p>
										
										<div class="buttons">
											<div class="accent-button">
												<a href="{{ url('siswa-page/'.$p->id)}}">Continue Reading <i class="fa fa-arrow-right"></i></a>
											</div>
										</div>
                                    </div>
                                   

								</div>
							</div>
                            @endforeach
                           
                        </div>
                        <div class="pagination-navigation">
										<div class="row">
											<div class="col-md-6">
												<div class="pagination">
													<ul>
													<li>{{ $siswa->links() }}</li>
													<!-- <li class="active"><a href="#">1</a></li>
													<li ><a href="#">2</a></li>
													<li><a href="#">3</a></li>
													<li><a href="#">4</a></li> -->
													</ul>
												</div>
											</div>
											<div class="col-md-6">
												<div class="navigation">
													<ul>
														<!-- <li><a href="#"><i class="fa fa-arrow-left"></i></a></li>
														<li><a href="#"><i class="fa fa-arrow-right"></i></a></li> -->
													</ul>
												</div>
											</div>
										</div>
									</div>
					</div>
				</section>

				<section class="welcome-request">
					<div class="container-fluid">
						<div class="row">
						</div>
					</div>
                </section>
                <!-- end divider -->

				<footer>
					<div class="container">
						<div class="row">
							<div class="col-md-4">
								<div class="footer-widget">
									<div class="educa-info">
										<img src="{{ asset('landing/images/logo-2.png')}}" alt="">
                                        <div class="line-dec"></div>
                                        @foreach($ab as $p)   
                                        <p>{{ Str::limit($p->deskripsiab, 250)}}</p>
                                        @endforeach
										<div class="text-button">
											<a href="{{ url('about-us') }}">Read More <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
							<div class="footer-widget">
									<div class="featured-links">
										<h2>Featured Links</h2>
										<div class="line-dec"></div>
										<ul>
											<li><a href="./">Home</a></li>
											<li><a href="{{ url('about-us') }}">Profil</a></li>
											<li><a href="{{ url('guru-page')}}">Guru</a></li>
											<li><a href="{{ url('siswa-page')}}">siswa</a></li>
										</ul>
										<ul>
											<li><a href="{{ url('pengumuman-page')}}">Pengumuman</a></li>
											<li><a href="{{ url('agenda-page')}}">Agenda</a></li>
											<li><a href="{{ url('gallery') }}">Galeri</a></li>
											<li><a href="{{ url('contact') }}">Hubungi Kami</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="footer-widget">
									<div class="university-address">
										<h2>University Address</h2>
										<div class="line-dec"></div>
										<ul>
                                        @foreach($kontak as $p)
											<li><i class="fa fa-home"></i>{{$p->alamat}}</li>
											<li><i class="fa fa-phone"></i>{{$p->phone}}</li>
                                            <li><i class="fa fa-envelope-o"></i>{{$p->email}}</li>
                                        @endforeach    
										</ul>
									</div>
								</div>
							</div>

						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="copyright-menu">
									<div class="row">
										<div class="col-md-6">
											<div class="copyright-text">
												<p>@ Copyright 2020. All Rights Reserved</p>
											</div>
										</div>
										<div class="col-md-6">
											<div class="menu">
											
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</footer>
			

				<a href="#" class="go-top"><i class="fa fa-angle-up"></i></a>

			</div>

		</div>

		<nav class="sidebar-menu slide-from-left">
			<div class="nano">
				<div class="content">
					<nav class="responsive-menu">
						<ul>
							<li class="menu-item"><a href="#">Home</a>
							</li>
							<li class="menu-item"><a href="{{ url('about-us')}}" class="menu">Profil</a>
							</li>
							<li class="menu-item"><a href="{{ url('guru-page')}}" class="menu">Guru</a>
							</li>
							<li class="menu-item-has-children"><a href="">Kesiswaan</a>
								<ul class="sub-menu">
									<li><a href="{{ url('siswa-page')}}">Prestasi Siswa</a></li>
								</ul>
							</li>
							<li><a href="{{ url('berita-page')}}" class="menu">Berita</a>
									</li>
									<li><a href="{{ url('pengumuman-page')}}" class="menu">Pengumuman</a>
									</li>
									<li><a href="{{ url('agenda-page')}}" class="menu">Agenda</a>
									</li>
									<li><a href="{{ url('gallery')}}" class="menu">Galeri</a>
									</li>
									<li><a href="{{ url('download-page')}}" class="menu">Download</a>
									</li>
									<li><a href="{{ url('contact')}}" class="menu">Hubungi Kami</a>
									</li>
						</ul>
					</nav>
				</div>
			</div>
		</nav>

	</div>


	

	<script type="text/javascript" src="{{ asset('landing/js/jquery-1.11.1.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('landing/js/bootstrap.min.js')}}"></script>
	<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script src="{{ asset('landing/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{ asset('landing/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>

	<script type="text/javascript" src="{{ asset('landing/js/plugins.js')}}"></script>
	<script type="text/javascript" src="{{ asset('landing/js/custom.js')}}"></script>

</body>
</html>