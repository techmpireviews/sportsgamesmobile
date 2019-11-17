<!DOCTYPE html>
<html>
<head>
	</script>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="manifest" href="/package.json">
    <style type="text/css">

		#footer {
			position: absolute;
			top: 15px;
			right: 28px;
			width: 50px;
			height: 50px;
			transition: 0.45s ease-in-out;
			z-index: -1;
		}

		button:focus {
			outline: none;
		}

		#open {
			background-color: #ffffff;
			font-size: 40px;
			box-shadow: none;
			border: solid 2px;
			border-color: #000000;
			padding-left: 13px;
			padding-right: 13px;
			padding-top: 0px;
			padding-bottom: 5px;
			border-radius: 120px;
			color: #000000;
			transition: 0.1s ease-in-out;
			cursor: pointer;
		}

		#open:active {
			background-color: #000000;
			color: #ffffff;
			transform: rotate(150deg);
		}
		header {
			position: absolute;
			top: 0px;
			left: 0px;
			width: 100%;
			height: 100%;
			-webkit-clip-path: circle(30px at right 46px top 46px);
			transition: 0.5s;
			z-index: -1;
		}

		#closeul {
			text-decoration: none;
			list-style-type: none;
			text-align: center;
			display: inline;
		}

		li {
			color: #000000;
			font-size: 35px;
			padding-top: 20px;
		}

		li > a {text-decoration: none;color: #ffffff;}

		li > a:active {text-decoration: none;color: #ffffff;}

		#closediv {
			position: absolute;
			top: 50%;
			left: 50%;
			width: 75%;
			transform: translate(-50%, -50%);
		}

		#close {
			background-color: #ffffff;
			font-size: 55px;
			border: 0px;
			border-color: #000000;
			color: #000000;
			padding: 17px;
			-webkit-clip-path: circle(30px at 31px 53px);
			cursor: pointer;
			transition: 0.1s ease-in-out;
		}

		#close:active {
			background-color: #000000;
			color: #ffffff;
		}

		#menubg {
			position: absolute;
			background-image: linear-gradient(to bottom right, #6AC8F5, #B1D9EB);
			width: 100%;
			height: 100%;
			z-index: -10;
		}

		input, button, textarea, select, a {
		-webkit-tap-highlight-color: rgba(0,0,0,0);
		}

		.font {
			font-family: sans-serif;
			font-size: 27px;
		}

	</style>
    <title>Mobile</title>
</head>
<header id="header">
    <div id="menubg"></div>
    <div id="closediv">
	<span>
		<ul id="closeul">
			<li class="font"><a href="">Home</a></li>
			<li class="font"><a href="">Basketball Games</a></li>
			<li class="font"><a href="">Football Games</a></li>
			<li class="font"><a href="">Baseball Games</a></li>
			<li class="font"><button id="close" onclick="close2()">x</button></li>
		</ul>
	</span>
    </div>
</header>
<footer id="footer">
    <div id="buttondiv">
	<span id="buttonspan">
		<button id="open" onclick="open1()">☰</button>
	</span>
    </div>
</footer>
<script type="text/javascript">
		function open1() {
			document.getElementById("header").style.webkitClipPath = "circle(100%)";
			document.getElementById("footer").style.zIndex = "-20";
			document.getElementById("footer").style.visibility = "hidden";
		}

		function close2() {
			document.getElementById("header").style.webkitClipPath = "circle(30px at right 46px top 46px)";
			document.getElementById("footer").style.zIndex = "-1";
			document.getElementById("footer").style.visibility = "visible";
		}
</script>
<body>

</body>
</html>
