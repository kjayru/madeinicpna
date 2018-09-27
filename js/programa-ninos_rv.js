//SCRIPT EMBLUEMAIL

var formSelector="#hvFormicpna";
var eventName="madeinicpna";   //Aquí deben colocar el nombre del evento definido en emBlue
var apikey="MDcwZjFkNWMxMjdhNDBkMjgyMjhmNGNhZGY5ODFkOTQ=";   //Api Key de la cuenta emBlue
var emailField = "correo";   //Acá sólo se define el valor de la variable email. El resto de campos del formulario los toma el script


$(document).ready(function() {
  $('.nav-open').on("click", function(e) {
  e.preventDefault();
  $(this).toggleClass('nav-close');
  $('#navigation').toggleClass('nav-list-open');
 

  });

   

   $('#button-form').on('click', function(){
    var $conte = $('#hv_pg2form');
    var $body = $('body');

    if($conte.hasClass('hv_pg2form_view')){
      $conte.removeClass('hv_pg2form_view');
      $body.removeClass('hv_movil');
     }else{
      $conte.addClass('hv_pg2form_view');
      $body.addClass('hv_movil');
     }
   });

   // fixed
  

  $('.gracias__cerrar').on('click', function(){
    $('.gracias').fadeOut(200);
  });

  $('.form__select select').on('change', function(){
    var v = $(this).val();
    $(this).parent().find('strong').html(v);
  });

 //rules validate
  //hvFormicpna
  
	  $.validator.methods.email = function( value, element ) {
			  return this.optional( element ) || /[a-z0-9]+@[a-z0-9]+\.[a-z]+/.test( value );
	  };
		
	  $("#hvFormicpna").validate({
					rules:{
							nombres:{
								required:true
							},
							apellidos:{
								required:true
							},
							tipodocumento:{
								required:true
							},
							numerodocumento:{
								required:true,
								minlength:8,
							    number: true
							},
							celular:{
								required:true,
								maxlength:9,
							    minlength:7,
							    number: true
							},						
							correo: {
							  required: true,
							  email: true
							},
							sedes:{
								required:true
							},
							programas:{
								required:true
							},
							pauta:{
								required:true
							}
						},
					messages:{
						  nombres: "Ingrese su nombre",
						  apellidos: "Ingrese sus apellidos",
						  tipodocumento:"selecciones su tipo de documento",
						  numerodocumento: "Ingrese su número de documento",
						  celular: "Ingrese su número celular",
						  correo: "Ingrese su Correo Electrónico",
						  sedes: "Seleccione su sede",
						  programas: "Seleccione un programa",
						  pauta: "Marque aquí"
						 
						}
		});

	
$("#sendform").click(function(e){
	e.preventDefault();
	var fdata = $("#hvFormicpna").serialize();
	if($("#hvFormicpna").valid()===true){
		$.ajax({ url: 'process.php', type: 'POST', dataType: 'json', data: fdata })
                .done(function(data) {
                    if(data.rpta==='ok') {						
						//sendblue
						var attributes = {};
						var email = "";
						var data = $("#hvFormicpna :input").serializeArray();
							 for (var i = data.length - 1; i >= 0; i--) {
								if(data[i].name == emailField){
									email = data[i].value;
								}else{
									attributes[data[i].name] = data[i].value;
								}
							 }					  
					 trackEventemBlue(email,eventName,attributes,apikey);

                        $('#hv_pg2form').removeClass('hv_pg2form_view');
                        $('body').removeClass('hv_movil');
                        $('input[name="nombres"], input[name="apellidos"], input[name="numerodocumento"], input[name="celular"], input[name="correo"]').val('');
                       
                        dataLayer.push({
                         'title': 'Jóvenes y Adultos',
                         'page': '/programa-jovenes-adultos/gracias',
                         'event': 'gracias'
                        });
                        window.location.href="/gracias.php?p=1";
                    }else{
                        $(".gracias__box h6").html("Información");
                        $(".gracias__box p").html("Ya te registraste por hoy.");
                        $('.gracias').fadeIn(350);                      
                    }
                });
		
	}
});
  



   // on scroll move the sidebar
  var stickySidebar = $('.sticky');

  const mq = window.matchMedia( "(min-width: 1025px)" );

  if (stickySidebar.length > 0) { 
    var stickyHeight = stickySidebar.height(),
        sidebarTop = stickySidebar.offset().top;
  }

  if (mq.matches) {

    $(window).scroll(function () {
    if (stickySidebar.length > 0) { 
      var scrollTop = $(window).scrollTop();
              
      if (sidebarTop < scrollTop) {
        stickySidebar.css('top', scrollTop - sidebarTop);

        // stop the sticky sidebar at the footer to avoid overlapping
        var sidebarBottom = stickySidebar.offset().top + stickyHeight,
            stickyStop = $('.content').offset().top + $('.content').height();
        if (stickyStop < sidebarBottom) {
          var stopPosition = $('.content').height() - stickyHeight;
          stickySidebar.css('top', stopPosition);
        }
      }
      else {
        stickySidebar.css('top', '0');
      } 
    }
  });
  };


   $(window).resize(function () {
    if (stickySidebar.length > 0) { 
      stickyHeight = stickySidebar.height();
    }
  });
}); 


function isEmail(email) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}




//SCRIPT EMBLUEMAIL
function validarEmailemBlue(email){
   emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
    if (emailRegex.test(email)) {
     return true;
    } else{
     return false;
    }
}


function trackEventemBlue(email,eventName,attributes,apikey)
{
 var eventData = {
	"email":email,
	"eventName": eventName,
	"attributes":attributes
  }
$.ajax({
	  "async": true,
	  "crossDomain": true,
	  "type": "POST",
	  "url": "https://track.embluemail.com/contacts/event",
	  "method": "POST",
	  "headers": {
		"content-type": "application/json",
		"authorization": "Basic " + apikey 
	  },
	  "processData": false,
	  "data": JSON.stringify(eventData)
	}).done(function (response) {
	  
	});
}

$(document).ready(function(){
	try{
	   $(formSelector).submit(function() {
		var attributes = {};
		var email = "";
		var data = $(formSelector + " :input").serializeArray();
			 for (var i = data.length - 1; i >= 0; i--) {
				if(data[i].name == emailField){
					email = data[i].value;
				}else{
					attributes[data[i].name] = data[i].value;
				}
			 }

		 trackEventemBlue(email,eventName,attributes,apikey);
	   });
	} 
	catch(err)
	{console.log(err);}
});