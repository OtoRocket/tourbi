<?php
// Block direct access
if( !defined( 'ABSPATH' ) ){
    exit( 'Direct script access denied.' );
} 
/**
 * @Packge     : TOURBI
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
 
// enqueue css
function tourbi_common_custom_css(){
    
    wp_enqueue_style( 'tourbi-common', get_template_directory_uri().'/assets/css/dynamic.css' );
		$header_bg         		  = esc_url( get_header_image() );
		$header_bg_img 			  = !empty( $header_bg ) ? 'background-image: url('.esc_url( $header_bg ).')' : '';

		$themeColor     		  = '';

		$headerButtonBgColor      = tourbi_opt( 'tourbi_header_btn_bg_color' );
		$headerButtonColor     	  = tourbi_opt( 'tourbi_header_btn_txt_color' );
		$headerButtonHvrBgColor   = tourbi_opt( 'tourbi_header_btn_hvr_bg_color' ) ? tourbi_opt( 'tourbi_header_btn_hvr_bg_color' ) : 'transparent';
		$headerButtonHvrColor     = tourbi_opt( 'tourbi_header_btn_hvr_txt_color' );

		$headerTop_bg     		  = tourbi_opt( 'tourbi_top_header_bg_color' );
		$headerTop_col     		  = tourbi_opt( 'tourbi_top_header_color' );

		$headerBg          		  = tourbi_opt( 'tourbi_header_bg_color') != '#562fc7' ?  tourbi_opt( 'tourbi_header_bg_color') : '';
		$dropdownBg          	  = tourbi_opt( 'tourbi_header_drop_menu_bg_color');
		$menuColor          	  = tourbi_opt( 'tourbi_header_menu_color' );
		$menuHoverColor           = tourbi_opt( 'tourbi_header_menu_hover_color' ) != '#ff4800' ? tourbi_opt('tourbi_header_menu_hover_color') : $themeColor;
		$dropMenuColor            = tourbi_opt( 'tourbi_header_drop_menu_color' );
		$dropMenuHovColor         = tourbi_opt( 'tourbi_header_drop_menu_hover_color' ) != '#ff4800' ? tourbi_opt('tourbi_header_drop_menu_hover_color') : $themeColor;
		$headerBtnBgColor         = tourbi_opt( 'tourbi_booking_btn_bg_color' ) != '#ff4800' ? tourbi_opt('tourbi_booking_btn_bg_color') : $themeColor;

		$footerwbgColor     	  = tourbi_opt('tourbi_footer_bg_color');
		$footerwTextColor   	  = tourbi_opt('tourbi_footer_widget_text_color') != '#888888' ? tourbi_opt('tourbi_footer_widget_text_color') : '';
		$widgettitlecolor  		  = tourbi_opt('tourbi_footer_widget_title_color');
		$footerwanchorcolor 	  = tourbi_opt('tourbi_footer_widget_anchor_color') != '#7a7a7a' ? tourbi_opt('tourbi_footer_widget_anchor_color') : '';
		$footerwanchorhovcolor    = tourbi_opt('tourbi_footer_widget_anchor_hover_color') != '#ffcc00' ? tourbi_opt('tourbi_footer_widget_anchor_hover_color') : $themeColor;
		
		$footerNewsDefColor    	  = tourbi_opt('tourbi_footer_widget_anchor_color') != '#7a7a7a' ? tourbi_opt('tourbi_footer_widget_anchor_color') : $themeColor;

		$fofbg					  = tourbi_opt('tourbi_fof_bg_color');
		$foftonecolor			  = tourbi_opt('tourbi_fof_textone_color');
		$fofttwocolor			  = tourbi_opt('tourbi_fof_texttwo_color');

		$customcss ="
			.hero-banner{
				{$header_bg_img}
			}

			.main_menu .navbar .btn_1
			{
				background: {$headerButtonBgColor};
				color: {$headerButtonColor};
			}

			.main_menu .navbar .btn_1:hover
			{
				background: {$headerButtonHvrBgColor};
				color: {$headerButtonHvrColor};
				border-color: {$headerButtonHvrColor};
			}
			
			.passion_part .single-home-passion .card .card-body a:hover, .form-contact .form-group .btn_1:hover, .wpcf7-form .form-group .btn_1:hover, .intro_video_iner .btn_2, .about_us .about_us_text .btn_2:hover, .banner_part .btn_2, .subscribe_part .btn_2
			{
				border-color: {$themeColor};
			}

			.banner_part .btn_2:hover, .about_us_text .btn_2:hover, .subscribe_part .btn_2:hover
			{
				background: transparent;
			}

			.cta_part .cta_part_iner .cta_part_text p, .about_part .about_text h5, .our_latest_work .single_work_demo h5, .blog_part .single-home-blog .card h5:hover, .blog_part .single-home-blog .card ul li i, .feature_part .single_feature_part .eci, .counter .single_counter .eci, .passion_part .single-home-passion .card h5:hover, .blog_part .single_blog .list-unstyled li:hover a, .blog_part .right_single_blog .single_blog .media-body p a, .blog_area a :hover, .form-contact .form-group .btn_1:hover i, .wpcf7-form .form-group .btn_1:hover i, .service_part .single_service_text i, .service_part .single_service_text a, .banner_part .banner_text .banner_btn_1, .feature_part .feature_part_text .btn_4, .cta_part .banner_btn_1, .pricing_part .single_pricing_part:hover .pricing_btn, .accordion_part h5 button.btn.btn-link:after
			{
				color: {$themeColor}
			}			

			.blog_item_date h3:hover, .blog_item_date p:hover
			{
				color: #fff;
			}

			.our_latest_work .single_work_demo .btn_3:hover, .team_member_section .single_team_member .single_team_text h3 a:hover, .team_member_section .single_team_member .team_member_social_icon a:hover, .blog_part .single-home-blog .card .card-body a:hover, .pre_icon a:hover, .next_icon a:hover, .review_part .section_tittle p, .banner-breadcrumb > ol > li.breadcrumb-item > a.bread-link:hover, .review_part .section_tittle p, .banner-breadcrumb .breadcrumb-item a:hover, .blog_details a:hover, .blog_right_sidebar .widget_categories ul li:hover, .blog_right_sidebar .widget_categories ul li:hover a, .blog_right_sidebar .widget_categories ul li a:hover, .volunteers_part .single_blog_item:hover h3, .form-contact .form-group .btn_1:hover, .banner_part .btn_2:hover, .about_us_text .btn_2:hover, .subscribe_part .btn_2:hover{
				color: {$themeColor}!important;
			}

			.review_part .intro_video_bg .video-play-button, .review_part .owl-prev span:after, .review_part .owl-next span:after, .review_part .intro_video_bg .video-play-button:after, .review_part .intro_video_bg .video-play-button:before, .review_part .intro_video_bg .video-play-button:hover:after, .blog_item_img .blog_item_date, .button, .blog_right_sidebar .single_sidebar_widget.widget_tourbi_newsletter .btn, .pre_icon :after, .next_icon :after, .passion_part .skill-bar, .passion_part .skill-bar:after, .volunteers_part .single_blog_item .single_blog_img .social_icon, .form-contact .form-group .btn_1 i, .service_part .service_text .btn_3, .about_btn .btn_3, .blog_area .comment-form button.btn_3, .intro_video_iner .btn_2, .event_part .tricker, .main_menu .btn_2:hover, .main_menu #search_input_box, .about_us .about_us_text .btn_1, .pricing_part .single_pricing_part .btn_1, .banner_part .btn_2, .about_us_text .btn_2, .review_part .owl-dots button.owl-dot.active, .subscribe_part .btn_2, .single_sidebar_widget .btn_1:hover
			{
				background: {$themeColor}
			}

			.service_part .single_service_part:hover .single_service_part_iner span, .passion_part .single-home-passion .card .card-body a:hover, .blog_part .right_single_blog .single_blog .media-body:hover, .wpcf7-form .form-group .btn_1:hover, .f0f-content-inner .btn_1:hover, .banner_part .banner_text .banner_btn_1:hover, .banner_part .banner_text .banner_btn_2:hover, .cta_part .banner_btn_1:hover, .cta_part .banner_btn_2:hover
			{
				background: {$themeColor}!important;
			}

			.copyright_part .footer-social a:hover
			{
				background: {$footerwanchorhovcolor}!important;
			}

			.blog_part .single-home-blog .card h5:hover
			{
				color: {$footerwanchorhovcolor};
			}

			.about_part .about_img h2:after, .copyright_part .footer-social a, .service_part .service_text .btn_3, .about_us .about_us_text > h5, .banner_item .single_item:hover, .about_btn .btn_3, .blog_area .comment-form button.btn_3, .contact-section .wpcf7-submit.button.button-contactForm.btn_3, .feature_part .feature_part_text .feature_part_text_iner:hover, .about_us_text .btn_2
			{
				border-color: {$themeColor}
			}


			.main_menu .btn_2:hover
			{
				background: {$headerBtnBgColor};
			}

			.sub_header {
				background: {$headerTop_bg}
			}
			.sub_header .sub_header_social_icon a,
			.sub_header .sub_header_social_icon .register_icon
			{
				color: {$headerTop_col}
			}
			.main_menu.menu_fixed
			{
				background: {$headerBg};
			}
			.dropdown .dropdown-menu, .dropdown .dropdown-menu .dropdown-item
			{
				background: {$dropdownBg};
			}
			.main_menu .main-menu-item ul li .nav-link
			{
			   color: {$menuColor};
			}
			.navbar-light .navbar-nav .active>.nav-link
			{
			   color: {$menuHoverColor};
			}
			.main_menu .main-menu-item ul li .nav-link:not(.dropdown-item):hover
			{
			   color: {$menuHoverColor}!important;
			}
			
			.dropdown .dropdown-menu .dropdown-item
			{
			   color: {$dropMenuColor}!important;
			}
			.dropdown .dropdown-menu .dropdown-item:hover
			{
			   color: {$dropMenuHovColor}!important;
			}

			.main_menu:not(.menu_fixed) .home_page_btn{
				border-color: {$headerBtnBgColor};
			}

			.main_menu .btn_1:hover{
				background-color: {$headerBtnBgColor};
				border-color: {$headerBtnBgColor};
			}

			.footer-area, .footer_part .work_hours ul li p, .footer_part .work_hours ul li p span {
				background-color: {$footerwbgColor};
			}

			.footer-area .single_footer_part p, .footer-area .single_footer_part p span, .footer-area .widget_tourbi_newsletter .input-group input, .footer-area .copyright_part_text p, .footer-area .footer_2 .social_icon a, .footer_part .work_hours ul li p, .footer_part .work_hours ul li p span, .footer_part .work_hours h5, .footer_part .copyright_text p
			{
				color: {$footerwTextColor}
			}

			.footer_part .single_footer_part.widget_tourbi_newsletter .btn{
				border-left-color: {$footerNewsDefColor}
			}

			.footer_part .single_footer_part.widget_tourbi_newsletter .btn i
			{
				border-color: {$footerNewsDefColor}
			}

			.footer_part .single_footer_part.widget_tourbi_newsletter .btn, .single_sidebar_widget .tagcloud a:hover{
				background-color: {$footerNewsDefColor}
			}

			.footer_part .copyright_text p a
			{
				color: {$footerNewsDefColor}
			}

			.footer-area .copyright_part_text, .footer_part .work_hours ul li:after {
				border-color: {$footerwTextColor}
			}

			.footer_part hr {
				background-color: {$footerwTextColor}
			}

			.footer-area .widget_tourbi_newsletter .input-group .form-control::placeholder {
				color: {$footerwTextColor};
				opacity: 1;
			}
			
			.footer-area .widget_tourbi_newsletter .input-group .form-control:-ms-input-placeholder {
				color: {$footerwTextColor};
			}
			
			.footer-area .widget_tourbi_newsletter .input-group .form-control::-ms-input-placeholder {
				color: {$footerwTextColor};
			}

			.footer-area .single_footer_part h4
			{
				color: {$widgettitlecolor}
			}

			.footer_part .single_footer_part.widget_tourbi_newsletter form .btn
			{
			   border-color: {$footerwanchorcolor};
			}
			.footer_part .single_footer_part .menu li a, .footer-area .copyright_part_text a, .footer_part .footer_icon li a
			{
			   color: {$footerwanchorcolor};
			}
			.footer-area .btn, .footer_part .single_footer_part.widget_tourbi_newsletter form .btn{
				background: {$footerwanchorcolor};
			}
			.footer_part .single_footer_part .menu li a:hover, .footer-area .copyright_part_text a:hover, .footer-area .footer_2 .social_icon a:hover, .footer_part .footer_icon li a :hover
			{
			   color: {$footerwanchorhovcolor}!important;
			}
			.footer_part .copyright_text p a:hover
			{
			   color: {$footerwanchorhovcolor};
			}

			.f0f-content .h1 {
				color: {$foftonecolor};
			}
			.f0f-content p {
				color: {$fofttwocolor};
			}

        ";
       
    wp_add_inline_style( 'tourbi-common', $customcss );
    
}
add_action( 'wp_enqueue_scripts', 'tourbi_common_custom_css', 50 );