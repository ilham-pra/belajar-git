<html>
	<head>
		<title>Belajar Jquery</title>
		<script src="jquery-3.5.1.min.js"></script>
		<script>
			$(document).ready(function(){
				$("#tombol").click(function(){
					$(this).after('<p>Sedang Belajar jQuery</p>');
				});
			});
		</script>
	<head>
	<body>
		<h1>Belajar jQuery</h1>
		<button id="tombol">Klik Disini!</button>
		<h3> Selamat</h3>
		<h3> Selamat</h3>
		<h3> Selamat</h3>
		<h3> Selamat</h3>
	</body>
<html>