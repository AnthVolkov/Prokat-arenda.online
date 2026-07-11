<?php get_header(); ?>

<main class="container">
<h1>Поиск</h1>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
<h2><?php the_title(); ?></h2>
<?php the_excerpt(); ?>
<?php endwhile; else: ?>
<p>Ничего не найдено.</p>
<?php endif; ?>

</main>

<?php get_footer(); ?>