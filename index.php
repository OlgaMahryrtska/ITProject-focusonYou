<?php get_header();
?>

<!DOCTYPE html>
<html>

<head>
    <title><?php the_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


    <header class="header">

    </header>




    <div class="middle">
        <?php
        // циклы вывода записей
        // если записи найдены
        if (have_posts()) {
            while (have_posts()) {
                the_post();

                echo '<h3><a href="' . get_permalink() . '">' . get_the_title() . '</a></h3>';

                echo get_the_excerpt();
            }
        }
        // елси записей не найдено
        else {
            echo ' <p>Записей нет...</p>';
        }
        ?>
    </div>




</body>

</html>
<?php get_footer() ?>

</body>

</html>
