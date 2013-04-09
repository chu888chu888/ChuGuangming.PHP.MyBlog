<?php $options = get_flat_option(); ?>

  </div><!-- END #left_col -->

  <div id="container"></div>

  <?php if(!is_page_template('page-noside.php')&&!is_page_template('page-noside-nocomment.php')) { ?>
  <div id="right_col">
   <?php get_sidebar(); ?>
  </div>
  <?php }; ?>

  <div id="footer">
   <ul id="copyright">

   </ul>
  </div>

 </div><!-- END #main_content -->


 <?php if ($options['show_return_top']) : ?>
 <p id="return_top"><a href="#header">return top</a></p>
 <?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>