//jQuery
$( document ).ready(function() {
    // Defining a function to set size for #hero
    function fullscreen(){
        $('.fullscreen').css({
            width: $(window).width(),
            height: $(window).height()
        });
    }

    fullscreen();

    // Run the function in case of window resize
    $(window).resize(function() {
        fullscreen();
    });

});

//Vanilla Javascript
function openNav() {
    document.getElementById("myNav").style.height = "100%";
}
function closeNav() {
    document.getElementById("myNav").style.height = "0%";
}