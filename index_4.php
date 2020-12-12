<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar jQuery</title>
  <script src="jquery-3.5.1.min.js"></script>
  <script>
   $(document).ready(function(){
	   $("#tombol").click(function(){
		   $("p").css("color","blue");
		   $("#belajar").css("color","green");
		   $(".warna").css("color","red");
		   $("#test.saja").css("color","yellow");
		   $("div p.warna").css("color","pink");
	   });
   });
   </script>
</head>
<body>
  <p>Sebuah paragraf tanpa atribut apapun</p>
  <p id="belajar">Paragraf dengan id "belajar"</p>
  <p class="warna">Sebuah paragraf dengan class "warna"</p>
  <p id="test" class="saja">Paragraf dengan id "test" dan class "saja"</p>
  <div>
	<p class="warna">Paragraf tanpa atribut apapun</p>
  </div>
  <button id="tombol">Jalankan</button>
</body>
</html>


