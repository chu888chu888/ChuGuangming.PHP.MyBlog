<?php get_header(); ?>

<div id="topbox">
    Sometimes I write code that might be useful to others. I make it available here.
</div>

<?php while ( have_posts() ) : the_post(); ?>

<?php
	$url = get_post_meta($post->ID, 'url', true); 
	$download = get_post_meta($post->ID, 'download', true);
	$arr = explode('/', $download);
	$filename = $arr[count($arr)-1];
?>

<div class="separator"></div>

<div class="post">

	<h2><?php the_title(); ?></h2>

	<?php the_content(); ?>

	<div class="btn-group">
		<a class="btn" href="<?php echo $url; ?>">Project Details</a> <a class="btn" href="<?php echo $download; ?>">Download</a>
	</div>

</div>
	
<?php endwhile; ?>

<?php if ($wp_query->max_num_pages > 1): ?>
<ul class="pager">
	<li class="previous"><?php next_posts_link('&larr; Older posts'); ?></li>
	<li class="next"><?php previous_posts_link('Newer posts &rarr;'); ?></li>
</ul>
<?php endif; ?>

<?php get_footer(); ?>
