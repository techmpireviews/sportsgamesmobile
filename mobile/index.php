<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
	<style type="text/css">
		button {
			-webkit-tap-highlight-color-: transparent;
		}

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
			padding-left: 11.5px;
			padding-right: 11.5px;
			padding-top: 0px;
			padding-bottom: 5px;
			border-radius: 110px;
			color: #000000;
			transition: 0.25s ease-in-out;
			cursor: pointer;
		}

		#open:hover {
			background-color: #000000;
			color: #ffffff;
		}
		header {
			position: absolute;
			top: 0px;
			left: 0px;
			width: 100%;
			height: 100%;
			clip-path: circle(30px at right 46px top 46px);
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
			font-family: Comic Sans MS;
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
			font-family: Comic Sans MS;
			border: 0px;
			border-color: #000000;
			color: #000000;
			padding: 17px;
			clip-path: circle(30px at 34.3px 61px);
			transition: 0.25s ease-in-out;
			cursor: pointer;
		}

		#close:hover {
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
	</style>
	<title>Mobile</title>
</head>
<header id="header">
	<div id="menubg"></div>
<div id="closediv">
	<span>
		<ul id="closeul">
			<li><a href="">Home</a></li>
			<li><a href="">Basketball Games</a></li>
			<li><a href="">Football Games</a></li>
			<li><a href="">Baseball Games</a></li>
			<li><button id="close" onclick="close2()">x</button></li>
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
			document.getElementById("header").style.clipPath = "circle(100%)";
			document.getElementById("footer").style.zIndex = "-20";
		}

		function close2() {
			document.getElementById("header").style.clipPath = "circle(30px at right 46px top 46px)";
			document.getElementById("footer").style.zIndex = "-1";
		}
</script>
</html>