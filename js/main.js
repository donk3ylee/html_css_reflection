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




