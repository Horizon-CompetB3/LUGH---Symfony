var myVar;

function myFunction() {
    myVar = setTimeout(showPage, 1000);
}

function showPage() {
    document.getElementById("loader").style.display = "none";
    document.getElementById("div-load").style.display = "block";
}
function masquernotification()
{
    document.getElementById("test-popup").style.opacity = "0";
}
window.setTimeout(masquernotification, 5000);



$(document).ready(function() {
    $('#fullpage').fullpage();
});

function swapForm() {
    document.getElementById('form-add-projets-1').classList.add('none');
    document.getElementById('form-add-projets-2').classList.remove('none');

};

$('.js-section-scroll').on('click', function(e) {
    e.preventDefault();
    var section = $(this).attr('href').substr($(this).attr('href').indexOf('#'));
    var $section = $(section);

    $('html, body, #sidebar').animate({
        scrollTop: $section.offset().top + 'px'
    }, 1000);
});
