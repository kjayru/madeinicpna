<?php

    $title="ICPNA - Gracias";
    $estilo = 'style';
    include('includes/header.php');
    include('includes/navbar.php');
?>
 	

	<div class="hv_page hv_page_red">
		<div class="hv_fondo">
			
				
			<section class="hv_page_secc_gracias">
				
			 		<div class="gracias_page">
					<div class="graciasbox">
						<h6>GRACIAS POR REGISTRARTE,</h6>
						<p>Una asesora se comunicará contigo.</p>
						<button class="buttonback" data-sec="<?php echo $_GET['p'] ?>">Regresar</button>
					</div>
				</div>

			</section>
		</div>
	</div>

<?php include('includes/foot.php'); ?>
	

	<div id="modal-terminos">
		<div class="box-modal">
			<a href="#" class="close-modal">X</a>
			<h3>TÉRMINOS Y CONDICIONES</h3>
				<div class="scroll-h">
				<h4>DECLARACION DE PROTECCION DE DATOS PERSONALES MAYOR DE 18 AÑOS DE EDAD</h4>
				<p>En aplicación a lo dispuesto por la Ley 29733 Ley de Protección de Datos Personales, y el D.S. 003-2013-JUS,el suscrito titular de los datos personales, mediante el llenado y/o firma del presente formulario, autorizo de forma expresa e inequívoca y por tiempo indefinido que mis datos personales, sean tratados, almacenados, sistematizados y utilizados por el INSTITUTO CULTURAL PERUANO NORTEAMERICANO para fines estadísticos, administrativos y de gestión comercial, incluyendo pero sin estar limitado a: invitaciones a cursos, talleres, charlas y otros eventos que el ICPNA organice, auspicie o participe, siendo que los datos, serán conservados en un banco de datos cuyo titular es el ICPNA, autorizando incluso su tratamiento internacional si fuera el caso. Asimismo, declaro que estoy informado que ante alguna solicitud de datos personales sensibles, es mi facultad responder o no sobre los mismos e igualmente declaro conocer los efectos y/o consecuencias de proporcionar mis datos personales o de negarme a brindarlos. Igualmente declaro conocer que para ejercer mis derechos como acceso, rectificación, cancelación y oposición y otros derechos, sobre mis datos puedo dirigirme a las oficinas, ubicadas en Av. Angamos Oeste 120, Miraflores y/o al e-mail: <a href="mailto:ticpna@icpna.edu.pe">ticpna@icpna.edu.pe</a>. Declaro conocer los alcances de la Ley 29733 y su reglamento, para ejercer mis derechos conforme a Ley.</p>

				<h4>DECLARACION DE PROTECCION DE DATOS PERSONALES MAYOR DE 14 Y MENOR A 18 AÑOS</h4>
				<p>En aplicación a lo dispuesto por la Ley 29733 Ley de Protección de Datos Personales, y el D.S. 003-2013-JUS, y en especial en el artículo 28 del D.S.003-2013-JUS, el suscrito menor de edad, titular de mis datos personales, mediante el llenado y/o firma del presente formulario, autorizo de forma expresa e inequívoca y por tiempo indefinido que mis datos personales, sean tratados, almacenados, sistematizados y utilizados por el INSTITUTO CULTURAL PERUANO NORTEAMERICANO para fines estadísticos, administrativos y de gestión comercial, incluyendo pero sin estar limitado a: invitaciones a cursos, talleres, charlas y otros eventos que el ICPNA organice, auspicie o participe, siendo que los datos, serán conservados en un banco de datos cuyo titular es el ICPNA, autorizando incluso su tratamiento internacional si fuera el caso. Asimismo, declaro que estoy informado que ante alguna solicitud de datos personales sensibles, es mi facultad responder o no sobre los mismos e igualmente declaro conocer los efectos y/o consecuencias de proporcionar mis datos personales o de negarme a brindarlos. Igualmente declaro conocer que para ejercer mis derechos como acceso, rectificación, cancelación y oposición y otros derechos, sobre mis datos puedo dirigirme a las oficinas, ubicadas en Av. Angamos Oeste 120, Miraflores y/o al e-mail: <a href="mailto:ticpna@icpna.edu.pe">ticpna@icpna.edu.pe</a>. Señalo también, que al ser yo menor de edad, el ICPNA no me está solicitando datos relativos a la actividad profesional o laboral de mis padres, ni su información económica, datos sociológicos o de cualquier otro sobre los demás miembros de mi familia. Asimismo, declaro que estoy informando al ICPNA de la identidad y dirección de mis padres, a fin de que ellos puedan autorizar el tratamiento de mis datos personales, en aquellos casos en que mi propia autorización no fuera suficiente y que estén referidas al acceso a actividades, vinculadas con bienes o servicios que estén restringidos para mayores de edad.</p>

				<h4>DECLARACION DE PROTECCION DE DATOS PERSONALES MENOR DE 14 AÑOS DE EDAD</h4>
				<p>En aplicación a lo dispuesto por la Ley 29733 Ley de Protección de Datos Personales, y el D.S. 003-2013-JUS,el suscrito titular de los datos personales, mediante el llenado y/o firma del presente formulario, autorizo de forma expresa e inequívoca y por tiempo indefinido que mis datos personales, sean tratados, almacenados, sistematizados y utilizados por el INSTITUTO CULTURAL PERUANO NORTEAMERICANO para fines estadísticos, administrativos y de gestión comercial, incluyendo pero sin estar limitado a: invitaciones a cursos, talleres, charlas y otros eventos que el ICPNA organice, auspicie o participe, siendo que los datos, serán conservados en un banco de datos cuyo titular es el ICPNA, autorizando incluso su tratamiento internacional si fuera el caso. Asimismo, declaro que estoy informado que ante alguna solicitud de datos personales sensibles, es mi facultad responder o no sobre los mismos e igualmente declaro conocer los efectos y/o consecuencias de proporcionar mis datos personales o de negarme a brindarlos. Igualmente declaro conocer que para ejercer mis derechos como acceso, rectificación, cancelación y oposición y otros derechos, sobre mis datos puedo dirigirme a las oficinas, ubicadas en Av. Angamos Oeste 120, Miraflores y/o al e-mail: <a href="mailto:ticpna@icpna.edu.pe">ticpna@icpna.edu.pe</a>. Declaro conocer los alcances de la Ley 29733 y su reglamento, para ejercer mis derechos conforme a Ley y declaro además, que parte integrante de esta declaración y autorización explícita en todos los términos expuestos, incluyen también el tratamiento de datos personales del menor de edad sujeto a mi patria potestad, y cuyos datos se encuentran en el banco de datos del ICPNA.</p>
			</div>

		</div>

	</div> 
	
	<script>
		let btnback = document.querySelector(".buttonback");
		btnback.addEventListener('click',function(){
			let variable = this.dataset.sec;
			
			switch(variable){
				case '1':
					 window.location.href = '/programa-ninos.php';
				break;
					
				case '2':
					window.location.href = '/programa-jovenes-adultos.php';
				break;
					
				case '3':
					window.location.href = '/programa-jovenes-adultos-miraflores.php';
				break;
					
				default:
					
				 window.location.href = '/';
				
			}
		})
	</script>

</body>
</html>