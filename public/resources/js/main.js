$(document).ready(function(){
    $("#drop-main").hover(function(){
        $("#dropdown-menu").slideToggle();
    });
    $("#drop-main2").hover(function(){
        $("#dropdown-menu2").slideToggle();
    });
    $("#drop-main3").hover(function(){
        $("#dropdown-menu3").slideToggle();
    });


    $("#myAccount").hover(
        function () {
            $('#dropdown-account-content').finish().slideDown('medium');
        },
        function () {
            $('#dropdown-account-content').finish().slideUp('medium');
        }
    );

    $("#navbarNavDropdown ul li").click(function (){
        $("#navbarNavDropdown ul li").removeClass('active');
        $(this).addClass('active');
    })
});
