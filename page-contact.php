
<?php
/*

	Template Name: Contact Page

*/
?>


<?php get_header(); ?>

<div class="contact-page row">
	<!-- MAIN PAGE CONTENT -->
		<div class="left-content">
			<h2>Contact Us</h2>
			<p>To reach Lakeshore Force with any questions or for more information, please fill out the form below and we will be with you shortly.</p>
			<?php gravity_form(1, false, false, false, '', true, 12); ?>
		</div>
	<!-- END MAIN PAGE CONTENT -->
	<!-- TWITTER SECTION -->
	    <div class="twitter-section">
	      <h2>Follow us on <a href="https://twitter.com/lakeshore_force" target="_blank">Twitter</a><span class="scrollIcon"><i class="fa fa-angle-up"></i><i class="fa fa-angle-down"></i></span></h2>
	      <div class="inner">
	        <div id="tw-widget1">
	        </div>
	      </div>
	    </div>
  <!-- END TWITTER SECTION -->
</div>

<?php get_footer (); ?>