$(document).ready(function(){
    //Slider
    var slider1 = tns({
        container: '.slider-container',
        items: 3,
        slideBy: 1,
        autoplay: true, 
        mouseDrag: true,
        autoplayButtonOutput: false,
        controls: false,
        edgePadding: 120,
        nav: false,
        autoHeight: true,
        autoWidth: true,
        gutter: 20,
        
    });
});

//skaiciavimo funkcija
var section = document.querySelector('.count');
var hasEntered = false;

window.addEventListener('scroll', (e) => {
	var shouldAnimate = (window.scrollY + window.innerHeight) >= section.offsetTop;

	if (shouldAnimate && !hasEntered) {
  	hasEntered = true;
    
    $('.count').each(function () {
    	$(this).prop('Counter',0).animate({
        Counter: $(this).text()
    	}, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
   		});
    });

  }
});


//mobile nav funkcija (BURGER)

function myFunction() {
            var x = document.getElementById("mMenu");
            if (x.style.display === "block") {
                x.style.display = "none";
            } else {
                x.style.display = "block";
            }
        };