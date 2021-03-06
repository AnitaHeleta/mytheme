<body>
<div class="page-container">
	<?php get_header();?>
	<section class="page-wrap">
		<div class="container">


	<section class="row">

		<div class="col-lg-3">

			<?php if(is_active_sidebar('page-sidebar') ):?>
				<?php dynamic_sidebar('page-sidebar');?>

			<?php endif;?>
		</div>


		<div class="col-lg-9">

			<h2><?php the_title();?></h2>
			<?php if(has_post_thumbnail()):?>
			<img src="<?php the_post_thumbnail_url('blog-large');?>" alt="<?php the_title();?>" class="img-field mb-3 img-thumbnail">
			<?php endif;?>
		    <?php get_template_part('includes/section', 'content');?>

		 </div>
		</div>
	</section>
	<?php get_footer();?>
</div>
</body>