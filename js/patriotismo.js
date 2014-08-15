

$( document ).ready(function() {
  // Handler for .ready() called.

        $('body').css("visibility","hidden");

        $('body').fadeOut( "fast", function() {
            // Animation complete.
            $('*').css("visibility","visible");
        }); 

        $('body').fadeIn( "slow", function() {
        // Animation complete
    
        });

});

