<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>e comerace project</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
	{{View::make('header')}}
	@yield('content')
	{{view::make('footer')}}

	</body>
<style >
	.custom-login{
		height: 500px;
		padding-top: 100px;
	}

	.slider-img{

		height: 400px !important;
	}

	.custom-product{

		height:600px;
	}
	.coursel-inner{
		background-color:red ;
	}
	.carousel-trending{
height: 100px;

	}




	
	.sllider-img{
		height: 50px !important;
	}
	.trending-left{
float: left;
width: 20%;

	}
	.carousel-wrapper{

		margin: 20px;
	}
	.img-height{

		height: 200px;
	}
</style>

</html>