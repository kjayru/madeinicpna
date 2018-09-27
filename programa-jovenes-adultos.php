<?php
	$utm_source = isset($_GET['utm_source']) && $_GET['utm_source']!='' ? $_GET['utm_source'] : '' ;
    $utm_medium = isset($_GET['utm_medium']) && $_GET['utm_medium']!='' ? $_GET['utm_medium'] : '' ;
    $utm_campaign = isset($_GET['utm_campaign']) && $_GET['utm_campaign']!='' ? $_GET['utm_campaign'] : '' ;
    $utm_term = isset($_GET['utm_term']) && $_GET['utm_term']!='' ? $_GET['utm_term'] : '' ;
    $utm_content = isset($_GET['utm_content']) && $_GET['utm_content']!='' ? $_GET['utm_content'] : '' ;
	$gclid = isset($_GET['gclid']) && $_GET['gclid']!='' ? $_GET['gclid'] : '' ;
	$title = 'ICPNA - Programa para Jóvenes y Adultos';
	$estilo= 'style';
	include('includes/header.php');
	include('includes/navbar.php'); ?>


	<div class="hv_page main-content">
		<div class="hv_fondo">
			
				
			<section class="hv_page_secc1 ">
				
			 		<h1 class="title-header">
						PROGRAMA DE INGL&Eacute;S <span>PARA J&Oacute;VENES Y ADULTOS</span>
					</h1>
				<div class="content">
					<div class="page_content page2">

						<p>
							Este programa est&aacute; dise&ntilde;ado para estudiantes desde los 14 a&ntilde;os, ofreci&eacute;ndoles un amplio y completo aprendizaje del idioma. Desde el primer d&iacute;a y en forma progresiva los alumnos se familiarizan con el ingl&eacute;s americano observando, escuchando y practicando bajo la orientaci&oacute;n de un profesor altamente capacitado.
						</p>
						<p>
							El programa completo desarrolla un nivel equivalente al exigido para estudiar en una universidad de los Estados Unidos de Am&eacute;rica.
						</p>
						<p>
							El ingl&eacute;s del ICPNA est&aacute; dividido en 3 niveles:

						</p>

						<div class="item-plan">
							<h2>B&Aacute;SICO</h2>
						<p>
							Aprender&aacute;s a comunicarte en situaciones diarias relacionadas con los estudios, la vida social y el trabajo. Desarrollar&aacute;s tambi&eacute;n tu pensamiento cr&iacute;tico.
						 
							<span>Duraci&oacute;n: 12 ciclos</span>
						</p>
					</div>

						<div class="item-plan">
							<h2>INTERMEDIO</h2>
							<p>
								Obtendr&aacute;s mayores conocimientos en gram&aacute;tica y en vocabulario, lo que te permitir&aacute; comunicarte con mayor confianza y fluidez en diversas situaciones.
								 
								<span>Duraci&oacute;n: 12 ciclos</span>
							</p>
						</div>

						<div class="item-plan">

							<h2>AVANZADO</h2>
							<p>
							Podr&aacute;s comunicarte con gran precisi&oacute;n y fluidez. Adem&aacute;s te permitir&aacute; enriquecer tu vocabulario, mejorar la comprensi&oacute;n auditivo-lectora y la escritura relacionadas con &aacute;mbitos acad&eacute;micos y profesionales.<br> 
							<span>Duraci&oacute;n: 12 ciclos</span>
							</p>
						</div>


		 
						<div class="select-horarios">
                        <!--/**CODE IMPLEMENTATION **/-->
								<div class="page2_select">
                                        <h2>Consulta horarios y tarifas</h2>
                                       <div class="select-">
                                        	 
	                                        <select id="programa" name="programa">
	                                            <option value="">Programa</option>
	                                            
	                                        </select>
	                                    </div>
                                        
                                        <div class="select-">
                                        	 
	                                        <select id="sedeciudad" name="sede">	
	                                            <option value="">Sede</option>
	                                           
	                                        </select>
                                        </div>

                                        <div class="select-">
                                         
	                                        <select id="nivel" name="Nivel">	
	                                            <option value="">Nivel</option>
	                                           
	                                        </select>
	                                    </div>

                                        <div class="select-">
                                        	 
	                                        <select id="curso" name="Curso">
	                                            <option value="">Frecuencia</option>
	                                           
	                                        </select>
	                                    </div>
                
                                      	<button type="submit" id="mostrar_informacion" class="">Ver información</button>
                                </div>

						</div>
						<section class="detalles" style="display:none;">
                    <h3>ICPNA Sede <span class="sede_seleccionado">Chimbote</span></h3>
                    <p class="direccion_seleccionado">
                        Urb. Mcal. Luzuriaga <br>
                        a 1/2 cdra. de Catedral de Nvo. Chimbote
                    </p>

                    <div class="calendario-list" >
                         <h4><span class="opcion_nivel">Nivel</span> <span class="diario_seleccionado">Diario</span> - <span class="nivel_seleccionado">Básico 02</span></h4>
                        
                        <h5 class="pos-titulo"></h5>
                      
                        <ul class="horario">
                            <li class="op1">
                                <h3>Turno Ma&ntilde;ana</h3>
                                <ul id="resultado_manana"></ul> 
                            </li>
                            <li class="op2">
                                <h3 >Turno Tarde</h3>
                                <ul id="resultado_tarde"></ul>
                            </li>
                            <li class="op3">
                                <h3>Turno Noche</h3>
                                <ul id="resultado_noche"></ul>
                            </li>
                            
                            <li class="op4">
                                <h3>Turno Tarde M y J</h3>
                                <ul id="resultado_tmj"></ul>
                            </li>
                            
                            <li class="op5">
                                <h3>Turno Tarde S&aacute;bado</h3>
                                <ul id="resultado_ds"></ul>
                            </li>
                        </ul>  
                    </div>

                    <div class="text_costo">
                        <p>
                            <b>Costo del ciclo</b> <br>
                            <span class="precio">S/0</span>
                        </p> 
                    </div>
                    <div class="text_detalle">
                        <p>
                           
                            <span class="detalle_especial"></span>
                        </p> 
                    </div>
                </section>
					</div>

					<!--Formulario-->
					<section id="hv_pg2form" class="sticky" >
						<div class="form_position">
						<div class="page2_form">
							
							<div id="button-form">
								<h2 id="title_form">¿Quieres m&aacute;s informaci&oacute;n?<br>Ingresa tus datos aqu&iacute;</h2>
								<div id="btn_show"><img src="images/arrow-up.png"></div>
								<div class="cl"></div>
							</div>
							<div class="cl"></div>
							<form id="hvFormicpna">
								<label class="label l">
									<span>Nombres</span>
									<input type="text"  name="nombres" maxlength="20" class="mayus" >
									<!--<div class="error">Ingresa tu nombre.</div>-->
								</label>
								<label class="label r">
									<span>Apellidos</span>
									<input type="text"  name="apellidos" maxlength="20" class="mayus" >
									<!--<div class="error">Ingresa tu apellido.</div>-->
								</label>
								<div class="cl"></div>
								<label class="label l">
									<span>Tipo de documento</span>
									<div class="form__select">
										<strong>DNI</strong>
										<select id="tipodocumento" name="tipodocumento">
											<option value="DNI">DNI</option>
											<option value="Carnet">Carnet</option>
										</select>
									</div>
									<!--<div class="error">Ingresa tipo de documento.</div>-->
								</label>
								<label class="label r">
									<span>N&uacute;mero de documento</span>
									<input type="text"  name="numerodocumento" valid="num" maxlength="9">
									<!--<div class="error">Ingresa tu número de documento.</div>-->
								</label>
								<div style="clear: both;"></div>
								<label class="label l">
									<span>N&uacute;mero de celular</span>
									
									<div class="campo ico-cell">
										<input type="text"  name="celular" valid="num" maxlength="9">
									</div>
									<!--<div class="error">Ingresa tu número de celular.</div>-->
								</label>
								<label class="label r">
									<span>Correo electr&oacute;nico</span>
									<div class="campo ico-mail">
										<input id="email" type="text"  name="correo" valid="email" maxlength="40">
									</div>
									<!--<div class="error">Ingresa tu correo.</div>-->
								</label>
								<div style="clear: both;"></div>
								<label class="label c">
									<span>Sedes</span>
									<div class="form__select">
										<strong>Lima Centro</strong>
										<select id="sedes_f" name="sedes">
											<option value="Lima Centro">Lima Centro</option>
											<option value="Miraflores">Miraflores</option>
											<option value="San Miguel">San Miguel</option>
											<option value="La Molina">La Molina</option>
											<option value="Lima Norte">Lima Norte</option>
											<option value="Surco">Surco</option>
											<option value="Iquitos">Iquitos</option>
											<option value="Chimbote">Chimbote</option>
											<option value="Pucallpa">Pucallpa</option>
											<option value="Huaraz">Huaraz</option>
											<option value="Abancay">Abancay</option>
											<option value="Cerro de Pasco">Cerro de Pasco</option>
											<option value="Andahuaylas">Andahuaylas</option>
											<option value="Ica">Ica</option>
											<option value="Chincha">Chincha</option>
										</select>
									</div>
									<!--<div class="error">Ingresa una sede.</div>-->
								</label>
								<div style="clear: both;"></div>
								<label class="label c">
									<span>Programa de inter&eacute;s</span>
									<div class="form__select">
										<strong>Programa para J&oacute;venes y Adultos</strong>
										<select id="programa" name="programa">
											<option value="Programa para Jóvenes y Adultos" selected>Programa para J&oacute;venes y Adultos</option>
											<option value="Programa para Niños">Programa para Ni&ntilde;os</option>
										</select>
									</div>
									<!--<div class="error">Ingresa un programa.</div>-->
								</label>
								<div style="clear: both;"></div>
								
								<div class="icheck">
								 
									<input type="checkbox" name="pauta" id="pauta" value="si"> <label class="form_legal"><a id="acepto-modal">Acepto términos y condiciones</a></label>
								</div>
								<div style="clear: both;"></div>
								<input type="hidden" name="tipo" value="registro" no>
			                    <input type="hidden" name="utm_source" value="<?php echo $utm_source; ?>" no>
			                    <input type="hidden" name="utm_medium" value="<?php echo $utm_medium; ?>" no>
			                    <input type="hidden" name="utm_campaign" value="<?php echo $utm_campaign; ?>" no>
			                    <input type="hidden" name="utm_term" value="<?php echo $utm_term; ?>" no>
			                    <input type="hidden" name="utm_content" value="<?php echo $utm_content; ?>" no>
			                    <input type="hidden" name="gclid" value="<?php echo $gclid; ?>" no>
			                    <input type="hidden" name="formulario" value="adultos" no>
								<button type="submit" name="enviar" id="sendform">Enviar</button>
								<div style="clear: both;"></div>
								<!---->

							</form>
						</div>
						</div>
					</section>
					<!--//End Formulario-->
				</div>


			</section>
		</div>
	</div>



	<?php include('includes/foot.php');?>


	<div class="gracias">
		<div class="gracias__box">
			<h6>GRACIAS POR REGISTRARTE,</h6>
			<p>Una asesora se comunicar&aacute; contigo.</p>
			<div class="gracias__cerrar">x</div>
		</div>
	</div>

	<div id="modal-terminos">
		<div class="box-modal">
			<a href="#" class="close-modal">X</a>
			<h3>TÉRMINOS Y CONDICIONES</h3>
				<div class="scroll-h">
				<h4>DECLARACION DE PROTECCION DE DATOS PERSONALES MAYOR DE 18 AÑOS DE EDAD</h4>
				<p>En aplicación a lo dispuesto por la Ley 29733 Ley de Protección de Datos Personales, y el D.S. 003-2013-JUS,el suscrito titular de los datos personales, mediante el llenado y/o firma del presente formulario, autorizo de forma expresa e inequívoca y por tiempo indefinido que mis datos personales, sean tratados, almacenados, sistematizados y utilizados por el INSTITUTO CULTURAL PERUANO NORTEAMERICANO para fines estadísticos, administrativos y de gestión comercial, incluyendo pero sin estar limitado a: invitaciones a cursos, talleres, charlas y otros eventos que el ICPNA organice, auspicie o participe, siendo que los datos, serán conservados en un banco de datos cuyo titular es el ICPNA, autorizando incluso su tratamiento internacional si fuera el caso. Asimismo, declaro que estoy informado que ante alguna solicitud de datos personales sensibles, es mi facultad responder o no sobre los mismos e igualmente declaro conocer los efectos y/o consecuencias de proporcionar mis datos personales o de negarme a brindarlos. Igualmente declaro conocer que para ejercer mis derechos como acceso, rectificación, cancelación y oposición y otros derechos, sobre mis datos puedo dirigirme a las oficinas, ubicadas en Av. Angamos Oeste 120, Miraflores. Declaro conocer los alcances de la Ley 29733 y su reglamento, para ejercer mis derechos conforme a Ley.</p>

				<h4>DECLARACION DE PROTECCION DE DATOS PERSONALES MAYOR DE 14 Y MENOR A 18 AÑOS</h4>
				<p>En aplicación a lo dispuesto por la Ley 29733 Ley de Protección de Datos Personales, y el D.S. 003-2013-JUS, y en especial en el artículo 28 del D.S.003-2013-JUS, el suscrito menor de edad, titular de mis datos personales, mediante el llenado y/o firma del presente formulario, autorizo de forma expresa e inequívoca y por tiempo indefinido que mis datos personales, sean tratados, almacenados, sistematizados y utilizados por el INSTITUTO CULTURAL PERUANO NORTEAMERICANO para fines estadísticos, administrativos y de gestión comercial, incluyendo pero sin estar limitado a: invitaciones a cursos, talleres, charlas y otros eventos que el ICPNA organice, auspicie o participe, siendo que los datos, serán conservados en un banco de datos cuyo titular es el ICPNA, autorizando incluso su tratamiento internacional si fuera el caso. Asimismo, declaro que estoy informado que ante alguna solicitud de datos personales sensibles, es mi facultad responder o no sobre los mismos e igualmente declaro conocer los efectos y/o consecuencias de proporcionar mis datos personales o de negarme a brindarlos. Igualmente declaro conocer que para ejercer mis derechos como acceso, rectificación, cancelación y oposición y otros derechos, sobre mis datos puedo dirigirme a las oficinas, ubicadas en Av. Angamos Oeste 120, Miraflores. Señalo también, que al ser yo menor de edad, el ICPNA no me está solicitando datos relativos a la actividad profesional o laboral de mis padres, ni su información económica, datos sociológicos o de cualquier otro sobre los demás miembros de mi familia. Asimismo, declaro que estoy informando al ICPNA de la identidad y dirección de mis padres, a fin de que ellos puedan autorizar el tratamiento de mis datos personales, en aquellos casos en que mi propia autorización no fuera suficiente y que estén referidas al acceso a actividades, vinculadas con bienes o servicios que estén restringidos para mayores de edad.</p>

				<h4>DECLARACION DE PROTECCION DE DATOS PERSONALES MENOR DE 14 AÑOS DE EDAD</h4>
				<p>En aplicación a lo dispuesto por la Ley 29733 Ley de Protección de Datos Personales, y el D.S. 003-2013-JUS,el suscrito titular de los datos personales, mediante el llenado y/o firma del presente formulario, autorizo de forma expresa e inequívoca y por tiempo indefinido que mis datos personales, sean tratados, almacenados, sistematizados y utilizados por el INSTITUTO CULTURAL PERUANO NORTEAMERICANO para fines estadísticos, administrativos y de gestión comercial, incluyendo pero sin estar limitado a: invitaciones a cursos, talleres, charlas y otros eventos que el ICPNA organice, auspicie o participe, siendo que los datos, serán conservados en un banco de datos cuyo titular es el ICPNA, autorizando incluso su tratamiento internacional si fuera el caso. Asimismo, declaro que estoy informado que ante alguna solicitud de datos personales sensibles, es mi facultad responder o no sobre los mismos e igualmente declaro conocer los efectos y/o consecuencias de proporcionar mis datos personales o de negarme a brindarlos. Igualmente declaro conocer que para ejercer mis derechos como acceso, rectificación, cancelación y oposición y otros derechos, sobre mis datos puedo dirigirme a las oficinas, ubicadas en Av. Angamos Oeste 120, Miraflores. Declaro conocer los alcances de la Ley 29733 y su reglamento, para ejercer mis derechos conforme a Ley y declaro además, que parte integrante de esta declaración y autorización explícita en todos los términos expuestos, incluyen también el tratamiento de datos personales del menor de edad sujeto a mi patria potestad, y cuyos datos se encuentran en el banco de datos del ICPNA.</p>
			</div>

		</div>

	</div> 

<?php include('includes/footer_int.php'); ?>
	
<script type="text/javascript" src="js/programa-jovenes_rv.js?rand=<?php echo uniqid(); ?>" ></script>

</body>
</html>