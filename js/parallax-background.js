                $(function(){
                
                //caching window and body, setting the body background attachment to fixed
                var $window = $(window);
                var $bodysas = $("#parallax_slide_bg").css("background-attachment" , "fixed");
                
                //scroll amount - the less it is, the more noticable the effect is 
                var scrollAmount = -3.3;
                
                //functuon executed while we're scrolling 
                $window.scroll(function() {
                    //moving the background position 
                    $bodysas.css("background-position", "center " + parseInt( $window.scrollTop()/scrollAmount ) + "px");
                });                 
                    
                    
                //just for the demo     
            
                $("#direction-normal").on("click", function(){
                    scrollAmount = -8;
                });
                
                $("#direction-reverse").on("click", function(){
                    scrollAmount = 8;
                });
            
                    
            });


                $(function(){
                
                //caching window and body, setting the body background attachment to fixed
                var $window = $(window);
                var $bodysas = $("#contact_section_parallax").css("background-attachment" , "fixed");
                
                //scroll amount - the less it is, the more noticable the effect is 
                var scrollAmount = -3.3;
                
                //functuon executed while we're scrolling 
                $window.scroll(function() {
                    //moving the background position 
                    $bodysas.css("background-position", "center " + parseInt( $window.scrollTop()/scrollAmount ) + "px");
                });                 
                    
                    
                //just for the demo     
            
                $("#direction-normal").on("click", function(){
                    scrollAmount = -8;
                });
                
                $("#direction-reverse").on("click", function(){
                    scrollAmount = 8;
                });
            
                    
            });

