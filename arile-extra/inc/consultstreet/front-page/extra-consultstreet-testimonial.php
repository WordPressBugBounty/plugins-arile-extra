<?php
$consultstreet_testimonial_options = get_theme_mod('consultstreet_testimonial_content');
$consultstreet_testimonial_disabled = get_theme_mod('consultstreet_testimonial_disabled', true); 
$consultstreet_testimonial_area_title = get_theme_mod('consultstreet_testimonial_area_title', __('Testimonials','arile-extra'));
$consultstreet_testimonial_area_des = get_theme_mod('consultstreet_testimonial_area_des', __('What our customers are saying about us after using our products.','arile-extra'));
$consultstreet_testimonial_overlay_disable = get_theme_mod('consultstreet_testimonial_overlay_disable', false); 
if($consultstreet_testimonial_disabled == true): 
?>
<section class="theme-block theme-testimonial <?php if('EnvoPress' == $activate_theme || 'Business Stock' == $activate_theme){echo 'vrsn-three';}?>" id="theme-testimonial">	
	<div class="container">	
	     <?php if($consultstreet_testimonial_area_title != null || $consultstreet_testimonial_area_des != null): ?>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="theme-section-module text-center">
					<?php if($consultstreet_testimonial_area_title != null): ?>
						<h2 class="theme-section-title wow animate fadeInUp" data-wow-delay=".3s"><?php echo wp_kses_post($consultstreet_testimonial_area_title); ?></h2>
					<?php endif; ?>
					<?php if($consultstreet_testimonial_area_des != null): ?>
						<p class="theme-section-subtitle wow animate fadeInUp" data-wow-delay=".3s"><?php echo wp_kses_post($consultstreet_testimonial_area_des); ?></p>
					<?php endif; ?>
						<div class="theme-separator-line-horrizontal-full wow animate fadeInUp" data-wow-delay=".3s"></div>
					</div>
				</div>
			</div>
	    <?php endif; ?>
			<div class="row theme-testimonial-content wow animate fadeInUp" data-wow-delay=".3s">
			<?php
			$consultstreet_testimonial_options = json_decode($consultstreet_testimonial_options);
			if( $consultstreet_testimonial_options!='' )
			{
			$allowed_html = array('br' => array(), 'em' => array(), 'strong' => array(), 'b' => array(),'i' => array());
					foreach($consultstreet_testimonial_options as $testimonial_iteam){ 
							$title = ! empty( $testimonial_iteam->title ) ? $testimonial_iteam->title : '';
							$test_desc = ! empty( $testimonial_iteam->text ) ? $testimonial_iteam->text : '';
							$designation = ! empty( $testimonial_iteam->designation ) ? $testimonial_iteam->designation : '';
					?>
					    <?php if('EnvoPress' == $activate_theme || 'Business Stock' == $activate_theme){echo '<div class="col-lg-4 col-md-6 col-sm-12">';}else{echo'<div class="col-lg-12 col-md-12 col-sm-12">';}?>
							<article class="theme-testimonial-block">
							<?php if($testimonial_iteam->image_url != null): ?>
								<figure class="thumbnail">
										<img src="<?php echo $testimonial_iteam->image_url; ?>" class="img-fluid rounded-circle" alt="<?php echo esc_html($title); ?>" >
								</figure>
							<?php endif; ?>	
							<div class="testimonial-content">
								<?php if($test_desc != null): ?>
									<p><?php echo wp_kses( html_entity_decode( $test_desc ), $allowed_html ); ?></p>
								<?php endif; ?>		
								<?php if($title != null): ?>	
									<cite class="name">
                                        <?php echo esc_html($title); ?>
									</cite>
								<?php endif; ?>		
								<?php if($designation != null): ?>	
									<span class="position"><?php echo esc_html($designation); ?></span>
								<?php endif; ?>		
							</div>
							</article>	
					    </div>
					<?php } } else 
					{ ?>

					<?php if('EnvoPress' == $activate_theme || 'Business Stock' == $activate_theme || 'Business Stock' == $activate_theme){ ?>
						
					<div class="col-lg-4 col-md-6 col-sm-12">
						<article class="theme-testimonial-block">
							<figure class="thumbnail">
								<img src="<?php echo arile_extra_plugin_url; ?>/inc/consultstreet/images/theme-user1.jpg" class="img-fluid rounded-circle" alt="Olivia Kevinson">
							</figure>								
							<div class="testimonial-content">
								<p><?php esc_html_e('"You guys are legendary! You guys are great and having amazing support & service. I couldn’t ask for any better. Thank you!"','arile-extra'); ?></p>
								<cite class="name"><?php esc_html_e('Olivia Kevinson','arile-extra'); ?></cite>
								<span class="position"><?php esc_html_e('Founder','arile-extra'); ?></span>
							</div>
						</article>	
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12">
						<article class="theme-testimonial-block">
							<figure class="thumbnail">
								<img src="<?php echo arile_extra_plugin_url; ?>/inc/consultstreet/images/theme-user2.jpg" class="img-fluid rounded-circle" alt="Olivia Kevinson">
							</figure>								
							<div class="testimonial-content">
								<p><?php esc_html_e('"You guys are legendary! You guys are great and having amazing support & service. I couldn’t ask for any better. Thank you!"','arile-extra'); ?></p>
								<cite class="name"><?php esc_html_e('Mitchell Harris','arile-extra'); ?></cite>
								<span class="position"><?php esc_html_e('Financer','arile-extra'); ?></span>
							</div>
						</article>	
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12">
						<article class="theme-testimonial-block">
							<figure class="thumbnail">
								<img src="<?php echo arile_extra_plugin_url; ?>/inc/consultstreet/images/theme-user3.jpg" class="img-fluid rounded-circle" alt="Olivia Kevinson">
							</figure>								
							<div class="testimonial-content">
								<p><?php esc_html_e('"You guys are legendary! You guys are great and having amazing support & service. I couldn’t ask for any better. Thank you!"','arile-extra'); ?></p>
								<cite class="name"><?php esc_html_e('Julia Cloe','arile-extra'); ?></cite>
								<span class="position"><?php esc_html_e('Sales Manager','arile-extra'); ?></span>
							</div>
						</article>	
					</div>
						
					<?php }else{ ?>
					<div class="col-lg-12 col-md-12 col-sm-12">
						<article class="theme-testimonial-block">
							<figure class="thumbnail">
								<img src="<?php echo arile_extra_plugin_url; ?>/inc/consultstreet/images/theme-user1.jpg" class="img-fluid rounded-circle" alt="Olivia Kevinson">
							</figure>								
							<div class="testimonial-content">
								<p><?php esc_html_e('"You guys are legendary! You guys are great and having amazing support & service. I couldn’t ask for any better. Thank you!"','arile-extra'); ?></p>
								<cite class="name"><?php esc_html_e('Olivia Kevinson','arile-extra'); ?></cite>
								<span class="position"><?php esc_html_e('Founder','arile-extra'); ?></span>
							</div>
						</article>	
					</div>
					<?php } } ?>
		    </div>
	</div>		
</section>
<?php endif; ?>