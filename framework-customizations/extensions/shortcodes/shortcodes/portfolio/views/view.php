<?php
if (!defined('FW'))
    die('Forbidden');
?>

<div class="main_portfolio">

        <div id="filters" class="toolbar">
            <?php
            if (!is_tax()) {
                $terms_filter = get_terms('fw-portfolio-category');
                $count = count($terms_filter);
                if ($count > 0) {
                    echo '<button class="btn-md fil-cat filter active" href=""  data-filter="all">SHOW ALL</button>';

                    foreach ($terms_filter as $term) {
                        ?>
                        <button class="btn-md fil-cat filter" data-rel="<?php echo $term->slug; ?>" data-filter=".<?php echo $term->slug; ?>"> <?php echo $term->name; ?> </button>
                        <?php
                    }
                }
            }
            ?>

            <div class="separator2"></div>
        </div> 
   

    <div id="portfoliowork"> 
        <?php
        $args = array('post_type' => 'fw-portfolio', 'posts_per_page' => -1);
        $loop = new WP_Query($args);
        while ($loop->have_posts()) : $loop->the_post();

            $post_id = get_the_ID();
            $terms = wp_get_post_terms($post_id, 'fw-portfolio-category');
            $term_cat = array();

            foreach ($terms as $term) {
                $term_cat[] = $term->slug;
            }
            $term_cat_list = implode(' ', $term_cat);
            ?>
            <div class="single_portfolio tile scale-anm <?php echo $term_cat_list; ?>">

             
                    <?php $image_url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>
                    <a href="<?php echo $image_url; ?>" title="<?php echo get_the_title(); ?>" class="portfolio-img"><?php the_post_thumbnail(array(360, 301)); ?></a>
             
            </div>
        <?php endwhile; ?>
    </div>

</div>
