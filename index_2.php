<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar jQuery</title>
  <script src="jquery-3.5.1.min.js"></script>
  <script>
    $( document ).ready(function() {
      $( "#tombol_hide" ).click(function() {     
        $("h1").hide();
      });
       
      $( "#tombol_show" ).click(function() {     
        $("h1").show();
      });
       
      $( "#tombol_small" ).click(function() {     
        $("h1").css("font-size","20px");
      });
       
      $( "#tombol_red" ).click(function() {     
        $("h1").css( "color", "blue" );
      });
    });
   </script>
</head>
<body>
  <h1>Belajar jQuery</h1>
  <h1>Belajar jQuery2</h1>
  <button id="tombol_hide">Sembunyikan</button>
  <button id="tombol_show">Tampilkan</button>
  <button id="tombol_small">Perkecil</button>
  <button id="tombol_red">Merahkan</button>
</body>
</html>


