<?php 
$designexo_service_content  = get_theme_mod( 'designexo_service_content'); 
$designexo_service_area_disabled = get_theme_mod('designexo_service_area_disabled', true); 
$designexo_service_area_title = get_theme_mod('designexo_service_area_title', __('Our Services','arile-extra'));
if('Designexo' == $activate_theme || 'InteriorWP' == $activate_theme || 'Designexo Child Theme' == $activate_theme || 'Architect Decor' == $activate_theme || 'Architects' == $activate_theme || 'IntecoPress' == $activate_theme || 'Interior Dark' == $activate_theme || 'InteriorX' == $activate_theme || 'Interior Decor' == $activate_theme || 'Interior House' == $activate_theme || 'Architect House' == $activate_theme || 'Interior Trends' == $activate_theme || 'CreationWP' == $activate_theme){
$designexo_service_area_des = get_theme_mod('designexo_service_area_des', __('We build creative interior design','arile-extra'));
}
if('Architect House' == $activate_theme){
$designexo_service_area_des = get_theme_mod('designexo_service_area_des', __('We build creative architect design','arile-extra'));
}
if('Empresa' == $activate_theme || 'Monster Dark' == $activate_theme || 'NewsMedia' == $activate_theme || 'SpiceMag' == $activate_theme || 'DesignTech' == $activate_theme || 'Technoex' == $activate_theme || 'Atlanta Blog' == $activate_theme || 'Business Model' == $activate_theme || 'Elevora Dark' == $activate_theme){
$designexo_service_area_des = get_theme_mod('designexo_service_area_des', __('We offer many services to growth','arile-extra'));
}
if('BeautyCare' == $activate_theme){
$designexo_service_area_des = get_theme_mod('designexo_service_area_des', __('Featured Treatment','arile-extra'));
}
if('Fitnessgo' == $activate_theme){
$designexo_service_area_title = get_theme_mod('designexo_service_area_title', __('Our Gym Facilities','arile-extra'));	
$designexo_service_area_des = get_theme_mod('designexo_service_area_des', __('OUR POPULAR CLASSES','arile-extra'));
}
if($designexo_service_area_disabled == true): ?>
<section class="theme-block theme-services <?php if('Interior Dark' == $activate_theme || 'InteriorX' == $activate_theme || 'Interior Decor' == $activate_theme || 'Interior House' == $activate_theme || 'BeautyCare' == $activate_theme || 'Architect House' == $activate_theme || 'CreationWP' == $activate_theme || 'Elevora Dark' == $activate_theme){ echo 'vrsn-three'; } ?>" id="theme-services">
	<div class="container">
	<?php  
	if( ($designexo_service_area_title) || ($designexo_service_area_des)!='' ): ?>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="theme-section-module text-center">
					<?php if($designexo_service_area_title != null): ?>
						<p class="theme-section-subtitle wow animate fadeInUp" data-wow-delay=".3s"><?php echo $designexo_service_area_title; ?></p>
					<?php endif; ?>
					<?php if($designexo_service_area_des != null): ?>
						<h2 class="theme-section-title wow animate fadeInUp" data-wow-delay=".3s"><?php echo $designexo_service_area_des; ?></h2>
					<?php endif; ?>
						<div class="theme-separator-line-horrizontal-full wow animate fadeInUp" data-wow-delay=".3s"></div>
					</div>
				</div>
			</div>
		<?php endif; ?>
	<div class="row theme-services-content">
		<?php
		if ( ! empty( $designexo_service_content ) ) {
		$allowed_html = array('br' => array(), 'em' => array(), 'strong' => array(), 'b' => array(),'i' => array());
		$designexo_service_content = json_decode( $designexo_service_content );
		foreach ( $designexo_service_content as $features_item ) {
			$icon = ! empty( $features_item->icon_value ) ? $features_item->icon_value : '';
			$title = ! empty( $features_item->title ) ? $features_item->title : '';
			$text = ! empty( $features_item->text ) ? $features_item->text : '';
			$link = ! empty( $features_item->link ) ? $features_item->link : '';
			$image = ! empty( $features_item->image_url ) ? $features_item->image_url : '';
			$open_new_tab = $features_item->open_new_tab;
			?>
			<div class="col-lg-4 col-md-6 col-sm-12">				
					<article class="service-content<?php if('Empresa' == $activate_theme || 'NewsMedia' == $activate_theme || 'SpiceMag' == $activate_theme|| 'Technoex' == $activate_theme || 'Atlanta Blog' == $activate_theme){ echo '-two media'; }?> wow animate fadeInUp" data-wow-delay=".3s">
					<?php if($features_item->choice == 'customizer_repeater_image'){ ?>
							<?php if ( ! empty( $image ) ) : ?>
							<figure class="service-content-thumbnail<?php if('Empresa' == $activate_theme || 'NewsMedia' == $activate_theme || 'SpiceMag' == $activate_theme || 'Technoex' == $activate_theme || 'Atlanta Blog' == $activate_theme){ echo '-two'; }?>">
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
							<figure class="service-content-thumbnail<?php if('Empresa' == $activate_theme || 'NewsMedia' == $activate_theme || 'SpiceMag' == $activate_theme || 'Technoex' == $activate_theme || 'Atlanta Blog' == $activate_theme){ echo '-two media'; }?>">
									<?php if ( ! empty( $link ) ) : ?>
											<a href="<?php echo $link; ?>" <?php if($open_new_tab== 'yes' || $open_new_tab== 'on') { echo "target='_blank'"; } ?>><i class="fa <?php echo esc_html( $icon ); ?>"></i></a>
									<?php endif; ?>
									<?php if ( empty( $link ) ) : ?>
											<i class="fa <?php echo esc_html( $icon ); ?>"></i>	
									<?php endif; ?>
							</figure>
							<?php endif; ?>
						<?php } ?>
						
						<?php if($activate_theme == 'Empresa' || 'NewsMedia' == $activate_theme  || 'SpiceMag' == $activate_theme || 'Technoex' == $activate_theme || 'Atlanta Blog' == $activate_theme){echo '<div class="media-body">';} ?>
							<?php if ( ! empty( $title ) ) : 
								if(empty($link)){ ?>
									<h5 class="service-title"><?php echo esc_html( $title ); ?></h5><?php
								}else{
									?>
									<h5 class="service-title"><a href="<?php echo $link; ?>" <?php if($open_new_tab =='yes'){?>target="_blank" <?php }?> ><?php echo esc_html( $title ); ?></a></h5><?php
								}
							?>
							<?php endif; ?>
							<?php if ( ! empty( $text ) ) : ?>
								<p><?php echo wp_kses_post( html_entity_decode( $text ) ); ?></p>
							<?php endif; ?>	
						<?php if($activate_theme == 'Empresa' || 'NewsMedia' == $activate_theme  || 'SpiceMag' == $activate_theme || 'Technoex' == $activate_theme || 'Atlanta Blog' == $activate_theme){echo '</div>';} ?>
							
					</article>
			</div>
			<?php
			} }
			else
			{ ?>
		    <?php if('Designexo' == $activate_theme || 'InteriorWP' == $activate_theme || 'Designexo Child Theme' == $activate_theme || 'Architect Decor' == $activate_theme || 'Interior Trends' == $activate_theme){ ?>
				<div class="col-lg-4 col-md-6 col-sm-12">				
					<article class="service-content wow animate fadeInUp" data-wow-delay=".3s">
						<figure class="service-content-thumbnail">
							<a href="#"><img class="img-fluid" src="<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-service1.jpg" alt="INTERIOR DESIGN" title="INTERIOR DESIGN"></a>
						</figure>
						<h5 class="service-title"><a href="#"><?php esc_html_e('INTERIOR DESIGN','arile-extra'); ?></a></h5>
						<p><?php esc_html_e('Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.','arile-extra'); ?></p>
					</article>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">				
					<article class="service-content wow animate fadeInUp" data-wow-delay=".3s">
						<figure class="service-content-thumbnail">
							<a href="#"><img class="img-fluid" src="<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-service2.jpg" alt="Architectural Design" title="Architectural Design"></a>
						</figure>
						<h5 class="service-title"><a href="#"><?php esc_html_e('ARCHITECTURAL DESIGN','arile-extra'); ?></a></h5>
						<p><?php esc_html_e('Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.','arile-extra'); ?></p>		
					</article>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">				
					<article class="service-content wow animate fadeInUp" data-wow-delay=".3s">
						<figure class="service-content-thumbnail">
							<a href="#"><img class="img-fluid" src="<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-service3.jpg" alt="EXTERIOR DESIGN" title="EXTERIOR DESIGN"></a>
						</figure>
						<h5 class="service-title"><a href="#"><?php esc_html_e('EXTERIOR DESIGN','arile-extra'); ?></a></h5>
						<p><?php esc_html_e('Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.','arile-extra'); ?></p>
					</article>
				</div>
            <?php } ?>
            <?php if('Empresa' == $activate_theme || 'NewsMedia' == $activate_theme || 'SpiceMag' == $activate_theme || 'Technoex' == $activate_theme || 'Atlanta Blog' == $activate_theme){ ?>
				<div class="col-lg-4 col-md-6 col-sm-12">				
					<article class="service-content-two media wow animate fadeInUp" data-wow-delay=".3s">
						<figure class="service-content-thumbnail-two">
							<i class="fa fa-file-text-o"></i>
						</figure>
						<div class="media-body">	
							<h5 class="service-title"><a href="#"><?php esc_html_e('Great typography','arile-extra'); ?></a></h5>
							<p><?php esc_html_e('Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.','arile-extra'); ?></p>
						</div>
					</article>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">				
					<article class="service-content-two media wow animate fadeInUp" data-wow-delay=".3s">
						<figure class="service-content-thumbnail-two">
							<i class="fa fa-language"></i>
						</figure>
						<div class="media-body">
							<h5 class="service-title"><a href="#"><?php esc_html_e('Translations','arile-extra'); ?></a></h5>
							<p><?php esc_html_e('Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.','arile-extra'); ?></p>
                        </div>						
					</article>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">				
					<article class="service-content-two media wow animate fadeInUp" data-wow-delay=".3s">
						<figure class="service-content-thumbnail-two">
							<i class="fa fa-mobile"></i>
						</figure>
						<div class="media-body">
							<h5 class="service-title"><a href="#"><?php esc_html_e('Creative design','arile-extra'); ?></a></h5>
							<p><?php esc_html_e('Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.','arile-extra'); ?></p>
						</div>
					</article>
				</div>
			    <div class="col-lg-4 col-md-6 col-sm-12">				
					<article class="service-content-two media wow animate fadeInUp" data-wow-delay=".3s">
						<figure class="service-content-thumbnail-two">
							<i class="fa fa-globe"></i>
						</figure>
						<div class="media-body">
							<h5 class="service-title"><a href="#"><?php esc_html_e('SEO optimized','arile-extra'); ?></a></h5>
							<p><?php esc_html_e('Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.','arile-extra'); ?></p>
						</div>
					</article>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">				
					<article class="service-content-two media wow animate fadeInUp" data-wow-delay=".3s">
						<figure class="service-content-thumbnail-two">
							<i class="fa fa-trophy"></i>
						</figure>
						<div class="media-body">
							<h5 class="service-title"><a href="#"><?php esc_html_e('Premium quality','arile-extra'); ?></a></h5>
							<p><?php esc_html_e('Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.','arile-extra'); ?></p>
						</div>
					</article>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">				
					<article class="service-content-two media wow animate fadeInUp" data-wow-delay=".3s">
						<figure class="service-content-thumbnail-two">
							<i class="fa fa-cog"></i>
						</figure>
						<div class="media-body">
							<h5 class="service-title"><a href="#"><?php esc_html_e('Live customizer','arile-extra'); ?></a></h5>
							<p><?php esc_html_e('Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.','arile-extra'); ?></p>
						</div>
					</article>
				</div>
            <?php } ?>
			
			<?php if('Architects' == $activate_theme){ ?>
				<div class="col-lg-4 col-md-6 col-sm-12">				
					<article class="service-content wow animate fadeInUp" data-wow-delay=".3s">
						<figure class="service-content-thumbnail">
							<a href="#"><img class="img-fluid" src="<?php echo arile_extra_plugin_url; ?>/inc/arilewp/images/theme-service5.jpg" alt="INTERIOR DESIGN" title="INTERIOR DESIGN"></a>
						</figure>
						<h5 class="service-title"><a href="#"><?php esc_html_e('INTERIOR DESIGN','arile-extra'); ?></a></h5>
						<p><?php esc_html_e('Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.','arile-extra'); ?></p>
					</article>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">				
					<article class="service-content wow animate fadeInUp" data-wow-delay=".3s">
						<figure class="service-content-thumbnail">
							<a href="#"><img class="img-fluid" src="<?php echo arile_extra_plugin_url; ?>/inc/arilewp/images/theme-service4.jpg" alt="Architectural Design" title="Architectural Design"></a>
						</figure>
						<h5 class="service-title"><a href="#"><?php esc_html_e('ARCHITECTURAL DESIGN','arile-extra'); ?></a></h5>
						<p><?php esc_html_e('Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.','arile-extra'); ?></p>		
					</article>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">				
					<article class="service-content wow animate fadeInUp" data-wow-delay=".3s">
						<figure class="service-content-thumbnail">
							<a href="#"><img class="img-fluid" src="<?php echo arile_extra_plugin_url; ?>/inc/arilewp/images/theme-service6.jpg" alt="EXTERIOR DESIGN" title="EXTERIOR DESIGN"></a>
						</figure>
						<h5 class="service-title"><a href="#"><?php esc_html_e('EXTERIOR DESIGN','arile-extra'); ?></a></h5>
						<p><?php esc_html_e('Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.','arile-extra'); ?></p>
					</article>
				</div>
            <?php } ?>
			
			<?php if('IntecoPress' == $activate_theme){ ?>
			<div class="col-lg-4 col-md-6 col-sm-12">				
					<article class="service-content wow animate fadeInUp" data-wow-delay=".3s">
						<figure class="service-content-thumbnail">
							<a href="#"><img class="img-fluid" src="<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-service4.jpg" alt="INTERIOR DESIGN" title="INTERIOR DESIGN"></a>
						</figure>
						<h5 class="service-title"><a href="#"><?php esc_html_e('INTERIOR DESIGN','arile-extra'); ?></a></h5>
						<p><?php esc_html_e('Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.','arile-extra'); ?></p>
					</article>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">				
					<article class="service-content wow animate fadeInUp" data-wow-delay=".3s">
						<figure class="service-content-thumbnail">
							<a href="#"><img class="img-fluid" src="<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-service5.jpg" alt="Architectural Design" title="Architectural Design"></a>
						</figure>
						<h5 class="service-title"><a href="#"><?php esc_html_e('INTERIOR EXPERTISE','arile-extra'); ?></a></h5>
						<p><?php esc_html_e('Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.','arile-extra'); ?></p>		
					</article>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">				
					<article class="service-content wow animate fadeInUp" data-wow-delay=".3s">
						<figure class="service-content-thumbnail">
							<a href="#"><img class="img-fluid" src="<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-service6.jpg" alt="EXTERIOR DESIGN" title="EXTERIOR DESIGN"></a>
						</figure>
						<h5 class="service-title"><a href="#"><?php esc_html_e('LIGHTING DESIGN','arile-extra'); ?></a></h5>
						<p><?php esc_html_e('Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.','arile-extra'); ?></p>
					</article>
				</div>
			<?php } ?>
			
		<?php if('Monster Dark' == $activate_theme || 'DesignTech' == $activate_theme || 'Business Model' == $activate_theme || 'Elevora Dark' == $activate_theme){ ?>
				<div class="col-lg-4 col-md-6 col-sm-12">				
					<article class="service-content wow animate fadeInUp" data-wow-delay=".3s">
						<figure class="service-content-thumbnail">
							<i class="fa fa-cog"></i>
						</figure>
						<h5 class="service-title"><a href="#"><?php esc_html_e('Live Customizer','arile-extra'); ?></a></h5>
						<p><?php esc_html_e('Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.','arile-extra'); ?></p>
					</article>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">				
					<article class="service-content wow animate fadeInUp" data-wow-delay=".3s">
						<figure class="service-content-thumbnail">
							<i class="fa fa-mobile"></i>
						</figure>
						<h5 class="service-title"><a href="#"><?php esc_html_e('Creative Design','arile-extra'); ?></a></h5>
						<p><?php esc_html_e('Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.','arile-extra'); ?></p>		
					</article>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">				
					<article class="service-content wow animate fadeInUp" data-wow-delay=".3s">
						<figure class="service-content-thumbnail">
							<i class="fa fa-trophy"></i>
						</figure>
						<h5 class="service-title"><a href="#"><?php esc_html_e('Premium Quality','arile-extra'); ?></a></h5>
						<p><?php esc_html_e('Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.','arile-extra'); ?></p>
					</article>
				</div>
			<?php } ?>
			
			<?php if('Interior Dark' == $activate_theme || 'InteriorX' == $activate_theme){ ?>
				<div class="col-lg-4 col-md-6 col-sm-12">				
					<article class="service-content wow animate fadeInUp" data-wow-delay=".3s">
						<figure class="service-content-thumbnail">
							<a href="#"><img class="img-fluid" src="<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-service1.jpg" alt="INTERIOR DESIGN" title="INTERIOR DESIGN"></a>
						</figure>
						<h5 class="service-title"><a href="#"><?php esc_html_e('INTERIOR DESIGN','arile-extra'); ?></a></h5>
						<p><?php esc_html_e('Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.','arile-extra'); ?></p>
					</article>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">				
					<article class="service-content wow animate fadeInUp" data-wow-delay=".3s">
						<figure class="service-content-thumbnail">
							<a href="#"><img class="img-fluid" src="<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-service2.jpg" alt="Architectural Design" title="Architectural Design"></a>
						</figure>
						<h5 class="service-title"><a href="#"><?php esc_html_e('ARCHITECTURAL DESIGN','arile-extra'); ?></a></h5>
						<p><?php esc_html_e('Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.','arile-extra'); ?></p>		
					</article>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">				
					<article class="service-content wow animate fadeInUp" data-wow-delay=".3s">
						<figure class="service-content-thumbnail">
							<a href="#"><img class="img-fluid" src="<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-service3.jpg" alt="EXTERIOR DESIGN" title="EXTERIOR DESIGN"></a>
						</figure>
						<h5 class="service-title"><a href="#"><?php esc_html_e('EXTERIOR DESIGN','arile-extra'); ?></a></h5>
						<p><?php esc_html_e('Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.','arile-extra'); ?></p>
					</article>
				</div>
            <?php } ?>

			<?php if('Interior Decor' == $activate_theme || 'Interior House' == $activate_theme || 'CreationWP' == $activate_theme){ ?>
				<div class="col-lg-4 col-md-6 col-sm-12">				
					<article class="service-content wow animate fadeInUp" data-wow-delay=".3s">
						<figure class="service-content-thumbnail">
							<a href="#"><img class="img-fluid" src="<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-service1.jpg" alt="INTERIOR DESIGN" title="INTERIOR DESIGN"></a>
						</figure>
						<h5 class="service-title"><a href="#"><?php esc_html_e('INTERIOR DESIGN','arile-extra'); ?></a></h5>
						<p><?php esc_html_e('Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.','arile-extra'); ?></p>
					</article>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">				
					<article class="service-content wow animate fadeInUp" data-wow-delay=".3s">
						<figure class="service-content-thumbnail">
							<a href="#"><img class="img-fluid" src="<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-service2.jpg" alt="Architectural Design" title="Architectural Design"></a>
						</figure>
						<h5 class="service-title"><a href="#"><?php esc_html_e('FLOOR PLANNING','arile-extra'); ?></a></h5>
						<p><?php esc_html_e('Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.','arile-extra'); ?></p>		
					</article>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">				
					<article class="service-content wow animate fadeInUp" data-wow-delay=".3s">
						<figure class="service-content-thumbnail">
							<a href="#"><img class="img-fluid" src="<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-service3.jpg" alt="EXTERIOR DESIGN" title="EXTERIOR DESIGN"></a>
						</figure>
						<h5 class="service-title"><a href="#"><?php esc_html_e('EXTERIOR DESIGN','arile-extra'); ?></a></h5>
						<p><?php esc_html_e('Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.','arile-extra'); ?></p>
					</article>
				</div>
            <?php } ?>
			
			<?php if('BeautyCare' == $activate_theme ){ ?>
				<div class="col-lg-4 col-md-6 col-sm-12">				
					<article class="service-content wow animate fadeInUp" data-wow-delay=".3s">
						<figure class="service-content-thumbnail">
							<a href="#"><img class="img-fluid" src="<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-service7.jpg" alt="INTERIOR DESIGN" title="INTERIOR DESIGN"></a>
						</figure>
						<h5 class="service-title"><a href="#"><?php esc_html_e('Face Care','arile-extra'); ?></a></h5>
						<p><?php esc_html_e('Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.','arile-extra'); ?></p>
					</article>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">				
					<article class="service-content wow animate fadeInUp" data-wow-delay=".3s">
						<figure class="service-content-thumbnail">
							<a href="#"><img class="img-fluid" src="<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-service8.jpg" alt="Architectural Design" title="Architectural Design"></a>
						</figure>
						<h5 class="service-title"><a href="#"><?php esc_html_e('Perm & Straightening','arile-extra'); ?></a></h5>
						<p><?php esc_html_e('Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.','arile-extra'); ?></p>		
					</article>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">				
					<article class="service-content wow animate fadeInUp" data-wow-delay=".3s">
						<figure class="service-content-thumbnail">
							<a href="#"><img class="img-fluid" src="<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-service9.jpg" alt="EXTERIOR DESIGN" title="EXTERIOR DESIGN"></a>
						</figure>
						<h5 class="service-title"><a href="#"><?php esc_html_e('Acne Treatments','arile-extra'); ?></a></h5>
						<p><?php esc_html_e('Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.','arile-extra'); ?></p>
					</article>
				</div>
            <?php } ?>

			<?php if('Architect House' == $activate_theme){ ?>
				<div class="col-lg-4 col-md-6 col-sm-12">				
					<article class="service-content wow animate fadeInUp" data-wow-delay=".3s">
						<figure class="service-content-thumbnail">
							<a href="#"><img class="img-fluid" src="<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-service10.jpg" alt="INTERIOR DESIGN" title="INTERIOR DESIGN"></a>
						</figure>
						<h5 class="service-title"><a href="#"><?php esc_html_e('ARCHITECT DESIGN','arile-extra'); ?></a></h5>
						<p><?php esc_html_e('Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.','arile-extra'); ?></p>
					</article>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">				
					<article class="service-content wow animate fadeInUp" data-wow-delay=".3s">
						<figure class="service-content-thumbnail">
							<a href="#"><img class="img-fluid" src="<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-service11.jpg" alt="Architectural Design" title="Architectural Design"></a>
						</figure>
						<h5 class="service-title"><a href="#"><?php esc_html_e('HOUSE DECOR','arile-extra'); ?></a></h5>
						<p><?php esc_html_e('Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.','arile-extra'); ?></p>		
					</article>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">				
					<article class="service-content wow animate fadeInUp" data-wow-delay=".3s">
						<figure class="service-content-thumbnail">
							<a href="#"><img class="img-fluid" src="<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-service12.jpg" alt="EXTERIOR DESIGN" title="EXTERIOR DESIGN"></a>
						</figure>
						<h5 class="service-title"><a href="#"><?php esc_html_e('PROJECT PLANNING','arile-extra'); ?></a></h5>
						<p><?php esc_html_e('Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.','arile-extra'); ?></p>
					</article>
				</div>
            <?php } ?>
			
			  <?php if('Fitnessgo' == $activate_theme){ ?>
				<div class="col-lg-4 col-md-6 col-sm-12">				
					<article class="service-content wow animate fadeInUp" data-wow-delay=".3s">
						<figure class="service-content-thumbnail">
							<a href="#"><img class="img-fluid" src="<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-service13.jpg" alt="DIGITAL COACHING" title="INTERIOR DESIGN"></a>
						</figure>
						<h5 class="service-title"><a href="#"><?php esc_html_e('DIGITAL COACHING','arile-extra'); ?></a></h5>
						<p><?php esc_html_e('Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.','arile-extra'); ?></p>
					</article>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">				
					<article class="service-content wow animate fadeInUp" data-wow-delay=".3s">
						<figure class="service-content-thumbnail">
							<a href="#"><img class="img-fluid" src="<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-service14.jpg" alt="WEIGHT LIFTING" title="WEIGHT LIFTING"></a>
						</figure>
						<h5 class="service-title"><a href="#"><?php esc_html_e('WEIGHT LIFTING','arile-extra'); ?></a></h5>
						<p><?php esc_html_e('Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.','arile-extra'); ?></p>		
					</article>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">				
					<article class="service-content wow animate fadeInUp" data-wow-delay=".3s">
						<figure class="service-content-thumbnail">
							<a href="#"><img class="img-fluid" src="<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-service15.jpg" alt="PERSONAL TRAINING" title="PERSONAL TRAINING"></a>
						</figure>
						<h5 class="service-title"><a href="#"><?php esc_html_e('PERSONAL TRAINING','arile-extra'); ?></a></h5>
						<p><?php esc_html_e('Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.','arile-extra'); ?></p>
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