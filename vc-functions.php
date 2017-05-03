<?php
// =============================================================================
// visual-foundation/vc-functions.php
// =============================================================================

// =============================================================================
// TABLE OF CONTENTS
// -----------------------------------------------------------------------------
//   01. Set Custom Template Directory
//   02. Remove Visual Composer Shortcodes
//   03. Map New Visual Composer Shortcodes
// =============================================================================

// =============================================================================
// Overwrite Visual Composer Rows and Columns
// =============================================================================
if ( function_exists( 'vc_set_shortcodes_templates_dir' ) ) {

  $dir = get_stylesheet_directory() . '/vc_templates';

  vc_set_shortcodes_templates_dir( $dir );
}

// =============================================================================
// Remove Visual Composer Shortcodes
// =============================================================================
if ( !function_exists( 'oy_remove_vc_shortcodes' ) ) {
	function oy_remove_vc_shortcodes() {
		if ( function_exists( visual_composer ) ) {
			vc_remove_element( 'vc_column_text' );
			vc_remove_element( 'vc_separator' );
			vc_remove_element( 'vc_text_separator' );
			vc_remove_element( 'vc_message' );
			vc_remove_element( 'vc_facebook' );
			vc_remove_element( 'vc_tweetmeme' );
			vc_remove_element( 'vc_googleplus' );
			vc_remove_element( 'vc_pinterest' );
			vc_remove_element( 'vc_toggle' );
			vc_remove_element( 'vc_single_image' );
			vc_remove_element( 'vc_gallery' );
			vc_remove_element( 'vc_images_carousel' );
			vc_remove_element( 'vc_tabs' );
			vc_remove_element( 'vc_tour' );
			vc_remove_element( 'vc_accordion' );
			vc_remove_element( 'vc_posts_grid' );
			vc_remove_element( 'vc_carousel' );
			vc_remove_element( 'vc_posts_slider' );
			vc_remove_element( 'vc_button' );
			vc_remove_element( 'vc_cta_button' );
			vc_remove_element( 'vc_video' );
			vc_remove_element( 'vc_gmaps' );
			vc_remove_element( 'vc_flickr' );
			vc_remove_element( 'vc_progress_bar' );
			vc_remove_element( 'vc_pie' );
			vc_remove_element( 'vc_wp_search' );
			vc_remove_element( 'vc_wp_meta' );
			vc_remove_element( 'vc_wp_recentcomments' );
			vc_remove_element( 'vc_wp_calendar' );
			vc_remove_element( 'vc_wp_pages' );
			vc_remove_element( 'vc_wp_tagcloud' );
			vc_remove_element( 'vc_wp_custommenu' );
			vc_remove_element( 'vc_wp_text' );
			vc_remove_element( 'vc_wp_posts' );
			vc_remove_element( 'vc_wp_links' );
			vc_remove_element( 'vc_wp_categories' );
			vc_remove_element( 'vc_wp_archives' );
			vc_remove_element( 'vc_wp_rss' );
			vc_remove_element( 'vc_button2' );
			vc_remove_element( 'vc_cta_button2' );
			vc_remove_element( 'vc_custom_heading' );
			vc_remove_element( 'vc_empty_space' );
		}
	}

	add_action( 'vc_before_init', 'oy_remove_vc_shortcodes' );
}

// =============================================================================
// Map New VC Shortcodes
// =============================================================================
if ( !function_exists( 'oy_map_vc_shortcodes' ) ) {
	function oy_map_vc_shortcodes() {
		$param_icon_value = array( '- Select Option -', 'glass', 'music', 'search', 'envelope-o', 'heart', 'star', 'star-o', 'user', 'film', 'th-large', 'th', 'th-list', 'check', 'times', 'search-plus', 'search-minus', 'power-off', 'signal', 'gear', 'cog', 'trash-o', 'home', 'file-o', 'clock-o', 'road', 'download', 'arrow-circle-o-down', 'arrow-circle-o-up', 'inbox', 'play-circle-o', 'rotate-right', 'repeat', 'refresh', 'list-alt', 'lock', 'flag', 'headphones', 'volume-off', 'volume-down', 'volume-up', 'qrcode', 'barcode', 'tag', 'tags', 'book', 'bookmark', 'print', 'camera', 'font', 'bold', 'italic', 'text-height', 'text-width', 'align-left', 'align-center', 'align-right', 'align-justify', 'list', 'dedent', 'outdent', 'indent', 'video-camera', 'photo', 'image', 'picture-o', 'pencil', 'map-marker', 'adjust', 'tint', 'edit', 'pencil-square-o', 'share-square-o', 'check-square-o', 'arrows', 'step-backward', 'fast-backward', 'backward', 'play', 'pause', 'stop', 'forward', 'fast-forward', 'step-forward', 'eject', 'chevron-left', 'chevron-right', 'plus-circle', 'minus-circle', 'times-circle', 'check-circle', 'question-circle', 'info-circle', 'crosshairs', 'times-circle-o', 'check-circle-o', 'ban', 'arrow-left', 'arrow-right', 'arrow-up', 'arrow-down', 'mail-forward', 'share', 'expand', 'compress', 'plus', 'minus', 'asterisk', 'exclamation-circle', 'gift', 'leaf', 'fire', 'eye', 'eye-slash', 'warning', 'exclamation-triangle', 'plane', 'calendar', 'random', 'comment', 'magnet', 'chevron-up', 'chevron-down', 'retweet', 'shopping-cart', 'folder', 'folder-open', 'arrows-v', 'arrows-h', 'bar-chart-o', 'twitter-square', 'facebook-square', 'camera-retro', 'key', 'gears', 'cogs', 'comments', 'thumbs-o-up', 'thumbs-o-down', 'star-half', 'heart-o', 'sign-out', 'linkedin-square', 'thumb-tack', 'external-link', 'sign-in', 'trophy', 'github-square', 'upload', 'lemon-o', 'phone', 'square-o', 'bookmark-o', 'phone-square', 'twitter', 'facebook', 'github', 'unlock', 'credit-card', 'rss', 'hdd-o', 'bullhorn', 'bell', 'certificate', 'hand-o-right', 'hand-o-left', 'hand-o-up', 'hand-o-down', 'arrow-circle-left', 'arrow-circle-right', 'arrow-circle-up', 'arrow-circle-down', 'globe', 'wrench', 'tasks', 'filter', 'briefcase', 'arrows-alt', 'group', 'users', 'chain', 'link', 'cloud', 'flask', 'cut', 'scissors', 'copy', 'files-o', 'paperclip', 'save', 'floppy-o', 'square', 'navicon', 'reorder', 'bars', 'list-ul', 'list-ol', 'strikethrough', 'underline', 'table', 'magic', 'truck', 'pinterest', 'pinterest-square', 'google-plus-square', 'google-plus', 'money', 'caret-down', 'caret-up', 'caret-left', 'caret-right', 'columns', 'unsorted', 'sort', 'sort-down', 'sort-desc', 'sort-up', 'sort-asc', 'envelope', 'linkedin', 'rotate-left', 'undo', 'legal', 'gavel', 'dashboard', 'tachometer', 'comment-o', 'comments-o', 'flash', 'bolt', 'sitemap', 'umbrella', 'paste', 'clipboard', 'lightbulb-o', 'exchange', 'cloud-download', 'cloud-upload', 'user-md', 'stethoscope', 'suitcase', 'bell-o', 'coffee', 'cutlery', 'file-text-o', 'building-o', 'hospital-o', 'ambulance', 'medkit', 'fighter-jet', 'beer', 'h-square', 'plus-square', 'angle-double-left', 'angle-double-right', 'angle-double-up', 'angle-double-down', 'angle-left', 'angle-right', 'angle-up', 'angle-down', 'desktop', 'laptop', 'tablet', 'mobile-phone', 'mobile', 'circle-o', 'quote-left', 'quote-right', 'spinner', 'circle', 'mail-reply', 'reply', 'github-alt', 'folder-o', 'folder-open-o', 'smile-o', 'frown-o', 'meh-o', 'gamepad', 'keyboard-o', 'flag-o', 'flag-checkered', 'terminal', 'code', 'mail-reply-all', 'reply-all', 'star-half-empty', 'star-half-full', 'star-half-o', 'location-arrow', 'crop', 'code-fork', 'unlink', 'chain-broken', 'question', 'info', 'exclamation', 'superscript', 'subscript', 'eraser', 'puzzle-piece', 'microphone', 'microphone-slash', 'shield', 'calendar-o', 'fire-extinguisher', 'rocket', 'maxcdn', 'chevron-circle-left', 'chevron-circle-right', 'chevron-circle-up', 'chevron-circle-down', 'html5', 'css3', 'anchor', 'unlock-alt', 'bullseye', 'ellipsis-h', 'ellipsis-v', 'rss-square', 'play-circle', 'ticket', 'minus-square', 'minus-square-o', 'level-up', 'level-down', 'check-square', 'pencil-square', 'external-link-square', 'share-square', 'compass', 'toggle-down', 'caret-square-o-down', 'toggle-up', 'caret-square-o-up', 'toggle-right', 'caret-square-o-right', 'euro', 'eur', 'gbp', 'dollar', 'usd', 'rupee', 'inr', 'cny', 'rmb', 'yen', 'jpy', 'ruble', 'rouble', 'rub', 'won', 'krw', 'bitcoin', 'btc', 'file', 'file-text', 'sort-alpha-asc', 'sort-alpha-desc', 'sort-amount-asc', 'sort-amount-desc', 'sort-numeric-asc', 'sort-numeric-desc', 'thumbs-up', 'thumbs-down', 'youtube-square', 'youtube', 'xing', 'xing-square', 'youtube-play', 'dropbox', 'stack-overflow', 'instagram', 'flickr', 'adn', 'bitbucket', 'bitbucket-square', 'tumblr', 'tumblr-square', 'long-arrow-down', 'long-arrow-up', 'long-arrow-left', 'long-arrow-right', 'apple', 'windows', 'android', 'linux', 'dribbble', 'skype', 'foursquare', 'trello', 'female', 'male', 'gittip', 'sun-o', 'moon-o', 'archive', 'bug', 'vk', 'weibo', 'renren', 'pagelines', 'stack-exchange', 'arrow-circle-o-right', 'arrow-circle-o-left', 'toggle-left', 'caret-square-o-left', 'dot-circle-o', 'wheelchair', 'vimeo-square', 'turkish-lira', 'try', 'plus-square-o', 'space-shuttle', 'slack', 'envelope-square', 'wordpress', 'openid', 'institution', 'bank', 'university', 'mortar-board', 'graduation-cap', 'yahoo', 'google', 'reddit', 'reddit-square', 'stumbleupon-circle', 'stumbleupon', 'delicious', 'digg', 'pied-piper-square', 'pied-piper', 'pied-piper-alt', 'drupal', 'joomla', 'language', 'fax', 'building', 'child', 'paw', 'spoon', 'cube', 'cubes', 'behance', 'behance-square', 'steam', 'steam-square', 'recycle', 'automobile', 'car', 'cab', 'taxi', 'tree', 'spotify', 'deviantart', 'soundcloud', 'database', 'file-pdf-o', 'file-word-o', 'file-excel-o', 'file-powerpoint-o', 'file-photo-o', 'file-picture-o', 'file-image-o', 'file-zip-o', 'file-archive-o', 'file-sound-o', 'file-audio-o', 'file-movie-o', 'file-video-o', 'file-code-o', 'vine', 'codepen', 'jsfiddle', 'life-bouy', 'life-saver', 'support', 'life-ring', 'circle-o-notch', 'ra', 'rebel', 'ge', 'empire', 'git-square', 'git', 'hacker-news', 'tencent-weibo', 'qq', 'wechat', 'weixin', 'send', 'paper-plane', 'send-o', 'paper-plane-o', 'history', 'circle-thin', 'header', 'paragraph', 'sliders', 'share-alt', 'share-alt-square', 'bomb' );

		$param_social_icon_value = array( '- Select Option -', 'thumb-up', 'thumb-down', 'rss', 'facebook', 'twitter', 'pinterest', 'github', 'path', 'linkedin', 'dribbble', 'stumble-upon', 'behance', 'reddit', 'google-plus', 'youtube', 'vimeo', 'flickr', 'slideshare', 'picassa', 'skype', 'steam', 'instagram', 'foursquare', 'delicious', 'chat', 'torso', 'tumblr', 'video-chat', 'digg', 'wordpress' );

		sort( $param_icon_value );
		sort( $param_social_icon_value );

		//
		// Horizontal rule.
		//

		vc_map(
			array(
				'base' => 'line',
				'name' => __( 'Line', 'your-theme' ),
				'weight' => 980,
				'class' => 'oy-element-line',
				'icon' => 'line',
				'category' => __( 'Structure', 'your-theme' ),
				'description' => __( 'Place a horizontal rule in your content', 'your-theme' ),
				'params' => array(
					array(
						'param_name' => 'id',
						'heading' => __( 'ID', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique ID.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'class',
						'heading' => __( 'Class', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique class name.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'style',
						'heading' => __( 'Style', 'your-theme' ),
						'description' => __( '(Optional) Enter inline CSS.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					)
				)
			)
		);


		//
		// Gap.
		//

		vc_map(
			array(
				'base' => 'gap',
				'name' => __( 'Gap', 'your-theme' ),
				'weight' => 970,
				'class' => 'oy-element-gap',
				'icon' => 'gap',
				'category' => __( 'Structure', 'your-theme' ),
				'description' => __( 'Insert a vertical gap in your content', 'your-theme' ),
				'params' => array(
					array(
						'param_name' => 'size',
						'heading' => __( 'Size', 'your-theme' ),
						'description' => __( 'Enter in the size of your gap. Pixels, ems, and percentages are all valid units of measurement.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div',
						'value' => '1.313em'
					),
					array(
						'param_name' => 'id',
						'heading' => __( 'ID', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique ID.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'class',
						'heading' => __( 'Class', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique class name.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'style',
						'heading' => __( 'Style', 'your-theme' ),
						'description' => __( '(Optional) Enter inline CSS.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
				)
			)
		);


		//
		// Clear.
		//

		vc_map(
			array(
				'base' => 'clear',
				'name' => __( 'Clear', 'your-theme' ),
				'weight' => 960,
				'class' => 'oy-element-clear',
				'icon' => 'clear',
				'category' => __( 'Structure', 'your-theme' ),
				'description' => __( 'Clear floated elements in your content', 'your-theme' ),
				'params' => array(
					array(
						'param_name' => 'id',
						'heading' => __( 'ID', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique ID.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'class',
						'heading' => __( 'Class', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique class name.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'style',
						'heading' => __( 'Style', 'your-theme' ),
						'description' => __( '(Optional) Enter inline CSS.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					)
				)
			)
		);


		//
		// Blockquote.
		//

		vc_map(
			array(
				'base' => 'blockquote',
				'name' => __( 'Blockquote', 'your-theme' ),
				'weight' => 810,
				'class' => 'oy-element-blockquote',
				'icon' => 'blockquote',
				'category' => __( 'Typography', 'your-theme' ),
				'description' => __( 'Include a blockquote in your content', 'your-theme' ),
				'params' => array(
					array(
						'param_name' => 'content',
						'heading' => __( 'Text', 'your-theme' ),
						'description' => __( 'Enter your text.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textarea_html',
						'holder' => 'div',
						'value' => ''
					),
					array(
						'param_name' => 'cite',
						'heading' => __( 'Cite', 'your-theme' ),
						'description' => __( 'Cite the person you are quoting.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'type',
						'heading' => __( 'Alignment', 'your-theme' ),
						'description' => __( 'Select the alignment of the blockquote.', 'your-theme' ),
						'type' => 'dropdown',
						'holder' => 'div',
						'value' => array(
							'- Select Option -' => '',
							'Left' => 'left',
							'Center' => 'center',
							'Right' => 'right'
						)
					),
					array(
						'param_name' => 'id',
						'heading' => __( 'ID', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique ID.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'class',
						'heading' => __( 'Class', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique class name.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'style',
						'heading' => __( 'Style', 'your-theme' ),
						'description' => __( '(Optional) Enter inline CSS.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					)
				)
			)
		);


		//
		// Pullquote.
		//

		vc_map(
			array(
				'base' => 'pullquote',
				'name' => __( 'Pullquote', 'your-theme' ),
				'weight' => 800,
				'class' => 'oy-element-pullquote',
				'icon' => 'pullquote',
				'category' => __( 'Typography', 'your-theme' ),
				'description' => __( 'Include a pullquote in your content', 'your-theme' ),
				'params' => array(
					array(
						'param_name' => 'content',
						'heading' => __( 'Text', 'your-theme' ),
						'description' => __( 'Enter your text.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textarea_html',
						'holder' => 'div',
						'value' => ''
					),
					array(
						'param_name' => 'cite',
						'heading' => __( 'Cite', 'your-theme' ),
						'description' => __( 'Cite the person you are quoting.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'type',
						'heading' => __( 'Alignment', 'your-theme' ),
						'description' => __( 'Select the alignment of the pullquote.', 'your-theme' ),
						'type' => 'dropdown',
						'holder' => 'div',
						'value' => array(
							'- Select Option -' => '',
							'Left' => 'left',
							'Right' => 'right'
						)
					),
					array(
						'param_name' => 'id',
						'heading' => __( 'ID', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique ID.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'class',
						'heading' => __( 'Class', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique class name.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'style',
						'heading' => __( 'Style', 'your-theme' ),
						'description' => __( '(Optional) Enter inline CSS.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
				)
			)
		);


		//
		// Alert.
		//

		vc_map(
			array(
				'base' => 'alert',
				'name' => __( 'Alert', 'your-theme' ),
				'weight' => 650,
				'class' => 'oy-element-alert',
				'icon' => 'alert',
				'category' => __( 'Information', 'your-theme' ),
				'description' => __( 'Provide information to users with alerts', 'your-theme' ),
				'params' => array(
					array(
						'param_name' => 'content',
						'heading' => __( 'Text', 'your-theme' ),
						'description' => __( 'Enter your text.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textarea_html',
						'holder' => 'div',
						'value' => ''
					),
					array(
						'param_name' => 'heading',
						'heading' => __( 'Heading', 'your-theme' ),
						'description' => __( 'Enter the heading of your alert.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'type',
						'heading' => __( 'Type', 'your-theme' ),
						'description' => __( 'Select the alert style.', 'your-theme' ),
						'type' => 'dropdown',
						'holder' => 'div',
						'value' => array(
							'- Select Option -' => '',
							'Success' => 'success',
							'Info' => 'info',
							'Warning' => 'warning',
							'Danger' => 'danger',
							'Muted' => 'muted'
						)
					),
					array(
						'param_name' => 'close',
						'heading' => __( 'Close', 'your-theme' ),
						'description' => __( 'Select to display the close button.', 'your-theme' ),
						'type' => 'checkbox',
						'holder' => 'div',
						'value' => array(
							'' => 'true'
						)
					),
					array(
						'param_name' => 'id',
						'heading' => __( 'ID', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique ID.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'class',
						'heading' => __( 'Class', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique class name.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'style',
						'heading' => __( 'Style', 'your-theme' ),
						'description' => __( '(Optional) Enter inline CSS.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					)
				)
			)
		);


		//
		// Map.
		//

		vc_map(
			array(
				'base' => 'map',
				'name' => __( 'Map', 'your-theme' ),
				'weight' => 530,
				'class' => 'oy-element-map',
				'icon' => 'map',
				'category' => __( 'Media', 'your-theme' ),
				'description' => __( 'Embed a map from a third-party provider', 'your-theme' ),
				'params' => array(
					array(
						'param_name' => 'content',
						'heading' => __( 'Code (See Notes Below)', 'your-theme' ),
						'description' => __( 'Switch to the "text" editor and do not place anything else here other than your &lsaquo;iframe&rsaquo; or &lsaquo;embed&rsaquo; code.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textarea_html',
						'holder' => 'div',
						'value' => ''
					),
					array(
						'param_name' => 'no_container',
						'heading' => __( 'No Container', 'your-theme' ),
						'description' => __( 'Select to remove the container around the map.', 'your-theme' ),
						'type' => 'checkbox',
						'holder' => 'div',
						'value' => array(
							'' => 'true'
						)
					),
					array(
						'param_name' => 'id',
						'heading' => __( 'ID', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique ID.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'class',
						'heading' => __( 'Class', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique class name.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'style',
						'heading' => __( 'Style', 'your-theme' ),
						'description' => __( '(Optional) Enter inline CSS.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
				)
			)
		);


		//
		// Google map.
		//

		vc_map(
			array(
				'base' => 'google_map',
				'name' => __( 'Google Map', 'your-theme' ),
				'weight' => 530,
				'class' => 'oy-element-google-map',
				'icon' => 'google-map',
				'category' => __( 'Media', 'your-theme' ),
				'description' => __( 'Embed a customizable Google map', 'your-theme' ),
				'as_parent' => array( 'only' => 'google_map_marker' ),
				'content_element' => true,
				'js_view' => 'VcColumnView',
				'params' => array(
					array(
						'param_name' => 'lat',
						'heading' => __( 'Latitude', 'your-theme' ),
						'description' => __( 'Enter in the center latitude of your map.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'lng',
						'heading' => __( 'Longitude', 'your-theme' ),
						'description' => __( 'Enter in the center longitude of your map.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'drag',
						'heading' => __( 'Draggable', 'your-theme' ),
						'description' => __( 'Select to allow your users to drag the map view.', 'your-theme' ),
						'type' => 'checkbox',
						'holder' => 'div',
						'value' => array(
							'' => 'true'
						)
					),
					array(
						'param_name' => 'zoom',
						'heading' => __( 'Zoom Level', 'your-theme' ),
						'description' => __( 'Choose the initial zoom level of your map. This value should be between 1 and 18. 1 is fully zoomed out and 18 is right at street level.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'zoom_control',
						'heading' => __( 'Zoom Control', 'your-theme' ),
						'description' => __( 'Select to activate the zoom control for the map.', 'your-theme' ),
						'type' => 'checkbox',
						'holder' => 'div',
						'value' => array(
							'' => 'true'
						)
					),
					array(
						'param_name' => 'height',
						'heading' => __( 'Height', 'your-theme' ),
						'description' => __( 'Choose an optional height for your map. If no height is selected, a responsive, proportional unit will be used. Any type of unit is acceptable (e.g. 450px, 30em, 40%, et cetera).', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'hue',
						'heading' => __( 'Custom Color', 'your-theme' ),
						'description' => __( 'Choose an optional custom color for your map.', 'your-theme' ),
						'type' => 'colorpicker',
						'holder' => 'div'
					),
					array(
						'param_name' => 'no_container',
						'heading' => __( 'No Container', 'your-theme' ),
						'description' => __( 'Select to remove the container around the map.', 'your-theme' ),
						'type' => 'checkbox',
						'holder' => 'div',
						'value' => array(
							'' => 'true'
						)
					),
					array(
						'param_name' => 'class',
						'heading' => __( 'Class', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique class name.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'style',
						'heading' => __( 'Style', 'your-theme' ),
						'description' => __( '(Optional) Enter inline CSS.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
				)
			)
		);


		//
		// Google map marker.
		//

		vc_map(
			array(
				'base' => 'google_map_marker',
				'name' => __( 'Google Map Marker', 'your-theme' ),
				'weight' => 530,
				'class' => 'oy-element-google-map-marker',
				'icon' => 'google-map-marker',
				'category' => __( 'Media', 'your-theme' ),
				'description' => __( 'Place a location marker on your Google map', 'your-theme' ),
				'as_child' => array( 'only' => 'google_map' ),
				'content_element' => true,
				'params' => array(
					array(
						'param_name' => 'lat',
						'heading' => __( 'Latitude', 'your-theme' ),
						'description' => __( 'Enter in the latitude of your marker.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'lng',
						'heading' => __( 'Longitude', 'your-theme' ),
						'description' => __( 'Enter in the longitude of your marker.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'info',
						'heading' => __( 'Additional Information', 'your-theme' ),
						'description' => __( 'Optional description text to appear in a popup when your marker is clicked on.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'image',
						'heading' => __( 'Custom Marker Image', 'your-theme' ),
						'description' => __( 'Utilize a custom marker image instead of the default provided by Google.', 'your-theme' ),
						'type' => 'attach_image',
						'holder' => 'div'
					),
				)
			)
		);


		//
		// Skill bar.
		//

		vc_map(
			array(
				'base' => 'skill_bar',
				'name' => __( 'Skill Bar', 'your-theme' ),
				'weight' => 640,
				'class' => 'oy-element-skill-bar',
				'icon' => 'skill-bar',
				'category' => __( 'Information', 'your-theme' ),
				'description' => __( 'Include an informational skill bar', 'your-theme' ),
				'params' => array(
					array(
						'param_name' => 'heading',
						'heading' => __( 'Heading', 'your-theme' ),
						'description' => __( 'Enter the heading of your skill bar.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'percent',
						'heading' => __( 'Percent', 'your-theme' ),
						'description' => __( 'Enter the percentage of your skill and be sure to include the percentage sign (i.e. 90%).', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'bar_text',
						'heading' => __( 'Bar Text', 'your-theme' ),
						'description' => __( 'Enter in some alternate text in place of the percentage inside the skill bar.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'id',
						'heading' => __( 'ID', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique ID.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'class',
						'heading' => __( 'Class', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique class name.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'style',
						'heading' => __( 'Style', 'your-theme' ),
						'description' => __( '(Optional) Enter inline CSS.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					)
				)
			)
		);


		//
		// Code.
		//

		vc_map(
			array(
				'base' => 'code',
				'name' => __( 'Code', 'your-theme' ),
				'weight' => 740,
				'class' => 'oy-element-code',
				'icon' => 'code',
				'category' => __( 'Typography', 'your-theme' ),
				'description' => __( 'Add a block of example code to your content', 'your-theme' ),
				'params' => array(
					array(
						'param_name' => 'content',
						'heading' => __( 'Text', 'your-theme' ),
						'description' => __( 'Enter your text.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textarea_html',
						'holder' => 'div',
						'value' => ''
					),
					array(
						'param_name' => 'id',
						'heading' => __( 'ID', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique ID.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'class',
						'heading' => __( 'Class', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique class name.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'style',
						'heading' => __( 'Style', 'your-theme' ),
						'description' => __( '(Optional) Enter inline CSS.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					)
				)
			)
		);


		//
		// Buttons.
		//

		vc_map(
			array(
				'base' => 'button',
				'name' => __( 'Button', 'your-theme' ),
				'weight' => 720,
				'class' => 'oy-element-button',
				'icon' => 'oy-button',
				'category' => __( 'Marketing', 'your-theme' ),
				'description' => __( 'Add a clickable button to your content', 'your-theme' ),
				'params' => array(
					array(
						'param_name' => 'content',
						'heading' => __( 'Text', 'your-theme' ),
						'description' => __( 'Enter your text.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textarea_html',
						'holder' => 'div',
						'value' => ''
					),
					array(
						'param_name' => 'shape',
						'heading' => __( 'Shape', 'your-theme' ),
						'description' => __( 'Select the button shape.', 'your-theme' ),
						'type' => 'dropdown',
						'holder' => 'div',
						'value' => array(
							'- Select Option -' => '',
							'Square' => 'square',
							'Rounded' => 'rounded',
							'Pill' => 'pill'
						)
					),
					array(
						'param_name' => 'size',
						'heading' => __( 'Size', 'your-theme' ),
						'description' => __( 'Select the button size.', 'your-theme' ),
						'type' => 'dropdown',
						'holder' => 'div',
						'value' => array(
							'- Select Option -' => '',
							'Mini' => 'mini',
							'Small' => 'small',
							'Standard' => 'regular',
							'Large' => 'large',
							'Extra Large' => 'oy-large',
							'Jumbo' => 'jumbo'
						)
					),
					array(
						'param_name' => 'float',
						'heading' => __( 'Float', 'your-theme' ),
						'description' => __( 'Optionally float the button.', 'your-theme' ),
						'type' => 'dropdown',
						'holder' => 'div',
						'value' => array(
							'- Select Option -' => '',
							'None' => 'none',
							'Left' => 'left',
							'Right' => 'right'
						)
					),
					array(
						'param_name' => 'block',
						'heading' => __( 'Block', 'your-theme' ),
						'description' => __( 'Select to make your button go fullwidth.', 'your-theme' ),
						'type' => 'checkbox',
						'holder' => 'div',
						'value' => array(
							'' => 'true'
						)
					),
					array(
						'param_name' => 'circle',
						'heading' => __( 'Marketing Circle', 'your-theme' ),
						'description' => __( 'Select to include a marketing circle around your button.', 'your-theme' ),
						'type' => 'checkbox',
						'holder' => 'div',
						'value' => array(
							'' => 'true'
						)
					),
					array(
						'param_name' => 'icon_only',
						'heading' => __( 'Icon Only', 'your-theme' ),
						'description' => __( 'Select if you are only using an icon in your button.', 'your-theme' ),
						'type' => 'checkbox',
						'holder' => 'div',
						'value' => array(
							'' => 'true'
						)
					),
					array(
						'param_name' => 'href',
						'heading' => __( 'Href', 'your-theme' ),
						'description' => __( 'Enter in the URL you want your button to link to.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'title',
						'heading' => __( 'Title', 'your-theme' ),
						'description' => __( 'Enter in the title attribute you want for your button (will also double as title for popover or tooltip if you have chosen to display one).', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'target',
						'heading' => __( 'Target', 'your-theme' ),
						'description' => __( 'Select to open your button link in a new window.', 'your-theme' ),
						'type' => 'checkbox',
						'holder' => 'div',
						'value' => array(
							'' => 'blank'
						)
					),
					array(
						'param_name' => 'info',
						'heading' => __( 'Info', 'your-theme' ),
						'description' => __( 'Select whether or not you want to add a popover or tooltip to your button.', 'your-theme' ),
						'type' => 'dropdown',
						'holder' => 'div',
						'value' => array(
							'- Select Option -' => '',
							'None' => 'none',
							'Popover' => 'popover',
							'Tooltip' => 'tooltip'
						)
					),
					array(
						'param_name' => 'info_place',
						'heading' => __( 'Info Placement', 'your-theme' ),
						'description' => __( 'Select where you want your popover or tooltip to appear.', 'your-theme' ),
						'type' => 'dropdown',
						'holder' => 'div',
						'value' => array(
							'- Select Option -' => '',
							'Top' => 'top',
							'Left' => 'left',
							'Right' => 'right',
							'Bottom' => 'bottom'
						)
					),
					array(
						'param_name' => 'info_trigger',
						'heading' => __( 'Info Trigger', 'your-theme' ),
						'description' => __( 'Select what actions you want to trigger the popover or tooltip.', 'your-theme' ),
						'type' => 'dropdown',
						'holder' => 'div',
						'value' => array(
							'- Select Option -' => '',
							'Hover' => 'hover',
							'Click' => 'click',
							'Focus' => 'focus'
						)
					),
					array(
						'param_name' => 'info_content',
						'heading' => __( 'Info Content', 'your-theme' ),
						'description' => __( 'Extra content for the popover.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'lightbox_thumb',
						'heading' => __( 'Lightbox Thumbnail', 'your-theme' ),
						'description' => __( 'Use this option to select a thumbnail for your lightbox thumbnail navigation or to set an image if you are linking out to a video.', 'your-theme' ),
						'type' => 'attach_image',
						'holder' => 'div'
					),
					array(
						'param_name' => 'lightbox_video',
						'heading' => __( 'Lightbox Video', 'your-theme' ),
						'description' => __( 'Select if you are linking to a video from this button in the lightbox.', 'your-theme' ),
						'type' => 'checkbox',
						'holder' => 'div',
						'value' => array(
							'' => 'true'
						)
					),
					array(
						'param_name' => 'lightbox_caption',
						'heading' => __( 'Lightbox Caption', 'your-theme' ),
						'description' => __( 'Lightbox caption text.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'id',
						'heading' => __( 'ID', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique ID.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'class',
						'heading' => __( 'Class', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique class name.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'style',
						'heading' => __( 'Style', 'your-theme' ),
						'description' => __( '(Optional) Enter inline CSS.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					)
				)
			)
		);


		//
		// Block grid.
		//

		vc_map(
			array(
				'base' => 'block_grid',
				'name' => __( 'Block Grid', 'your-theme' ),
				'weight' => 880,
				'class' => 'oy-element-block-grid',
				'icon' => 'block-grid',
				'category' => __( 'Content', 'your-theme' ),
				'description' => __( 'Include a block grid container in your content', 'your-theme' ),
				'as_parent' => array( 'only' => 'block_grid_item' ),
				'content_element' => true,
				'js_view' => 'VcColumnView',
				'params' => array(
					array(
						'param_name' => 'type',
						'heading' => __( 'Type', 'your-theme' ),
						'description' => __( 'Select how many block grid items you want per row.', 'your-theme' ),
						'type' => 'dropdown',
						'holder' => 'div',
						'value' => array(
							'- Select Option -' => '',
							'Two' => 'two-up',
							'Three' => 'three-up',
							'Four' => 'four-up'
						)
					),
					array(
						'param_name' => 'id',
						'heading' => __( 'ID', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique ID.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'class',
						'heading' => __( 'Class', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique class name.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'style',
						'heading' => __( 'Style', 'your-theme' ),
						'description' => __( '(Optional) Enter inline CSS.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					)
				)
			)
		);


		//
		// Block grid item.
		//

		vc_map(
			array(
				'base' => 'block_grid_item',
				'name' => __( 'Block Grid Item', 'your-theme' ),
				'weight' => 870,
				'class' => 'oy-element-block-grid-item',
				'icon' => 'block-grid-item',
				'category' => __( 'Content', 'your-theme' ),
				'description' => __( 'Include a block grid item in your block grid', 'your-theme' ),
				'as_child' => array( 'only' => 'block_grid' ),
				'content_element' => true,
				'params' => array(
					array(
						'param_name' => 'content',
						'heading' => __( 'Text', 'your-theme' ),
						'description' => __( 'Enter your text.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textarea_html',
						'holder' => 'div',
						'value' => ''
					),
					array(
						'param_name' => 'id',
						'heading' => __( 'ID', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique ID.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'class',
						'heading' => __( 'Class', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique class name.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'style',
						'heading' => __( 'Style', 'your-theme' ),
						'description' => __( '(Optional) Enter inline CSS.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					)
				)
			)
		);


		//
		// Images.
		//

		vc_map(
			array(
				'base' => 'image',
				'name' => __( 'Image', 'your-theme' ),
				'weight' => 610,
				'class' => 'oy-element-image',
				'icon' => 'image',
				'category' => __( 'Media', 'your-theme' ),
				'description' => __( 'Include an image in your content', 'your-theme' ),
				'params' => array(
					array(
						'param_name' => 'type',
						'heading' => __( 'Style', 'your-theme' ),
						'description' => __( 'Select the image style.', 'your-theme' ),
						'type' => 'dropdown',
						'holder' => 'div',
						'value' => array(
							'- Select Option -' => '',
							'None' => 'none',
							'Thumbnail' => 'thumbnail',
							'Rounded' => 'rounded',
							'Circle' => 'circle'
						)
					),
					array(
						'param_name' => 'float',
						'heading' => __( 'Float', 'your-theme' ),
						'description' => __( 'Optionally float the image.', 'your-theme' ),
						'type' => 'dropdown',
						'holder' => 'div',
						'value' => array(
							'- Select Option -' => '',
							'None' => 'none',
							'Left' => 'left',
							'Right' => 'right'
						)
					),
					array(
						'param_name' => 'src',
						'heading' => __( 'Src', 'your-theme' ),
						'description' => __( 'Enter your image.', 'your-theme' ),
						'type' => 'attach_image',
						'holder' => 'div'
					),
					array(
						'param_name' => 'alt',
						'heading' => __( 'Alt', 'your-theme' ),
						'description' => __( 'Enter in the alt text for your image.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'link',
						'heading' => __( 'Link', 'your-theme' ),
						'description' => __( 'Select to wrap your image in an anchor tag.', 'your-theme' ),
						'type' => 'checkbox',
						'holder' => 'div',
						'value' => array(
							'' => 'true'
						)
					),
					array(
						'param_name' => 'href',
						'heading' => __( 'Href', 'your-theme' ),
						'description' => __( 'Enter in the URL you want your image to link to. If using this image for a lightbox, enter the URL of your media here (e.g. YouTube embed URL, et cetera). Leave this field blank if you want to link to the image uploaded to the "Src" for your lightbox.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'title',
						'heading' => __( 'Title', 'your-theme' ),
						'description' => __( 'Enter in the title attribute you want for your image (will also double as title for popover or tooltip if you have chosen to display one).', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'target',
						'heading' => __( 'Target', 'your-theme' ),
						'description' => __( 'Select to open your image link in a new window.', 'your-theme' ),
						'type' => 'checkbox',
						'holder' => 'div',
						'value' => array(
							'' => 'blank'
						)
					),
					array(
						'param_name' => 'info',
						'heading' => __( 'Info', 'your-theme' ),
						'description' => __( 'Select whether or not you want to add a popover or tooltip to your image.', 'your-theme' ),
						'type' => 'dropdown',
						'holder' => 'div',
						'value' => array(
							'- Select Option -' => '',
							'None' => 'none',
							'Popover' => 'popover',
							'Tooltip' => 'tooltip'
						)
					),
					array(
						'param_name' => 'info_place',
						'heading' => __( 'Info Placement', 'your-theme' ),
						'description' => __( 'Select where you want your popover or tooltip to appear.', 'your-theme' ),
						'type' => 'dropdown',
						'holder' => 'div',
						'value' => array(
							'- Select Option -' => '',
							'Top' => 'top',
							'Left' => 'left',
							'Right' => 'right',
							'Bottom' => 'bottom'
						)
					),
					array(
						'param_name' => 'info_trigger',
						'heading' => __( 'Info Trigger', 'your-theme' ),
						'description' => __( 'Select what actions you want to trigger the popover or tooltip.', 'your-theme' ),
						'type' => 'dropdown',
						'holder' => 'div',
						'value' => array(
							'- Select Option -' => '',
							'Hover' => 'hover',
							'Click' => 'click',
							'Focus' => 'focus'
						)
					),
					array(
						'param_name' => 'info_content',
						'heading' => __( 'Info Content', 'your-theme' ),
						'description' => __( 'Extra content for the popover.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'lightbox_thumb',
						'heading' => __( 'Lightbox Thumbnail', 'your-theme' ),
						'description' => __( 'Use this option to select a different thumbnail for your lightbox thumbnail navigation or to set an image if you are linking out to a video. Will default to the "Src" image if nothing is set.', 'your-theme' ),
						'type' => 'attach_image',
						'holder' => 'div'
					),
					array(
						'param_name' => 'lightbox_video',
						'heading' => __( 'Lightbox Video', 'your-theme' ),
						'description' => __( 'Select if you are linking to a video from this image in the lightbox.', 'your-theme' ),
						'type' => 'checkbox',
						'holder' => 'div',
						'value' => array(
							'' => 'true'
						)
					),
					array(
						'param_name' => 'lightbox_caption',
						'heading' => __( 'Lightbox Caption', 'your-theme' ),
						'description' => __( 'Lightbox caption text.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'id',
						'heading' => __( 'ID', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique ID.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'class',
						'heading' => __( 'Class', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique class name.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'style',
						'heading' => __( 'Style', 'your-theme' ),
						'description' => __( '(Optional) Enter inline CSS.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					)
				)
			)
		);


		//
		// Icon list.
		//

		vc_map(
			array(
				'base' => 'icon_list',
				'name' => __( 'Icon List', 'your-theme' ),
				'weight' => 780,
				'class' => 'oy-element-icon-list',
				'icon' => 'icon-list',
				'category' => __( 'Typography', 'your-theme' ),
				'description' => __( 'Include an icon list in your content', 'your-theme' ),
				'as_parent' => array( 'only' => 'icon_list_item' ),
				'content_element' => true,
				'js_view' => 'VcColumnView',
				'params' => array(
					array(
						'param_name' => 'id',
						'heading' => __( 'ID', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique ID.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'class',
						'heading' => __( 'Class', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique class name.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'style',
						'heading' => __( 'Style', 'your-theme' ),
						'description' => __( '(Optional) Enter inline CSS.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					)
				)
			)
		);


		//
		// Icon list item.
		//

		vc_map(
			array(
				'base' => 'icon_list_item',
				'name' => __( 'Icon List Item', 'your-theme' ),
				'weight' => 770,
				'class' => 'oy-element-icon-list-item',
				'icon' => 'icon-list-item',
				'category' => __( 'Typography', 'your-theme' ),
				'description' => __( 'Include an icon list item in your icon list', 'your-theme' ),
				'as_child' => array( 'only' => 'icon_list' ),
				'content_element' => true,
				'params' => array(
					array(
						'param_name' => 'content',
						'heading' => __( 'Text', 'your-theme' ),
						'description' => __( 'Enter your text.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textarea_html',
						'holder' => 'div',
						'value' => ''
					),
					array(
						'param_name' => 'type',
						'heading' => __( 'Type', 'your-theme' ),
						'description' => __( 'Select your icon.', 'your-theme' ),
						'type' => 'dropdown',
						'holder' => 'div',
						'value' => $param_icon_value
					),
					array(
						'param_name' => 'id',
						'heading' => __( 'ID', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique ID.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'class',
						'heading' => __( 'Class', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique class name.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'style',
						'heading' => __( 'Style', 'your-theme' ),
						'description' => __( '(Optional) Enter inline CSS.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					)
				)
			)
		);


		//
		// Text columns.
		//

		vc_map(
			array(
				'base' => 'columnize',
				'name' => __( 'Columnize', 'your-theme' ),
				'weight' => 860,
				'class' => 'oy-element-columnize',
				'icon' => 'columnize',
				'category' => __( 'Content', 'your-theme' ),
				'description' => __( 'Split your text into multiple columns', 'your-theme' ),
				'params' => array(
					array(
						'param_name' => 'content',
						'heading' => __( 'Text', 'your-theme' ),
						'description' => __( 'Enter your text.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textarea_html',
						'holder' => 'div',
						'value' => ''
					),
					array(
						'param_name' => 'id',
						'heading' => __( 'ID', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique ID.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'class',
						'heading' => __( 'Class', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique class name.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'style',
						'heading' => __( 'Style', 'your-theme' ),
						'description' => __( '(Optional) Enter inline CSS.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					)
				)
			)
		);


		//
		// Video player.
		//

		vc_map(
			array(
				'base' => 'x_video_player',
				'name' => __( 'Video (Self Hosted)', 'your-theme' ),
				'weight' => 570,
				'class' => 'oy-element-oy-video-player',
				'icon' => 'oy-video-player',
				'category' => __( 'Media', 'your-theme' ),
				'description' => __( 'Include responsive video into your content', 'your-theme' ),
				'params' => array(
					array(
						'param_name' => 'type',
						'heading' => __( 'Aspect Ratio', 'your-theme' ),
						'description' => __( 'Select your aspect ratio.', 'your-theme' ),
						'type' => 'dropdown',
						'holder' => 'div',
						'value' => array(
							'- Select Option -' => '',
							'16:9' => '16:9',
							'5:3' => '5:3',
							'5:4' => '5:4',
							'4:3' => '4:3',
							'3:2' => '3:2'
						)
					),
					array(
						'param_name' => 'm4v',
						'heading' => __( 'M4V', 'your-theme' ),
						'description' => __( 'Include and .m4v version of your video.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'ogv',
						'heading' => __( 'OGV', 'your-theme' ),
						'description' => __( 'Include and .ogv version of your video for additional native browser support.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'poster',
						'heading' => __( 'Poster Image', 'your-theme' ),
						'description' => __( 'Include a poster image for your self-hosted video.', 'your-theme' ),
						'type' => 'attach_image',
						'holder' => 'div'
					),
					array(
						'param_name' => 'advanced_controls',
						'heading' => __( 'Advanced Controls', 'your-theme' ),
						'description' => __( 'Select to enable advanced controls on your self-hosted video.', 'your-theme' ),
						'type' => 'checkbox',
						'holder' => 'div',
						'value' => array(
							'' => 'true'
						)
					),
					array(
						'param_name' => 'hide_controls',
						'heading' => __( 'Hide Controls', 'your-theme' ),
						'description' => __( 'Select to hide the controls on your self-hosted video.', 'your-theme' ),
						'type' => 'checkbox',
						'holder' => 'div',
						'value' => array(
							'' => 'true'
						)
					),
					array(
						'param_name' => 'autoplay',
						'heading' => __( 'Autoplay', 'your-theme' ),
						'description' => __( 'Select to automatically play your self-hosted video.', 'your-theme' ),
						'type' => 'checkbox',
						'holder' => 'div',
						'value' => array(
							'' => 'true'
						)
					),
					array(
						'param_name' => 'no_container',
						'heading' => __( 'No Container', 'your-theme' ),
						'description' => __( 'Select to remove the container around the video.', 'your-theme' ),
						'type' => 'checkbox',
						'holder' => 'div',
						'value' => array(
							'' => 'true'
						)
					),
					array(
						'param_name' => 'id',
						'heading' => __( 'ID', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique ID.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'class',
						'heading' => __( 'Class', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique class name.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'style',
						'heading' => __( 'Style', 'your-theme' ),
						'description' => __( '(Optional) Enter inline CSS.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					)
				)
			)
		);


		//
		// Video embed.
		//

		vc_map(
			array(
				'base' => 'x_video_embed',
				'name' => __( 'Video (Embedded)', 'your-theme' ),
				'weight' => 560,
				'class' => 'oy-element-oy-video-embed',
				'icon' => 'oy-video-embed',
				'category' => __( 'Media', 'your-theme' ),
				'description' => __( 'Include responsive video into your content', 'your-theme' ),
				'params' => array(
					array(
						'param_name' => 'content',
						'heading' => __( 'Code (See Notes Below)', 'your-theme' ),
						'description' => __( 'Switch to the "text" editor and do not place anything else here other than your &lsaquo;iframe&rsaquo; or &lsaquo;embed&rsaquo; code.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textarea_html',
						'holder' => 'div',
						'value' => ''
					),
					array(
						'param_name' => 'type',
						'heading' => __( 'Aspect Ratio', 'your-theme' ),
						'description' => __( 'Select your aspect ratio.', 'your-theme' ),
						'type' => 'dropdown',
						'holder' => 'div',
						'value' => array(
							'- Select Option -' => '',
							'16:9' => '16:9',
							'5:3' => '5:3',
							'5:4' => '5:4',
							'4:3' => '4:3',
							'3:2' => '3:2'
						)
					),
					array(
						'param_name' => 'no_container',
						'heading' => __( 'No Container', 'your-theme' ),
						'description' => __( 'Select to remove the container around the video.', 'your-theme' ),
						'type' => 'checkbox',
						'holder' => 'div',
						'value' => array(
							'' => 'true'
						)
					),
					array(
						'param_name' => 'id',
						'heading' => __( 'ID', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique ID.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'class',
						'heading' => __( 'Class', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique class name.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'style',
						'heading' => __( 'Style', 'your-theme' ),
						'description' => __( '(Optional) Enter inline CSS.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					)
				)
			)
		);


		//
		// Accordion.
		//

		vc_map(
			array(
				'base' => 'accordion',
				'name' => __( 'Accordion', 'your-theme' ),
				'weight' => 930,
				'class' => 'oy-element-accordion',
				'icon' => 'accordion',
				'category' => __( 'Content', 'your-theme' ),
				'description' => __( 'Include an accordion into your content', 'your-theme' ),
				'as_parent' => array( 'only' => 'accordion_item' ),
				'content_element' => true,
				'js_view' => 'VcColumnView',
				'params' => array(
					array(
						'param_name' => 'id',
						'heading' => __( 'ID', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique ID.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'class',
						'heading' => __( 'Class', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique class name.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'style',
						'heading' => __( 'Style', 'your-theme' ),
						'description' => __( '(Optional) Enter inline CSS.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					)
				)
			)
		);


		//
		// Accordion item.
		//

		vc_map(
			array(
				'base' => 'accordion_item',
				'name' => __( 'Accordion Item', 'your-theme' ),
				'weight' => 940,
				'class' => 'oy-element-accordion-item',
				'icon' => 'accordion-item',
				'category' => __( 'Content', 'your-theme' ),
				'description' => __( 'Include an accordion item in your accordion', 'your-theme' ),
				'as_child' => array( 'only' => 'accordion' ),
				'content_element' => true,
				'params' => array(
					array(
						'param_name' => 'content',
						'heading' => __( 'Text', 'your-theme' ),
						'description' => __( 'Enter your text.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textarea_html',
						'holder' => 'div',
						'value' => ''
					),
					array(
						'param_name' => 'parent_id',
						'heading' => __( 'Parent ID', 'your-theme' ),
						'description' => __( 'Optionally include an ID given to the parent accordion to only allow one toggle to be open at a time.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'title',
						'heading' => __( 'Title', 'your-theme' ),
						'description' => __( 'Include a title for your accordion item.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'open',
						'heading' => __( 'Open', 'your-theme' ),
						'description' => __( 'Select for your accordion item to be open by default.', 'your-theme' ),
						'type' => 'checkbox',
						'holder' => 'div',
						'value' => array(
							'' => 'true'
						)
					),
					array(
						'param_name' => 'id',
						'heading' => __( 'ID', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique ID.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'class',
						'heading' => __( 'Class', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique class name.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'style',
						'heading' => __( 'Style', 'your-theme' ),
						'description' => __( '(Optional) Enter inline CSS.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					)
				)
			)
		);


		//
		// Tab nav.
		//


		vc_map(
			array(
				'base' => 'tab_nav',
				'name' => __( 'Tab Nav', 'your-theme' ),
				'weight' => 920,
				'class' => 'oy-element-tab-nav',
				'icon' => 'tab-nav',
				'category' => __( 'Content', 'your-theme' ),
				'description' => __( 'Include a tab nav into your content', 'your-theme' ),
				'as_parent' => array( 'only' => 'tab_nav_item' ),
				'content_element' => true,
				'js_view' => 'VcColumnView',
				'params' => array(
					array(
						'param_name' => 'type',
						'heading' => __( 'Tab Nav Items Per Row', 'your-theme' ),
						'description' => __( 'If your tab nav is on top, select how many tab nav items you want per row.', 'your-theme' ),
						'type' => 'dropdown',
						'holder' => 'div',
						'value' => array(
							'- Select Option -' => '',
							'Two' => 'two-up',
							'Three' => 'three-up',
							'Four' => 'four-up',
							'Five' => 'five-up'
						)
					),
					array(
						'param_name' => 'float',
						'heading' => __( 'Tab Nav Position', 'your-theme' ),
						'description' => __( 'Select the position of your tab nav.', 'your-theme' ),
						'type' => 'dropdown',
						'holder' => 'div',
						'value' => array(
							'- Select Option -' => '',
							'None' => 'none',
							'Left' => 'left',
							'Right' => 'right'
						)
					),
					array(
						'param_name' => 'id',
						'heading' => __( 'ID', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique ID.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'class',
						'heading' => __( 'Class', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique class name.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'style',
						'heading' => __( 'Style', 'your-theme' ),
						'description' => __( '(Optional) Enter inline CSS.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					)
				)
			)
		);


		//
		// Tab nav item.
		//

		vc_map(
			array(
				'base' => 'tab_nav_item',
				'name' => __( 'Tab Nav Item', 'your-theme' ),
				'weight' => 910,
				'class' => 'oy-element-tab-nav-item',
				'icon' => 'tab-nav-item',
				'category' => __( 'Content', 'your-theme' ),
				'description' => __( 'Include a tab nav item into your tab nav', 'your-theme' ),
				'as_child' => array( 'only' => 'tab_nav' ),
				'content_element' => true,
				'params' => array(
					array(
						'param_name' => 'title',
						'heading' => __( 'Title', 'your-theme' ),
						'description' => __( 'Include a title for your tab nav item.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'active',
						'heading' => __( 'Active', 'your-theme' ),
						'description' => __( 'Select to make this tab nav item active.', 'your-theme' ),
						'type' => 'checkbox',
						'holder' => 'div',
						'value' => array(
							'' => 'true'
						)
					),
					array(
						'param_name' => 'id',
						'heading' => __( 'ID', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique ID.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'class',
						'heading' => __( 'Class', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique class name.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'style',
						'heading' => __( 'Style', 'your-theme' ),
						'description' => __( '(Optional) Enter inline CSS.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					)
				)
			)
		);


		//
		// Tabs.
		//

		vc_map(
			array(
				'base' => 'tabs',
				'name' => __( 'Tabs', 'your-theme' ),
				'weight' => 900,
				'class' => 'oy-element-tabs',
				'icon' => 'tabs',
				'category' => __( 'Content', 'your-theme' ),
				'description' => __( 'Include a tabs container after your tab nav', 'your-theme' ),
				'as_parent' => array( 'only' => 'tab' ),
				'content_element' => true,
				'js_view' => 'VcColumnView',
				'params' => array(
					array(
						'param_name' => 'id',
						'heading' => __( 'ID', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique ID.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'class',
						'heading' => __( 'Class', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique class name.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'style',
						'heading' => __( 'Style', 'your-theme' ),
						'description' => __( '(Optional) Enter inline CSS.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					)
				)
			)
		);


		//
		// Tab.
		//

		vc_map(
			array(
				'base' => 'tab',
				'name' => __( 'Tab', 'your-theme' ),
				'weight' => 890,
				'class' => 'oy-element-tab',
				'icon' => 'tab',
				'category' => __( 'Content', 'your-theme' ),
				'description' => __( 'Include a tab into your tabs container', 'your-theme' ),
				'as_child' => array( 'only' => 'tabs' ),
				'content_element' => true,
				'params' => array(
					array(
						'param_name' => 'content',
						'heading' => __( 'Text', 'your-theme' ),
						'description' => __( 'Enter your text.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textarea_html',
						'holder' => 'div',
						'value' => ''
					),
					array(
						'param_name' => 'active',
						'heading' => __( 'Active', 'your-theme' ),
						'description' => __( 'Select to make this tab active.', 'your-theme' ),
						'type' => 'checkbox',
						'holder' => 'div',
						'value' => array(
							'' => 'true'
						)
					),
					array(
						'param_name' => 'class',
						'heading' => __( 'Class', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique class name.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'style',
						'heading' => __( 'Style', 'your-theme' ),
						'description' => __( '(Optional) Enter inline CSS.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					)
				)
			)
		);


		//
		// Responsive visibility.
		//

		vc_map(
			array(
				'base' => 'visibility',
				'name' => __( 'Visibility', 'your-theme' ),
				'weight' => 850,
				'class' => 'oy-element-visibility',
				'icon' => 'visibility',
				'category' => __( 'Content', 'your-theme' ),
				'description' => __( 'Alter content based on screen size', 'your-theme' ),
				'as_parent' => array( 'only' => 'vc_row, line, gap, clear, highlight, container, blockquote, pullquote, alert, map, skill_bar, code, button, icon, block_grid, image, icon_list, info, columnize, x_video_player, x_video_embed, accordion, tab_nav, tabs, slider, protect, recent_posts, x_audio_player, x_audio_embed, pricing_table, callout, promo, lightbox, author, prompt, share, toc, custom_headline, social, feature_headline, responsive_text, search, text_output, rev_slider_vc, contact-form-7' ),
				'content_element' => true,
				'js_view' => 'VcColumnView',
				'params' => array(
					array(
						'param_name' => 'type',
						'heading' => __( 'Visibility Type', 'your-theme' ),
						'description' => __( 'Select how you want to hide or show your content.', 'your-theme' ),
						'type' => 'dropdown',
						'holder' => 'div',
						'value' => array(
							'- Select Option -' => '',
							'Hidden Phone' => 'hidden-phone',
							'Hidden Tablet' => 'hidden-tablet',
							'Hidden Desktop' => 'hidden-desktop',
							'Visible Phone' => 'visible-phone',
							'Visible Tablet' => 'visible-tablet',
							'Visible Desktop' => 'visible-desktop'
						)
					),
					array(
						'param_name' => 'id',
						'heading' => __( 'ID', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique ID.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'class',
						'heading' => __( 'Class', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique class name.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'style',
						'heading' => __( 'Style', 'your-theme' ),
						'description' => __( '(Optional) Enter inline CSS.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					)
				)
			)
		);


		//
		// Slider.
		//

		vc_map(
			array(
				'base' => 'slider',
				'name' => __( 'Slider', 'your-theme' ),
				'weight' => 590,
				'class' => 'oy-element-slider',
				'icon' => 'slider',
				'category' => __( 'Media', 'your-theme' ),
				'description' => __( 'Include a slider in your content', 'your-theme' ),
				'as_parent' => array( 'only' => 'slide' ),
				'content_element' => true,
				'js_view' => 'VcColumnView',
				'params' => array(
					array(
						'param_name' => 'animation',
						'heading' => __( 'Animation', 'your-theme' ),
						'description' => __( 'Select your slider animation.', 'your-theme' ),
						'type' => 'dropdown',
						'holder' => 'div',
						'value' => array(
							'- Select Option -' => '',
							'Slide' => 'slide',
							'Fade' => 'fade'
						)
					),
					array(
						'param_name' => 'slide_time',
						'heading' => __( 'Slide Time', 'your-theme' ),
						'description' => __( 'The amount of time a slide will stay visible in milliseconds.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div',
						'value' => '5000'
					),
					array(
						'param_name' => 'slide_speed',
						'heading' => __( 'Slide Speed', 'your-theme' ),
						'description' => __( 'The amount of time to transition between slides in milliseconds.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div',
						'value' => '650'
					),
					array(
						'param_name' => 'slideshow',
						'heading' => __( 'Slideshow', 'your-theme' ),
						'description' => __( 'Select for your slides to advance automatically.', 'your-theme' ),
						'type' => 'checkbox',
						'holder' => 'div',
						'value' => array(
							'' => 'true'
						)
					),
					array(
						'param_name' => 'random',
						'heading' => __( 'Random', 'your-theme' ),
						'description' => __( 'Select to randomly display your slides each time the page loads.', 'your-theme' ),
						'type' => 'checkbox',
						'holder' => 'div',
						'value' => array(
							'' => 'true'
						)
					),
					array(
						'param_name' => 'control_nav',
						'heading' => __( 'Control Navigation', 'your-theme' ),
						'description' => __( 'Select to display the control navigation.', 'your-theme' ),
						'type' => 'checkbox',
						'holder' => 'div',
						'value' => array(
							'' => 'true'
						)
					),
					array(
						'param_name' => 'prev_next_nav',
						'heading' => __( 'Previous/Next Navigation', 'your-theme' ),
						'description' => __( 'Select to display the previous/next navigation.', 'your-theme' ),
						'type' => 'checkbox',
						'holder' => 'div',
						'value' => array(
							'' => 'true'
						)
					),
					array(
						'param_name' => 'no_container',
						'heading' => __( 'No Container', 'your-theme' ),
						'description' => __( 'Select to remove the container from your slider.', 'your-theme' ),
						'type' => 'checkbox',
						'holder' => 'div',
						'value' => array(
							'' => 'true'
						)
					),
					array(
						'param_name' => 'id',
						'heading' => __( 'ID', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique ID.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'class',
						'heading' => __( 'Class', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique class name.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'style',
						'heading' => __( 'Style', 'your-theme' ),
						'description' => __( '(Optional) Enter inline CSS.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					)
				)
			)
		);


		//
		// Slide.
		//

		vc_map(
			array(
				'base' => 'slide',
				'name' => __( 'Slide', 'your-theme' ),
				'weight' => 600,
				'class' => 'oy-element-slide',
				'icon' => 'slide',
				'category' => __( 'Media', 'your-theme' ),
				'description' => __( 'Include a slide into your slider', 'your-theme' ),
				'as_child' => array( 'only' => 'slider' ),
				'content_element' => true,
				'params' => array(
					array(
						'param_name' => 'content',
						'heading' => __( 'Text', 'your-theme' ),
						'description' => __( 'Enter your text.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textarea_html',
						'holder' => 'div',
						'value' => ''
					),
					array(
						'param_name' => 'id',
						'heading' => __( 'ID', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique ID.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'class',
						'heading' => __( 'Class', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique class name.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'style',
						'heading' => __( 'Style', 'your-theme' ),
						'description' => __( '(Optional) Enter inline CSS.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					)
				)
			)
		);


		//
		// Protected content.
		//

		vc_map(
			array(
				'base' => 'protect',
				'name' => __( 'Protect', 'your-theme' ),
				'weight' => 840,
				'class' => 'oy-element-protect',
				'icon' => 'protect',
				'category' => __( 'Content', 'your-theme' ),
				'description' => __( 'Protect content from non logged in users', 'your-theme' ),
				'params' => array(
					array(
						'param_name' => 'content',
						'heading' => __( 'Text', 'your-theme' ),
						'description' => __( 'Enter your text.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textarea_html',
						'holder' => 'div',
						'value' => ''
					),
					array(
						'param_name' => 'id',
						'heading' => __( 'ID', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique ID.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'class',
						'heading' => __( 'Class', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique class name.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'style',
						'heading' => __( 'Style', 'your-theme' ),
						'description' => __( '(Optional) Enter inline CSS.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					)
				)
			)
		);


		//
		// Recent posts.
		//

		vc_map(
			array(
				'base' => 'recent_posts',
				'name' => __( 'Recent Posts', 'your-theme' ),
				'weight' => 490,
				'class' => 'oy-element-recent-posts',
				'icon' => 'recent-posts',
				'category' => __( 'Social', 'your-theme' ),
				'description' => __( 'Display your most recent posts', 'your-theme' ),
				'params' => array(
					array(
						'param_name' => 'type',
						'heading' => __( 'Post Type', 'your-theme' ),
						'description' => __( 'Choose between standard posts or portfolio posts.', 'your-theme' ),
						'type' => 'dropdown',
						'holder' => 'div',
						'value' => array(
							'- Select Option -' => '',
							'Posts' => 'post',
							'Portfolio' => 'portfolio'
						)
					),
					array(
						'param_name' => 'count',
						'heading' => __( 'Post Count', 'your-theme' ),
						'description' => __( 'Select how many posts to display.', 'your-theme' ),
						'type' => 'dropdown',
						'holder' => 'div',
						'value' => array(
							'- Select Option -' => '',
							'1' => '1',
							'2' => '2',
							'3' => '3',
							'4' => '4'
						)
					),
					array(
						'param_name' => 'offset',
						'heading' => __( 'Offset', 'your-theme' ),
						'description' => __( 'Enter a number to offset initial starting post of your recent posts.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'category',
						'heading' => __( 'Category', 'your-theme' ),
						'description' => __( 'To filter your posts by category, enter in the slug of your desired category. To filter by multiple categories, enter in your slugs separated by a comma.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'orientation',
						'heading' => __( 'Orientation', 'your-theme' ),
						'description' => __( 'Select the orientation or your recent posts.', 'your-theme' ),
						'type' => 'dropdown',
						'holder' => 'div',
						'value' => array(
							'- Select Option -' => '',
							'Horizontal' => 'horizontal',
							'Vertical' => 'vertical'
						)
					),
					array(
						'param_name' => 'no_image',
						'heading' => __( 'Remove Featured Image', 'your-theme' ),
						'description' => __( 'Select to remove the featured image.', 'your-theme' ),
						'type' => 'checkbox',
						'holder' => 'div',
						'value' => array(
							'' => 'true'
						)
					),
					array(
						'param_name' => 'fade',
						'heading' => __( 'Fade Effect', 'your-theme' ),
						'description' => __( 'Select to activate the fade effect.', 'your-theme' ),
						'type' => 'checkbox',
						'holder' => 'div',
						'value' => array(
							'' => 'true'
						)
					),
					array(
						'param_name' => 'id',
						'heading' => __( 'ID', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique ID.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'class',
						'heading' => __( 'Class', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique class name.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'style',
						'heading' => __( 'Style', 'your-theme' ),
						'description' => __( '(Optional) Enter inline CSS.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					)
				)
			)
		);


		//
		// Audio player.
		//

		vc_map(
			array(
				'base' => 'x_audio_player',
				'name' => __( 'Audio (Self Hosted)', 'your-theme' ),
				'weight' => 550,
				'class' => 'oy-element-oy-audio-player',
				'icon' => 'oy-audio-player',
				'category' => __( 'Media', 'your-theme' ),
				'description' => __( 'Place audio files into your content', 'your-theme' ),
				'params' => array(
					array(
						'param_name' => 'mp3',
						'heading' => __( 'MP3', 'your-theme' ),
						'description' => __( 'Include and .mp3 version of your audio.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'oga',
						'heading' => __( 'OGA', 'your-theme' ),
						'description' => __( 'Include and .oga version of your audio for additional native browser support.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'advanced_controls',
						'heading' => __( 'Advanced Controls', 'your-theme' ),
						'description' => __( 'Select to enable advanced controls on your self-hosted audio.', 'your-theme' ),
						'type' => 'checkbox',
						'holder' => 'div',
						'value' => array(
							'' => 'true'
						)
					),
					array(
						'param_name' => 'id',
						'heading' => __( 'ID', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique ID.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'class',
						'heading' => __( 'Class', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique class name.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'style',
						'heading' => __( 'Style', 'your-theme' ),
						'description' => __( '(Optional) Enter inline CSS.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					)
				)
			)
		);


		//
		// Audio embed.
		//

		vc_map(
			array(
				'base' => 'x_audio_embed',
				'name' => __( 'Audio (Embedded)', 'your-theme' ),
				'weight' => 540,
				'class' => 'oy-element-oy-audio-embed',
				'icon' => 'oy-audio-embed',
				'category' => __( 'Media', 'your-theme' ),
				'description' => __( 'Place audio files into your content', 'your-theme' ),
				'params' => array(
					array(
						'param_name' => 'content',
						'heading' => __( 'Code (See Notes Below)', 'your-theme' ),
						'description' => __( 'Switch to the "text" editor and do not place anything else here other than your &lsaquo;iframe&rsaquo; or &lsaquo;embed&rsaquo; code.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textarea_html',
						'holder' => 'div',
						'value' => ''
					),
					array(
						'param_name' => 'id',
						'heading' => __( 'ID', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique ID.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'class',
						'heading' => __( 'Class', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique class name.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'style',
						'heading' => __( 'Style', 'your-theme' ),
						'description' => __( '(Optional) Enter inline CSS.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					)
				)
			)
		);


		//
		// Pricing table.
		//

		vc_map(
			array(
				'base' => 'pricing_table',
				'name' => __( 'Pricing Table', 'your-theme' ),
				'weight' => 680,
				'class' => 'oy-element-pricing-table',
				'icon' => 'pricing-table',
				'category' => __( 'Marketing', 'your-theme' ),
				'description' => __( 'Include a pricing table in your content', 'your-theme' ),
				'as_parent' => array( 'only' => 'pricing_table_column' ),
				'content_element' => true,
				'js_view' => 'VcColumnView',
				'params' => array(
					array(
						'param_name' => 'columns',
						'heading' => __( 'Columns', 'your-theme' ),
						'description' => __( 'Select how many columns you want for your pricing table.', 'your-theme' ),
						'type' => 'dropdown',
						'holder' => 'div',
						'value' => array(
							'- Select Option -' => '',
							'1' => '1',
							'2' => '2',
							'3' => '3',
							'4' => '4',
							'5' => '5'
						)
					),
					array(
						'param_name' => 'id',
						'heading' => __( 'ID', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique ID.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'class',
						'heading' => __( 'Class', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique class name.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'style',
						'heading' => __( 'Style', 'your-theme' ),
						'description' => __( '(Optional) Enter inline CSS.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					)
				)
			)
		);


		//
		// Pricing table column.
		//

		vc_map(
			array(
				'base' => 'pricing_table_column',
				'name' => __( 'Pricing Table Column', 'your-theme' ),
				'weight' => 670,
				'class' => 'oy-element-pricing-table-column',
				'icon' => 'pricing-table-column',
				'category' => __( 'Marketing', 'your-theme' ),
				'description' => __( 'Include a pricing table column', 'your-theme' ),
				'as_child' => array( 'only' => 'pricing_table' ),
				'content_element' => true,
				'params' => array(
					array(
						'param_name' => 'content',
						'heading' => __( 'Text', 'your-theme' ),
						'description' => __( 'Enter your text.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textarea_html',
						'holder' => 'div',
						'value' => ''
					),
					array(
						'param_name' => 'title',
						'heading' => __( 'Title', 'your-theme' ),
						'description' => __( 'Include a title for your pricing column.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'featured',
						'heading' => __( 'Featured', 'your-theme' ),
						'description' => __( 'Select to make this your featured offer.', 'your-theme' ),
						'type' => 'checkbox',
						'holder' => 'div',
						'value' => array(
							'' => 'true'
						)
					),
					array(
						'param_name' => 'featured_sub',
						'heading' => __( 'Featured Sub Heading', 'your-theme' ),
						'description' => __( 'Include a sub heading for your featured column.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'currency',
						'heading' => __( 'Currency Symbol', 'your-theme' ),
						'description' => __( 'Enter in the currency symbol you want to use.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'price',
						'heading' => __( 'Price', 'your-theme' ),
						'description' => __( 'Enter in the price for this pricing column.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'interval',
						'heading' => __( 'Interval', 'your-theme' ),
						'description' => __( 'Enter in the time period that this pricing column is for.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div',
						'value' => 'Per Month'
					),
					array(
						'param_name' => 'id',
						'heading' => __( 'ID', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique ID.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'class',
						'heading' => __( 'Class', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique class name.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'style',
						'heading' => __( 'Style', 'your-theme' ),
						'description' => __( '(Optional) Enter inline CSS.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					)
				)
			)
		);


		//
		// Callout.
		//

		vc_map(
			array(
				'base' => 'callout',
				'name' => __( 'Callout', 'your-theme' ),
				'weight' => 710,
				'class' => 'oy-element-callout',
				'icon' => 'callout',
				'category' => __( 'Marketing', 'your-theme' ),
				'description' => __( 'Include a marketing callout into your content', 'your-theme' ),
				'params' => array(
					array(
						'param_name' => 'type',
						'heading' => __( 'Alignment', 'your-theme' ),
						'description' => __( 'Select the alignment for your callout.', 'your-theme' ),
						'type' => 'dropdown',
						'holder' => 'div',
						'value' => array(
							'- Select Option -' => '',
							'Left' => 'left',
							'Center' => 'center',
							'Right' => 'right'
						)
					),
					array(
						'param_name' => 'title',
						'heading' => __( 'Title', 'your-theme' ),
						'description' => __( 'Enter the title for your callout.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'message',
						'heading' => __( 'Message', 'your-theme' ),
						'description' => __( 'Enter the message for your callout.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textarea',
						'holder' => 'div'
					),
					array(
						'param_name' => 'button_text',
						'heading' => __( 'Button Text', 'your-theme' ),
						'description' => __( 'Enter the text for your callout button.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'button_icon',
						'heading' => __( 'Button Icon', 'your-theme' ),
						'description' => __( 'Optionally enter the button icon.', 'your-theme' ),
						'type' => 'dropdown',
						'holder' => 'div',
						'value' => $param_icon_value
					),
					array(
						'param_name' => 'circle',
						'heading' => __( 'Marketing Circle', 'your-theme' ),
						'description' => __( 'Select to include a marketing circle around your button.', 'your-theme' ),
						'type' => 'checkbox',
						'holder' => 'div',
						'value' => array(
							'' => 'true'
						)
					),
					array(
						'param_name' => 'href',
						'heading' => __( 'Href', 'your-theme' ),
						'description' => __( 'Enter in the URL you want your callout button to link to.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'target',
						'heading' => __( 'Target', 'your-theme' ),
						'description' => __( 'Select to open your callout link button in a new window.', 'your-theme' ),
						'type' => 'checkbox',
						'holder' => 'div',
						'value' => array(
							'' => 'blank'
						)
					),
					array(
						'param_name' => 'id',
						'heading' => __( 'ID', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique ID.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'class',
						'heading' => __( 'Class', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique class name.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'style',
						'heading' => __( 'Style', 'your-theme' ),
						'description' => __( '(Optional) Enter inline CSS.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					)
				)
			)
		);


		//
		// Promo.
		//

		vc_map(
			array(
				'base' => 'promo',
				'name' => __( 'Promo', 'your-theme' ),
				'weight' => 700,
				'class' => 'oy-element-promo',
				'icon' => 'promo',
				'category' => __( 'Marketing', 'your-theme' ),
				'description' => __( 'Include a marketing promo in your content', 'your-theme' ),
				'params' => array(
					array(
						'param_name' => 'content',
						'heading' => __( 'Text', 'your-theme' ),
						'description' => __( 'Enter your text.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textarea_html',
						'holder' => 'div',
						'value' => ''
					),
					array(
						'param_name' => 'image',
						'heading' => __( 'Promo Image', 'your-theme' ),
						'description' => __( 'Include an image for your promo element.', 'your-theme' ),
						'type' => 'attach_image',
						'holder' => 'div'
					),
					array(
						'param_name' => 'alt',
						'heading' => __( 'Alt', 'your-theme' ),
						'description' => __( 'Enter in the alt text for your promo image.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'id',
						'heading' => __( 'ID', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique ID.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'class',
						'heading' => __( 'Class', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique class name.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'style',
						'heading' => __( 'Style', 'your-theme' ),
						'description' => __( '(Optional) Enter inline CSS.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					)
				)
			)
		);


		//
		// Responsive lightbox.
		//

		vc_map(
			array(
				'base' => 'lightbox',
				'name' => __( 'Responsive Lightbox', 'your-theme' ),
				'weight' => 580,
				'class' => 'oy-element-lightbox',
				'icon' => 'lightbox',
				'category' => __( 'Media', 'your-theme' ),
				'description' => __( 'Display images in a responsive lightbox', 'your-theme' ),
				'params' => array(
					array(
						'param_name' => 'selector',
						'heading' => __( 'Selector', 'your-theme' ),
						'description' => __( 'Enter in the selector for your images (e.g. if your class is "lightbooy-img" enter ".lightbooy-img"). Set to ".oy-img-link" to automatically setup a lightbox for all linked [image] shortcodes on your page.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div',
						'value' => '.oy-img-link'
					),
					array(
						'param_name' => 'deeplink',
						'heading' => __( 'Deeplink', 'your-theme' ),
						'description' => __( 'Select to activate deeplinking (creates unique link for each image).', 'your-theme' ),
						'type' => 'checkbox',
						'holder' => 'div',
						'value' => array(
							'' => 'true'
						)
					),
					array(
						'param_name' => 'opacity',
						'heading' => __( 'Backdrop Opacity', 'your-theme' ),
						'description' => __( 'Enter in the opacity for the backdrop (valid inputs are numbers 0 to 1).', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div',
						'value' => '0.875'
					),
					array(
						'param_name' => 'prev_scale',
						'heading' => __( 'Previous Item Scale', 'your-theme' ),
						'description' => __( 'Enter in the scale for the previous item (valid inputs are numbers 0 to 1).', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div',
						'value' => '0.75'
					),
					array(
						'param_name' => 'prev_opacity',
						'heading' => __( 'Previous Item Opacity', 'your-theme' ),
						'description' => __( 'Enter in the opacity for the previous item (valid inputs are numbers 0 to 1).', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div',
						'value' => '0.75'
					),
					array(
						'param_name' => 'next_scale',
						'heading' => __( 'Next Item Scale', 'your-theme' ),
						'description' => __( 'Enter in the scale for the next item (valid inputs are numbers 0 to 1).', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div',
						'value' => '0.75'
					),
					array(
						'param_name' => 'next_opacity',
						'heading' => __( 'Next Item Opacity', 'your-theme' ),
						'description' => __( 'Enter in the opacity for the next item (valid inputs are numbers 0 to 1).', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div',
						'value' => '0.75'
					),
					array(
						'param_name' => 'orientation',
						'heading' => __( 'Orientation', 'your-theme' ),
						'description' => __( 'Select the orientation of your lightbox.', 'your-theme' ),
						'type' => 'dropdown',
						'holder' => 'div',
						'value' => array(
							'- Select Option -' => '',
							'Horizontal' => 'horizontal',
							'Vertical' => 'vertical'
						)
					),
					array(
						'param_name' => 'thumbnails',
						'heading' => __( 'Thumbnails', 'your-theme' ),
						'description' => __( 'Select to activate thumbnail navigation.', 'your-theme' ),
						'type' => 'checkbox',
						'holder' => 'div',
						'value' => array(
							'' => 'true'
						)
					)
				)
			)
		);


		//
		// Post author.
		//

		vc_map(
			array(
				'base' => 'author',
				'name' => __( 'Author', 'your-theme' ),
				'weight' => 510,
				'class' => 'oy-element-author',
				'icon' => 'author',
				'category' => __( 'Social', 'your-theme' ),
				'description' => __( 'Include post author information', 'your-theme' ),
				'params' => array(
					array(
						'param_name' => 'id',
						'heading' => __( 'ID', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique ID.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'class',
						'heading' => __( 'Class', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique class name.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'style',
						'heading' => __( 'Style', 'your-theme' ),
						'description' => __( '(Optional) Enter inline CSS.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'title',
						'heading' => __( 'Title', 'your-theme' ),
						'description' => __( 'Enter in a title for your author information.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div',
						'value' => 'About the Author'
					),
					array(
						'param_name' => 'author_id',
						'heading' => __( 'Author ID', 'your-theme' ),
						'description' => __( 'By default the author of the post or page will be output by leaving this input blank. If you would like to output the information of another author, enter in their user ID here.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					)
				)
			)
		);


		//
		// Prompt.
		//

		vc_map(
			array(
				'base' => 'prompt',
				'name' => __( 'Prompt', 'your-theme' ),
				'weight' => 690,
				'class' => 'oy-element-prompt',
				'icon' => 'prompt',
				'category' => __( 'Marketing', 'your-theme' ),
				'description' => __( 'Include a marketing prompt into your content', 'your-theme' ),
				'params' => array(
					array(
						'param_name' => 'type',
						'heading' => __( 'Alignment', 'your-theme' ),
						'description' => __( 'Select the alignment of your prompt.', 'your-theme' ),
						'type' => 'dropdown',
						'holder' => 'div',
						'value' => array(
							'- Select Option -' => '',
							'Left' => 'left',
							'Right' => 'right'
						)
					),
					array(
						'param_name' => 'title',
						'heading' => __( 'Title', 'your-theme' ),
						'description' => __( 'Enter the title for your prompt.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'message',
						'heading' => __( 'Message', 'your-theme' ),
						'description' => __( 'Enter the message for your prompt.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textarea',
						'holder' => 'div'
					),
					array(
						'param_name' => 'button_text',
						'heading' => __( 'Button Text', 'your-theme' ),
						'description' => __( 'Enter the text for your prompt button.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'button_icon',
						'heading' => __( 'Button Icon', 'your-theme' ),
						'description' => __( 'Optionally enter the button icon.', 'your-theme' ),
						'type' => 'dropdown',
						'holder' => 'div',
						'value' => $param_icon_value
					),
					array(
						'param_name' => 'circle',
						'heading' => __( 'Marketing Circle', 'your-theme' ),
						'description' => __( 'Select to include a marketing circle around your button.', 'your-theme' ),
						'type' => 'checkbox',
						'holder' => 'div',
						'value' => array(
							'' => 'true'
						)
					),
					array(
						'param_name' => 'href',
						'heading' => __( 'Href', 'your-theme' ),
						'description' => __( 'Enter in the URL you want your prompt button to link to.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'target',
						'heading' => __( 'Target', 'your-theme' ),
						'description' => __( 'Select to open your prompt button link in a new window.', 'your-theme' ),
						'type' => 'checkbox',
						'holder' => 'div',
						'value' => array(
							'' => 'blank'
						)
					),
					array(
						'param_name' => 'id',
						'heading' => __( 'ID', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique ID.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'class',
						'heading' => __( 'Class', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique class name.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'style',
						'heading' => __( 'Style', 'your-theme' ),
						'description' => __( '(Optional) Enter inline CSS.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					)
				)
			)
		);


		//
		// Entry share.
		//

		vc_map(
			array(
				'base' => 'share',
				'name' => __( 'Social Sharing', 'your-theme' ),
				'weight' => 500,
				'class' => 'oy-element-share',
				'icon' => 'share',
				'category' => __( 'Social', 'your-theme' ),
				'description' => __( 'Include social sharing into your content', 'your-theme' ),
				'params' => array(
					array(
						'param_name' => 'title',
						'heading' => __( 'Title', 'your-theme' ),
						'description' => __( 'Enter in a title for your social links.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div',
						'value' => 'Share this Post'
					),
					array(
						'param_name' => 'facebook',
						'heading' => __( 'Facebook', 'your-theme' ),
						'description' => __( 'Select to activate the Facebook sharing link.', 'your-theme' ),
						'type' => 'checkbox',
						'holder' => 'div',
						'value' => array(
							'' => 'true'
						)
					),
					array(
						'param_name' => 'twitter',
						'heading' => __( 'Twitter', 'your-theme' ),
						'description' => __( 'Select to activate the Twitter sharing link.', 'your-theme' ),
						'type' => 'checkbox',
						'holder' => 'div',
						'value' => array(
							'' => 'true'
						)
					),
					array(
						'param_name' => 'google_plus',
						'heading' => __( 'Google Plus', 'your-theme' ),
						'description' => __( 'Select to activate the Google Plus sharing link.', 'your-theme' ),
						'type' => 'checkbox',
						'holder' => 'div',
						'value' => array(
							'' => 'true'
						)
					),
					array(
						'param_name' => 'linkedin',
						'heading' => __( 'LinkedIn', 'your-theme' ),
						'description' => __( 'Select to activate the LinkedIn sharing link.', 'your-theme' ),
						'type' => 'checkbox',
						'holder' => 'div',
						'value' => array(
							'' => 'true'
						)
					),
					array(
						'param_name' => 'pinterest',
						'heading' => __( 'Pinterest', 'your-theme' ),
						'description' => __( 'Select to activate the Pinterest sharing link.', 'your-theme' ),
						'type' => 'checkbox',
						'holder' => 'div',
						'value' => array(
							'' => 'true'
						)
					),
					array(
						'param_name' => 'reddit',
						'heading' => __( 'Reddit', 'your-theme' ),
						'description' => __( 'Select to activate the Reddit sharing link.', 'your-theme' ),
						'type' => 'checkbox',
						'holder' => 'div',
						'value' => array(
							'' => 'true'
						)
					),
					array(
						'param_name' => 'email',
						'heading' => __( 'Email', 'your-theme' ),
						'description' => __( 'Select to activate the email sharing link.', 'your-theme' ),
						'type' => 'checkbox',
						'holder' => 'div',
						'value' => array(
							'' => 'true'
						)
					),
					array(
						'param_name' => 'id',
						'heading' => __( 'ID', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique ID.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'class',
						'heading' => __( 'Class', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique class name.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'style',
						'heading' => __( 'Style', 'your-theme' ),
						'description' => __( '(Optional) Enter inline CSS.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					)
				)
			)
		);


		//
		// Table of contents.
		//

		vc_map(
			array(
				'base' => 'toc',
				'name' => __( 'Table of Contents', 'your-theme' ),
				'weight' => 630,
				'class' => 'oy-element-toc',
				'icon' => 'toc',
				'category' => __( 'Information', 'your-theme' ),
				'description' => __( 'Include a table of contents in your content', 'your-theme' ),
				'as_parent' => array( 'only' => 'toc_item' ),
				'content_element' => true,
				'js_view' => 'VcColumnView',
				'params' => array(
					array(
						'param_name' => 'title',
						'heading' => __( 'Title', 'your-theme' ),
						'description' => __( 'Set the title of the table of contents.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div',
						'value' => 'Table of Contents'
					),
					array(
						'param_name' => 'type',
						'heading' => __( 'Alignment', 'your-theme' ),
						'description' => __( 'Select the alignment of your table of contents.', 'your-theme' ),
						'type' => 'dropdown',
						'holder' => 'div',
						'value' => array(
							'- Select Option -' => '',
							'Left' => 'left',
							'Right' => 'right',
							'Fullwidth' => 'block'
						)
					),
					array(
						'param_name' => 'columns',
						'heading' => __( 'Columns', 'your-theme' ),
						'description' => __( 'Select a column count for your links if you have chosen "Fullwidth" as your alignment.', 'your-theme' ),
						'type' => 'dropdown',
						'holder' => 'div',
						'value' => array(
							'- Select Option -' => '',
							'1' => '1',
							'2' => '2',
							'3' => '3'
						)
					),
					array(
						'param_name' => 'id',
						'heading' => __( 'ID', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique ID.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'class',
						'heading' => __( 'Class', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique class name.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'style',
						'heading' => __( 'Style', 'your-theme' ),
						'description' => __( '(Optional) Enter inline CSS.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					)
				)
			)
		);


		//
		// Table of contents item.
		//

		vc_map(
			array(
				'base' => 'toc_item',
				'name' => __( 'Table of Contents Item', 'your-theme' ),
				'weight' => 620,
				'class' => 'oy-element-toc-item',
				'icon' => 'toc-item',
				'category' => __( 'Information', 'your-theme' ),
				'description' => __( 'Include a table of contents item', 'your-theme' ),
				'as_child' => array( 'only' => 'toc' ),
				'content_element' => true,
				'params' => array(
					array(
						'param_name' => 'title',
						'heading' => __( 'Title', 'your-theme' ),
						'description' => __( 'Set the title of the table of contents item.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'page',
						'heading' => __( 'Page', 'your-theme' ),
						'description' => __( 'Set the page of the table of contents item.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'id',
						'heading' => __( 'ID', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique ID.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'class',
						'heading' => __( 'Class', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique class name.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'style',
						'heading' => __( 'Style', 'your-theme' ),
						'description' => __( '(Optional) Enter inline CSS.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					)
				)
			)
		);


		//
		// Custom headline.
		//

		vc_map(
			array(
				'base' => 'custom_headline',
				'name' => __( 'Custom Headline', 'your-theme' ),
				'weight' => 830,
				'class' => 'oy-element-custom-headline',
				'icon' => 'custom-headline',
				'category' => __( 'Typography', 'your-theme' ),
				'description' => __( 'Include a custom headline in your content', 'your-theme' ),
				'params' => array(
					array(
						'param_name' => 'content',
						'heading' => __( 'Text', 'your-theme' ),
						'description' => __( 'Enter your text.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textarea_html',
						'holder' => 'div',
						'value' => ''
					),
					array(
						'param_name' => 'type',
						'heading' => __( 'Alignment', 'your-theme' ),
						'description' => __( 'Select which way to align the custom headline.', 'your-theme' ),
						'type' => 'dropdown',
						'holder' => 'div',
						'value' => array(
							'- Select Option -' => '',
							'Left' => 'left',
							'Center' => 'center',
							'Right' => 'right'
						)
					),
					array(
						'param_name' => 'level',
						'heading' => __( 'Heading Level', 'your-theme' ),
						'description' => __( 'Select which level to use for your heading (e.g. h2).', 'your-theme' ),
						'type' => 'dropdown',
						'holder' => 'div',
						'value' => array(
							'- Select Option -' => '',
							'h1' => 'h1',
							'h2' => 'h2',
							'h3' => 'h3',
							'h4' => 'h4',
							'h5' => 'h5',
							'h6' => 'h6'
						)
					),
					array(
						'param_name' => 'looks_like',
						'heading' => __( 'Looks Like', 'your-theme' ),
						'description' => __( 'Select which level your heading should look like (e.g. h3).', 'your-theme' ),
						'type' => 'dropdown',
						'holder' => 'div',
						'value' => array(
							'- Select Option -' => '',
							'h1' => 'h1',
							'h2' => 'h2',
							'h3' => 'h3',
							'h4' => 'h4',
							'h5' => 'h5',
							'h6' => 'h6'
						)
					),
					array(
						'param_name' => 'accent',
						'heading' => __( 'Accent', 'your-theme' ),
						'description' => __( 'Select to activate the heading accent.', 'your-theme' ),
						'type' => 'checkbox',
						'holder' => 'div',
						'value' => array(
							'' => 'true'
						)
					),
					array(
						'param_name' => 'id',
						'heading' => __( 'ID', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique ID.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'class',
						'heading' => __( 'Class', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique class name.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'style',
						'heading' => __( 'Style', 'your-theme' ),
						'description' => __( '(Optional) Enter inline CSS.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					)
				)
			)
		);


		//
		// Container.
		//

		vc_map(
			array(
				'base' => 'container',
				'name' => __( 'Container', 'your-theme' ),
				'weight' => 990,
				'class' => 'oy-element-container',
				'icon' => 'container',
				'category' => __( 'Structure', 'your-theme' ),
				'description' => __( 'Include a container in your content', 'your-theme' ),
				'as_parent' => array( 'only' => 'vc_row, line, gap, clear, highlight, blockquote, pullquote, alert, map, skill_bar, code, button, icon, block_grid, image, icon_list, info, columnize, x_video_player, x_video_embed, accordion, tab_nav, tabs, visibility, slider, protect, recent_posts, x_audio_player, x_audio_embed, pricing_table, callout, promo, lightbox, author, prompt, share, toc, custom_headline, social, feature_headline, responsive_text, search, text_output, rev_slider_vc, contact-form-7' ),
				'content_element' => true,
				'js_view' => 'VcColumnView',
				'params' => array(
					array(
						'param_name' => 'id',
						'heading' => __( 'ID', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique ID.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'class',
						'heading' => __( 'Class', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique class name.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'style',
						'heading' => __( 'Style', 'your-theme' ),
						'description' => __( '(Optional) Enter inline CSS.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					)
				)
			)
		);


		//
		// Feature headline.
		//

		vc_map(
			array(
				'base' => 'feature_headline',
				'name' => __( 'Feature Headline', 'your-theme' ),
				'weight' => 820,
				'class' => 'oy-element-feature-headline',
				'icon' => 'feature-headline',
				'category' => __( 'Typography', 'your-theme' ),
				'description' => __( 'Include a feature headline in your content', 'your-theme' ),
				'params' => array(
					array(
						'param_name' => 'content',
						'heading' => __( 'Text', 'your-theme' ),
						'description' => __( 'Enter your text.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textarea_html',
						'holder' => 'div',
						'value' => ''
					),
					array(
						'param_name' => 'type',
						'heading' => __( 'Alignment', 'your-theme' ),
						'description' => __( 'Select which way to align the feature headline.', 'your-theme' ),
						'type' => 'dropdown',
						'holder' => 'div',
						'value' => array(
							'- Select Option -' => '',
							'Left' => 'left',
							'Center' => 'center',
							'Right' => 'right'
						)
					),
					array(
						'param_name' => 'level',
						'heading' => __( 'Heading Level', 'your-theme' ),
						'description' => __( 'Select which level to use for your heading (e.g. h2).', 'your-theme' ),
						'type' => 'dropdown',
						'holder' => 'div',
						'value' => array(
							'- Select Option -' => '',
							'h1' => 'h1',
							'h2' => 'h2',
							'h3' => 'h3',
							'h4' => 'h4',
							'h5' => 'h5',
							'h6' => 'h6'
						)
					),
					array(
						'param_name' => 'looks_like',
						'heading' => __( 'Looks Like', 'your-theme' ),
						'description' => __( 'Select which level your heading should look like (e.g. h3).', 'your-theme' ),
						'type' => 'dropdown',
						'holder' => 'div',
						'value' => array(
							'- Select Option -' => '',
							'h1' => 'h1',
							'h2' => 'h2',
							'h3' => 'h3',
							'h4' => 'h4',
							'h5' => 'h5',
							'h6' => 'h6'
						)
					),
					array(
						'param_name' => 'icon',
						'heading' => __( 'Icon', 'your-theme' ),
						'description' => __( 'Select the icon to use with your feature headline.', 'your-theme' ),
						'type' => 'dropdown',
						'holder' => 'div',
						'value' => $param_icon_value
					),
					array(
						'param_name' => 'id',
						'heading' => __( 'ID', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique ID.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'class',
						'heading' => __( 'Class', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique class name.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'style',
						'heading' => __( 'Style', 'your-theme' ),
						'description' => __( '(Optional) Enter inline CSS.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					)
				)
			)
		);


		//
		// Responsive text.
		//


		vc_map(
			array(
				'base' => 'responsive_text',
				'name' => __( 'Responsive Text', 'your-theme' ),
				'weight' => 730,
				'class' => 'oy-element-responsive-text',
				'icon' => 'responsive-text',
				'category' => __( 'Typography', 'your-theme' ),
				'description' => __( 'Include responsive text in your content', 'your-theme' ),
				'params' => array(
					array(
						'param_name' => 'selector',
						'heading' => __( 'Selector', 'your-theme' ),
						'description' => __( 'Enter in the selector for your responsive text (e.g. if your class is "h-responsive" enter ".h-responsive").', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div',
					),
					array(
						'param_name' => 'compression',
						'heading' => __( 'Compression', 'your-theme' ),
						'description' => __( 'Enter the compression for your responsive text (adjust up and down to desired level in small increments).', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div',
						'value' => '1.0'
					),
					array(
						'param_name' => 'min_size',
						'heading' => __( 'Minimum Size', 'your-theme' ),
						'description' => __( 'Enter the minimum size of your responsive text.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'max_size',
						'heading' => __( 'Maximum Size', 'your-theme' ),
						'description' => __( 'Enter the maximum size of your responsive text.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					)
				)
			)
		);


		//
		// Search.
		//

		vc_map(
			array(
				'base' => 'search',
				'name' => __( 'Search', 'your-theme' ),
				'weight' => 480,
				'class' => 'oy-element-search',
				'icon' => 'search',
				'category' => __( 'Content', 'your-theme' ),
				'description' => __( 'Include a search field in your content', 'your-theme' ),
				'params' => array(
					array(
						'param_name' => 'id',
						'heading' => __( 'ID', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique ID.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'class',
						'heading' => __( 'Class', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique class name.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'style',
						'heading' => __( 'Style', 'your-theme' ),
						'description' => __( '(Optional) Enter inline CSS.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					)
				)
			)
		);


		//
		// Counter.
		//

		vc_map(
			array(
				'base' => 'counter',
				'name' => __( 'Counter', 'your-theme' ),
				'weight' => 470,
				'class' => 'oy-element-counter',
				'icon' => 'counter',
				'category' => __( 'Information', 'your-theme' ),
				'description' => __( 'Include an animated number counter in your content', 'your-theme' ),
				'params' => array(
					array(
						'param_name' => 'num_start',
						'heading' => __( 'Starting Number', 'your-theme' ),
						'description' => __( 'Enter in the number that you would like your counter to start from.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div',
						'value' => '0'
					),
					array(
						'param_name' => 'num_end',
						'heading' => __( 'Ending Number', 'your-theme' ),
						'description' => __( 'Enter int he number that you would like your counter to end at. This must be higher than your starting number.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div',
						'value' => '100'
					),
					array(
						'param_name' => 'num_speed',
						'heading' => __( 'Counter Speed', 'your-theme' ),
						'description' => __( 'The amount of time to transition between numbers in milliseconds.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div',
						'value' => '1500'
					),
					array(
						'param_name' => 'num_prefix',
						'heading' => __( 'Number Prefix', 'your-theme' ),
						'description' => __( 'Prefix your number with a symbol or text.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'num_suffix',
						'heading' => __( 'Number Suffix', 'your-theme' ),
						'description' => __( 'Suffix your number with a symbol or text.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'num_color',
						'heading' => __( 'Number Color', 'your-theme' ),
						'description' => __( 'Select the color of your number.', 'your-theme' ),
						'type' => 'colorpicker',
						'holder' => 'div'
					),
					array(
						'param_name' => 'text_above',
						'heading' => __( 'Text Above', 'your-theme' ),
						'description' => __( 'Optionally include text above your number.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'text_below',
						'heading' => __( 'Text Below', 'your-theme' ),
						'description' => __( 'Optionally include text below your number.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'text_color',
						'heading' => __( 'Text Color', 'your-theme' ),
						'description' => __( 'Select the color of your text above and below the number if you have include any.', 'your-theme' ),
						'type' => 'colorpicker',
						'holder' => 'div'
					),
					array(
						'param_name' => 'id',
						'heading' => __( 'ID', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique ID.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'class',
						'heading' => __( 'Class', 'your-theme' ),
						'description' => __( '(Optional) Enter a unique class name.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					),
					array(
						'param_name' => 'style',
						'heading' => __( 'Style', 'your-theme' ),
						'description' => __( '(Optional) Enter inline CSS.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textfield',
						'holder' => 'div'
					)
				)
			)
		);


		//
		// Text output.
		//

		vc_map(
			array(
				'base' => 'text_output',
				'name' => __( 'Text', 'your-theme' ),
				'weight' => 940,
				'class' => 'oy-element-text-output',
				'icon' => 'text-output',
				'category' => __( 'Content', 'your-theme' ),
				'description' => __( 'Include a block of text in your content', 'your-theme' ),
				'params' => array(
					array(
						'param_name' => 'content',
						'heading' => __( 'Text', 'your-theme' ),
						'description' => __( 'Enter your text.', 'your-theme' ),
						'save_always' => true,
						'type' => 'textarea_html',
						'holder' => 'div',
						'value' => ''
					)
				)
			)
		);
	}
	
	add_action( 'vc_before_init', 'oy_map_vc_shortcodes' );
	
	//
  // Extend container class (parents).
  //

  class WPBakeryShortCode_Accordion extends WPBakeryShortCodesContainer { }
  class WPBakeryShortCode_Block_Grid extends WPBakeryShortCodesContainer { }
  class WPBakeryShortCode_Container extends WPBakeryShortCodesContainer { }
  class WPBakeryShortCode_Fade extends WPBakeryShortCodesContainer { }
  class WPBakeryShortCode_Icon_List extends WPBakeryShortCodesContainer { }
  class WPBakeryShortCode_Pricing_Table extends WPBakeryShortCodesContainer { }
  class WPBakeryShortCode_Slider extends WPBakeryShortCodesContainer { }
  class WPBakeryShortCode_Tab_Nav extends WPBakeryShortCodesContainer { }
  class WPBakeryShortCode_Tabs extends WPBakeryShortCodesContainer { }
  class WPBakeryShortCode_Toc extends WPBakeryShortCodesContainer { }
  class WPBakeryShortCode_Visibility extends WPBakeryShortCodesContainer { }
  class WPBakeryShortCode_Google_Map extends WPBakeryShortCodesContainer { }

  //
  // Extend shortcode class (children).
  //

  class WPBakeryShortCode_Accordion_Item extends WPBakeryShortCode { }
  class WPBakeryShortCode_Block_Grid_Item extends WPBakeryShortCode { }
  class WPBakeryShortCode_Icon_List_Item extends WPBakeryShortCode { }
  class WPBakeryShortCode_Pricing_Table_Column extends WPBakeryShortCode { }
  class WPBakeryShortCode_Slide extends WPBakeryShortCode { }
  class WPBakeryShortCode_Tab_Nav_Item extends WPBakeryShortCode { }
  class WPBakeryShortCode_Tab extends WPBakeryShortCode { }
  class WPBakeryShortCode_Toc_Item extends WPBakeryShortCode { }
  class WPBakeryShortCode_Google_Map_marker extends WPBakeryShortCode { }
	
	
}
