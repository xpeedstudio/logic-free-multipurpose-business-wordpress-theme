<?php
if (!defined('ABSPATH'))
    die('Direct access forbidden.');
/**
 * Helper functions used all over the theme
 */

/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package xs
 */
/*
  Return
 * 
 *  */

// simply echos the variable

function logic_return($s) {
    return $s;
}

/*
 * FOR ONE PAGE Section
 * since 1.0
 */

function logic_editor_data($value) {
    return wp_kses_post($value);
}

// Gets unyson option data in safe mode
// since 1.0

function logic_get_option($k, $v = '', $m = 'theme-settings') {
    if (defined('FW')) {
        switch ($m) {
            case 'theme-settings':
                $v = fw_get_db_settings_option($k);
                break;

            default:
                $v = '';
                break;
        }
    }
    return $v;
}

// Gets unyson image url from option data in a much simple way
// sience 1.0

function logic_get_image($k, $v = '', $d = false) {

    if ($d == true) {
        $attachment = $k;
    } else {
        $attachment = logic_get_option($k);
    }

    if (isset($attachment['url']) && !empty($attachment)) {
        $v = $attachment['url'];
    }

    return $v;
}

/* Gets unyson image url from variable
 * sience 1.0
 * logic_image($img, $alt )
 */

function logic_image($img, $alt, $v = '') {

    if (isset($img['url']) && !empty($img)) {
        $i = $img['url'];
        $v = "<img src=" . $i . " alt=" . $alt . " />";
    }

    return $v;
}

// Gets original page ID/ Slug
// since 1.0

function logic_main($id, $name = true) {
    if (function_exists('icl_object_id')) {
        $id = icl_object_id($id, 'page', true, 'en');
    }

    if ($name === true) {
        $post = get_post($id);
        return $post->post_name;
    } else {
        return $id;
    }
}

// Creates SEO friendly section ID from page ID. Returns page ID directly if $return = true
// since 2.0
function logic_sectionID($id, $returnID = false) {

    if ($returnID == false) {

        $str = get_the_title($id);
        $patterns = array(
            "/[:#+*+&+!+@+!+\.+?+%+$+\"+'+^+\[+<+{+\(+\)}+>+\]+,+`+;+,+=+\\\\]/", // match unwanted special characters
            "@<(script|style)[^>]*?>.*?</\\1>@si", // match <script>, <style> tags
            "/[~\r\n\t \/_|+ -]+/" // match newline, tab and more unwanted characters
        );

        $replacements = array(
            "", // for 1st match
            "", // for 2nd match
            "-" // for 3rd match
        );

        $str = preg_replace($patterns, $replacements, strip_tags($str));
        return strtolower(trim($str, '-'));
    } else {

        return "section-$id";
    }
}

// Gets post's meta data in a much simplier way.
// since 1.0

function logic_get_post_meta($id, $needle) {
    $data = get_post_meta($id, 'fw_options');
    if (is_array($data) && isset($data[0]['page_sections'])) {
        $data = $data[0]['page_sections'];

        if (is_array($data)) {
            return logic_seekKey($data, $needle);
        }
    }
}

function logic_seekKey($haystack, $needle) {
    foreach ($haystack as $key => $value) {

        if ($key == $needle) {
            return $value;
        } elseif (is_array($value)) {
            return logic_seekKey($value, $needle);
        }
    }
}

/*
 * btn Function
 * since 1.0
 */
//btn function

if (!function_exists('logic_theme_button_class')) :

    function logic_theme_button_class($style) {
        /**
         * Display specific class for buttons - depends on theme
         */
        if ($style == 'default') {
            echo 'btn btn-default';
        } elseif ($style == 'primary') {
            echo 'btn btn-primary';
        } else {
            echo 'default';
        }
    }

endif;

/*
 * wpml compatitible 
 */

if (!function_exists('logic_theme_translate')) :

    function logic_theme_translate($content) {
        /**
         * Return the content for translations plugins
         * @param string $content
         */
        $content = html_entity_decode($content, ENT_QUOTES, 'UTF-8');

        if (function_exists('icl_object_id') && strpos($content, 'wpml_translate') == true) {
            $content = do_shortcode($content);
        } elseif (function_exists('qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage')) {
            $content = qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage($content);
        }

        return $content;
    }

endif;


/*
 * This fucntion for recent post shortcode.
 * people can select show from one category or from all category
 * since 1.0
 */

// term
if (!function_exists('logic_get_category_term_list')) :

    function logic_get_category_term_list() {
        /**
         * Return array of categories
         */
        $taxonomy = 'category';
        $args = array(
            'hide_empty' => true,
        );

        $terms = get_terms($taxonomy, $args);
        $result = array();
        $result[0] = __('All Categories', 'logic');

        if (!empty($terms))
            foreach ($terms as $term) {
                $result[$term->term_id] = $term->name;
            }
        return $result;
    }

endif;

/*
 * THis function for favicon
 * since 1.0
 */


if (!function_exists('logic_get_header_icons')) {

    function logic_get_header_icons() {


        if (function_exists('wp_site_icon') && has_site_icon() && !is_customize_preview() && !defined('FW')) {
            return;
        }


        $meta_tags = array(
            sprintf('<link rel="icon" href="%s" sizes="32x32" />', esc_url(logic_get_image('favicon', LOGIC_IMAGES . '/ico/favicon.png'))),
            sprintf('<link rel="icon" href="%s" sizes="192x192" />', esc_url(logic_get_image('site_icon_192', LOGIC_IMAGES . '/ico/site-icon-192.png'))),
            sprintf('<link rel="apple-touch-icon-precomposed" href="%s" />', esc_url(logic_get_image('site_icon_180', LOGIC_IMAGES . '/ico/site-icon-180.png'))),
            sprintf('<meta name="msapplication-TileImage" content="%s" />', esc_url(logic_get_image('site_icon_270', LOGIC_IMAGES . '/ico/site-icon-270.png'))),
        );

        foreach ($meta_tags as $meta_tag) {
            echo "$meta_tag\n";
        }
    }

}

function logic_color_rgb($hex) {
    $hex = preg_replace("/^#(.*)$/", "$1", $hex);
    $rgb = array();
    $rgb['r'] = hexdec(substr($hex, 0, 2));
    $rgb['g'] = hexdec(substr($hex, 2, 2));
    $rgb['b'] = hexdec(substr($hex, 4, 2));
    return $rgb;
}

/*
 * Section Edit option
 * 
 * This function for show section edit option in every section in one page 
 * 
 * Since 1.0
 *  */

function logic_edit_section() {
    ?>
    <div class="section-edit">
        <div class="container relative">
    <?php
    if (is_user_logged_in()) {
        edit_post_link(esc_html__('Edit', 'logic'), '', '');
    }
    ?>
            <span class="section-abc"><?php echo esc_html(get_the_title()); ?></span>
        </div>
    </div> 
            <?php
        }
        