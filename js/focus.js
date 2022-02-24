
let formTarget = document.getElementById('form_target');
let successTarget = document.getElementById('success_target');
let errorTarget = document.getElementById('error_target');

if(successTarget){
    const distance = successTarget.offsetTop - successTarget.scrollTop + successTarget.clientTop - 50;
    console.log('calculated distance: '. distance);
    window.scrollTo(0, distance);
}

if (errorTarget){
    const distance = errorTarget.offsetTop - errorTarget.scrollTop + errorTarget.clientTop - 50;
    console.log('calculated distance: '. distance);
    window.scrollTo(0, distance);
}
