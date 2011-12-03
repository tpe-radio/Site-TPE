<footer>
        <?php
        
            function footerW3C ($url) { /*Adaptation de l'url envoyé au W3C VALIDATOR*/
            
            $url= str_replace ('/','%2F', $url) ;
            $url= str_replace ('?','%3F', $url) ;
            $url= str_replace ('=','%3', $url) ;
            
            return $url ;
            
            }
        
        ?>
        <p><a href="http://creativecommons.org/licenses/by-nc-sa/3.0/">License Creative Commons 3.0</a> pour le Site de TPE sur la Radio - 2011-2012</p>
        <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/"><img alt="Contrat Creative Commons" style="border-width:0" src="http://i.creativecommons.org/l/by-nc-sa/3.0/80x15.png" /></a>
        <a href="http://validator.w3.org/check?uri=http://<?php echo footerW3C($_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']) ; ?>" title="Site valide HTML5" id="W3C-footer"><img src="images/w3c_html5.png" alt="Valide HTML5" /></a>
</footer>