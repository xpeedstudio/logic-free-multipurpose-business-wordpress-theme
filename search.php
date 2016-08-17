<?php
/**
 * search.php
 *
 * The template for displaying search results.
 */
?>

<?php get_header(); ?>
<div class="blog" role="main">
    <?php get_template_part('content/content', 'blog-header')?>
    <div class="main-content blog-wrap">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <?php if (have_posts()) : ?>
                        <header class="page-header">
                            <h1>
                                <?php
                                printf(__('Search Results for %s', 'logic'), get_search_query());
                                ?>
                            </h1>
                        </header>

                        <?php while (have_posts()) : the_post(); ?>
                            <?php get_template_part('content/content', get_post_format()); ?>
                        <?php endwhile; ?>

                        <?php logic_paging_nav(); ?>
                    <?php else : ?>
                        <?php get_template_part('content/content', 'none'); ?>
                    <?php endif; ?>
                </div> <!-- end main-content -->

                <?php get_sidebar(); ?>
            </div>
        </div> 
    </div> 
</div> <!-- end main-content -->
<?php get_footer(); ?>