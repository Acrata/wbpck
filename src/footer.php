			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<!-- copyright -->
				<p class="copyright">
					&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php _e('Powered by', 'html5blank'); ?>
					<a href="//wordpress.org" title="WordPress">WordPress</a> &amp; <a href="//html5blank.com" title="HTML5 Blank">HTML5 Blank</a>.
				</p>
				<!-- /copyright -->

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>
            <script>
      //window.loading_screen = window.pleaseWait({
        //logo: "<?php echo get_template_directory_uri(); ?>/img/logo-web.svg",
        //backgroundColor: '#bcbdbc',
        //loadingHtml: "<div class='preload-juggle'><div class='ball'></div><div class='ball'></div><div class='ball'></div></div>"
      //});

        $("#trigger").click(function(event) {
        var wrapper = document.getElementById('wrapper');
            event.preventDefault();
        classie.toggleClass(document.getElementById('wrapper'),'is-open');
            console.log(classie);
});
    </script>
		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>


	</body>
</html>
