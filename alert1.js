'use strict';

$(document).ready(function () {
    var $op1 = $('#op1'),
        $op2 = $('#op2'),
        $result = $('#result');


    function onClick(event) {
        var op1 = parseFloat($op1.val()),
        op2 = parseFloat($op2.val());


        switch ($(this).html()) {
            case '+': $result.html(op1 + op2); break;
            case '-': $result.html(op1 - op2); break;
            case '*': $result.html(op1 * op2); break;
            case '/': $result.html(op1 / op2); break;
        }
    }

    $('button').click(onClick);
    
    $('#slide').click(function () {
       $('#panel').slideToggle();
        $(this).toggleClass('active');
        
    });
    
    $('#hide').click(function () {
       var $panel = $('#panel');

       if ($panel.is(':visible')) {
           $panel.animate({ opacity: "hide" }, "slow");
       }
          else {
           $panel.animate({ opacity: "show" }, "slow");
       }
        $(this).toggleClass('active');
        
    });
    $('#load').click(function (event) {
        event.preventDefault();

       var target = $(this).attr('target'),
           href = $(this).attr('href');

//       $(target).load(href);
        $.get(href, function (content) {
            $(target).html(content);

        });
    });
 //   $('h2').html('!');
    $('h3').css('color', 'red');
    $('h2').css({'color': 'blue', 'font-size': '30px'});
    $('.test').css('color', 'red');
    $('p + p').css('color', 'red');
    $('li + li.www').css('color', 'red');
    $('h2 i').css('color', 'red');
   $(':header').css('color', 'red');
    $('h2:not(.test)').css('color', 'green');
    $(':header:not(.test)').css('color', 'brown');
    $(':header + :header').css('color', 'grey');
    $('p:first').css('color', 'red');
    $('p:last').css('color', 'brown');
    $('h2:has(i)').css('color', 'yellow');
    $('h2 > i').css('color', 'red');
    $('li:eq(3)').css('color', 'red');
    $('li:lt(9)').css('color', 'red');
});



