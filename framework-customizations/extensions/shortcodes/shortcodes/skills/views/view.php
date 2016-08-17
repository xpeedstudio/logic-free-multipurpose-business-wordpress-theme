<?php
if (!defined('FW')) {
    die('Forbidden');
}

$skills = $atts['skills'];
?>

<div class="about_skill_area">

    <div class="about_skill">
        <?php foreach ($skills as $skill): ?>
            <div class="skillbar" data-percent="<?php echo $skill['percentage']; ?>">
                <div class="skillbar-title">
                    
                    <?php if ($skill['title']) { ?>
                        <h3 class="blue"><?php echo wp_kses_post($skill['title']);?></h3>
                    <?php } ?>
                        
                    <span class="sm-text"><?php echo $skill['percentage']; ?></span>
                </div>

                <div class="skillbar-bar blue"></div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
