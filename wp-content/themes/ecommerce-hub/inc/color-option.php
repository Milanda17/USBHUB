<?php
	
	$ecommerce_hub_first_theme_color = get_theme_mod('ecommerce_hub_first_theme_color');

	$custom_css = '';

	if($ecommerce_hub_first_theme_color != false){
		$custom_css .=' input[type="submit"], #footer input[type="submit"], #sidebar .tagcloud a:hover,.nav-menu ul ul a, .social-icon,  h1.page-title, h1.search-title, .post-info, .blogbtn a, .inner, .footerinner .tagcloud a:hover, .woocommerce span.onsale, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, nav.woocommerce-MyAccount-navigation ul li, #comments input[type="submit"].submit, #sidebar input[type="submit"], .pagination .current, span.meta-nav, .title-box,.more-btn a:hover, .tags a:hover, #comments a.comment-reply-link{';
			$custom_css .='background-color: '.esc_html($ecommerce_hub_first_theme_color).';';
		$custom_css .='}';
	}
	if($ecommerce_hub_first_theme_color != false){
		$custom_css .=' .nav-menu ul li a:active, .nav-menu ul li a:hover, #sidebar ul li a:hover, a, .nav-menu ul li a:hover, .social-media i, .social-media i:hover, .contact-details i, .border-image i, .footerinner ul li a:hover, span.post-title, .nav-menu .current_page_item > a, .nav-menu .current-menu-item > a, .nav-menu .current_page_ancestor > a, .nav-menu ul li a:hover,#footer h3,.tags a i{';
			$custom_css .='color: '.esc_html($ecommerce_hub_first_theme_color).';';
		$custom_css .='}';
	}
	if($ecommerce_hub_first_theme_color != false){
		$custom_css .=' #sidebar form, .more-btn a:hover, .nav-menu ul ul,.tags a:hover {';
			$custom_css .='border-color: '.esc_html($ecommerce_hub_first_theme_color).';';
		$custom_css .='}';
	}
	if($ecommerce_hub_first_theme_color != false){
		$custom_css .=' 
		.nav-menu ul li a:hover {';
			$custom_css .='border-left-color: '.esc_html($ecommerce_hub_first_theme_color).';';
		$custom_css .='}';
	}
	if($ecommerce_hub_first_theme_color != false){
		$custom_css .=' .blog-sec, #sidebar aside{';
			$custom_css .='box-shadow: 2px 2px '.esc_html($ecommerce_hub_first_theme_color).';';
		$custom_css .='}';
	}


	// Layout Options
	$theme_layout = get_theme_mod( 'ecommerce_hub_theme_layout_options','Default Theme');
    if($theme_layout == 'Default Theme'){
		$custom_css .='body{';
			$custom_css .='max-width: 100%;';
		$custom_css .='}';
	}else if($theme_layout == 'Container Theme'){
		$custom_css .='body{';
			$custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$custom_css .='}';
	}else if($theme_layout == 'Box Container Theme'){
		$custom_css .='body{';
			$custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$custom_css .='}';
	}


	/*------------- Slider Opacity -------------------*/

	$slider_layout = get_theme_mod( 'ecommerce_hub_slider_opacity_color','0.7');
	if($slider_layout == '0'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0';
		$custom_css .='}';
	}else if($slider_layout == '0.1'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.1';
		$custom_css .='}';
	}else if($slider_layout == '0.2'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.2';
		$custom_css .='}';
	}else if($slider_layout == '0.3'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.3';
		$custom_css .='}';
	}else if($slider_layout == '0.4'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.4';
		$custom_css .='}';
	}else if($slider_layout == '0.5'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.5';
		$custom_css .='}';
	}else if($slider_layout == '0.6'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.6';
		$custom_css .='}';
	}else if($slider_layout == '0.7'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.7';
		$custom_css .='}';
	}else if($slider_layout == '0.8'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.8';
		$custom_css .='}';
	}else if($slider_layout == '0.9'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.9';
		$custom_css .='}';
	}

	/*----------Slider Content Layout -------------------*/

	$slider_layout = get_theme_mod( 'ecommerce_hub_slider_alignment_option','Left Align');
    if($slider_layout == 'Left Align'){
		$custom_css .='#slider .carousel-caption{';
			$custom_css .='text-align:left;';
		$custom_css .='}';
		$custom_css .='#slider .carousel-caption{';
		$custom_css .='left:15%; right:45%;';
		$custom_css .='}';
		$custom_css .='@media screen and (min-width: 720px) and (max-width:768px){
		#slider .carousel-caption{';
		$custom_css .='left:15%; right:25%;';
		$custom_css .='} }';
	}else if($slider_layout == 'Center Align'){
		$custom_css .='#slider .carousel-caption{';
			$custom_css .='text-align:center;';
		$custom_css .='}';
		$custom_css .='#slider .carousel-caption{';
		$custom_css .='left:25%; right:25%;';
		$custom_css .='}';
		$custom_css .='@media screen and (min-width: 720px) and (max-width:768px){
		#slider .carousel-caption{';
		$custom_css .='left:15%; right:15%;';
		$custom_css .='} }';
	}else if($slider_layout == 'Right Align'){
		$custom_css .='#slider .carousel-caption{';
			$custom_css .='text-align:right;';
		$custom_css .='}';
		$custom_css .='#slider .carousel-caption{';
		$custom_css .='left:45%; right:15%;';
		$custom_css .='}';
		$custom_css .='@media screen and (min-width: 720px) and (max-width:768px){
		#slider .carousel-caption{';
		$custom_css .='right:15%; left:25%;';
		$custom_css .='} }';
	}

	/*--------- Preloader Color Option -------*/
	$ecommerce_hub_preloader_color = get_theme_mod('ecommerce_hub_preloader_color');

	if($ecommerce_hub_preloader_color != false){
		$custom_css .=' .tg-loader{';
			$custom_css .='border-color: '.esc_html($ecommerce_hub_preloader_color).';';
		$custom_css .='} ';
		$custom_css .=' .tg-loader-inner{';
			$custom_css .='background-color: '.esc_html($ecommerce_hub_preloader_color).';';
		$custom_css .='} ';
	}

	$ecommerce_hub_preloader_bg_color = get_theme_mod('ecommerce_hub_preloader_bg_color');

	if($ecommerce_hub_preloader_bg_color != false){
		$custom_css .=' #overlayer{';
			$custom_css .='background-color: '.esc_html($ecommerce_hub_preloader_bg_color).';';
		$custom_css .='} ';
	}

	/*------------ Button Settings option-----------------*/

	$top_button_padding = get_theme_mod('ecommerce_hub_top_button_padding');
	$bottom_button_padding = get_theme_mod('ecommerce_hub_bottom_button_padding');
	$left_button_padding = get_theme_mod('ecommerce_hub_left_button_padding');
	$right_button_padding = get_theme_mod('ecommerce_hub_right_button_padding');
	if($top_button_padding != false || $bottom_button_padding != false || $left_button_padding != false || $right_button_padding != false){
		$custom_css .='.blogbtn a, .more-btn a, #comments input[type="submit"].submit{';
			$custom_css .='padding-top: '.esc_html($top_button_padding).'px; padding-bottom: '.esc_html($bottom_button_padding).'px; padding-left: '.esc_html($left_button_padding).'px; padding-right: '.esc_html($right_button_padding).'px; display:inline-block;';
		$custom_css .='}';
	}

	$button_border_radius = get_theme_mod('ecommerce_hub_button_border_radius');
	$custom_css .='.blogbtn a, .more-btn a, #comments input[type="submit"].submit{';
		$custom_css .='border-radius: '.esc_html($button_border_radius).'px;';
	$custom_css .='}';

	/*----------- Copyright css -----*/
	$copyright_top_padding = get_theme_mod('ecommerce_hub_top_copyright_padding');
	$copyright_bottom_padding = get_theme_mod('ecommerce_hub_top_copyright_padding');
	if($copyright_top_padding != false || $copyright_bottom_padding != false){
		$custom_css .='.inner{';
			$custom_css .='padding-top: '.esc_html($copyright_top_padding).'px; padding-bottom: '.esc_html($copyright_bottom_padding).'px; ';
		$custom_css .='}';
	} 

	$copyright_alignment = get_theme_mod('ecommerce_hub_copyright_alignment', 'center');
	if($copyright_alignment == 'center' ){
		$custom_css .='#footer .copyright p{';
			$custom_css .='text-align: '. $copyright_alignment .';';
		$custom_css .='}';
	}elseif($copyright_alignment == 'left' ){
		$custom_css .='#footer .copyright p{';
			$custom_css .=' text-align: '. $copyright_alignment .';';
		$custom_css .='}';
	}elseif($copyright_alignment == 'right' ){
		$custom_css .='#footer .copyright p{';
			$custom_css .='text-align: '. $copyright_alignment .';';
		$custom_css .='}';
	}

	$copyright_font_size = get_theme_mod('ecommerce_hub_copyright_font_size');
	$custom_css .='#footer .copyright p{';
		$custom_css .='font-size: '.esc_html($copyright_font_size).'px;';
	$custom_css .='}';