
    <script src="<?php echo base_url('assets/template/js/jquery.min.js') ;?>"></script>
    <script src="<?php echo base_url('assets/template/js/bootstrap.js') ;?>"></script>
    <script src="<?php echo base_url('assets/template/js/alertify.min.js') ;?>"></script>
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
    
    <script type="text/javascript">
        //Tooltip
      $('a').tooltip('hide');

      //Popover
      $('.popover-pop').popover('hide');


      //Collapse
      $('#myCollapsible').collapse({
        toggle: false
      });

      //Tabs
      $('.myTabBeauty a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
      });
      
      //Dropdown
      $('.dropdown-toggle').dropdown();


    //Alertify JS          
        $ = function (id) {
          return document.getElementById(id);
        },
        reset = function () {
            $("toggleCSS").href = "<?php echo base_url('assets/template/css/alertify.core.css') ;?>";
            alertify.set({
              labels: {
                ok: "OK",
                cancel: "Cancel"
              },
              delay: 5000,
              buttonReverse: false,
              buttonFocus: "ok"
            });
        };

        // Standard Dialogs
        $("alert").onclick = function () {
            reset();
            alertify.alert("This is an alert Dialog");
            return false;
        };

        $("confirm").onclick = function() {
            reset();
            alertify.confirm("This is a confirm dialog", function(e) {
                if (e) {
                    alertify.success("You've clicked OK");
                } else {
                    alertify.error("You've clicked Cancel");
                }
            });
            return false;
        };

            $("prompt").onclick = function() {
                reset();
                alertify.prompt("This is a prompt dialog", function(e, str) {
                    if (e) {
                        alertify.success("You've clicked OK and typed: " + str);
                    } else {
                        alertify.error("You've clicked Cancel");
                    }
                }, "Default Value");
                return false;
            };

            // Standard Dialogs
            $("notification").onclick = function() {
                reset();
                alertify.log("Standard log message");
                return false;
            };

            $("success").onclick = function() {
                reset();
                alertify.success("Success log message");
                return false;
            };

            $("error").onclick = function() {
                reset();
                alertify.error("Error log message");
                return false;
            };

            // Custom Properties
            $("delay").onclick = function() {
                reset();
                alertify.set({
                    delay: 10000
                });
                alertify.log("Hiding in 10 seconds");
                return false;
            };

            $("forever").onclick = function() {
                reset();
                alertify.log("Will stay until clicked", "", 0);
                return false;
            };

            //Alertify JS end
    </script>
<!--     Tiny Scrollbar JS 
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
    </script>-->
  </body>
</html>