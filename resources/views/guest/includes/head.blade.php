
<meta charset="utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="description" content="Guest">

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" href="{{asset('assets/images/Logo/favicon.png')}}" type="image/png">

<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap-4.1.2/bootstrap.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/OwlCarousel2-2.2.1/animate.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/flexslider/flexslider.css')}}">


<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">



<style>
		
	/* Full-width input fields */
	input[type=text], input[type=password] {
		width: 100%;
		padding: 12px 20px;
		margin: 8px 0;
		display: inline-block;
		border: 1px solid #ccc;
		box-sizing: border-box;
	}
	
	/* Set a style for all buttons */
	button {
		background-color: #4CAF50;
		color: white;
		padding: 14px 20px;
		margin: 8px 0;
		border: none;
		cursor: pointer;
		width: 100%;
	}
	
	button:hover {
		opacity: 0.8;
	}
	
	/* Extra styles for the cancel button */
	.cancelbtn {
		width: auto;
		padding: 10px 18px;
		background-color: #f44336;
	}
	
	/* Center the image and position the close button */
	.imgcontainer {
		text-align: center;
		margin: 24px 0 12px 0;
		position: relative;
	}
	
	img.avatar {
		width: 40%;
		border-radius: 50%;
	}
	
	.container {
		padding: 16px;
	}
	
	span.psw {
		float: right;
		padding-top: 16px;
	}
	
	/* The Modal (background) */
	.modal {
	  	display: none; /* Hidden by default */
	  	position: fixed; /* Stay in place */
	  	z-index: 1; /* Sit on top */
		left: 0;
		top: 0;
	  	width: 100%; /* Full width */
	  	height: 100%; /* Full height */
	  	overflow: auto; /* Enable scroll if needed */
	  	background-color: rgb(0,0,0); /* Fallback color */
	  	background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
		padding-top: 60px;
	}
	
	/* Modal Content/Box */
	.modal-content {
		background-color: #fefefe;
	  	margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
		border: 1px solid #888;
	  	width: 80%; /* Could be more or less, depending on screen size */
	}
	
	/* The Close Button (x) */
	.close {
		position: absolute;
		right: 25px;
		top: 0;
		color: #000;
		font-size: 35px;
		font-weight: bold;
	}
	
	.close:hover,
	.close:focus {
		color: red;
		cursor: pointer;
	}
	
	/* Add Zoom Animation */
	.animate {
		-webkit-animation: animatezoom 0.6s;
			animation: animatezoom 0.6s
	}
	
	@-webkit-keyframes animatezoom {
		from {-webkit-transform: scale(0)} 
		to {-webkit-transform: scale(1)}
	}

	@keyframes animatezoom {
		from {transform: scale(0)} 
		to {transform: scale(1)}
	}
	
	/* Change styles for span and cancel button on extra small screens */
	@media screen and (max-width: 300px) {
		span.psw {
			display: block;
			float: none;
		}
		.cancelbtn {
			width: 100%;
		}
	}

	.tab {
        overflow: hidden;
        width: 400px;
        padding: 0px;
        margin: 50px 0px 60px 0px;
        background-color: #4CAF50;
    }
        
    .tab button {
        background-color: #4CAF50;
        outline: none;
        cursor: pointer;
        float: left;
        width: 50%;
        padding: 20px;
        margin: 0px;
        transition: 0.3s;
        font-size: 17px;
    }
        
    .tab button:hover {
        background-color: #f44336;
    }
        
    .tab button.active {
        background-color: #f44336;
    }
        
    .tab_content {
        display: none;
        padding: 6px 12px;
        border: 1px solid #ccc;
        border-top: none;
        -webkit-animation: fadeEffect 1s;
        animation: fadeEffect 1s;
    }
        
    @-webkit-keyframes fadeEffect {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    @keyframes fadeEffect {
        from {
            opacity: 0;
        }
		to {
                opacity: 1;
        }
	}

	table {
		border-collapse: collapse;
	}

	th, td {
		padding: 8px;
		text-align: left;
	}
	
	</style>