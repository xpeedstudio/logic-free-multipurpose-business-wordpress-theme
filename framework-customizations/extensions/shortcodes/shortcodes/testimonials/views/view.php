<?php
if (!defined('FW')) {
die('Forbidden');
}

$testimonials = $atts['testimonials'];
?>

<div class="main_testimonial text-center">
    <div class="col-md-12" data-wow-delay="0.2s">
        <div class="main_teastimonial_slider text-center">
            <?php foreach ($testimonials as $testimonial): ?>
            <div class="single_testimonial">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <i class="fa fa-quote-left"></i>
                        <p><?php echo esc_attr($testimonial['content']);?></p>
                        <div class="single_test_author">
                            <h4><?php echo esc_attr($testimonial['name']);?> <span> -- <?php echo esc_attr($testimonial['title']);?></span></h4>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</div>
