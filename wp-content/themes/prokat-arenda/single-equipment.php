<?php get_header(); ?>

<main class="container">
<?php while(have_posts()): the_post(); ?>

<h1><?php the_title(); ?></h1>

<?php if(has_post_thumbnail()) the_post_thumbnail('large'); ?>

<div class="equipment-description">
<?php the_content(); ?>
</div>

<?php get_template_part('template-parts/booking-form'); ?>

<?php endwhile; ?>
</main>

<?php get_footer(); ?>