
<?php

header('Content-Type: text/html; charset=utf-8');
?><!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="Content-Language" content="TR"/>	
<!--<meta charset="UTF-8">-->
<title>Text Analyzer</title>
<link rel="stylesheet" type="text/css" href="css/stil.css">
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<style type="text/css">
${demo.css}
		</style>
		<script type="text/javascript">

		</script>
		<script src="Highcharts-4.1.7/js/highcharts.js"></script>
		<script src="Highcharts-4.1.7/js/modules/exporting.js"></script>
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.--><script>var __adobewebfontsappname__="dreamweaver"</script>
<script src="http://use.edgefonts.net/bebas-neue:n4:default.js" type="text/javascript"></script>
<script>
$(document).ready(function(e) {
    $("#fileField").on("change",function(){
		oku();
	});
	$("#textarea").on("keyup",function(){
		var metin = $("#textarea").val();
		HarfHesapla(metin);
		KarakterHesapla(metin);
		KullanimSikligi(metin);
		numriPergjitshemSkronjave(metin);
		GrafikOlustur();
	});
	$("#textarea").on("change",function(){
		var metin = $("#textarea").val();
		HarfHesapla(metin);
		KarakterHesapla(metin);
		KullanimSikligi(metin);
		numriPergjitshemSkronjave(metin);
		GrafikOlustur();
	});
	$("#temizle").on("click",function(){
		$("#textarea").html("");
		$('#fileField').html("");
		$('#harfler').html("");
		$('#digerKarakterler').html("");
		$('#KullanimSikligi').html("");
		$('#nrPSh').html("");
	});
	function oku(){
		var file_data = $('#fileField').prop('files')[0];   
		var form_data = new FormData();                  
		form_data.append('file', file_data);                            
		$.ajax({
				url: 'ajax.php', // point to server-side PHP script 
				dataType: 'text',  // what to expect back from the PHP script, if anything
				cache: false,
				contentType: false,
				processData: false,
				data: form_data,                         
				type: 'post',
				success: function(sonuc){
					$('#textarea').html(sonuc);
					var metin = $("#textarea").val();
					HarfHesapla(metin);
					KarakterHesapla(metin);
					KullanimSikligi(metin);
					numriPergjitshemSkronjave(metin);
					GrafikOlustur();
				}
		 });
	}
	function HarfHesapla(metin){
		$.get('ajax1.php', {harfHsp: metin}, function (gelen_cevap) {
		  $('#harfler').text(gelen_cevap);
	    });
	}
	function KarakterHesapla(metin){
		$.get('ajax1.php', {karHsp: metin}, function (gelen_cevap) {
		  $('#digerKarakterler').text(gelen_cevap);
	    });
	}
	function KullanimSikligi(metin){
		$.get('ajax1.php', {KullHsp: metin}, function (gelen_cevap) {
		  $('#KullanimSikligi').text(gelen_cevap);
	    });
	}
	function numriPergjitshemSkronjave(metin){
		$.get('ajax1.php', {nrPSh: metin}, function (gelen_cevap) {
		  $('#nrPSh').html(gelen_cevap);
		  GrafikOlustur();
	    });
	}
	function GrafikOlustur(){
		var lines = $('#KullanimSikligi').val().split('\n');
		//alert(lines);
		var shkronjat;
		var n;
		var degerler = [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0] ;
		for(var i = 0;i < lines.length;i++){
			n = lines[i].indexOf("=");
			degerler[i] = (isNaN(lines[i].substr(3)) ? 0 :lines[i].substr(3))*100;
			//$('#rezultat').html("ara "+lines[i].substr(3))
		}

		//alert("degerler = "+degerler[5]);	
		var shkronjat = 
					[['a',degerler[0]],
					['b', degerler[1]],
					['c', degerler[2]],
					['d', degerler[3]],
					['e', degerler[4]],
					['f', degerler[5]],
					['g', degerler[6]],
					['h', degerler[7]],
					['i', degerler[8]],
					['j', degerler[9]],
					['k', degerler[10]],
					['l', degerler[11]],
					['m', degerler[12]],
					['n', degerler[13]],
					['o', degerler[14]],
					['p', degerler[15]],
					['q', degerler[16]],
					['r', degerler[17]],
					['s', degerler[18]],
					['t', degerler[19]],
					['u', degerler[20]],
					['v', degerler[21]],
					['w', degerler[22]],
					['x', degerler[23]],
					['y', degerler[24]],
					['z', degerler[25]]]; 

		//$('#rezultat').html("ara"+shkronjat);
		$('#container').highcharts({
			chart: {
				type: 'column'
			},
			title: {
				text: 'TextAnalyzer - Frequency of letters'
			},
			subtitle: {
				text: 'Source: <a href="http://ermancibo.com">TextAnalyzer</a>'
			},
			xAxis: {
				type: 'category',
				labels: {
					rotation: -45,
					style: {
						fontSize: '13px',
						fontFamily: 'Verdana, sans-serif'
					}
				}
			},
			yAxis: {
				min: 0,
				title: {
					text: 'Frequency of usage %'
				}
			},
			legend: {
				enabled: false
			},
			tooltip: {
				pointFormat: '</b>'
			},
			series: [{
				name: 'Frequency',
				data: shkronjat,
				dataLabels: {
					enabled: true,
					rotation: -90,
					color: '#FFFFFF',
					align: 'right',
					format: '{point.y:.1f}', // one decimal
					y: 10, // 10 pixels down from the top
					style: {
						fontSize: '13px',
						fontFamily: 'Verdana, sans-serif'
					}
				}
			}]
		});
	}
});

</script>

</head>

<body>

<div class="container">
<header>
	<img style="float:left" src="images/logo.png" height="160">
	<h1 id="txtanalizer">Text Analyzer</h1>
	<span id="description">UPz FSHK - MASTER (Detyra Projektuese)</span>
	<div class="sidebar1">
  	<ul class="nav">
        <li><a href="#" style="color:#F5F4F4;background-color:#BCB181">LANGUAGES</a></li>
        <li><a id="active" href="indexEn.php">English</a></li>
        <li><a  href="index.php">Shqip</a></li>
       <!-- <li><a href="#">Türkçe</a></li>-->
    </ul>
  <!-- end .sidebar1 --></div>
</header>
<div class="clear"></div>
  
  <article class="content">
    <form method="post" enctype="multipart/form-data">
      <section  style="padding:10px">
	  <table border="0" width="100%" height="80">
			<tr>
				<td>
				Read Text:
				<input type="file" name="fileField" id="fileField">
       			<input type="reset" name="temizle" id="temizle" value="X"></td>
				<td id="nrPSh"></td>
			</tr>
		</table>

        
        <br><br>
        <textarea style="width:100%;" name="textarea" cols="90" rows="30" id="textarea"></textarea>
        <br>
        <br>
      </section>
	  <table id="analizSonuc" name="analizSonuc" border="0" width="100%">
		<tr>
			<td style="padding:10px;width:33%">
			Letters:
				<textarea id="harfler" disabled name="harfler" rows="26" style="width:90%;" cols="20"></textarea></td>
			<td style="padding:10px;width:33%">
			Other Charachters:
				<textarea id="digerKarakterler" disabled name="harfler" rows="26" style="width:90%;" cols="20"></textarea></td>
			<td style="padding:10px;width:33%">
			Frequency of usage:
				<textarea id="KullanimSikligi" disabled name="harfler" rows="26" style="width:90%;" cols="20"></textarea></td>
		</tr>
	</table>
</form>

<input type="button" name="grafik" id="grafik" value="Refresh Graphic"/>
<span id="rezultat"></span>
<div id="container" style="min-width: 300px; height: 400px; margin: 0 auto"></div>
    <!-- end .content -->
  </article>
  <footer>
    <address>
     <span style="margin-left:20px">&copy;copyright UPz FSHK MASTER</span>
    </address>
  </footer>
  <!-- end .container --></div>
</body>
</html>
