<!DOCTYPE html>
<html>
	<head>
	<style>
	 * {
	 box-sizing : border-box;
	 }
	 body {
	 font-family: Arial;
	 padding; 10px;
	 background: #f1f1f1;
	 }
	 .header {
	 padding: 80px;
	 object-fit: cover;
	 background-image: url(img);
	 background-size: fill;
	 background-repeat: no-repeat;
	 background-position: 80% 20%
	 }
	 .topnav {
	 	overflow: hidden;
	 	background-color: #333;
	 }
	 .topnav a {
	 	float: left;
	 	display: block;
	 	color: #f2f2f2;
	 	text-align: center;
	 	padding: 14px 16px;
	 	text-decoration: none;
	 }
	 .topnav a:hover {
	 	background-color: #ddd;
	 	color: black;
	 }
	 .leftcolumn {
	 	float: left;
	 	width:25%;
	 }
	 .rightcolumn{
	 	float: right;
	 	width:75%;
	 	background-color: #f1f1f1;
	 }
	 .imge {
	 	background-color: #aaa;
	 	width: 100%;
	 	padding: 20px;
	 }
	 .card {
	 	background-color: white;
	 	padding: 20px;
	 	margin-top: 20px;
	 }
	 .img{
	 	border-radius: 50%;
	 	background-color: #aaa;
	 }
	 .row:after {
	 	content: "";
	 	display: table;
	 	clear: both;
	 }
	 .footer{
	 	padding:20px;
	 	text-align: center;
	 	background: #ddd;
	 	margin-top: 20px;
	 }
	</style>
	</head>
<body>
	<div class="header" >
	</div>

	<div class = "topnav">
		<a href="test.php">Home</a>
		<a href="#">Contact Info Page</a>
		<a href="#">Portfolio</a>
		<a href="#" style="float:right">FAQ</a>
	</div>
<div class="row">
	<div class="rightcolumn">
		<div class="card">
			<h2>Profession</h2>
			<div class="imge" style="height:200px";>Image-url</div>
			<p>type message here...</p>
		</div>
	</div>
	<div class ="leftcolumn">
		<div class="card">
			<h2>About Me</h2>
			<div class="img" style="height:200px;"></div>
			<p>Something about me...</p>
			<p>Age: 20</p>
			<p>Gender: Male</p>
		</div>
		
	
	<div class="card">
		<h3>Follow Me</h3>
		<p> kencastillo6@gmail.com</p>
	</div>
</div>
</div>
</body>

</html>
