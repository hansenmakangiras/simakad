<?php foreach ($js_files as $file): ?>
    <script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>

<script src="<?php echo base_url('assets/template/js/jquery.min.js') ;?>"></script>
<script src="<?php echo base_url('assets/template/js/bootstrap.js') ;?>"></script>
<script src="<?php echo base_url('assets/template/js/jquery.scrollUp.js') ;?>"></script>
<script src="<?php echo base_url('assets/template/js/bootstrap-image-gallery-main.js') ;?>"></script>
<script src="<?php echo base_url('assets/template/js/bootstrap-image-gallery.js') ;?>"></script>

<!-- Switch Menu Selected link -->
    <script type="text/javascript">
	$(function () {
        var url = window.location.pathname,
        urlRegExp = new RegExp(url.replace(/\/$/, '') + "$");  
        $('a').each(function () {
                            if (urlRegExp.test(this.href.replace(/\/$/, ''))) {
                $(this).addClass('selected');
            }
        });
    });
    </script> 
    <!-- Tiny Scrollbar JS -->
    <script src="<?php echo base_url('assets/template/js/tiny-scrollbar.js') ;?>"></script> 
    <script type="text/javascript">
      //ScrollUp
      $(function () {
        $.scrollUp({
          scrollName: 'scrollUp', // Element ID
          topDistance: '300', // Distance from top before showing element (px)
          topSpeed: 300, // Speed back to top (ms)
          animation: 'fade', // Fade, slide, none
          animationInSpeed: 400, // Animation in speed (ms)
          animationOutSpeed: 400, // Animation out speed (ms)
          scrollText: 'Scroll to top', // Text for element
          activeOverlay: false // Set CSS color to display scrollUp active point, e.g '#00FFFF'
        });
      });
      
      //Tiny Scrollbar
      $('#scrollbar').tinyscrollbar();
      $('#scrollbar-one').tinyscrollbar();
      $('#scrollbar-two').tinyscrollbar();
      $('#scrollbar-three').tinyscrollbar();
    </script>
  </body>
</html>