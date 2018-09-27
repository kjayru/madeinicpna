<?php 
$title = 'ICPNA - Ubícanos';
$estilo= 'style';
include('includes/header.php'); 
include('includes/navbar.php');?>

	<div class="hv_page" style="padding-top: 0">
		<div class="hv_fondo fondo-contact">
			<section class="hv_page_secc1 page5_select">
				<!--<h1 class="page5_h1"><img src="images/line_title.png"> UBÍCANOS</h1>-->

				<h1 class="title-header">
					UBÍCANOS
				</h1>

				<p class="page5_p">DESCUBRE TU ICPNA M&Aacute;S CERCANO</p>

				<div class="select-map">
					<select id="sede" name="sede">
						<option value="">Sede</option>
						<option value="Lima Centro" data-id="0" selected="">Lima Centro</option>
						<option value="San Miguel" data-id="1">San Miguel</option>
						<option value="Miraflores" data-id="2">Miraflores</option>
						<option value="La Molina" data-id="3">La Molina</option>
						<option value="Lima Norte" data-id="4">Lima Norte</option>
						<option value="Surco" data-id="5">Surco</option>
						<option value="Iquitos" data-id="6">Iquitos</option>
						<option value="Pucallpa" data-id="7">Pucallpa</option>
						<option value="Chimbote" data-id="8">Chimbote</option>
						<option value="Huaraz" data-id="9">Huaraz</option>
						<option value="Abancay" data-id="10">Abancay</option>
						<option value="Ica" data-id="11">Ica</option>
						<option value="Cerro de Pasco" data-id="12">Cerro de Pasco</option>
						<option value="Chincha" data-id="13">Chincha</option>
						<option value="Andahuaylas" data-id="14">Andahuaylas</option>
					</select>
				</div>


				<div class="content_map">
					<div id="mapa" class="nv mapa"></div>
					<div class="nv textmapa">
						<img src="images/icpna-logo-sede.png" />
						<h2 id="textmapa__titulo">Lima Centro</h2>
						<div class="content_sede">
							<div class="hv_sede icono_mapa"><img src="images/ico_map.png" alt=""></div>
							<div id="textmapa__direccion" class="hv_sede textico_mapa">Jr. Cuzco N° 446</div>
						</div>
						<div class="content_sede">
							<div class="hv_sede icono_mapa"><img src="images/ico_time.png" alt=""></div>
							<div id="textmapa__horario" class="hv_sede textico_mapa">Lunes a Viernes de 7:00 a.m. a 8:00 p.m. <br>Sábados de 8:00 a.m. a 5:00 p.m.</div>
						</div>
						<div class="content_sede">
							<div class="hv_sede icono_mapa"><img src="images/ico_phone.png" alt=""></div>
							<div class="hv_sede textico_mapa"><a id="textmapa__telefono" class="hv_sede__enlace" href="tel:017067000">(01) 706-7000</a></div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>


	<?php include('includes/foot.php');?>
	<?php include('includes/footer_int.php');?>
	<script>
	function initMap(latitud, longitud) {
	if(latitud!==undefined){
		var latlng = new google.maps.LatLng(latitud, longitud);
	} else{
		var latlng = new google.maps.LatLng('-12.051438','-77.031849');
	} 
			var map = new google.maps.Map(document.getElementById('mapa'), {
			center: latlng,
			zoom: 16
			});

			var marker = new google.maps.Marker({
			position: latlng,
			map: map
			});
	}
</script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCoCUq7XblisE2xqOTisMZveghQ9_-P1vs&callback=initMap"></script>
	<script  async defer src="js/sede.js"></script>
</body>
</html>