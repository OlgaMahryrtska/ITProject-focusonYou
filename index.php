<?php get_header();
?>

<!DOCTYPE html>
<html>

<head>
    <title><?php the_title(); ?></title>
    <?php wp_head(); ?>
</head>
<header class="header">

</header>


<body <?php body_class(); ?>>


    <div class="middle">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
            <?php endwhile; ?>
        <?php endif; ?>
        <p> <a href="<?php the_permalink(); ?>"></a></p>

        <p><?php the_content(); ?></p>
    </div>




</body>

</html>
<?php get_footer() ?>

</body>

</html>