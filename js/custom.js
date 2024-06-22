/* global $, alert, console */

$(function () {
    "use strict";

    var userErrors = true,
        emailErrors = true,
        phoneErrors = true,
        msgErrors = true;
    
    $(".username").blur(function () {   
        if ($(this).val().length < 4) {                           
            $(this).css("border", "1px solid #F00").parent().find(".custom-alert").fadeIn(200);
            $(this).parent().find(".aster").fadeIn(200);
            userErrors = true;
        } else {
            $(this).css("border", "1px solid #080").parent().find(".custom-alert").fadeOut(200);
            $(this).parent().find(".aster").fadeOut(200);
            userErrors = false;
        }
    });

    $(".email").blur(function () {
        if ($(this).val() == "") {
            $(this).css("border", "1px solid #F00").parent().find(".custom-alert").fadeIn(200);
            $(this).parent().find(".aster").fadeIn(200);
            emailErrors = true;
        } else {
            $(this).css("border", "1px solid #080").parent().find(".custom-alert").fadeOut(200);
            $(this).parent().find(".aster").fadeOut(200);
            emailErrors = false;
        }
    });

    $(".phonee").blur(function () {
        if ($(this).val().length < 11) {
            $(this).css("border", "1px solid #F00").parent().find(".custom-alert").fadeIn(200);
            $(this).parent().find(".aster").fadeIn(200);
            phoneErrors = true;
        } else {
            $(this).css("border", "1px solid #080").parent().find(".custom-alert").fadeOut(200);
            $(this).parent().find(".aster").fadeOut(200);
            phoneErrors = false;
        }
    });

    $(".mmmmmsg").blur(function () {
        if ($(this).val().length < 10) {
            $(this).css("border", "1px solid #F00").parent().find(".custom-alert").fadeIn(200);
            $(this).parent().find(".aster").fadeIn(200);
            msgErrors = true;
        } else {
            $(this).css("border", "1px solid #080").parent().find(".custom-alert").fadeOut(200);
            $(this).parent().find(".aster").fadeOut(200);
            msgErrors = false;
        };
    });

    $(".contact-form").submit(function (e) {
        if (userErrors === true || emailErrors === true || phoneErrors === true || msgErrors === true) {
            e.preventDefault();
            $(".username").blur();
            $(".email").blur();
            $(".phonee").blur();
            $(".mmmmmsg").blur();
        }
    });

});