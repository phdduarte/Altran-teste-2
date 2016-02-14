$(function() {
			var pull 		= $('#pull');
				menu 		= $('#nave ul');
				menuHeight	= menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});

			$(window).resize(function(){
        		var w = $(window).width();
        		if(w > 320 && menu.is(':hidden')) {
        			menu.removeAttr('style');
        		}
    		});
		});
		
 function AparecerDiv(id){ 
     document.getElementById(id).style.display = "";
}
function OcultarDiv(id){  
     document.getElementById(id).style.display = "none";
}
