// Бургер-------------------------------------------------

$('.navbar__burger').click(function () {
    if (!$(this).hasClass('open')) {
        $(this).addClass('open');

        $('.navbar__links').animate({
            left: 0,
            opacity: 1
        }, 'slow');

    } else {
        $(this).removeClass('open');

        $('.navbar__links').animate({
            left: '-200px',
            opacity: 0
        }, 'slow');
    }

})

//--------------------------------------------------------

// Скролы для ссылок меню nav-link и стрелки scroll-top

$('.navbar').css('top', $('.intro').offset().top)

$(window).scroll(function () {
    let scrollTop = $(window).scrollTop();

    if (scrollTop > $('.intro').offset().top) {
        $('.navbar').css({
            'position': 'fixed',
            'top': 0
        })
    } else if (scrollTop <= $('.intro').offset().top) {
        $('.navbar').css({
            'position': 'absolute',
            'top': $('.intro').offset().top
        })
    }
});

$('.scroll-top').click(function () {
    $('html, body').animate({
        scrollTop: 0
    }, 'slow')
});

let $links = [
    {
        link: '.link_1',
        trigger: '.intro'
    },
    {
        link: '.link_2',
        trigger: '.feature-1'
    },
    {
        link: '.link_3',
        trigger: '.middle'
    },
    {
        link: '.link_4',
        trigger: '.package'
    },
    {
        link: '.link_5',
        trigger: '.comments'
    },
    {
        link: '.link_6',
        trigger: '.info'

    }];

let $navLinks = document.querySelectorAll('.nav-link');


$links.forEach(function (navObject) {
    $(navObject.link).click(function () {
        $('html, body').animate({
            scrollTop: $(navObject.trigger).offset().top

        }, 'slow');

        $navLinks.forEach(item => {
            $(item).removeClass('active');
        });

        $(this).addClass('active');
    });
});

//--------------------------------------------------------


// Скрол + анимации --------------------------------------

let $animations = ['.intro', '.feature-1', '.feature-2', '.middle', '.package', '.partners', '.comments', '.info', '.footer'];

let $featureItemsDelay = $('.feature-1').find('i');
let $packageItemsDelay = $('.package').find('.col-sm-3');
let $footerItemsDelay = $('.footer').find('.social');
let $partnersItemsDelay = $('.partners').find('.partners__img');
let $contactsItemsDelay = $('.contacts-list').find('li');
let $formItemsDelay = $('.info__form').find('input, textarea');

for (let i = 0; i <= $animations.length - 1; i++) {

    if (i < 4) {
        $($featureItemsDelay[i]).css('animationDelay', `${i / 2}s`);
        $($packageItemsDelay[i]).css('animationDelay', `${i / 2}s`);
        $($footerItemsDelay[i]).css('animationDelay', `${i / 2}s`);
        $($partnersItemsDelay[i]).css('animationDelay', `${i / 2}s`);
        $($contactsItemsDelay[i]).css('animationDelay', `${i / 2}s`);
        $($formItemsDelay[i]).css('animationDelay', `${i / 2}s`);
    }

    $(window).scroll(function () {
        let scrollTop = $(window).scrollTop() + 300;

        if (scrollTop > $($animations[i]).offset().top) {
            $($animations[i]).find('.outLeft, .outRight').addClass('startAniHor');
            $($animations[i]).find('.outBot').addClass('startAniVer');
        }

        if (i == $animations.length - 1) {
            $($animations[$animations.length - 1]).find('.outBot').addClass('startAniVer');
        }
    });
}

// --------------------------------------------------------

// Slick карусель -----------------------------------------

$('.slick-container').slick({
    dots: true
});

// --------------------------------------------------------

// Loader -------------------------------------------------

setTimeout(() => {
    $('.preloader').css('display', 'none');
}, 2000);

// --------------------------------------------------------
