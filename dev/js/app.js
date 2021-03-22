
let cookie = new Cookie(true);
cookie.init();

// $('.variations_form').on('woocommerce_variation_has_changed', function () {
//     var price = $('.wrap-price-variation').detach();
//     $('.wrap-price-variation').html($('.woocommerce-variation-price .woocommerce-Price-amount').html())
// });
// var price = $('.woocommerce-variation-price').detach();

// price.insertAfter('.product_title');

// let titleHeight = $('.product-title').height();


$('.variations').remove();
let variants = $('.variants');
$('form.variations_form.cart').prepend(variants);

$('.summary .price').remove();

$('.quantity').remove();
let counter = $('.counter');
$('.woocommerce-variation-add-to-cart').prepend(counter);



$('.jarallax').jarallax({
   });

   jarallax(document.querySelectorAll('.jarallax'), {
    disableParallax: function () {
        return /iPad|iPhone|iPod|Android/.test(navigator.userAgent);
    },
    disableVideo: function () {
        return /iPad|iPhone|iPod|Android/.test(navigator.userAgent);
    }
});



var productCat1Slider = new Swiper ('#productCat1Slider',{
    slidesPerView: 1,
    spaceBetween: 30,
    observer: true, 
    observeParents: true,
    preventClicksPropagation: true,
    grabCursor: true,
   
    breakpoints:{
        720:{
           slidesPerView:3,
            spaceBetween:30,
        }, 
    },
    navigation: {
        nextEl: '#next1',
        prevEl: '#prev1',
      },
    
});

var productCat2Slider = new Swiper ('#productCat2Slider',{
    slidesPerView: 1,
    spaceBetween: 30,
    observer: true, 
    observeParents: true,
    preventClicksPropagation: true,
    grabCursor: true,
    breakpoints:{
        720:{
           slidesPerView:3,
            spaceBetween:30,
        }, 
    },
    navigation: {
        nextEl: '#next2',
        prevEl: '#prev2',
      },
    
});
var productCat3Slider = new Swiper ('#productCat3Slider',{
    slidesPerView: 1,
    spaceBetween: 30,
    observer: true, 
    observeParents: true,
    preventClicksPropagation: true,
    grabCursor: true,
    breakpoints:{
        720:{
           slidesPerView:3,
            spaceBetween:30,
        }, 
    },
    navigation: {
        nextEl: '#next3',
        prevEl: '#prev3',
      },
    
});

var productCat3Slider = new Swiper ('.crossellsSlider',{
    slidesPerView: 1,
    spaceBetween: 30,
    observer: true, 
    observeParents: true,
    preventClicksPropagation: true,
    grabCursor: true,
    breakpoints:{
        720:{
           slidesPerView:3,
            spaceBetween:30,
        }, 
    },
    navigation: {
        nextEl: '.csnext',
        prevEl: '.csprev',
      },
    
});


const nav = document.querySelector('.navbar');
window.addEventListener('scroll', () => {
    const scrollPos = window.scrollY;
    if (scrollPos > 100) {
        nav.classList.add('is-scrolled');
 
    } else {
        nav.classList.remove('is-scrolled');
    }
});
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-150px";
  }
  prevScrollpos = currentScrollPos;
}

///counter
// (function() {
 
//     window.inputNumber = function(el) {
  
//       var min = el.attr('min') || false;
//       var max = el.attr('max') || false;
  
//       var els = {};
  
//       els.dec = el.prev();
//       els.inc = el.next();
  
//       el.each(function() {
//         init($(this));
//       });
  
//       function init(el) {
  
//         els.dec.on('click', decrement);
//         els.inc.on('click', increment);
  
//         function decrement() {
//           var value = el[0].value;
//           value--;
//           if(!min || value >= min) {
//             el[0].value = value;
//           }
//         }
  
//         function increment() {
//           var value = el[0].value;
//           value++;
//           if(!max || value <= max) {
//             el[0].value = value++;
//           }
//         }
//       }
//     }
//   })();
  
  inputNumber($('.input-number'));
  //ewnd of counter



let aosElementLeft = document.querySelectorAll('.has-2-columns:nth-child(odd) .wp-block-column:first-child');
let aosElementRight = document.querySelectorAll('.has-2-columns:nth-child(odd) .wp-block-column:last-child');
[...aosElementLeft].forEach(function(el) {
        el.setAttribute("data-aos", "fade-right");
        
    });
[...aosElementRight].forEach(function(el) {
        el.setAttribute("data-aos", "fade-left");
        
    });


let aosElementLeftB = document.querySelectorAll('.has-2-columns:nth-child(even) .wp-block-column:first-child');
let aosElementRightB = document.querySelectorAll('.has-2-columns:nth-child(even) .wp-block-column:last-child');
[...aosElementLeftB].forEach(function(el) {
        el.setAttribute("data-aos", "fade-right");
        
    });
[...aosElementRightB].forEach(function(el) {
        el.setAttribute("data-aos", "fade-left");
        
    });

AOS.init();