 <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; <?php echo $this->config->item('name'); ?></p>
					<p><?php echo $this->config->item('address'); ?><br>
					<?php echo $this->config->item('email'); ?> | <?php echo $this->config->item('telefon'); ?>
                </div> 
            </div>
        </footer>
    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.0 -->
    <script src="<?php echo base_url(); ?>js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>js/form.js"></script>

<!-- SmartMenus jQuery plugin -->
<script src="<?php echo base_url(); ?>js/jquery.smartmenus.js"></script>
<script src="<?php echo base_url(); ?>js/jquery.smartmenus.bootstrap.js"></script>
 <!-- SmartMenus jQuery plugin -->
   
<script>
		$('#main-menu').smartmenus({
			mainMenuSubOffsetX: 1,
			mainMenuSubOffsetY: -8,
			subMenusSubOffsetX: 1,
			subMenusSubOffsetY: -8
		});

</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-57038033-1', 'auto');
  ga('send', 'pageview');

</script>
</body>

</html>


	 