<?php
/**
 * footer.php
 *
 * The template for displaying the footer.
 */
$footer_heading = logic_get_option('footer_heading');
$footer_socials = logic_get_option('footer_socials');
?>


<section id="footer" class="footer_widget">
    <div class="video_overlay">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="main_widget">
                            <div class="col-sm-3 col-xs-12">
                                <div class="single_widget wow fadeIn" data-wow-duration="800ms">
                                    <?php dynamic_sidebar('footer-1'); ?>
                                </div>
                            </div>

                            <div class="col-sm-3  col-xs-12">
                                <div class="single_widget wow fadeIn" data-wow-duration="800ms">
                                    <?php dynamic_sidebar('footer-2'); ?>
                                </div>
                            </div>

                            <div class="col-sm-3  col-xs-12">
                                <div class="single_widget wow fadeIn" data-wow-duration="800ms">
                                    <?php dynamic_sidebar('footer-3'); ?>
                                </div>
                            </div>

                            <div class="col-sm-3 col-xs-12">
                                <div class="single_widget wow fadeIn" data-wow-duration="800ms">
                                    <?php dynamic_sidebar('footer-4'); ?>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>


<section class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="main_footer">
                    <div class="row">

                        <div class="col-sm-6 col-xs-12">
                            <div class="copyright_text">
                                <p class=" wow fadeInRight" data-wow-duration="1s"><?php echo $footer_heading; ?></p>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xs-12">
                            <div class="flowus">
                                <?php foreach ($footer_socials as $socials): ?>
                                    <a target="_blank" href="<?php echo $socials['link'];?>"><i class="<?php echo $socials['icon'];?>"></i></a>
                                <?php endforeach; ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>









</div>

<!-- START SCROLL TO TOP  -->

<div class="scrollup">
    <a href="#"><i class="fa fa-chevron-up"></i></a>
</div>



<?php wp_footer(); ?>
</body>
</html>