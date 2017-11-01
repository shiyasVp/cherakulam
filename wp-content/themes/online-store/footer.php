        
<footer id="colophon" class="rsrc-footer" role="contentinfo">                
  <div class="row rsrc-author-credits">                    
  <?php if( is_active_sidebar( 'maxstore-footer-area' ) ) { ?>  				
  <div id="content-footer-section" class="row clearfix">    				
  <div class="address-container footer-asset col-md-3 widget">
    <h3 class="widget-title">OUR STORE</h3>
    <address class="footer-address">
      DK Complex,<br>
      Opp.Catholic Syrian Bank,<br>
      Perinjanam,<br>
      Thrissur Dist,<br>
      Kerala - 680686
    </address>
  </div>
    <?php
      // Calling the header sidebar if it exists.
      dynamic_sidebar( 'maxstore-footer-area' );
    ?>  				
  </div>		
<?php } ?>            
  </div>    
</footer>
<div id="back-top">  
  <a href="#top">
    <span></span>
  </a>
</div>
</div>
<!-- end main container -->
<?php wp_footer(); ?>
</body>
</html>