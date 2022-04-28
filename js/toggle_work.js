$(document).ready(function() {

    // when click in register >login  text
    $('.login').click(function() {
        $("#login").click();

    });

    //  when click in  login > register 
    $(".signup").click(function() {
        $("#register").click();

    });

    // ticket booking > continue
    $("#TB_confirm").click(function() {
        $("#login").click();

    });

    // ticket payment > continue
    $(".signup").click(function() {
        toggleTD()

    });


    // notice 
    $("#notice_click").click(function() {
        toggleN()

    });




});