
// START sticky header behaviour
const menuSection = document.getElementById('wrapper-top');
const triggerDistance = menuSection.offsetHeight * 2;
const heroSlider = document.getElementById('hero-slider');
const wrapper = document.getElementById('wrapper-all');
let oldScroll;
let deployed = false;

window.addEventListener('scroll', (e) => {
    if (this.scrollY >= triggerDistance){         // if you scroll down 2x the height of the menu-top and menu-header then
        // console.log(`deployed status: ${deployed}`)
        // console.log("oldScroll status: " . oldScroll)
        if(this.oldScroll > this.scrollY){          // then the scroll direction is UP
            if(heroSlider){
                heroSlider.style.marginTop = triggerDistance / 2 + 'px';    // compensate element below to retain position
            }else{
                wrapper.style.marginTop = triggerDistance / 2 + 'px';
            }
            menuSection.classList.remove('prepare');// clean old style
            menuSection.classList.add('execute');   // slide down the top menu section
            deployed = true; 
        }else{                                      // scroll direction is down so..... 
            if(deployed === true){
                menuSection.classList.remove('execute');// clean old style
                menuSection.classList.add('up');
                setTimeout(function(){
                    if(heroSlider){
                        heroSlider.style.marginTop = '0px';     // compensate element below to retain position
                    } else {
                        wrapper.style.marginTop = '0px';
                    }
                    menuSection.classList.add('prepare');   // slide the top menu up
                    menuSection.classList.remove('up');
                    deployed = false;
                }, 600);
            }
        }
        this.oldScroll = this.scrollY;
    }else{
        deployed = false;
    }
    if(this.scrollY === 0){                         // if were at the top of the screen
        if(heroSlider){
            heroSlider.style.marginTop = '0px';         // compensate element below
        } else {
            wrapper.style.marginTop = '0px';
        }
        menuSection.classList.remove('prepare');    // remove unneeded classes
        menuSection.classList.remove('execute');
    }
});
// END sticky header

