<?php get_header(); ?>

<main class="container">
<h1>Оборудование в аренду</h1>

<div class="equipment-grid">
<?php while(have_posts()): the_post(); ?>

<article class="equipment-card">
<?php if(has_post_thumbnail()) the_post_thumbnail('medium'); ?>
<h2><?php the_title(); ?></h2>
<p><?php echo wp_trim_words(get_the_content(),20); ?></p>
<a class="button" href="<?php the_permalink(); ?>">Подробнее</a>
</article>

<?php endwhile; ?>
</div>
</main>

<?php get_footer(); ?>