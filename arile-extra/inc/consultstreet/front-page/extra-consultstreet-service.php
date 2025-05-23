<?php 
$activate_theme_data = wp_get_theme(); // getting current theme data
$activate_theme = $activate_theme_data->name;
if('ConsultStreet' == $activate_theme || 'BrightPress' == $activate_theme || 'AssentPress' == $activate_theme || $activate_theme == 'MadisonBlog' || $activate_theme == 'ConsultZone' || 'BlogWar' == $activate_theme || $activate_theme == 'ConsultHub' || $activate_theme == 'ConsultGuide'){				
	$title = 'Our Services';
    $description = 'We provide the worlds best consulting related services to growth your business.';	
}
if('FitnessBase' == $activate_theme){
    $title = 'Set High Fitness Goals';
    $description = 'After you decide to start training we will make sure you get the best fitness.';
	$default = '<section class="theme-block theme-about"><div class="container"><div class="row"><div class="col-lg-12 col-md-12 col-sm-12"><div class="row"><div class="col-lg-6 col-md-6 col-sm-12"><figure class="about-thumbnail"><img src="'.arile_extra_plugin_url.'/inc/consultstreet/images/about-img-1.png" class="img-fluid" alt="About ConsultStreet" /></figure></div><div class="col-lg-6 col-md-6 col-sm-12 align-self-center"><div class="theme-about-block"><h5 class="mb-3 text-default">Welcome to Fitness Base</h5><h2 class="mb-3">Everything is Possible With Us</h2><p>Sed elementum dapibus tellus, a dictum metus interdum ac. Nullam condimentum, dui volutpat fringilla molestie, libero tortor ultrices lorem, at tempus diam purus non velit. Aliquam vel nulla eleifend, consequat elit id, tristique massdolor velit, blandi.</p><p>Sed elementum dapibus tellus, a dictum metus interdum ac. Nullam condimentum, dui volutpat fringilla molestie, libero tortor ultrices lorem, at tempus diam purus non velit.</p><div class="pt-3"><a href="#" class="btn-small btn-default-dark">Read More</a></div></div></div></div></div></div></div></section>';
}
if('Beauty Spa Salon' == $activate_theme){				
	$title = 'Services We Offer';
    $description = 'Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expete ndis in vel pertinax sensibus.';	
}
if('Decorexo' == $activate_theme){				
	$title = 'Featured Services';
    $description = "We provide the world's best interior design and architectural solutions for you.";	
}
if('Architect Hub' == $activate_theme){				
	$title = 'We Build Creative Architecture Design Solutions';
    $description = "Architect and interior design services";	
}
if('EnvoPress' == $activate_theme || 'EarnPress' == $activate_theme){				
	$title = 'We offer best services';
    $description = "We provide the world's best services to growth your business.";	
}
if('Business Stock' == $activate_theme){				
	$title = 'We Provide Best Services';
    $description = "We provide the world's best services to growth your business.";	
}
$consultstreet_service_content  = get_theme_mod( 'consultstreet_service_content'); 
$consultstreet_service_area_disabled = get_theme_mod('consultstreet_service_area_disabled', true); 
$consultstreet_service_area_title = get_theme_mod('consultstreet_service_area_title', __(''.$title.'','arile-extra'));
$consultstreet_service_area_des = get_theme_mod('consultstreet_service_area_des', __(''.$description.'','arile-extra'));
if('ConsultStreet' == $activate_theme || 'FitnessBase' == $activate_theme || 'AssentPress' == $activate_theme || 'Beauty Spa Salon' == $activate_theme || 'Decorexo' == $activate_theme || 'EnvoPress' == $activate_theme || 'EarnPress' == $activate_theme || $activate_theme == 'MadisonBlog' || $activate_theme == 'ConsultZone' || $activate_theme == 'Business Stock' || 'BlogWar' == $activate_theme || $activate_theme == 'ConsultHub' || $activate_theme == 'ConsultGuide' || 'Architect Hub' == $activate_theme){		$text_align = 'center';	
}
if('BrightPress' == $activate_theme){
    $text_align = 'left';				
}
if($consultstreet_service_area_disabled == true): ?>
<section class="theme-block theme-services <?php if('FitnessBase' == $activate_theme){ echo 'theme-bg-gradient-bg'; }?><?php if('EnvoPress' == $activate_theme || 'ConsultZone' == $activate_theme || 'Architect Hub' == $activate_theme){echo 'vrsn-three';}?>" id="theme-services">
	<div class="container">
	<?php  
	if( ($consultstreet_service_area_title) || ($consultstreet_service_area_des)!='' ): ?>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="theme-section-module text-center">
					<?php if($consultstreet_service_area_title != null): ?>
						<h2 class="theme-section-title wow animate fadeInUp" data-wow-delay=".3s"><?php echo $consultstreet_service_area_title; ?></h2>
					<?php endif; ?>
					<?php if($consultstreet_service_area_des != null): ?>
						<p class="theme-section-subtitle wow animate fadeInUp" data-wow-delay=".3s"><?php echo $consultstreet_service_area_des; ?></p>
					<?php endif; ?>
						<div class="theme-separator-line-horrizontal-full wow animate fadeInUp" data-wow-delay=".3s"></div>
					</div>
				</div>
			</div>
		<?php endif; ?>
	<div class="row theme-services-content wow animate fadeInUp" data-wow-delay=".3s">
		<?php
		if ( ! empty( $consultstreet_service_content ) ) {
		$allowed_html = array('br' => array(), 'em' => array(), 'strong' => array(), 'b' => array(),'i' => array());
		$consultstreet_service_content = json_decode( $consultstreet_service_content );
		foreach ( $consultstreet_service_content as $features_item ) {
			$icon = ! empty( $features_item->icon_value ) ? $features_item->icon_value : '';
			$title = ! empty( $features_item->title ) ? $features_item->title : '';
			$text = ! empty( $features_item->text ) ? $features_item->text : '';
			$link = ! empty( $features_item->link ) ? $features_item->link : '';
			$image = ! empty( $features_item->image_url ) ? $features_item->image_url : '';
			$open_new_tab = $features_item->open_new_tab;
			?>
			<div class="col-lg-4 col-md-6 col-sm-12">				
					<article class="service-content text-<?php echo $text_align; ?>">
					<?php if($features_item->choice == 'customizer_repeater_image'){ ?>
							<?php if ( ! empty( $image ) ) : ?>
							<figure class="service-content-thumbnail">
								<?php if ( ! empty( $link ) ) : ?>
									<a href="<?php echo $link; ?>" <?php if($open_new_tab== 'yes' || $open_new_tab== 'on') { echo "target='_blank'"; } ?>>
									   <img class="img-fluid" src="<?php echo esc_url( $image ); ?>" <?php if ( ! empty( $title ) ) : ?> alt="<?php echo esc_attr( $title ); ?>" title="<?php echo esc_attr( $title ); ?>" <?php endif; ?> />
									</a>
								<?php endif; ?>	
								<?php if ( empty( $link ) ) : ?>	
										<img class="img-fluid" src="<?php echo esc_url( $image ); ?>" <?php if ( ! empty( $title ) ) : ?> alt="<?php echo esc_attr( $title ); ?>" title="<?php echo esc_attr( $title ); ?>" <?php endif; ?> />
                                <?php endif; ?>	
                            </figure>								
							<?php endif; ?>
						<?php } else if($features_item->choice =='customizer_repeater_icon'){ ?>
							<?php if ( ! empty( $icon ) ) :?>
							<figure class="service-content-thumbnail">
									<?php if ( ! empty( $link ) ) : ?>
											<a href="<?php echo $link; ?>" <?php if($open_new_tab== 'yes' || $open_new_tab== 'on') { echo "target='_blank'"; } ?>><i class="fa <?php echo esc_html( $icon ); ?>"></i></a>
									<?php endif; ?>
									<?php if ( empty( $link ) ) : ?>
											<i class="fa <?php echo esc_html( $icon ); ?>"></i>	
									<?php endif; ?>
							</figure>
							<?php endif; ?>
						<?php } ?>
						
							<?php if ( ! empty( $title ) ) : 
								if(empty($link)){ ?>
									<h4 class="service-title"><?php echo esc_html( $title ); ?></h5><?php
								}else{
									?>
									<h4 class="service-title"><a href="<?php echo $link; ?>" <?php if($open_new_tab =='yes'){?>target="_blank" <?php }?> ><?php echo esc_html( $title ); ?></a></h5><?php
								}
							?>
							<?php endif; ?>
							<?php if ( ! empty( $text ) ) : ?>
								<p><?php echo wp_kses_post( html_entity_decode( $text ) ); ?></p>
							<?php endif; ?>
					</article>
			</div>
			<?php
			} }
			else
			{ 
		        if('ConsultStreet' == $activate_theme || 'AssentPress' == $activate_theme || 'EarnPress' == $activate_theme || $activate_theme == 'MadisonBlog' || $activate_theme == 'ConsultZone' || 'BlogWar' == $activate_theme || $activate_theme == 'ConsultHub' || $activate_theme == 'ConsultGuide'){
					$service1_icon = 'fa-usd';
					$service2_icon = 'fa-clone';
					$service3_icon = 'fa-bar-chart';
					$service1_title = 'Corporate Finance';
					$service2_title = 'Consulting Service';
					$service3_title = 'Market Analysis';
				}
				if('BrightPress' == $activate_theme){
					$service1_icon = 'fa-usd';
					$service2_icon = 'fa-clone';
					$service3_icon = 'fa-bar-chart';
					$service1_title = 'Corporate Finance';
					$service2_title = 'Consulting Service';
					$service3_title = 'Market Analysis';
				}
				if('FitnessBase' == $activate_theme){
					$service1_icon = 'fa-hand-grab-o';
					$service2_icon = 'fa-clock-o';
					$service3_icon = 'fa-sheqel';
					$service1_title = 'No Long-Term Contract';
					$service2_title = 'Exercise Round the Clock';
					$service3_title = 'Best Equipment';	
				} 
			    if('Beauty Spa Salon' == $activate_theme){
					$service1_icon = 'fa-usd';
					$service2_icon = 'fa-clone';
					$service3_icon = 'fa-bar-chart';
					$service1_title = 'Skin Spa Care';
					$service2_title = 'Nails Care';
					$service3_title = 'Massage Therapy';	
				} 
			    if('Decorexo' == $activate_theme){
					$service1_icon = 'fa-usd';
					$service2_icon = 'fa-clone';
					$service3_icon = 'fa-bar-chart';
					$service1_title = 'Interior Design';
					$service2_title = 'Architectural Design';
					$service3_title = 'Lighting Design';	
				} 
				if('EnvoPress' == $activate_theme || 'Business Stock' == $activate_theme){
					$service1_icon = 'fa-money';
					$service2_icon = 'fa-suitcase';
					$service3_icon = 'fa-globe';
					$service1_title = 'Business Planning';
					$service2_title = 'Corporate Finance';
					$service3_title = 'SEO Optimization';	
				} 
				if('Architect Hub' == $activate_theme){
					$service1_icon = 'fa-usd';
					$service2_icon = 'fa-clone';
					$service3_icon = 'fa-bar-chart';
					$service1_title = 'Architect Design';
					$service2_title = 'House Decor';
					$service3_title = 'Project Planning';	
				} 
		
		?>
		
		   <?php if('Beauty Spa Salon' == $activate_theme){ ?>
				<div class="col-lg-4 col-md-6 col-sm-12">				
					<article class="service-content text-<?php echo $text_align; ?>">
						<figure class="service-content-thumbnail">
						<?php if('Beauty Spa Salon' == $activate_theme){ ?>
						    <a href="#"><img class="img-fluid" src="<?php echo arile_extra_plugin_url; ?>/inc/consultstreet/images/theme-service4.jpg" alt="No Long-Term Contract" title="Architectural Design"></a>
						<?php }else{ ?>
							<a href="#"><i class="fa <?php echo $service1_icon; ?>"></i></a>
					    <?php }	?>
						</figure>
						<h4 class="service-title"><a href="#"><?php esc_html_e(''.$service1_title.'','arile-extra'); ?></a></h4>
						<p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisicing elit quos dolor quas molesty.','arile-extra'); ?></p>
					</article>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">				
					<article class="service-content text-<?php echo $text_align; ?>">
						<figure class="service-content-thumbnail">
						<?php if('Beauty Spa Salon' == $activate_theme){ ?>
						    <a href="#"><img class="img-fluid" src="<?php echo arile_extra_plugin_url; ?>/inc/consultstreet/images/theme-service5.jpg" alt="Exercise Round the Clock" title="Architectural Design"></a>
						<?php }else{ ?>
							<a href="#"><i class="fa <?php echo $service2_icon; ?>"></i></a>
					    <?php }	?>
						</figure>
						<h4 class="service-title"><a href="#"><?php esc_html_e(''.$service2_title.'','arile-extra'); ?></a></h4>
						<p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisicing elit quos dolor quas molesty.','arile-extra'); ?></p>		
					</article>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">				
					<article class="service-content text-<?php echo $text_align; ?>">
						<figure class="service-content-thumbnail">
						<?php if('Beauty Spa Salon' == $activate_theme){ ?>
						    <a href="#"><img class="img-fluid" src="<?php echo arile_extra_plugin_url; ?>/inc/consultstreet/images/theme-service6.jpg" alt="Best Equipment" title="Architectural Design"></a>
						<?php }else{ ?>
							<a href="#"><i class="fa <?php echo $service3_icon; ?>"></i></a>
					    <?php }	?>
						</figure>
						<h4 class="service-title"><a href="#"><?php esc_html_e(''.$service3_title.'','arile-extra'); ?></a></h4>
						<p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisicing elit quos dolor quas molesty.','arile-extra'); ?></p>
					</article>
				</div>
            
			
		    <?php } elseif('Decorexo' == $activate_theme){ ?>
				<div class="col-lg-4 col-md-6 col-sm-12">				
					<article class="service-content text-<?php echo $text_align; ?>">
						<figure class="service-content-thumbnail">
						<?php if('Decorexo' == $activate_theme){ ?>
						    <a href="#"><img class="img-fluid" src="<?php echo arile_extra_plugin_url; ?>/inc/arilewp/images/theme-service3.jpg" alt="No Long-Term Contract" title="Architectural Design"></a>
						<?php }else{ ?>
							<a href="#"><i class="fa <?php echo $service1_icon; ?>"></i></a>
					    <?php }	?>
						</figure>
						<h4 class="service-title"><a href="#"><?php esc_html_e(''.$service1_title.'','arile-extra'); ?></a></h4>
						<p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisicing elit quos dolor quas molesty.','arile-extra'); ?></p>
					</article>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">				
					<article class="service-content text-<?php echo $text_align; ?>">
						<figure class="service-content-thumbnail">
						<?php if('Decorexo' == $activate_theme){ ?>
						    <a href="#"><img class="img-fluid" src="<?php echo arile_extra_plugin_url; ?>/inc/arilewp/images/theme-service2.jpg" alt="Exercise Round the Clock" title="Architectural Design"></a>
						<?php }else{ ?>
							<a href="#"><i class="fa <?php echo $service2_icon; ?>"></i></a>
					    <?php }	?>
						</figure>
						<h4 class="service-title"><a href="#"><?php esc_html_e(''.$service2_title.'','arile-extra'); ?></a></h4>
						<p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisicing elit quos dolor quas molesty.','arile-extra'); ?></p>		
					</article>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">				
					<article class="service-content text-<?php echo $text_align; ?>">
						<figure class="service-content-thumbnail">
						<?php if('Decorexo' == $activate_theme){ ?>
						    <a href="#"><img class="img-fluid" src="<?php echo arile_extra_plugin_url; ?>/inc/arilewp/images/theme-service1.jpg" alt="Best Equipment" title="Architectural Design"></a>
						<?php }else{ ?>
							<a href="#"><i class="fa <?php echo $service3_icon; ?>"></i></a>
					    <?php }	?>
						</figure>
						<h4 class="service-title"><a href="#"><?php esc_html_e(''.$service3_title.'','arile-extra'); ?></a></h4>
						<p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisicing elit quos dolor quas molesty.','arile-extra'); ?></p>
					</article>
				</div>	
				
				<?php } elseif('Architect Hub' == $activate_theme){ ?>
				<div class="col-lg-4 col-md-6 col-sm-12">				
					<article class="service-content text-<?php echo $text_align; ?>">
						<figure class="service-content-thumbnail">
						<?php if('Architect Hub' == $activate_theme){ ?>
						    <a href="#"><img class="img-fluid" src="<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-service10.jpg" alt="No Long-Term Contract" title="Architectural Design"></a>
						<?php }else{ ?>
							<a href="#"><i class="fa <?php echo $service1_icon; ?>"></i></a>
					    <?php }	?>
						</figure>
						<h4 class="service-title"><a href="#"><?php esc_html_e(''.$service1_title.'','arile-extra'); ?></a></h4>
						<p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisicing elit quos dolor quas molesty.','arile-extra'); ?></p>
					</article>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">				
					<article class="service-content text-<?php echo $text_align; ?>">
						<figure class="service-content-thumbnail">
						<?php if('Architect Hub' == $activate_theme){ ?>
						    <a href="#"><img class="img-fluid" src="<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-service11.jpg" alt="Exercise Round the Clock" title="Architectural Design"></a>
						<?php }else{ ?>
							<a href="#"><i class="fa <?php echo $service2_icon; ?>"></i></a>
					    <?php }	?>
						</figure>
						<h4 class="service-title"><a href="#"><?php esc_html_e(''.$service2_title.'','arile-extra'); ?></a></h4>
						<p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisicing elit quos dolor quas molesty.','arile-extra'); ?></p>		
					</article>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">				
					<article class="service-content text-<?php echo $text_align; ?>">
						<figure class="service-content-thumbnail">
						<?php if('Architect Hub' == $activate_theme){ ?>
						    <a href="#"><img class="img-fluid" src="<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-service12.jpg" alt="Best Equipment" title="Architectural Design"></a>
						<?php }else{ ?>
							<a href="#"><i class="fa <?php echo $service3_icon; ?>"></i></a>
					    <?php }	?>
						</figure>
						<h4 class="service-title"><a href="#"><?php esc_html_e(''.$service3_title.'','arile-extra'); ?></a></h4>
						<p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisicing elit quos dolor quas molesty.','arile-extra'); ?></p>
					</article>
				</div>		

				
		   <?php } else { ?>	
		   
		        <div class="col-lg-4 col-md-6 col-sm-12">				
					<article class="service-content text-<?php echo $text_align; ?>">
						<figure class="service-content-thumbnail">
						<?php if('FitnessBase' == $activate_theme){ ?>
						    <a href="#"><img class="img-fluid" src="<?php echo arile_extra_plugin_url; ?>/inc/consultstreet/images/theme-service1.jpg" alt="No Long-Term Contract" title="Architectural Design"></a>
						<?php }else{ ?>
							<a href="#"><i class="fa <?php echo $service1_icon; ?>"></i></a>
					    <?php }	?>
						</figure>
						<h4 class="service-title"><a href="#"><?php esc_html_e(''.$service1_title.'','arile-extra'); ?></a></h4>
						<p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisicing elit quos dolor quas molesty.','arile-extra'); ?></p>
					</article>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">				
					<article class="service-content text-<?php echo $text_align; ?>">
						<figure class="service-content-thumbnail">
						<?php if('FitnessBase' == $activate_theme){ ?>
						    <a href="#"><img class="img-fluid" src="<?php echo arile_extra_plugin_url; ?>/inc/consultstreet/images/theme-service2.jpg" alt="Exercise Round the Clock" title="Architectural Design"></a>
						<?php }else{ ?>
							<a href="#"><i class="fa <?php echo $service2_icon; ?>"></i></a>
					    <?php }	?>
						</figure>
						<h4 class="service-title"><a href="#"><?php esc_html_e(''.$service2_title.'','arile-extra'); ?></a></h4>
						<p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisicing elit quos dolor quas molesty.','arile-extra'); ?></p>		
					</article>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">				
					<article class="service-content text-<?php echo $text_align; ?>">
						<figure class="service-content-thumbnail">
						<?php if('FitnessBase' == $activate_theme){ ?>
						    <a href="#"><img class="img-fluid" src="<?php echo arile_extra_plugin_url; ?>/inc/consultstreet/images/theme-service3.jpg" alt="Best Equipment" title="Architectural Design"></a>
						<?php }else{ ?>
							<a href="#"><i class="fa <?php echo $service3_icon; ?>"></i></a>
					    <?php }	?>
						</figure>
						<h4 class="service-title"><a href="#"><?php esc_html_e(''.$service3_title.'','arile-extra'); ?></a></h4>
						<p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisicing elit quos dolor quas molesty.','arile-extra'); ?></p>
					</article>
				</div>	
				
			<?php } ?>	
				
			<?Php	
		    } 
			?>
		</div>
	</div>
</section>
<?php endif;
if('FitnessBase' == $activate_theme){
    $consultstreet_service_area_before_content = get_theme_mod('consultstreet_service_area_before_content', $default);
    if($consultstreet_service_area_before_content != null):
	echo do_shortcode($consultstreet_service_area_before_content);
	endif;
} ?>