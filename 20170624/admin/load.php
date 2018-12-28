
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>splash screen example</title>
        <link rel="stylesheet" href="../js/nprogress.css">
        <link rel="stylesheet" href="../js/main.css">
        <script src="../js/jquery.min.js"></script>
        <script src="../js/nprogress.js"></script>
        <script type="text/javascript">
                    $(function(){
                        NProgress.configure({
                            template: $('#splash-template').html()
                        });
                        NProgress.start();
                    });
                    $(window).load(function(){
                        NProgress.done();
                    })
        </script>
    </head>
    <body>
       <script type="text" id="splash-template">
 <div class="splash card">
            <div role="spinner">
                <div class="spinner-icon"></div>
            </div>
            <p class="lead" style="text-align:center">正在努力加载中...</p>
            <div class="progress">
                <div class="mybar" role="bar">
                </div>
            </div>
        </div>
       </script>
        <iframe id="iframe" style="width: 100%; height: 660px;" src="<?php echo $_GET['yemian'];?>" frameborder="0"></iframe>
        <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46794744-6', 'wayou.github.io');
  ga('send', 'pageview');

</script>
    </body>
</html>