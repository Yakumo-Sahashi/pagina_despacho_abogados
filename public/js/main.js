window.onload = () => {
    var carga = document.getElementById('contenedor');

    carga.style.visibility = 'hidden';
    carga.style.opacity = '0';
}

function opening() {
	$("#contenedor2").css("visibility", "visible");
	$("#contenedor2").css("opacity", "100");
}

function ending() {
	$("#contenedor2").css("visibility", "hidden");
	$("#contenedor2").css("opacity", "0");
}


$(document).ready(function(){

	var altura= $('.menu').offset().top;

	$(window).on('scroll',function(){
		if ($(window).scrollTop() > altura) {
			$('.menu').addClass('menu-fixed');
			if($("#myNav").hasClass("home")){
				$('.menu').removeClass('bg-transparente').addClass('bg-blanco');
				$('.mini').removeClass('text-gold');
			}
		}else{
			$('.menu').removeClass('menu-fixed');
			if($("#myNav").hasClass("home")){
				$('.menu').removeClass('bg-blanco').addClass('bg-transparente');
				$('.mini').addClass('text-gold');
			}
		}
	});

});
