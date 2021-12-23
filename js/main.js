// START - Calculate vertical scrollbar width and pass it off to CSS for use there  
document.documentElement.style.setProperty('--scrollbar-width', (window.innerWidth - document.documentElement.clientWidth) + "px");
// now the scrollbar width is available in CSS via var(--scrollbar-width) :)
// END - Calculate vertical scrollbar



// START - Owl Slider Config
$(document).ready(function(){
    $('.owl-carousel').owlCarousel({
        items: 1,
        autoplay: true,
        loop: true,
        dots: true,
        dotsEach: true,
    });
});
// END - Owl Slider



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



// START - hamburger animations
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
// END hamburger animations



// START sliding menu
const hamburger = document.getElementById('hamburger');
const cover = document.getElementById('cover');
const body = document.getElementsByTagName('body');
const menu = document.getElementById('slide-menu');
const page = document.getElementById('wrapper-all');

hamburger.addEventListener('click', function(){
    animateHamburgerX();
    cover.style.display = "block";
    body[0].style.overflow = "hidden";
    menu.style.zIndex = "-11";
    menu.style.display = "flex";
    page.classList.add('body-slide-left');
    setTimeout(function(){
        menu.style.zIndex = "51";
    }, 400);
    
    cover.addEventListener('click', function(){
        animateHamburgerDefault();
        cover.style.display = "none";
        menu.style.zIndex = "-11";
        page.classList.remove('body-slide-left');
        page.classList.add('body-slide-right');
        setTimeout(function(){
            body[0].style.overflow = "";
            menu.style.display = "none";
            page.classList.remove('body-slide-right');
            menu.style.zIndex = "";
        }, 400);
    });
});
// END sliding menu
