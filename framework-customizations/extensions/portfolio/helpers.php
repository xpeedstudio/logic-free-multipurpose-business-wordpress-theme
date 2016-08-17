<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

function fw_theme_get_all_portfolio_taxonomy_list( $param = 'All Categories' ) {
	$taxonomy = 'fw-portfolio-category';
	$args     = array(
		'hide_empty' => true,
	);

	$terms     = get_terms( $taxonomy, $args );
	$result    = array();
	$result[0] = $param;

	if ( ! empty( $terms ) ) {
		foreach ( $terms as $term ) {
			$result[ $term->term_id ] = $term->name;
		}
	}

	return $result;
}


if(!function_exists('fw_theme_ext_portfolio_get_gallery_images')):
	function fw_theme_ext_portfolio_get_gallery_images( $post_id = 0 ) {
        /**
         * Get gallery images
         * @param integer $post_id
         */

		if ( 0 === $post_id && null === ( $post_id = get_the_ID() ) ) {
			return array();
		}

		$options = get_post_meta( $post_id, 'fw_options', true );

		return isset( $options['project-gallery'] ) ? $options['project-gallery'] : array();
	}
endif;


if ( ! function_exists( 'fw_theme_portfolio_post_taxonomies' ) ) :
	function fw_theme_portfolio_post_taxonomies( $post_id, $return = false ) {
        /**
         * Return portfolio post taxonomies
         * @param integer $post_id
         * @param boolean $return
         */
		$taxonomy = 'fw-portfolio-category';
		$terms    = wp_get_post_terms( $post_id, $taxonomy );
		$list     = '';
		$checked  = false;
		foreach ( $terms as $term ) {
			if ( $term->parent == 0 ) {
				// if is checked parent category
				$list .= $term->slug . ', ';
				$checked = true;
			} else {
				$list .= $term->slug . ', ';
				$parent_id = $term->parent;
			}
		}

		if ( ! $checked ) {
			// if is not checked parent category extract this parent
			if(isset($parent_id)){
				$term = get_term_by( 'id', $parent_id, $taxonomy );
				$list .= $term->slug . ', ';
			}
		}

		if ( $return ) {
			return $list;
		} else {
			echo $list;
		}
	}
endif;


if ( ! function_exists( 'fw_theme_portfolio_name_taxonomies' ) ) :
	function fw_theme_portfolio_name_taxonomies( $post_id, $return = false ) {
        /**
         * Return portfolio post taxonomies names
         * @param integer $post_id
         * @param boolean $return
         */

        $taxonomy  = 'fw-portfolio-category';
		$terms     = wp_get_post_terms( $post_id, $taxonomy );
		$separator = ', ';
		foreach ( $terms as $term ) {
			$array[] = $term->name;
		}
		$list = implode( $separator, $array );

		if ( $return ) {
			return $list;
		} else {
			echo $list;
		}
	}
endif;


if ( ! function_exists( 'fw_theme_portfolio_similar_projects' ) ) :
	function fw_theme_portfolio_similar_projects( $post_id, $items = 6 ) {
        /**
         * Display portfolio similar projects
         * @param string $username - instagram username
         * @param integer $items - number of photos
         */

        $taxonomy   = 'fw-portfolio-category';
		$terms      = wp_get_post_terms( $post_id, $taxonomy );
		$post_terms = array();
		foreach ( $terms as $term ) {
			$post_terms[] = $term->term_id;
		}
		$args      = array(
			'posts_per_page' => $items,
			'orderby'        => 'rand',
			'post_status'    => 'publish',
			'post_type'      => 'fw-portfolio',
			'post__not_in'   => array( $post_id ),
			'tax_query'      => array(
				array(
					'taxonomy' => $taxonomy,
					'field'    => 'id',
					'terms'    => $post_terms
				),
			)
		);
		$all_posts = new WP_Query( $args );
		$posts     = $all_posts->posts;
		if ( ! empty( $posts ) ): ?>
			<section class="fw-main-row-custom">
				<div class="fw-container">
					<div class="fw-row">
						<div class="fw-col-sm-12">
							<div class="fw-col-inner">
								<div class="categories-slider2">
									<ul id="categories-slider2">
										<?php
										foreach ( $posts as $item ) :
											$thumbnail_id = get_post_thumbnail_id( $item->ID );?>
											<li data-categories-slider="1">
												<div class="fw-ratio-container fw-ratio-3-4">
													<a href="<?php echo get_permalink( $item->ID ); ?>" class="view-details"><span><?php _e( 'View Details', 'tayn' ); ?></span></a>
													<?php echo fw_image($thumbnail_id); ?>
												</div>
											</li>
										<?php endforeach; ?>
									</ul>
									<a id="categories-slider2-prev" class="prev" href="#"><i class="tficon-shevron-left"></i></a>
									<a id="categories-slider2-next" class="next" href="#"><i class="tficon-shevron-right"></i></a>
								</div>
                                <script>
                                    jQuery(document).ready(function($) {
                                        $('#categories-slider2').carouFredSel({
                                            swipe : {
                                                onTouch: true
                                            },
                                            next : "#categories-slider2-next",
                                            prev : "#categories-slider2-prev",
                                            auto: {
                                                play: false,
                                                timeoutDuration: 4000
                                            },
                                            circular: true,
                                            infinite: true,
                                            width: '100%',
                                            scroll: {
                                                items : 1,
                                                easing: "swing"
                                            }
                                        });
                                    });
                                </script>
							</div>
						</div>
					</div>
				</div>
			</section>
		<?php
		endif;
	}
endif;


if ( ! function_exists( 'fw_theme_portfolio_filter' ) ) :
    function fw_theme_portfolio_filter( $filter_enabled, $uniqid, $isotope = false ) {
        /**
         * Display portfolio filter
         * @param boolean $filter_enabled
         * @param string $uniqid
         * @param boolean $isotope
         */

        if ( $filter_enabled == 'yes' ) {
            $term            = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
            if(!$term){
                return; // if term is false
            }
            $taxonomy        = $term->taxonomy;
            $term_id         = $term->term_id;
            $children        = get_term_children( $term_id, $taxonomy );
            if( empty( $children ) && $isotope){
                return; // if current term hasn't children - don't show filter
            }
            $template_slug   = $term->slug;
            $template_parent = $term->parent;
            $args            = array( 'taxonomy' => $taxonomy );
            $terms           = get_terms( $taxonomy, $args );
            $count           = count( $terms );
            $i               = 0;
            if ( $template_parent == 0 ) {
                $template_parent = $term_id;
            }

            echo '<div class="fw-portfolio-filter">
                <ul id="fw-portfolio-filter-'.$uniqid.'" class="portfolio_filter">';
            if ( $count > 0 ) {
                $term_list = $term_view_all = '';
                foreach ( $terms as $term ) {
                    $i ++;
                    if ( $template_parent != $term->parent ) {
                        if ( $term->slug == $template_slug ) {
                            $permalink = get_term_link( $term->slug, $taxonomy );
                            $icon = '';
                            $category_icon = fw_get_db_term_option($term->term_id, $taxonomy, 'category_icon', '');
                            if($category_icon != ''){
                                $icon = '<i class="'.$category_icon.'"></i>';
                            }
                            $term_view_all .= '<li class="categories-item active" data-category="' . $template_slug . '"><a href="' . $permalink . '">' .$icon. __( 'All', 'tayn' ) . '</a></li>';
                        } elseif ( $template_parent == $term->term_id ) {
                            $permalink = get_term_link( $term->slug, $taxonomy );
                            $icon = '';
                            $category_icon = fw_get_db_term_option($term->term_id, $taxonomy, 'category_icon', '');
                            if($category_icon != ''){
                                $icon = '<i class="'.$category_icon.'"></i>';
                            }
                            $term_view_all .= '<li class="categories-item" data-category="' . $term->slug . '"><a href="' . $permalink . '">' .$icon. __( 'All', 'tayn' ) . '</a></li>';
                        }
                    } elseif ( $template_parent == $term->parent ) {
                        if ( $term->slug == $template_slug ) {
                            $permalink = get_term_link( $term->slug, $taxonomy );
                            $icon = '';
                            $category_icon = fw_get_db_term_option($term->term_id, $taxonomy, 'category_icon', '');
                            if($category_icon != ''){
                                $icon = '<i class="'.$category_icon.'"></i>';
                            }
                            $term_list .= '<li class="categories-item active" data-category="' . $template_slug . '"><a href="' . $permalink . '">' .$icon. $term->name . '</a></li>';
                        } else {
                            $permalink = get_term_link( $term->slug, $taxonomy );
                            $icon = '';
                            $category_icon = fw_get_db_term_option($term->term_id, $taxonomy, 'category_icon', '');
                            if($category_icon != ''){
                                $icon = '<i class="'.$category_icon.'"></i>';
                            }
                            $term_list .= '<li class="categories-item" data-category="' . $term->slug . '"><a href="' . $permalink . '">' .$icon. $term->name . '</a></li>';
                        }
                    }
                }
                echo $term_view_all . $term_list;
            }
            echo '</ul>
                <a class="prev" id="fw-portfolio-filter-'.$uniqid.'-prev" href="#"><i class="fa"></i></a>
                <a class="next" id="fw-portfolio-filter-'.$uniqid.'-next" href="#"><i class="fa"></i></a>
            </div>';
            $isotope_script = '';
            if ( $isotope ) {
                $isotope_script = "var isotope_list_id = jQuery('#fw-portfolio-list-$uniqid');
				isotope_list_id.isotope({
					transitionDuration: '0.6s'
				});

	            jQuery('#fw-portfolio-filter-" . $uniqid."').on('click', '.categories-item', function (e) {
	                e.preventDefault();
	                jQuery('.categories-item').removeClass('active');
	                jQuery(this).addClass('active');

	                var option = jQuery(this).data('category'),
	                    search = option ? function () {
	                        var item = jQuery(this),
	                            name = item.data('category') ? item.data('category') : '';
	                        return name.match(new RegExp(option));
	                    } : '*';

	                isotope_list_id.isotope({filter: search});
	            });";
            }
            echo "<script>
			jQuery(document).ready(function() {
				function catInit(){
					jQuery('#fw-portfolio-filter-" . $uniqid . "').carouFredSel({
						swipe:{
							onTouch:true
						},
						prev:'#fw-portfolio-filter-" . $uniqid . "-prev',
						next:'#fw-portfolio-filter-" . $uniqid . "-next',
						items:{
							visible:'variable'
						},
						auto:{
							play:false
						},
						infinite:true,
						scroll:{
							items:1,
							duration:600,
							easing: 'swing'
						}
					});
				}
				catInit();
				jQuery(window).resize(function(){
					catInit();
				});

				".$isotope_script."
			});
			</script>";
        }
    }
endif;