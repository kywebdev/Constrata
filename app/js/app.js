$(document).ready(function() {

    // back to top smooth scrolling
    $('a[href^="#"]').on('click', function(e) {
        e.preventDefault();

        var target = this.hash;
        var $target = $(target);

        $('html, body').stop().animate({
            'scrollTop': 0 + $target.offset().top
        }, 900, 'swing', function() {});
    });

    // move the nav based on window size
    function moveNav(width) {
        if (width <= 1185) {
            $('header .nav').insertBefore('.mobile-menu .subnav');
        } else {
            $('.mobile-menu .nav').insertAfter('header .logo');
        }
    }
    moveNav( $(window).width() );
    $(window).on('resize', function() {
        moveNav( $(this).width() );
    });

    // add active class to nav item based on page template
    if ($('body').hasClass('about')) {
        $('header .nav ul li:nth-child(1) a').addClass('active');
        $('.mobile-menu .nav ul li:nth-child(1) a').addClass('active');
    }
    if ($('body').hasClass('consulting')) {
        $('header .nav ul li:nth-child(2) a').addClass('active');
        $('.mobile-menu .nav ul li:nth-child(2) a').addClass('active');
    }
    if ($('body').hasClass('services')) {
        $('header .nav ul li:nth-child(3) a').addClass('active');
        $('.mobile-menu .nav ul li:nth-child(3) a').addClass('active');
    }
    if ($('body').hasClass('digital')) {
        $('header .nav ul li:nth-child(4) a').addClass('active');
        $('.mobile-menu .nav ul li:nth-child(4) a').addClass('active');
    }
    if ($('body').hasClass('insights')) {
        $('header .nav ul li:nth-child(5) a').addClass('active');
        $('.mobile-menu .nav ul li:nth-child(5) a').addClass('active');
    }
    if ($('body').hasClass('our-clients-page')) {
        $('header .nav ul li:nth-child(6) a').addClass('active');
        $('.mobile-menu .nav ul li:nth-child(6) a').addClass('active');
    }

    // toggle the mobile menu
    $('.menu-toggle').on('click', function() {
        $(this).toggleClass('open');
        $('.mobile-menu').toggleClass('open');
        $('body').toggleClass('nav-open');
    });

    // homepage hero left text slider
    $('.home-hero__inner__slider').slick({
        arrows: false,
        swipe: false,
        fade: true
    });

    // homepage hero image slider
    $('.hero-side__img__slider').slick({
        arrows: false,
        swipe: false,
        dots: true,
        fade: true,
        asNavFor: '.home-hero__inner__slider, .hero-side__text__inner__slider',
        autoplay: true,
        autoplaySpeed: 10000,
        pauseOnFocus: false
    });

    // homepage hero right text slider
    $('.hero-side__text__inner__slider').slick({
        arrows: false,
        swipe: false,
        fade: true
    });

    // add active class to let us help button on click
    $('.let-us-help__buttons button').on('click', function() {
        $('.let-us-help__buttons button').removeClass('active');
        $(this).addClass('active');
    })

    // consulting slider
    $('.consulting-slider').slick({
        slidesToShow: 3,
        infinite: false,
        touchThreshold: 100,
        adaptiveHeight: true,
        responsive: [
            {
                breakpoint: 1000,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });

    // services slider
    $('.services-slider').slick({
        slidesToShow: 3,
        infinite: false,
        touchThreshold: 100,
        adaptiveHeight: true,
        responsive: [
            {
                breakpoint: 1000,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });

    // digital slider
    $('.digital-slider').slick({
        slidesToShow: 3,
        infinite: false,
        touchThreshold: 100,
        adaptiveHeight: true,
        responsive: [
            {
                breakpoint: 1000,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });

    // show the consulting slider
    $('.let-us-help__buttons__consulting').on('click', function() {
        $('.let-us-help__consulting').removeClass('hide');
        $('.let-us-help__services').addClass('hide');
        $('.let-us-help__digital').addClass('hide');
    });

    // show the services slider
    $('.let-us-help__buttons__services').on('click', function() {
        $('.let-us-help__consulting').addClass('hide');
        $('.let-us-help__services').removeClass('hide');
        $('.let-us-help__digital').addClass('hide');
    });

    // show the digital slider
    $('.let-us-help__buttons__digital').on('click', function() {
        $('.let-us-help__consulting').addClass('hide');
        $('.let-us-help__services').addClass('hide');
        $('.let-us-help__digital').removeClass('hide');
    });

    // our clients slider
    $('.our-clients-slider').slick({
        slidesToShow: 5,
        infinite: true,
        touchThreshold: 100,
        autoplay: true,
        pauseOnFocus: false,
        responsive: [
            {
                breakpoint: 1000,
                settings: {
                    slidesToShow: 4
                }
            },
            {
                breakpoint: 700,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 500,
                settings: {
                    slidesToShow: 2
                }
            }
        ]
    });

    // get the height of the clients slider
    $('.our-clients-slider').imagesLoaded( function() {
        var clientsSlider = $('.our-clients-slider').height();
        $('.our-clients-slider .slick-slide').css('height', clientsSlider);
    });

    // show the keep in touch modal on load
    //$('#keep-in-touch-modal').modal('show');

    // our team slider
    $('.our-team__slider').slick({
        slidesToShow: 3,
        infinite: false,
        touchThreshold: 100,
        adaptiveHeight: true,
        responsive: [
            {
                breakpoint: 1000,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });

    // related posts slider
    $('.related-posts__slider').slick({
        slidesToShow: 3,
        infinite: false,
        touchThreshold: 100,
        adaptiveHeight: true,
        responsive: [
            {
                breakpoint: 1000,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 550,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });

    // service offerings slider
    $('.service-offerings__slider').slick({
        slidesToShow: 3,
        infinite: false,
        touchThreshold: 100,
        adaptiveHeight: true,
        responsive: [
            {
                breakpoint: 1000,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 650,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });

    // show more insights articles
    $('.our-insights__articles .text-center a').on('click', function(e) {
        e.preventDefault();
        $('.our-insights__articles .article:hidden').slice(0, 6).fadeIn();
        if ($('.our-insights__articles .article').length == $('.our-insights__articles .article:visible').length) {
            $('.our-insights__articles .text-center').fadeOut();
        }
    });

    // company news slider
    $('.company-news__slider').slick({
        touchThreshold: 100,
        adaptiveHeight: true,
        fade: true,
        arrows: false,
        dots: true,
        autoplay: true,
        autoplaySpeed: 10000,
        pauseOnFocus: false
    });

    // fade out the video poster on click and play the video
    $('.video__poster').on('click', function() {
        var vid = $(this).parent().data('video-id');
        console.log(vid);
        $(this).fadeOut();
        var videoPlayer = $(this).parent().find('.video__file video');
        videoPlayer[0].play();
    });

    // enable tooltips
    $('[data-toggle="tooltip"]').tooltip();

    // swap about modal content
    $('#about-modal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var name = button.data('name');
        var title = button.data('title');
        var bio = button.data('bio');
        var modal = $(this);
        modal.find('.modal-body h2').text(name);
        modal.find('.modal-body span').text(title);
        modal.find('.modal-body .bio').html(bio);
    });

});