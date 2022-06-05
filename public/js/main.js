

$('.slider').owlCarousel({
            //stagePadding: 100,
            items:1,
            //stagePadding: 50,
            loop:true,
            margin:30,
            //nav:true,
            navText:["<i class='fas fa-chevron-left'></i>","<i class='fas fa-chevron-right'></i>"],
            navClass:['owl-prev', 'owl-next'],
            autoplay: true,
            autoplayTimeout: 5000,
            dots:false
})


$('.banner-right').owlCarousel({
    //stagePadding: 100,
    items:1,
    //stagePadding: 50,
    loop:true,
    margin:30,
    //nav:true,
    // navText:["<i class='fas fa-chevron-left'></i>","<i class='fas fa-chevron-right'></i>"],
    // navClass:['owl-prev', 'owl-next'],
    autoplay: true,
    autoplayTimeout: 5000,
    dots:false
})

$('.top-banner').owlCarousel({
    //stagePadding: 100,
    items:1,
    //stagePadding: 50,
    loop:true,
    margin:30,
    //nav:true,
    // navText:["<i class='fas fa-chevron-left'></i>","<i class='fas fa-chevron-right'></i>"],
    // navClass:['owl-prev', 'owl-next'],
    autoplay: true,
    autoplayTimeout: 5000,
    dots:false
})

$('.section-ekstrakulikuler').owlCarousel({
    stagePadding: 10,
    loop:true,
    margin:30,
    nav:true,
    dots:false,
    autoplay: true,
    autoplayTimeout: 5000,
    navText:["<i class='fas fa-chevron-left'></i>","<i class='fas fa-chevron-right'></i>"],
    navClass:['owl-prev', 'owl-next'],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:4
        }
    }
})

$('.wrapper-jurusan').owlCarousel({
    stagePadding: 10,
    loop:true,
    margin:30,
    nav:true,
    dots:false,
    autoplay: true,
    autoplayTimeout: 5000,
    navText:["<i class='fas fa-chevron-left'></i>","<i class='fas fa-chevron-right'></i>"],
    navClass:['owl-prev', 'owl-next'],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:4
        }
    }
})


$('.wrapper-logo').owlCarousel({
    stagePadding: 10,
    loop:true,
    margin:31,
    nav:false,
    dots:false,
    autoplay: true,
    autoplayTimeout: 2000,
    navText:["<i class='fas fa-chevron-left'></i>","<i class='fas fa-chevron-right'></i>"],
    navClass:['owl-prev', 'owl-next'],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:4
        }
    }
})

// // When the user scrolls the page, execute myFunction
// window.onscroll = function() {myFunction()};

// // Get the navbar
// var navbar = document.getElementById("navbar");

// // Get the offset position of the navbar
// var sticky = navbar.offsetTop;

// // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
// function myFunction() {
//   if (window.pageYOffset >= sticky) {
//     navbar.classList.add("sticky")
//   } else {
//     navbar.classList.remove("sticky");
//   }
// }
 // below listed default settings
 AOS.init({
    // Global settings:
    disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
    startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
    initClassName: 'aos-init', // class applied after initialization
    animatedClassName: 'aos-animate', // class applied on animation
    useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
    disableMutationObserver: false, // disables automatic mutations' detections (advanced)
    debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
    throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
    
  
    // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
    offset: 120, // offset (in px) from the original trigger point
    delay: 0, // values from 0 to 3000, with step 50ms
    duration: 1200, // values from 0 to 3000, with step 50ms
    easing: 'ease', // default easing for AOS animations
    once: false, // whether animation should happen only once - while scrolling down
    mirror: false, // whether elements should animate out while scrolling past them
    anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation
  
  });

