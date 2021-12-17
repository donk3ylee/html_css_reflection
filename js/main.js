// Owl Slider Setup
$(document).ready(function(){
    $('.owl-carousel').owlCarousel({
        items: 1,
        autoplay: true,
        loop: true,
        dots: true,
        dotsEach: true,
    });
});
// Owl Slider END



// START - Cookies Dialog
const test = Cookies.get('accCookiePolicy');

// test if the accCookiePolicy cookie exists
// if it does not exist then the user has not accepted the terms so we need to display the choices
if(!test){
    $('#cover').show();                 // apply the cover darkening the underlying screen
    $('#cookies-policy').show();        // Display the cookies policy dialog overlay
    $('html, body').not('#cookies-policy').css({               // Stop the page from scrolling forcing the user to interact with the dialog
    overflow: 'hidden',
    height: '100%'
    });
}

// iF the user clicks the "accept cookies" button
$('.accept-button').click(function(){
    // Set the accCookiePolicy cookie. Check to see if there was a problem writing the cookie to the browser.
    if(!Cookies.set('accCookiePolicy','true')) alert('Sorry there was an issue when we tried to record your choice');
    else{                               // if not then...
        $('#cookies-policy').hide();    // remove the cookie policy overlay
        $('#cover').hide();             // remove the cover darkening the underlying screen
        $('html, body').not('#cookies-policy').css({               // Stop the page from scrolling forcing the user to interact with the dialog
            overflow: '',
            height: ''
        });
    }
})
// END - Cookies Dialog




// get the hamburger bars for the animations
const hamburgerTopBar = document.getElementById('bar-top');
const hamburgerMiddleBar = document.getElementById('bar-middle');
const hamburgerBottomBar = document.getElementById('bar-bottom');

function animateHamburgerX(){
    hamburgerTopBar.classList.remove('hamburger-animation-to-default-top');
    hamburgerMiddleBar.classList.remove('hamburger-animation-to-default-middle');
    hamburgerBottomBar.classList.remove('hamburger-animation-to-default-bottom');

    hamburgerTopBar.classList.add('hamburger-animation-to-X-top');
    hamburgerMiddleBar.classList.add('hamburger-animation-to-X-middle');
    hamburgerBottomBar.classList.add('hamburger-animation-to-X-bottom');
}

function animateHamburgerDefault(){
    hamburgerTopBar.classList.remove('hamburger-animation-to-X-top');
    hamburgerMiddleBar.classList.remove('hamburger-animation-to-X-middle');
    hamburgerBottomBar.classList.remove('hamburger-animation-to-X-bottom');

    hamburgerTopBar.classList.add('hamburger-animation-to-default-top');
    hamburgerMiddleBar.classList.add('hamburger-animation-to-default-middle');
    hamburgerBottomBar.classList.add('hamburger-animation-to-default-bottom');
}


// START hamburger sliding menu
const hamburger = document.getElementById('hamburger');
const cover = document.getElementById('cover');
const body = document.getElementsByTagName('body');
const menu = document.getElementById('slide-menu');
const page = document.getElementById('wrapper-all');

hamburger.addEventListener('click', function(){
    animateHamburgerX();
    cover.style.display = "block";
    body[0].style.overflow = "hidden";
    // menu.style.top = window.scrollY +'px';
    menu.style.display = "flex";
    page.classList.remove('body-slide-right');
    page.classList.add('body-slide-left');
    setTimeout(function(){
        menu.style.zIndex = "1";
    }, 400);
    
    cover.addEventListener('click', function(){
        animateHamburgerDefault();
        cover.style.display = "none";
        menu.style.zIndex = "-1";
        body[0].style.overflow = ""; //"auto";
        page.classList.remove('body-slide-left');
        page.classList.add('body-slide-right');
        setTimeout(function(){
            menu.style.display = "none";
            page.classList.remove('body-slide-right');
        }, 400);
    });
});
// END slider menu
