
 if ($('#identifier').val() === 'work') {
     $('nav').addClass('inverseNav')
     $('#logo').attr('src', '../img/logo-black.png')
 }
 $('.indexCarousel').owlCarousel({
    loop:true,
    margin: 0,
    nav:false,
    items: 1,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:false,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
})
$('.case-carousel').owlCarousel({
    loop:true,
    margin: 0,
    items: 1,
    autoplay:true,
    autoplayTimeout:2500,
    autoplayHoverPause:false,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
})