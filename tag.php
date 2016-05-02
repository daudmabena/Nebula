<?php
/**
 * The template for displaying Tag Archive pages.
 */

if ( !defined('ABSPATH') ){ //Redirect (for logging) if accessed directly
	header('Location: http://' . $_SERVER['HTTP_HOST'] . substr($_SERVER['PHP_SELF'], 0, strpos($_SERVER['PHP_SELF'], "wp-content/")) . '?ndaat=' . basename($_SERVER['PHP_SELF']));
	die('Error 403: Forbidden.');
}

do_action('nebula_preheaders');
get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<?php the_breadcrumb(); ?>
			<hr />
		</div><!--/col-->
	</div><!--/row-->
</div><!--/container-->

<div class="fullcontentcon">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<h1 class="page-title"><i class="archiveicon fa fa-tag"></i> <?php echo single_tag_title('', false); ?></h1>
				<?php get_template_part('loop', 'tag'); ?>
				<?php wp_pagenavi(); ?>
			</div><!--/col-->
			<div class="col-md-4">
				<?php get_sidebar(); ?>
			</div><!--/col-->
		</div><!--/row-->
	</div><!--/container-->
</div>

<?php get_footer(); ?>