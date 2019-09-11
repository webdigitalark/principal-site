import 'popper.js';
import 'bootstrap';

(function ($) {

  'use strict';

  Drupal.behaviors.helloWorld = {
    attach: function (context) {
      console.log('Hello World');
      if($('#particles-js')){
      	$('#particles-js').css('opacity','100');	
      }
      if($('.language-link')){
      	$( ".block--wdark-languageswitchercontent .language-link" ).each(function() {
      		if ($(this).attr('data-drupal-link-system-path') != '<front>') {
	      		if ($(this).attr('hreflang') != 'es') {

	      			$(this).attr('href',"/"+$(this).attr('hreflang')+"/"+$(this).attr('data-drupal-link-system-path'));
	      		}else{
	      			$(this).attr('href',"/"+$(this).attr('data-drupal-link-system-path'));
	      		}	
      		}
		    });
      }
      console.log('beh');
      if($('.block--wdark-main-menu')){
        console.log("entra");
        $( ".nav-item" ).each(function(i) {
          var val = 0;
          $(this).hover(function(){
            //dropdown-menu
            if($(this).find('dropdown-menu')){
              console.log('fin');
                $(this).find('div.dropdown-menu').toggleClass('show');
            }
            console.log('dropdown-menu');
            // $(this).css('opacity',"1");  
          });
            
        });                
      }
      if($('.navbar-nav')){
      	$('.navbar-nav .nav-link').on('click', function(e){
      		e.preventDefault();
      		var $targetClass = $(this).attr('target-data');
      		// console.log($targetClass);
      		// console.log(jQuery("."+$targetClass).position());
      		if ($targetClass &&  jQuery("."+$targetClass).position() != undefined) {
      			jQuery("html").animate({scrollTop: jQuery("."+$targetClass).position().top-100, duration: 750});	
      		}else{
      			return true;
      		}
      	    
      	})
      }
    }
  };

})(jQuery, Drupal);
