
</main>

</div>
<footer id="footer" role="contentinfo" class="footer">

<?php
	 wp_nav_menu([
		'theme_location' => 'footer',
		'container' => false,
		'menu_class' => 'navbar-nav mr-auto',"nav_menu",
	 ])	;
	 ?>

</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>