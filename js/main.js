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
        $('html, body').css({           // allow the page to scroll again
            overflow: 'auto',
            height: 'auto'
        });
    }
})
// END - Cookies Dialog




// START sticky header behaviour
const menuSection = document.querySelector('#wrapper-top');
const triggerDistance = menuSection.offsetHeight * 2;
const heroSlider = document.querySelector('#hero-slider');

window.addEventListener('scroll', distanceMet);

function distanceMet(){
    if (this.scrollY >= triggerDistance){         // if you scroll down 2x the height of the menu-top and menu-header then
        if(this.oldScroll > this.scrollY){          // then the scroll direction is UP
            heroSlider.style.marginTop = triggerDistance / 2 + 'px';    // compensate element below to retain position
            menuSection.classList.remove('prepare');// clean old style
            menuSection.classList.add('execute');   // slide down the top menu section 
        }else{                                      // scroll direction is down so..... 
            heroSlider.style.marginTop = '0px';     // compensate element below to retain position
            menuSection.classList.remove('execute');// clean old style
            menuSection.classList.add('prepare');   // slide the top menu up
        }
        this.oldScroll = this.scrollY;
    }
    if(this.scrollY === 0){                         // if were at the top of the screen
        heroSlider.style.marginTop = '0px';         // compensate element below
        menuSection.classList.remove('prepare');    // remove unneeded classes
        menuSection.classList.remove('execute');
    }
}
// END sticky header

const hamburger = document.getElementById('hamburger');
const cover = document.getElementById('cover');
const body = document.getElementsByTagName('body');
const menu = document.getElementById('slide-menu');
const wrapper = document.getElementById('wrapper-all');

menu.style.display = "none";

hamburger.addEventListener('click', function(){
    cover.style.display = "block";
    menu.style.display = "flex";
    wrapper.style.height = "100vh";
    menu.style.height = "100%";
    wrapper.style.overflow = "hidden";
    menu.style.overflow = "auto";
    wrapper.classList.remove('body-slide-right');
    wrapper.classList.add('body-slide-left');
    cover.addEventListener('click', function(){
        wrapper.classList.remove('body-slide-left');
        wrapper.classList.add('body-slide-right');
        cover.style.display = "none";
        wrapper.style.overflow = "auto";
        setTimeout(function(){
            menu.style.display = "none";
        }, 400);
    });
});


// $(document).ready(function(){
//     $("#hamburger").click(function(){
//         console.log('hamburger clicked');
//         $("body").toggle(200, function(){
//             console.log('toggled');
//             // $("#wrapper-all").show();
//             $("#cover").show();
//             $('body').not('#hamburger').css({           
//                 overflow: 'hidden',
//                 height: '100%'
//             });
//         });
//     });
// });