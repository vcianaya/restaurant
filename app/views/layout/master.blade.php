<!DOCTYPE HTML>
<html>
<head>
<title>COMA y. (, .)</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

{{ HTML::style('plantilla/css/style.css')}}
{{ HTML::style('plantilla/css/slider.css')}}
{{ HTML::script('plantilla/js/modernizr.custom.28468.js') }}
{{ HTML::style('bootstrap/css/bootstrap.min.css')}}
{{ HTML::style('bootstrap/css/bootstrap-theme.min.css')}}
{{ HTML::script('plantilla/js/jquery.min.js') }}
{{ HTML::script('bootstrap/js/jquery.js')}}
{{ HTML::script('plantilla/js/jquery.cslider.js') }}
{{ HTML::script('bootstrap/js/bootstrap.min.js')}}
<!-- DATATABLE SCRIPSTS
{{ HTML::style('datatables/datatables.min.css') }}
{{ HTML::script('datatables/datatables.min.js') }}
{{ HTML::style('datatables/tables/css/dataTables.bootstrap.min.css') }}
{{ HTML::style('datatables/tables/css/dataTables.bootstrap.css') }}-->
<script type="text/javascript">
			$(function() {

				$('#da-slider').cslider({
					autoplay : true,
					bgincrement : 450
				});

			});
		</script>
	

</head>
<body>
<div class="wrap">
	<div class="main"><!-- start main -->
		<div class="grid1_of_1"><!-- start grid1_of_1 -->
		<div class="menu"><!-- start menu -->
			<ul class="mcd-menu">
				<li>
					<a href="">
						<i class="icon1"></i>
						<strong>shopping</strong>
					</a>
				</li>
				<li>
					<a href="">
						<i class="icon2"></i>
						<strong>calender</strong>
					</a>
				</li>
				<li>
					<a href="">
						<i class="icon3"></i>
						<strong>network</strong>
					</a>
				</li>
				<li>
					<a href="">
						<i class="icon4"></i>
						<strong>ecology</strong>
					</a>
				</li>
				<li>
					<a href="">
						<i class="icon5"></i>
						<strong>statistics</strong>
					</a>
				</li>
			</ul>
		</div><!-- end menu -->			

		<div class="grids_of_2"><!-- start grids_of_2 -->	
@yield('cuerpo')<!--aqui todo el contenido del cuerpo-->
						<div class="clear"></div>
<!--			<div  class="grid_bottom">
				<h2>algun contenido de pie</h2>
			</div>-->
		</div><!-- end grids_of_2 -->	
		</div><!-- end grid1_of_1 -->
		<div class="grid1_of_2"><!-- start grid1_of_2 -->
			<div class="grid1_of_list1"><!-- start grid1_of_list1 -->
				<div class="grid_img">
					{{ HTML::image('plantilla/images/pic1.jpg') }}
				</div>
				<div class="grid_text">
					<div class="grid_text1">
						<h4>prawns</h4>
						<h5>garlic & pepper</h5>
					</div>
					<ul class="list1">
						<li class="active"><a href="#">prawns <span>3lb</span> </a></li>
						<li><a href="#">salmon<span>2pcs</span> </a></li>
						<li class="active"><a href="#">green salad<span>2pcs</span> </a></li>
						<li><a href="#">onions <span>0,5lb</span> </a></li>
						<div class="clear"></div>
					</ul>
				</div>
			</div>
			<div class="grid1_of_list2"><!-- start grid1_of_list2 -->
				<div class="grid1_of_list">
					{{ HTML::image('plantilla/images/pic2.jpg') }}
					<h4>roasted chicken</h4>
				</div>
				<ul class="list2">
					<li><p>Kcal</p><span>230</span></li>
					<li><p>prawns</p> <span>12%</span></li>
					<div class="clear"></div>
				</ul>
			</div><!-- end grid1_of_list2 -->
		</div><!-- end grid1_of_2 -->
	</div><!-- end main -->
</div>
</body>
</html>