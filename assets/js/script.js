$(document).ready(function(){
    $('.owl-carousel-atas').owlCarousel({
        autoplay:true,
        autoplayTimeout:5000,
        dots:true,
        dotsEach:true,
        loop:true,

        margin:10,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:1,
                nav:false
            },
            1000:{
                items:1,
                margin:3,
                nav:false,
                loop:true
            }
        }
    })
    $('.owl-carousel-tengah').owlCarousel({
        autoplay:true,
        autoplayTimeout:5000,
        dots:false,
        dotsEach:false,
        loop:true,

        margin:10,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:1,
                nav:false
            },
            1000:{
                items:1,
                margin:3,
                nav:false,
                loop:true
            }
        }
    })
    $('.owl-carousel-reseller').owlCarousel({
        autoplay:true,
        autoplayTimeout:5000,
        dots:false,
        dotsEach:false,
        loop:true,

        margin:10,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:1,
                nav:false
            },
            1000:{
                items:1,
                margin:3,
                nav:true,
                loop:true
            }
        }
    })
    $('.owl-carousel-bawah').owlCarousel({
        dots:true,
        dotsEach:true,
        loop:true,
        margin:30,
        nav:true,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:true,
                dots:false,
                dotsEach:false,
            },
            600:{
                items:3,
                nav:true
            },
            1000:{
                items:6,
                margin:10,
                nav:true,
                loop:true
            }
        }
    })
  });
var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
  