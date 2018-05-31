
/**
 * Created by Brainilio on 27-3-2018.
 */

//sidenavigation
$( document ).ready(function() {

    $(".button-collapse").sideNav(
        {
            menuWidth: 200,
            edge: 'left',
            closeOnClick: true
        }
    );


});


//slider
$(document).ready(function(){


    $('.slider').slider( {

            indicators: false

        }

    );

});

//parallax
$(document).ready(function(){
    $('.parallax').parallax();
});

//tijd
$(document).ready(function() {
    $('.timepicker').pickatime({
        default: 'now', // Set default time: 'now', '1:30AM', '16:30'
        fromnow: 0,       // set default time to * milliseconds from now (using with default = 'now')
        twelvehour: false, // Use AM/PM or 24-hour format
        donetext: 'OK', // text for done-button
        cleartext: 'Clear', // text for clear-button
        canceltext: 'Cancel', // Text for cancel-button
        autoclose: false, // automatic close timepicker
        ampmclickable: true, // make AM PM clickable
        aftershow: function () {
        } //Function for after opening timepicker
    });

});

//datum
$(document).ready(function() {
    $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 15, // Creates a dropdown of 15 years to control year,
        today: 'Today',
        clear: 'Clear',
        close: 'Ok',
        closeOnSelect: false // Close upon selecting a date,
    });

});

//material select
$(document).ready(function() {
    $('select').material_select();

});


//modal
$(document).ready(function(){
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
});

// for HTML5 "required" attribute
$("select[required]").css({
    display: "inline",
    height: 0,
    padding: 0,
    width: 0
});

//form option & validation
$(document).ready(function() {
    $("select").material_select();

    // for HTML5 "required" attribute
    $("select[required]").css({
        display: "inline",
        height: 0,
        padding: 0,
        width: 0
    });


});


//eigen code//



// aan en uit zetten van de slider

$(document).ready(function() {
  
    $('#button1').click(function(){
      $("#slider").fadeIn("Slow", function() {})
    })
        $('#button2').click(function() {
          $("#slider").fadeOut("Slow", function() {
              $('').html(` 
        <div id="parallaxplaatje" class="parallax-container" style="height: 400px">
        <div class="center-align">
        <img src="img/girl.jpg"class="responsive-img">
        </div>
        </div>
        `);

          });


        });



     /*   $(x).append(y);
        $(z).append(x);
        $(a).append(z);
        $(b).append(a);
        HIJ ZOU HET ALLEEN IN NATIVE-JAVA DOEN
        */







});

