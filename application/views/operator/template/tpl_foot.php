
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
    </body>
</html>