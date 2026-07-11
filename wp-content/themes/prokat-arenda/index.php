<?php get_header(); ?>

<main class="container">

<h1>Prokat-arenda.online</h1>

<p>Аренда инструмента и оборудования.</p>

<?php if(have_posts()): while(have_posts()): the_post(); the_content(); endwhile; endif; ?>

</main>

<?php get_footer(); ?>
