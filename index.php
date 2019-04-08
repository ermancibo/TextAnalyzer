
<?php

//header('Content-Type: text/html; charset=utf-8');
?><!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
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
		$.get('ajax.php', {harfHsp: metin}, function (gelen_cevap) {
		  $('#harfler').text(gelen_cevap);
	    });
	}
	function KarakterHesapla(metin){
		$.get('ajax.php', {karHsp: metin}, function (gelen_cevap) {
		  $('#digerKarakterler').text(gelen_cevap);
	    });
	}
	function KullanimSikligi(metin){
		$.get('ajax.php', {KullHsp: metin}, function (gelen_cevap) {
		  $('#KullanimSikligi').text(gelen_cevap);
	    });
	}
	function numriPergjitshemSkronjave(metin){
		$.get('ajax.php', {nrPSh: metin}, function (gelen_cevap) {
		  $('#nrPSh').html(gelen_cevap);
		  GrafikOlustur();
	    });
	}
	//$("#grafik").on('click',function(){
	function GrafikOlustur(){
		var lines = $('#KullanimSikligi').val().split('\n');
		//alert(lines);
		var shkronjat;
		var n;
		var degerler = [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0] ;
		for(var i = 0;i < lines.length;i++){
			n = lines[i].indexOf("=");
			degerler[i] = (isNaN(lines[i].substr(3)) ? 1 :lines[i].substr(3))*100;
			//$('#rezultat').html("ara "+lines[i].substr(3))
		}

		//alert("degerler = "+degerler[5]);	
		var shkronjat = 
					[['a',degerler[0]],
					['b', degerler[1]],
					['c', degerler[2]],
					['ç', degerler[3]],
					['d', degerler[4]],
					['dh',degerler[5]],
					['e', degerler[6]],
					['ë', degerler[7]],
					['f', degerler[8]],
					['g', degerler[9]],
					['gj',degerler[10]],
					['h', degerler[11]],
					['i', degerler[12]],
					['j', degerler[13]],
					['k', degerler[14]],
					['l', degerler[15]],
					['ll',degerler[16]],
					['m', degerler[17]],
					['n', degerler[18]],
					['nj',degerler[19]],
					['o', degerler[20]],
					['p', degerler[21]],
					['q', degerler[22]],
					['r', degerler[23]],
					['rr',degerler[24]],
					['s', degerler[25]],
					['sh',degerler[26]],
					['t', degerler[27]],
					['th',degerler[28]],
					['u', degerler[29]],
					['v', degerler[30]],
					['x', degerler[31]],
					['xh',degerler[32]],
					['y', degerler[33]],
					['z', degerler[34]],
					['zh',degerler[35]]]; 

		//$('#rezultat').html("ara"+shkronjat);
		$('#container').highcharts({
			chart: {
				type: 'column'
			},
			title: {
				text: 'TextAnalyzer - Frekuenca e shkronjave'
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
					text: 'Frekuenca e përdorimit %'
				}
			},
			legend: {
				enabled: false
			},
			tooltip: {
				pointFormat: '</b>'
			},
			series: [{
				name: 'Frekuenca',
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
        <li><a href="indexEn.php">English</a></li>
        <li><a id="active" href="index.php">Shqip</a></li>
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
				Lexo tekstin:
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
			Shkronjat:
				<textarea id="harfler" disabled name="harfler" rows="36" style="width:90%;" cols="20"></textarea></td>
			<td style="padding:10px;width:33%">
			Shenjat e pikësimit:
				<textarea id="digerKarakterler" disabled name="harfler" rows="36" style="width:90%;" cols="20"></textarea></td>
			<td style="padding:10px;width:33%">
			Frekuenca e përdorimit:
				<textarea id="KullanimSikligi" disabled name="harfler" rows="36" style="width:90%;" cols="20"></textarea></td>
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
