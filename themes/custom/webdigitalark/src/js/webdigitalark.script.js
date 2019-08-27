import 'popper.js';
import 'bootstrap';

(function ($) {

  'use strict';

  Drupal.behaviors.webdigitalark = {
    attach: function (context) {
      $('body').css('opacity','100');
			function determineDirection($el, pos){
			  var w = $el.width(),
			      h = $el.height(),
			      x = (pos.x - $el.offset().left - (w/2)) * (w > h ? (h/w) : 1),
			      y = (pos.y - $el.offset().top  - (h/2)) * (h > w ? (w/h) : 1);
			      var $returnCalc = Math.round((((Math.atan2(y,x) * (180/Math.PI)) + 180)) / 90 + 3) % 4;
			      var $return = $returnCalc == 0 ? 'top' : $returnCalc == 1 ? 'right' :  $returnCalc == 2 ? 'bottom' : 'left'; 
			  return $return;
			}

			var boxes = document.querySelectorAll(".boxes");

			for(var i = 0; i < boxes.length; i++){

				boxes[i].onmouseenter = function(e){
					var edge = determineDirection($(this), {x: e.pageX, y: e.pageY});
					var overlay = this.childNodes[1];
					var image = this.childNodes[0];
					// edge = 'left';
					switch(edge){
				    case "left":
				      //tween overlay from the left
				      overlay.style.top = "0%";
				      overlay.style.left = "-100%";
				      TweenMax.to(overlay, .5, {left: '0%'});
				      TweenMax.to(image, .5, {scale: 1.2});
			      break;
				    case "right":
			        overlay.style.top = "0%";
			        overlay.style.left = "100%";
			        //tween overlay from the right
			        TweenMax.to(overlay, .5, {left: '0%'});
			        TweenMax.to(image, .5, {scale: 1.2});
			      break;
				    case "top":
			        overlay.style.top = "-100%";
			        overlay.style.left = "0%";
			        //tween overlay from the right
			        TweenMax.to(overlay, .5, {top: '0%'});
			        TweenMax.to(image, .5, {scale: 1.2});
			      break;
				    case "bottom":
			        overlay.style.top = "100%";
			        overlay.style.left = "0%";
			        //tween overlay from the right
			        TweenMax.to(overlay, .5, {top: '0%'});
			        TweenMax.to(image, .5, {scale: 1.2});
			      break;
					}
				};

			   
			  boxes[i].onmouseleave = function(e){
			    var edge = determineDirection($(this), {x: e.pageX, y: e.pageY});
			    var overlay = this.childNodes[1];
			    var image = this.childNodes[0];
			    switch(edge){
			        case "left":
			          TweenMax.to(overlay, .5, {left: '-100%'});
			          TweenMax.to(image, .5, {scale: 1.0});
			        break;
			        case "right":
			          TweenMax.to(overlay, .5, {left: '100%'});
			          TweenMax.to(image, .5, {scale: 1.0});
			          break;
			        case "top":
			          TweenMax.to(overlay, .5, {top: '-100%'});
			          TweenMax.to(image, .5, {scale: 1.0});
			        break;
			        case "bottom":
			          TweenMax.to(overlay, .5, {top: '100%'});
			          TweenMax.to(image, .5, {scale: 1.0});
			        break;
			    }
			  };
			}

    
    }
  };

})(jQuery, Drupal);
