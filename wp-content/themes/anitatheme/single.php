<body>
<div class="page-container">
	<?php get_header();?>
	<section class="page-wrap">
		<div class="container">
			<?php if(has_post_thumbnail()):?>
			<img src="<?php the_post_thumbnail_url('blog-large');?>" alt="<?php the_title();?>" class="img-field mb-3 img-thumbnail">
			<?php endif;?>
			<h3><?php the_title();?></h3>
			<?php get_template_part('includes/section', 'blogcontent');?>
		</div>
	</section>
	<?php get_footer();?>
</div>
</body>