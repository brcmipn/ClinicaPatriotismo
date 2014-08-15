

$( document ).ready(function() {
  // Handler for .ready() called.

    
    $(".wrapper").css("visibility","hidden");


    $( ".wrapper" ).fadeOut( "slow", function() {
    // Animation complete.
    }); 

    $( "#intro" ).delay(3000).fadeOut( "slow", function() {
        // Animation complete.
        $(".wrapper").css("visibility","visible");
    });  

    $(".wrapper" ).delay(3000).fadeIn( "slow", function() {
        // Animation complete
    
    });

});

