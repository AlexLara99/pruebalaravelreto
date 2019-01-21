$(document).ready(function(){

	// AL PASAR POR LAS OPCIONES DEL INDEX

	$("#divofertas").hover(function(){

	    $(this).animate({
		    top: '10px',
		    opacity: '0.7'

		  },"fast");
	    
	    }, function(){

	    $(this).animate({
		    top: '0px',
		    opacity: '1'
		  },"fast");

	  });

	$("#divalumnos").hover(function(){

	    $(this).animate({
		    top: '10px',
		    opacity: '0.7',

		  },"fast");
	    
	    }, function(){

	    $(this).animate({
		    top: '0px',
		    opacity: '1'
		  },"fast");

	  });

	$("#divperfil").hover(function(){

	    $(this).animate({
		    top: '10px',
		    opacity: '0.7',

		  },"fast");
	    
	    }, function(){

	    $(this).animate({
		    top: '0px',
		    opacity: '1'
		  },"fast");

	  });

});
