    
    
   

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
	<script src="//cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
	<script type="text/javascript" src="js/programas.js?v=<?php echo uniqid(); ?>" ></script>
    <script type="text/javascript" src="js/picturefill.min.js" ></script>
    <script src="js/selectores.js?v=<?php echo uniqid(); ?>"></script>
    <script>
        document.createElement("picture");
            $(document).ready(function() {
                String.prototype.mayuscula = function(){
                    return this.charAt(0).toUpperCase() + this.slice(1).toLowerCase();
                };
               
                var mayus = $('.mayus'); 
                mayus.focusout(function(){
                    $(this).val($(this).val().mayuscula());
                }); 
            });
        </script>