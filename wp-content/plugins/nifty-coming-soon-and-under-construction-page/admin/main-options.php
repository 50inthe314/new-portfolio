<?php

/**
 * Nifty Coming Soon, Maintenance & Under Construction Plugin by Davor Veselinovic
 *
 *
 * Initialize the Nifty ptions panel based on OptionTree
 *
 */

add_action( 'init', 'nifty_cs_custom_theme_options' );

/**
 * Build the custom settings & update OptionTree.
 */

function nifty_cs_custom_theme_options() {

  add_action('admin_action_nifty_dismiss_notice', 'admin_action_dismiss_notice');

  /* OptionTree is not loaded yet7, or this is not an admin request */
  if ( ! function_exists( 'ot_settings_id' ) || ! is_admin() )
    return false;

  /**
   * Get a copy of the saved settings array.
   */

  $saved_settings = get_option( ot_settings_id(), array() );


function admin_action_dismiss_notice() {
  if (empty($_GET['notice'])) {
    wp_redirect(admin_url());
    exit;
  }

  $options = get_option('nifty_options', array());

  if ($_GET['notice'] == 'rate') {
    $options['hide_notice']['rate'] = true;
  }


  update_option('nifty_options', $options);

  if (!empty($_GET['redirect'])) {
    wp_redirect($_GET['redirect']);
  } else {
    wp_redirect(admin_url());
  }

  exit;
} // admin_action_dismiss_notice


function ot_type_custom_themes() {
  $themes =  array (
    0 => 
    array (
      'type' => 'CSMM PRO',
      'version' => '5.005',
      'last_edit' => 'Thu, 22 Feb 2018 18:45:00 +0000',
      'name' => 'Aeroplane Company',
      'description' => 'Andrea',
      'frontpage' => '1',
      'status' => 'pro',
      'name_clean' => 'aeroplane-company',
    ),
    1 => 
    array (
      'type' => 'CSMM PRO',
      'version' => '15.05',
      'last_edit' => 'Fri, 02 Mar 2018 12:43:04 +0000',
      'name' => 'Animated Clock',
      'description' => 'Andrea',
      'frontpage' => '0',
      'status' => 'pro',
      'name_clean' => 'animated-clock',
    ),
    2 => 
    array (
      'type' => 'CSMM PRO',
      'version' => '15.17',
      'last_edit' => 'Sat, 09 Jun 2018 13:26:02 +0000',
      'name' => 'Beach',
      'description' => '',
      'frontpage' => '1',
      'status' => 'pro',
      'name_clean' => 'beach',
    ),
    3 => 
    array (
      'type' => 'CSMM PRO',
      'version' => '5.05',
      'last_edit' => 'Wed, 28 Feb 2018 10:30:46 +0000',
      'name' => 'Bicycle Race',
      'description' => 'Andrea',
      'frontpage' => '0',
      'status' => 'agency',
      'name_clean' => 'bicycle-race',
    ),
    4 => 
    array (
      'type' => 'CSMM PRO',
      'version' => '5.005',
      'last_edit' => 'Sat, 24 Feb 2018 11:48:50 +0000',
      'name' => 'Bitcoin Miners',
      'description' => '',
      'frontpage' => '1',
      'status' => 'agency',
      'name_clean' => 'bitcoin-miners',
    ),
    5 => 
    array (
      'type' => 'CSMM PRO',
      'version' => '15.17',
      'last_edit' => 'Fri, 30 Mar 2018 11:50:26 +0000',
      'name' => 'Blogging',
      'description' => '',
      'frontpage' => '1',
      'status' => 'agency',
      'name_clean' => 'blogging',
    ),
    6 => 
    array (
      'type' => 'CSMM PRO',
      'version' => '5.005',
      'last_edit' => 'Tue, 27 Feb 2018 09:56:05 +0000',
      'name' => 'Book Lovers',
      'description' => 'Andrea',
      'frontpage' => '1',
      'status' => 'agency',
      'name_clean' => 'book-lovers',
    ),
    7 => 
    array (
      'type' => 'CSMM PRO',
      'version' => '5.001',
      'last_edit' => 'Thu, 15 Feb 2018 16:24:58 +0000',
      'name' => 'Business Company',
      'description' => '',
      'frontpage' => '0',
      'status' => 'agency',
      'name_clean' => 'business-company',
    ),
    8 => 
    array (
      'type' => 'CSMM PRO',
      'version' => '15.17',
      'last_edit' => 'Wed, 25 Apr 2018 11:06:41 +0000',
      'name' => 'Business',
      'description' => 'Andrea',
      'frontpage' => '1',
      'status' => 'agency',
      'name_clean' => 'business',
    ),
    9 => 
    array (
      'type' => 'CSMM PRO',
      'version' => '5.14',
      'last_edit' => 'Fri, 23 Mar 2018 16:46:05 +0000',
      'name' => 'Clouds Screensaver (Video)',
      'description' => '',
      'frontpage' => '1',
      'status' => 'agency',
      'name_clean' => 'clouds-screensaver-video',
    ),
    10 => 
    array (
      'type' => 'CSMM PRO',
      'version' => '5.005',
      'last_edit' => 'Thu, 22 Feb 2018 18:45:40 +0000',
      'name' => 'Coffee Shop',
      'description' => 'Andrea',
      'frontpage' => '1',
      'status' => 'agency',
      'name_clean' => 'coffee-shop',
    ),
    11 => 
    array (
      'type' => 'CSMM PRO',
      'version' => '15.17',
      'last_edit' => 'Fri, 04 May 2018 08:57:40 +0000',
      'name' => 'Cold Lake',
      'description' => '',
      'frontpage' => '1',
      'status' => 'agency',
      'name_clean' => 'cold-lake',
    ),
    12 => 
    array (
      'type' => 'CSMM PRO',
      'version' => '5.005',
      'last_edit' => 'Mon, 26 Feb 2018 20:41:31 +0000',
      'name' => 'Default',
      'description' => 'Default settings, nothing more.',
      'frontpage' => '0',
      'status' => 'pro',
      'name_clean' => 'default',
    ),
    13 => 
    array (
      'type' => 'CSMM PRO',
      'version' => '15.17',
      'last_edit' => 'Fri, 30 Mar 2018 11:24:59 +0000',
      'name' => 'Dental Clinic',
      'description' => 'Andrea',
      'frontpage' => '1',
      'status' => 'agency',
      'name_clean' => 'dental-clinic',
    ),
    14 => 
    array (
      'type' => 'CSMM PRO',
      'version' => '5.001',
      'last_edit' => 'Tue, 20 Feb 2018 09:14:59 +0000',
      'name' => 'Dog Training and Behavior Consulting',
      'description' => '',
      'frontpage' => '1',
      'status' => 'agency',
      'name_clean' => 'dog-training-and-behavior-consulting',
    ),
    15 => 
    array (
      'type' => 'CSMM PRO',
      'version' => '15.05',
      'last_edit' => 'Fri, 02 Mar 2018 12:33:55 +0000',
      'name' => 'Flower Shop',
      'description' => '',
      'frontpage' => '1',
      'status' => 'agency',
      'name_clean' => 'flower-shop',
    ),
    16 => 
    array (
      'type' => 'CSMM PRO',
      'version' => '15.17',
      'last_edit' => 'Wed, 02 May 2018 09:37:48 +0000',
      'name' => 'Food Blog',
      'description' => '',
      'frontpage' => '1',
      'status' => 'pro',
      'name_clean' => 'food-blog',
    ),
    17 => 
    array (
      'type' => 'CSMM PRO',
      'version' => '15.17',
      'last_edit' => 'Fri, 30 Mar 2018 11:26:42 +0000',
      'name' => 'Homemade Chocolate Gifts',
      'description' => '',
      'frontpage' => '0',
      'status' => 'pro',
      'name_clean' => 'homemade-chocolate-gifts',
    ),
    18 => 
    array (
      'type' => 'CSMM PRO',
      'version' => '15.05',
      'last_edit' => 'Fri, 02 Mar 2018 12:59:44 +0000',
      'name' => 'Interior Design',
      'description' => 'Andrea',
      'frontpage' => '1',
      'status' => 'agency',
      'name_clean' => 'interior-design',
    ),
    19 => 
    array (
      'type' => 'CSMM PRO',
      'version' => '5.14',
      'last_edit' => 'Fri, 23 Mar 2018 16:42:15 +0000',
      'name' => 'Journey (Video)',
      'description' => '',
      'frontpage' => '1',
      'status' => 'agency',
      'name_clean' => 'journey-video',
    ),
    20 => 
    array (
      'type' => 'CSMM PRO',
      'version' => '15.17',
      'last_edit' => 'Fri, 30 Mar 2018 11:28:28 +0000',
      'name' => 'LEGO Bricks',
      'description' => '',
      'frontpage' => '0',
      'status' => 'pro',
      'name_clean' => 'lego-bricks',
    ),
    21 => 
    array (
      'type' => 'CSMM PRO',
      'version' => '15.17',
      'last_edit' => 'Wed, 25 Apr 2018 11:04:55 +0000',
      'name' => 'Lonely Road',
      'description' => 'Andrea',
      'frontpage' => '1',
      'status' => 'agency',
      'name_clean' => 'lonely-road',
    ),
    22 => 
    array (
      'type' => 'CSMM PRO',
      'version' => '15.17',
      'last_edit' => 'Fri, 30 Mar 2018 11:30:37 +0000',
      'name' => 'Luxury Car',
      'description' => '',
      'frontpage' => '1',
      'status' => 'pro',
      'name_clean' => 'luxury-car',
    ),
    23 => 
    array (
      'type' => 'CSMM PRO',
      'version' => '5.005',
      'last_edit' => 'Mon, 26 Feb 2018 18:31:18 +0000',
      'name' => 'Maintenance Mode',
      'description' => 'Andrea',
      'frontpage' => '0',
      'status' => 'pro',
      'name_clean' => 'maintenance-mode',
    ),
    24 => 
    array (
      'type' => 'CSMM PRO',
      'version' => '5.005',
      'last_edit' => 'Mon, 26 Feb 2018 17:59:30 +0000',
      'name' => 'Makeup Artist Training',
      'description' => 'Andrea',
      'frontpage' => '1',
      'status' => 'agency',
      'name_clean' => 'makeup-artist-training',
    ),
    25 => 
    array (
      'type' => 'CSMM PRO',
      'version' => '15.17',
      'last_edit' => 'Wed, 25 Apr 2018 11:08:31 +0000',
      'name' => 'Mobile Designer',
      'description' => 'Andrea',
      'frontpage' => '1',
      'status' => 'agency',
      'name_clean' => 'mobile-designer',
    ),
    26 => 
    array (
      'type' => 'CSMM PRO',
      'version' => '5.005',
      'last_edit' => 'Mon, 26 Feb 2018 18:04:32 +0000',
      'name' => 'Modern Blog',
      'description' => '',
      'frontpage' => '1',
      'status' => 'pro',
      'name_clean' => 'modern-blog',
    ),
    27 => 
    array (
      'type' => 'CSMM PRO',
      'version' => '15.05',
      'last_edit' => 'Fri, 02 Mar 2018 10:14:21 +0000',
      'name' => 'Modern Office',
      'description' => 'Andrea',
      'frontpage' => '0',
      'status' => 'agency',
      'name_clean' => 'modern-office',
    ),
    28 => 
    array (
      'type' => 'CSMM PRO',
      'version' => '15.17',
      'last_edit' => 'Fri, 30 Mar 2018 11:48:23 +0000',
      'name' => 'Mountain Slide',
      'description' => '',
      'frontpage' => '1',
      'status' => 'pro',
      'name_clean' => 'mountain-slide',
    ),
    29 => 
    array (
      'type' => 'CSMM PRO',
      'version' => '5.05',
      'last_edit' => 'Thu, 01 Mar 2018 10:49:52 +0000',
      'name' => 'Mountain',
      'description' => 'Andrea',
      'frontpage' => '0',
      'status' => 'pro',
      'name_clean' => 'mountain',
    ),
    30 => 
    array (
      'type' => 'CSMM PRO',
      'version' => '15.17',
      'last_edit' => 'Wed, 25 Apr 2018 11:12:56 +0000',
      'name' => 'Movie Trailer (Video)',
      'description' => '',
      'frontpage' => '0',
      'status' => 'pro',
      'name_clean' => 'movie-trailer-video',
    ),
    31 => 
    array (
      'type' => 'CSMM PRO',
      'version' => '15.05',
      'last_edit' => 'Fri, 02 Mar 2018 10:17:02 +0000',
      'name' => 'Nature',
      'description' => 'Andrea',
      'frontpage' => '0',
      'status' => 'agency',
      'name_clean' => 'nature',
    ),
    32 => 
    array (
      'type' => 'CSMM PRO',
      'version' => '5.14',
      'last_edit' => 'Fri, 23 Mar 2018 16:37:55 +0000',
      'name' => 'Office Meeting (Video)',
      'description' => '',
      'frontpage' => '1',
      'status' => 'agency',
      'name_clean' => 'office-meeting-video',
    ),
    33 => 
    array (
      'type' => 'CSMM PRO',
      'version' => '15.05',
      'last_edit' => 'Fri, 02 Mar 2018 12:35:44 +0000',
      'name' => 'Office Theme',
      'description' => '',
      'frontpage' => '1',
      'status' => 'agency',
      'name_clean' => 'office-theme',
    ),
    34 => 
    array (
      'type' => 'CSMM PRO',
      'version' => '5.005',
      'last_edit' => 'Mon, 26 Feb 2018 18:07:28 +0000',
      'name' => 'Online Learning',
      'description' => 'Andrea',
      'frontpage' => '1',
      'status' => 'agency',
      'name_clean' => 'online-learning',
    ),
    35 => 
    array (
      'type' => 'CSMM PRO',
      'version' => '15.17',
      'last_edit' => 'Wed, 25 Apr 2018 11:10:44 +0000',
      'name' => 'Pancake House',
      'description' => '',
      'frontpage' => '0',
      'status' => 'pro',
      'name_clean' => 'pancake-house',
    ),
    36 => 
    array (
      'type' => 'CSMM PRO',
      'version' => '15.17',
      'last_edit' => 'Wed, 25 Apr 2018 11:15:19 +0000',
      'name' => 'Parenting',
      'description' => '',
      'frontpage' => '0',
      'status' => 'pro',
      'name_clean' => 'parenting',
    ),
    37 => 
    array (
      'type' => 'CSMM PRO',
      'version' => '15.17',
      'last_edit' => 'Fri, 30 Mar 2018 11:35:07 +0000',
      'name' => 'Photography',
      'description' => '',
      'frontpage' => '1',
      'status' => 'agency',
      'name_clean' => 'photography',
    ),
    38 => 
    array (
      'type' => 'CSMM PRO',
      'version' => '15.17',
      'last_edit' => 'Fri, 30 Mar 2018 11:41:09 +0000',
      'name' => 'Running Blog',
      'description' => '',
      'frontpage' => '0',
      'status' => 'agency',
      'name_clean' => 'running-blog',
    ),
    39 => 
    array (
      'type' => 'CSMM PRO',
      'version' => '15.14',
      'last_edit' => 'Sat, 24 Mar 2018 10:23:40 +0000',
      'name' => 'Running (Video)',
      'description' => '',
      'frontpage' => '1',
      'status' => 'pro',
      'name_clean' => 'running-video',
    ),
    40 => 
    array (
      'type' => 'CSMM PRO',
      'version' => '5.005',
      'last_edit' => 'Mon, 26 Feb 2018 11:17:32 +0000',
      'name' => 'Shoes Store',
      'description' => 'Andrea',
      'frontpage' => '1',
      'status' => 'agency',
      'name_clean' => 'shoes-store',
    ),
    41 => 
    array (
      'type' => 'CSMM PRO',
      'version' => '15.17',
      'last_edit' => 'Wed, 25 Apr 2018 11:17:21 +0000',
      'name' => 'Simple Beige Design',
      'description' => '',
      'frontpage' => '0',
      'status' => 'pro',
      'name_clean' => 'simple-beige-design',
    ),
    42 => 
    array (
      'type' => 'CSMM PRO',
      'version' => '15.17',
      'last_edit' => 'Wed, 25 Apr 2018 11:19:34 +0000',
      'name' => 'Snow Screensaver (Video)',
      'description' => '',
      'frontpage' => '1',
      'status' => 'pro',
      'name_clean' => 'snow-screensaver-video',
    ),
    43 => 
    array (
      'type' => 'CSMM PRO',
      'version' => '15.17',
      'last_edit' => 'Fri, 30 Mar 2018 11:44:39 +0000',
      'name' => 'Snowboarding Blog',
      'description' => '',
      'frontpage' => '1',
      'status' => 'pro',
      'name_clean' => 'snowboarding-blog',
    ),
    44 => 
    array (
      'type' => 'CSMM PRO',
      'version' => '15.17',
      'last_edit' => 'Wed, 25 Apr 2018 11:21:19 +0000',
      'name' => 'Snowy Mountain',
      'description' => '',
      'frontpage' => '1',
      'status' => 'pro',
      'name_clean' => 'snowy-mountain',
    ),
    45 => 
    array (
      'type' => 'CSMM PRO',
      'version' => '15.17',
      'last_edit' => 'Fri, 30 Mar 2018 09:59:40 +0000',
      'name' => 'Spring',
      'description' => '',
      'frontpage' => '0',
      'status' => 'agency',
      'name_clean' => 'spring',
    ),
    46 => 
    array (
      'type' => 'CSMM PRO',
      'version' => '15.17',
      'last_edit' => 'Wed, 25 Apr 2018 11:22:49 +0000',
      'name' => 'The Big City Newsletter',
      'description' => 'Andrea',
      'frontpage' => '1',
      'status' => 'agency',
      'name_clean' => 'the-big-city-newsletter',
    ),
    47 => 
    array (
      'type' => 'CSMM PRO',
      'version' => '5.14',
      'last_edit' => 'Thu, 22 Mar 2018 11:33:57 +0000',
      'name' => 'The Sunny View',
      'description' => 'Andrea',
      'frontpage' => '0',
      'status' => 'pro',
      'name_clean' => 'the-sunny-view',
    ),
    48 => 
    array (
      'type' => 'CSMM PRO',
      'version' => '5.001',
      'last_edit' => 'Tue, 20 Feb 2018 10:57:27 +0000',
      'name' => 'Travel Agency',
      'description' => '',
      'frontpage' => '1',
      'status' => 'pro',
      'name_clean' => 'travel-agency',
    ),
    49 => 
    array (
      'type' => 'CSMM PRO',
      'version' => '15.05',
      'last_edit' => 'Fri, 02 Mar 2018 12:39:22 +0000',
      'name' => 'Travel Blog',
      'description' => 'Andrea',
      'frontpage' => '1',
      'status' => 'agency',
      'name_clean' => 'travel-blog',
    ),
    50 => 
    array (
      'type' => 'CSMM PRO',
      'version' => '15.17',
      'last_edit' => 'Wed, 25 Apr 2018 11:24:56 +0000',
      'name' => 'Tulips',
      'description' => '',
      'frontpage' => '1',
      'status' => 'agency',
      'name_clean' => 'tulips',
    ),
    51 => 
    array (
      'type' => 'CSMM PRO',
      'version' => '5.001',
      'last_edit' => 'Mon, 19 Feb 2018 12:31:48 +0000',
      'name' => 'Video Production',
      'description' => '',
      'frontpage' => '1',
      'status' => 'pro',
      'name_clean' => 'video-production',
    ),
    52 => 
    array (
      'type' => 'CSMM PRO',
      'version' => '5.005',
      'last_edit' => 'Mon, 26 Feb 2018 19:54:07 +0000',
      'name' => 'Webinar',
      'description' => 'Andrea',
      'frontpage' => '1',
      'status' => 'agency',
      'name_clean' => 'webinar',
    ),
    53 => 
    array (
      'type' => 'CSMM PRO',
      'version' => '5.005',
      'last_edit' => 'Fri, 23 Feb 2018 11:53:23 +0000',
      'name' => 'Wedding Blog',
      'description' => 'Andrea',
      'frontpage' => '1',
      'status' => 'agency',
      'name_clean' => 'wedding-blog',
    ),
    54 => 
    array (
      'type' => 'CSMM PRO',
      'version' => '15.17',
      'last_edit' => 'Tue, 22 May 2018 12:41:04 +0000',
      'name' => 'White Orchids',
      'description' => '',
      'frontpage' => '1',
      'status' => 'pro',
      'name_clean' => 'white-orchids',
    ),
    55 => 
    array (
      'type' => 'CSMM PRO',
      'version' => '5.14',
      'last_edit' => 'Thu, 22 Mar 2018 11:29:56 +0000',
      'name' => 'Working Out',
      'description' => '',
      'frontpage' => '1',
      'status' => 'agency',
      'name_clean' => 'working-out',
    ),
    56 => 
    array (
      'type' => 'CSMM PRO',
      'version' => '15.05',
      'last_edit' => 'Fri, 02 Mar 2018 12:36:42 +0000',
      'name' => 'Workplace',
      'description' => 'Andrea',
      'frontpage' => '1',
      'status' => 'agency',
      'name_clean' => 'workplace',
    ),
    57 => 
    array (
      'type' => 'CSMM PRO',
      'version' => '15.17',
      'last_edit' => 'Wed, 25 Apr 2018 11:00:38 +0000',
      'name' => 'Writing Service (Video)',
      'description' => '',
      'frontpage' => '1',
      'status' => 'agency',
      'name_clean' => 'writing-service-video',
    ),
  );

  $path = plugins_url('', __FILE__);

  echo '<p><b>Need to quickly set up a new site with top notch SEO that will get you indexed and ranked quickly? Check out our PRO themes.</b></p>';

  foreach ($themes as $theme) {
    echo '<div class="theme-thumb" data-theme="' . $theme['name_clean'] . '">';
    if ($theme['status'] != 'free') {
      echo '<a href="' . nifty_generate_web_link('preview-theme-thumb-' . $theme['name_clean'], 'theme-preview', array('theme' => $theme['name_clean'])) . '" target="_blank"><img src="' . $path . '/assets/images/themes/pro/' . $theme['name_clean'] . '.jpg" alt="Preview ' . $theme['name'] . '" title="Preview ' . $theme['name'] . '"></a>';
    } else {
      echo '<img src="' . CSMM_URL . '/framework/admin/img/themes/' . $theme['name_clean'] . '.jpg" alt="' . $theme['name'] . '" title="' . $theme['name'] . '">';
    }
    echo '<span class="name">' . $theme['name'] . '</span>';
    echo '<span name="actions">';
    if ($theme['status'] != 'free') {
      echo '<a href="' . nifty_generate_web_link('get-theme-' . $theme['name_clean']) . '" class="button button-primary" target="_blank">Get this theme</a>&nbsp; &nbsp;';
      echo '<a target="_blank" class="button button-secondary" href="' . nifty_generate_web_link('preview-theme-' . $theme['name_clean'], 'theme-preview', array('theme' => $theme['name_clean'])) . '">Preview</a>';
    } else {
      echo '<a href="' . add_query_arg(array('action' => 'csmm_activate_theme', 'theme' => $theme['name_clean'], 'redirect' => urlencode($_SERVER['REQUEST_URI'])), admin_url('admin.php')) . '" class="signals-btn confirm-action" data-confirm="Are you sure you want to activate the selected theme? Customizations you made on the current design will be lost.">Activate</a>&nbsp; &nbsp;';
    }
    echo '</span>';
    if ($theme['status'] != 'free') {
      echo '<div class="ribbon"><i>PRO</i></div>';
    }
    echo '</div>';

  } // foreach theme
}


  // helper function to generate tagged buy links
  function nifty_generate_web_link($placement = '', $page = '/', $params = array(), $anchor = '') {
    $base_url = 'https://comingsoonwp.com';

    if ('/' != $page) {
      $page = '/' . trim($page, '/') . '/';
    }
    if ($page == '//') {
      $page = '/';
    }

    $parts = array_merge(array('utm_source' => 'nifty-free', 'utm_medium' => 'plugin', 'utm_content' => $placement, 'utm_campaign' => 'nifty-free-v' . nifty_get_plugin_version()), $params);

    if (!empty($anchor)) {
      $anchor = '#' . trim($anchor, '#');
    }

    $out = $base_url . $page . '?' . http_build_query($parts, '', '&amp;') . $anchor;

    return $out;
  } // generate_web_link


/**
 * Returns an array of system fonts
 * Feel free to edit this, update the font fallbacks, etc.
 */
 $google_fonts = nifty_cs_get_google_webfonts();
  foreach( $google_fonts as $font ) {
    $google_webfonts_array[$font['family']]['label'] = $font['family'];
    $google_webfonts_array[$font['family']]['value'] = $font['family'];
  }


  $custom_settings = array(
    'contextual_help' => array(
      'sidebar'       => ''
    ),
    'sections'        => array(
      array(
        'id'          => 'general_settings',
        'title'       => 'General Settings'
      ),
      array(
        'id'          => 'themes',
        'title'       => 'Themes'
      ),
      array(
        'id'          => 'design_and_layout',
        'title'       => 'Design and Layout'
      ),
      array(
        'id'          => 'translation',
        'title'       => 'Translation'
      ),
      array(
        'id'          => 'social_links',
        'title'       => 'Social links'
      ),
      array(
        'id'          => 'documentation',
        'title'       => 'Documentation'
      )
    ),
    'settings'        => array(
      array(
        'id'          => 'themes2',
        'label'       => 'Themes',
        'desc'        => '',
        'std'         => '',
        'type'        => 'custom_themes',
        'section'     => 'themes',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'general_settings',
        'label'       => 'General settings',
        'desc'        => 'Here you can manage general settings. You can disable or enable Coming soon / Maintenace page or any of its sections. You can also add your Google Analytics code and Additional CSS.',
        'std'         => '',
        'type'        => 'textblock-titled',
        'section'     => 'general_settings',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',

        'operator'    => 'and'
      ),
      array(
        'id'          => 'coming_soon_mode_on___off',
        'label'       => 'Enable coming soon mode',
        'desc'        => 'Enable of disable coming soon mode.',
        'std'         => 'on',
        'type'        => 'on-off',
        'section'     => 'general_settings',
        'min_max_step'=> '',
		'sidebar'   => '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'display_count_down_timer',
        'label'       => 'Display count down timer',
        'desc'        => 'Enable or disable count down timer on the home page.',
        'std'         => 'on',
        'type'        => 'on-off',
        'section'     => 'general_settings',

      ),
      array(
        'id'          => 'enable_preloader',
        'label'       => 'Enable Pre-loader',
        'desc'        => 'Enable of disable pre-loader of coming soon page.',
        'std'         => 'on',
        'type'        => 'on-off',
        'section'     => 'general_settings',

      ),
      array(
        'id'          => 'enable_sign_up_form',
        'label'       => 'Enable build it Sign-up form',
        'desc'        => 'If you want to use custom Sign-up form option below, you need to turn this option to off.',
        'std'         => 'on',
        'type'        => 'on-off',
        'section'     => 'general_settings',

      ),
	  array(
        'id'          => 'insert_custom_signup_form',
        'label'       => 'Insert custom Sign-up form',
        'desc'        => 'You can use your MailChimp (or any other custom) embed code and replace the theme build in sign up form. Make sure that the upper option Enable build it Sign-up form is turned off.<br /><br />Please note that you need to adjust the elements that you paste inside this form, remove any remote CSS and use Additional CSS field for adjusting your form styles as well.',
        'std'         => '',
        'type'        => 'javascript',
        'section'     => 'general_settings',
        'min_max_step'=> '',
        'class'       => '',
         'condition'   => 'enable_sign_up_form:not(on)',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'enable_contact_details',
        'label'       => 'Enable Contact details',
        'desc'        => 'Enable of disable Contact details on the second tab of the coming soon page.',
        'std'         => 'on',
        'type'        => 'on-off',
        'section'     => 'general_settings',

      ),
      array(
        'id'          => 'enable_social_links',
        'label'       => 'Enable Social links',
        'desc'        => 'Enable of disable Social links on the third tab of the coming soon page.',
        'std'         => 'on',
        'type'        => 'on-off',
        'section'     => 'general_settings',

      ),
	  array(
        'id'          => 'disable_navigation',
        'label'       => 'Navigation',
        'desc'        => 'Enable of disable navigation buttons that are just below the logo section.',
        'std'         => 'on',
        'type'        => 'on-off',
        'section'     => 'general_settings',

      ),
	  	  array(
        'id'          => 'disable_animation',
        'label'       => 'Text animation',
        'desc'        => 'Enable of disable text animation.',
        'std'         => 'on',
        'type'        => 'on-off',
        'section'     => 'general_settings',

      ),
      array(
        'id'          => 'insert_google_analytics_code',
        'label'       => 'Google Analytics code',
        'desc'        => 'Enter your Google Analytics code that will be added in your coming soon page footer. Make sure to include &lt; script &gt; tags.',
        'std'         => '',
        'type'        => 'javascript',
        'section'     => 'general_settings',

      ),
	   array(
        'id'          => 'insert_additional_css',
        'label'       => 'Additional CSS',
        'desc'        => 'You can enter your custom CSS code that can override theme default classes, just remember to add !important at the end of your CSS statements.<br /><br />See example below:<br /><br /><pre>.nifty-coming-soon-message {<br />   font-size: 3em !important;<br />}</pre>',
        'std'         => '',
        'type'        => 'css',
        'section'     => 'general_settings',

      ),

      array(
        'id'          => 'design_and_layout_settings',
        'label'       => 'Design and Layout settings',
        'desc'        => 'Here you can setup your desired text, adjust date and time for the counter and setup the slider images for the background slider. You can also setup the pattern overlay with the opacity control, assign desired Google Fonts and more.',
        'std'         => '',
        'type'        => 'textblock-titled',
        'section'     => 'design_and_layout',

      ),
	  array(
        'id'          => 'disable_logo',
        'label'       => 'Display logo',
        'desc'        => 'Enable of disable logo image.',
        'std'         => 'on',
        'type'        => 'on-off',
        'section'     => 'design_and_layout',

      ),
      array(
        'id'          => 'upload_your_logo',
        'label'       => 'Upload your logo',
        'desc'        => 'Upload your logo here, it will be placed at the top of the coming soon page.<br /><br />
		TIP: You should use some png images with 200x90px in size.',
        'std'         => OT_URL .'/assets/images/logo.png',
        'type'        => 'upload',
        'section'     => 'design_and_layout',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => 'disable_logo:not(off)',
        'operator'    => 'and'
      ),
	  array(
        'id'          => 'display_site_title',
        'label'       => 'Display Site title',
        'desc'        => 'If you dont use logo image, you can enable this option and display Site title.<br /><br />
		TIP: You can adjust Site title inside <em>Settings -> General.</em>',
        'std'         => 'off',
        'type'        => 'on-off',
        'section'     => 'design_and_layout',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => 'disable_logo:not(on)',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'your_coming_soon_message',
        'label'       => 'Your coming soon message',
        'desc'        => 'Enter your coming soon message here.',
        'std'         => 'Our website is coming very soon',
        'type'        => 'text',
        'section'     => 'design_and_layout',

      ),
      array(
        'id'          => 'page_title',
        'label'       => 'Page Title',
        'desc'        => 'Page title, for SEO. Keep it short.',
        'std'         => get_bloginfo('name') . ' is coming soon',
        'type'        => 'text',
        'section'     => 'design_and_layout',

      ),
      array(
        'id'          => 'page_description',
        'label'       => 'Page Description',
        'desc'        => 'Page description, for SEO. Keep it between 50 and 300 chars.',
        'std'         => 'We are doing some work on our site. Please be patient. Thank you.',
        'type'        => 'text',
        'section'     => 'design_and_layout',

      ),
      array(
        'id'          => 'enter_second_coming_soon_message',
        'label'       => 'Your second coming soon message',
        'desc'        => 'This second message will be animated over the first message. So, you can have more that one sentence for your message. ;)',
        'std'         => 'Feel free to drop-by any time soon',
        'type'        => 'text',
        'section'     => 'design_and_layout',

      ),
      array(
        'id'          => 'setup_the_count_down_timer',
        'label'       => 'Enter the count down ending date / time',
        'desc'        => 'Specify the date and time of your count down timer expiration. If you leave this field empty, the countdown will not be displayed.',
        'std'         => '',
        'type'        => 'date-time-picker',
        'section'     => 'design_and_layout',

      ),
      array(
        'id'          => 'background_color',
        'label'       => 'Background color',
        'desc'        => 'Setup the default background color if you do not want to use the background image slider.',
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'design_and_layout',

      ),
	  array(
        'id'          => 'sign_up_button_color',
        'label'       => 'Button color',
        'desc'        => 'Setup the desired Sign-up button color.',
        'std'         => '#9e0039',
        'type'        => 'colorpicker',
        'section'     => 'design_and_layout',

      ),
	  array(
        'id'          => 'sign_up_button_color_hover',
        'label'       => 'Button hover color',
        'desc'        => 'Setup the desired Sign-up button hover color.',
        'std'         => '#9e0039',
        'type'        => 'colorpicker',
        'section'     => 'design_and_layout',

      ),
      array(
        'id'          => 'disable_background_image_slider',
        'label'       => 'Background image slider',
        'desc'        => 'Enable or disable background image slider.<br /><br />NOTICE:You need to disable background image slider if you want to use only background color option.',
        'std'         => 'on',
        'type'        => 'on-off',
        'section'     => 'design_and_layout',

      ),
	  array(
        'id'          => 'background_slider_time',
        'label'       => 'Enter background slider rotation time',
        'desc'        => 'Here you can enter desired time per slide. For example, 10000 equals to 10 seconds.',
        'std'         => '10000',
        'type'        => 'text',
        'section'     => 'design_and_layout',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => 'disable_background_image_slider:not(off)',
        'operator'    => 'and'
      ),
	   array(
        'id'          => 'background_slider_animation_time',
        'label'       => 'Enter transition duration time',
        'desc'        => 'You can specify the time needed for transition effect to complete. For example, 2000 equals to 2 seconds.',
        'std'         => '2000',
        'type'        => 'text',
        'section'     => 'design_and_layout',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => 'disable_background_image_slider:not(off)',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'upload_slider_images',
        'label'       => 'Upload first background slider images',
        'desc'        => 'Here you can upload your cover images, the best dimensions should be 1920x1080 or any with similar proportions.',
        'std'         => OT_URL .'assets/slideshow/1.jpg',
        'type'        => 'upload',
        'section'     => 'design_and_layout',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => 'disable_background_image_slider:not(off)',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'upload_slider_images_2',
        'label'       => 'Upload second background slider images',
        'desc'        => 'Here you can upload your cover images, the best dimensions should be 1920x1080 or any with similar proportions.',
        'std'         => OT_URL .'assets/slideshow/2.jpg',
        'type'        => 'upload',
        'section'     => 'design_and_layout',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => 'disable_background_image_slider:not(off)',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'upload_slider_images_3',
        'label'       => 'Upload third background slider images',
        'desc'        => 'Here you can upload your cover images, the best dimensions should be 1920x1080 or any with similar proportions.',
        'std'         => OT_URL .'assets/slideshow/3.jpg',
        'type'        => 'upload',

        'section'     => 'design_and_layout',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => 'disable_background_image_slider:not(off)',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'upload_slider_images_4',
        'label'       => 'Upload fourth background slider images',
        'desc'        => 'Here you can upload your cover images, the best dimensions should be 1920x1080 or any with similar proportions.',
        'std'         => OT_URL .'assets/slideshow/4.jpg',
        'type'        => 'upload',

        'section'     => 'design_and_layout',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => 'disable_background_image_slider:not(off)',
        'operator'    => 'and'
      ),
	  array(
        'id'          => 'background_slider_animation',
        'label'       => 'Choose animation for the background slider',
        'desc'        => 'Here you can select the desired animation between background slides, you can use the Random option and use all.',
        'std'         => 'random',
        'type'        => 'select',
		'choices'     => array(
          array(
            'value'       => 'random',
            'label'       => 'Random',
          ),
		  array(
            'value'       => 'fade',
            'label'       => 'Fade',
          ),
		  array(
            'value'       => 'fade2',
            'label'       => 'Fade 2',
          ),
		  array(
            'value'       => 'slideLeft',
            'label'       => 'Slide Left',
          ),
		  array(
            'value'       => 'slideLeft2',
            'label'       => 'Slide Left 2',
          ),
		  array(
            'value'       => 'slideRight',
            'label'       => 'Slide Right',
          ),
		  array(
            'value'       => 'slideRight2',
            'label'       => 'Slide Right 2',
          ),
		  array(
            'value'       => 'slideUp',
            'label'       => 'Slide Up',
          ),
		   array(
            'value'       => 'slideUp2',
            'label'       => 'Slide Up 2',
          ),
		  array(
            'value'       => 'slideDown',
            'label'       => 'Slide Down',
          ),
		  array(
            'value'       => 'slideDown2',
            'label'       => 'Slide Down 2',
          ),
		  array(
            'value'       => 'zoomIn',
            'label'       => 'Zoom In',
          ),
		  array(
            'value'       => 'zoomIn2',
            'label'       => 'Zoom In 2',
          ),
		  array(
            'value'       => 'zoomOut',
            'label'       => 'Zoom Out',
          ),
		  array(
            'value'       => 'zoomOut2',
            'label'       => 'Zoom Out 2',
          ),
		  array(
            'value'       => 'swirlLeft',
            'label'       => 'Swirl Left',
          ),
		  array(
            'value'       => 'swirlLeft2',
            'label'       => 'Swirl Left 2',
          ),
		  array(
            'value'       => 'swirlRight',
            'label'       => 'Swirl Right',
          ),
		  array(
            'value'       => 'swirlRight2',
            'label'       => 'Swirl Right 2',
          ),
		  array(
            'value'       => 'swirlUp',
            'label'       => 'Swirl Up',
          ),
		  array(
            'value'       => 'swirlUp2',
            'label'       => 'Swirl Up 2',
          ),
		  array(
            'value'       => 'swirlDown',
            'label'       => 'Swirl Down',
          ),
		  array(
            'value'       => 'swirlDown2',
            'label'       => 'Swirl Down 2',
          ),
		  array(
            'value'       => 'burn',
            'label'       => 'Burn',
          ),
		  array(
            'value'       => 'burn2',
            'label'       => 'Burn 2',
          ),
		  array(
            'value'       => 'blur',
            'label'       => 'Blur',
          ),
		  array(
            'value'       => 'blur2',
            'label'       => 'Blur 2',
          ),
		  array(
            'value'       => 'flash',
            'label'       => 'Flash',
          ),
		  array(
            'value'       => 'flash2',
            'label'       => 'Flash 2',
          ),

		  ),
        'section'     => 'design_and_layout',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => 'disable_background_image_slider:not(off)',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'select_pattern_overlay',
        'label'       => 'Select pattern overlay',
        'desc'        => '',
        'std'         => '16.png',
        'type'        => 'radio-image',
        'section'     => 'design_and_layout',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => 'disable_background_image_slider:not(off)',
        'operator'    => 'and',
        'choices'     => array(
          array(
            'value'       => '01.png',
            'label'       => 'Pattern 1',
            'src'         => OT_URL .'assets/images/patterns/01.png'
          ),
          array(
            'value'       => '02.png',
            'label'       => 'Pattern 2',
            'src'         => OT_URL .'assets/images/patterns/02.png'
          ),
          array(
            'value'       => '03.png',
            'label'       => 'Pattern 3',
            'src'         => OT_URL .'assets/images/patterns/03.png'
          ),
          array(
            'value'       => '04.png',
            'label'       => 'Pattern 4',
            'src'         => OT_URL .'assets/images/patterns/04.png'
          ),
          array(
            'value'       => '05.png',
            'label'       => 'Pattern 5',
            'src'         => OT_URL .'assets/images/patterns/05.png'
          ),
          array(
            'value'       => '06.png',
            'label'       => 'Pattern 6',
            'src'         => OT_URL .'assets/images/patterns/06.png'
          ),
          array(
            'value'       => '07.png',
            'label'       => 'Pattern 7',
            'src'         => OT_URL .'assets/images/patterns/07.png'
          ),
          array(
            'value'       => '08.png',
            'label'       => 'Pattern 8',
            'src'         => OT_URL .'assets/images/patterns/08.png'
          ),
          array(
            'value'       => '09.png',
            'label'       => 'Pattern 9',
            'src'         => OT_URL .'assets/images/patterns/09.png'
          ),
          array(
            'value'       => '10.png',
            'label'       => 'Pattern 10',
            'src'         => OT_URL .'assets/images/patterns/10.png'
          ),
          array(
            'value'       => '11.png',
            'label'       => 'Pattern 11',
            'src'         => OT_URL .'assets/images/patterns/11.png'
          ),
          array(
            'value'       => '12.png',
            'label'       => 'Pattern 12',
            'src'         => OT_URL .'assets/images/patterns/12.png'
          ),
          array(
            'value'       => '13.png',
            'label'       => 'Pattern 13',
            'src'         => OT_URL .'assets/images/patterns/13.png'
          ),
          array(
            'value'       => '14.png',
            'label'       => 'Pattern 14',
            'src'         => OT_URL .'assets/images/patterns/14.png'
          ),
          array(
            'value'       => '15.png',
            'label'       => 'Pattern 15',
            'src'         => OT_URL .'assets/images/patterns/15.png'
          ),
          array(
            'value'       => '16.png',
            'label'       => 'Pattern 16',
            'src'         => OT_URL .'assets/images/patterns/16.png'
          ),
          array(
            'value'       => '17.png',
            'label'       => 'No pattern',
            'src'         => OT_URL .'assets/images/patterns/17.png'
          )
        )
      ),
      array(
        'id'          => 'pattern_overlay_opacity',
        'label'       => 'Set the pattern overlay opacity',
        'desc'        => 'Adjust the level of opacity / transparency for the overall pattern overlay.',
        'std'         => '0.5',
        'type'        => 'numeric-slider',
        'section'     => 'design_and_layout',
        'min_max_step'=> '0,1,0.1',
        'class'       => '',
        'condition'   => 'disable_background_image_slider:not(off)',
        'operator'    => 'and'
      ),
	   array(
        'id'          => 'choose_sitetitle_font',
        'label'       => 'Choose Site Title font',
        'desc'        => 'Here you can assign the font for your Site title heading, if you use are using Logo you can ignore this option.',
        'std'         => 'Lato',
        'type'        => 'select',
        'section'     => 'design_and_layout',
		'choices'     => $google_webfonts_array,

      ),
      array(
        'id'          => 'choose_heading_font',
        'label'       => 'Choose heading font',
        'desc'        => 'Here you can assign the main heading font for your coming soon page.',
        'std'         => 'Lato',
        'type'        => 'select',
        'section'     => 'design_and_layout',
		'choices'     => $google_webfonts_array,

      ),
	  array(
        'id'          => 'choose_counter_font',
        'label'       => 'Choose counter font',
        'desc'        => 'Here you can assign the font for countdown timer.',
        'std'         => 'Raleway',
        'type'        => 'select',
        'section'     => 'design_and_layout',
		'choices'     => $google_webfonts_array,

      ),
      array(
        'id'          => 'choose_paragraph_font',
        'label'       => 'Choose paragraph font',
        'desc'        => 'Here you can assign paragraph font for your coming soon page.',
        'std'         => 'Open+Sans',
        'type'        => 'select',
        'section'     => 'design_and_layout',
		'choices'     => $google_webfonts_array,

      ),
      array(
        'id'          => 'enter_you_website_or_company_name',
        'label'       => 'Enter you website or company name',
        'desc'        => 'This text will be present at the location tab in the footer section of the coming soon page.',
        'std'         => 'ACME COMPANY',
        'type'        => 'text',
        'section'     => 'design_and_layout',

      ),
      array(
        'id'          => 'enter_your_address',
        'label'       => 'Enter you address',
        'desc'        => 'This text will be present at the location tab in the footer section of the coming soon page.',
        'std'         => '230 New Found lane, 8900 New City',
        'type'        => 'text',
        'section'     => 'design_and_layout',

      ),
      array(
        'id'          => 'enter_your_phone_number',
        'label'       => 'Enter your phone number',
        'desc'        => 'The number will be present at the location tab in the footer section of the coming soon page.',
        'std'         => '+555 53211 777',
        'type'        => 'text',
        'section'     => 'design_and_layout',

      ),
      array(
        'id'          => 'enter_your_email_address',
        'label'       => 'Enter your email address',
        'desc'        => 'This address will be used for receiving notifications from the subscription form on the coming soon page. It will also be displayed on the location tab of the footer section.<br><b>Emails are not stored in WordPress nor sent to any 3rd party services like MailChimp. You will only receive them on this email address.</b>',
        'std'         => 'someone@example.com',
        'type'        => 'text',
        'section'     => 'design_and_layout',

      ),
      array(
        'id'          => 'translation_settings',
        'label'       => 'Translation settings',
        'desc'        => 'Here you can replace the default coming soon language variables. Just enter your desired text and save changes.',
        'std'         => '',
        'type'        => 'textblock-titled',
        'section'     => 'translation',

      ),
      array(
        'id'          => 'sign_up_form_intro_text',
        'label'       => 'Sign-up form intro text',
        'desc'        => 'Here you can specify the desired intro text of your sign-up from.',
        'std'         => 'Sign up to find out when we launch',
        'type'        => 'text',
        'section'     => 'translation',

      ),
      array(
        'id'          => 'sign_up_button_text',
        'label'       => 'Sign up button text',
        'desc'        => 'Here you can replace the default Sign up buttons text.',
        'std'         => 'Sign Up',
        'type'        => 'text',
        'section'     => 'translation',

      ),
      array(
        'id'          => 'social_links_intro_text',
        'label'       => 'Social links intro text',
        'desc'        => 'Here you can translate the intro text above the social icons on the last tab of the footer section.',
        'std'         => 'Are you social? We are, find us below ;)',
        'type'        => 'text',
        'section'     => 'translation',

      ),
      array(
        'id'          => 'enter_email_text',
        'label'       => 'Enter Email text',
        'desc'        => 'Here you can translate text inside the subscription form.',
        'std'         => 'Enter Email...',
        'type'        => 'text',
        'section'     => 'translation',

      ),
      array(
        'id'          => 'email_confirmation___error',
        'label'       => 'Email confirmation - Error',
        'desc'        => 'Here you can translate the error message from the form submition.',
        'std'         => 'Please, enter valid email address.',
        'type'        => 'text',
        'section'     => 'translation',

      ),
      array(
        'id'          => 'email_confirmation___success',
        'label'       => 'Email confirmation - Success',
        'desc'        => 'Here you can translate the success message from the form submition.',
        'std'         => 'You will be notified, thanks.',
        'type'        => 'text',
        'section'     => 'translation',

      ),
	  array(
        'id'          => 'nifty_days_translate',
        'label'       => 'Translate the word "days"',
        'desc'        => 'Here you can translate the language string for "days" label, just below the counter.',
        'std'         => 'days',
        'type'        => 'text',
        'section'     => 'translation',

      ),
	  array(
        'id'          => 'nifty_hours_translate',
        'label'       => 'Translate the word "hours"',
        'desc'        => 'Here you can translate the language string for "hours" label, just below the counter.',
        'std'         => 'hours',
        'type'        => 'text',
        'section'     => 'translation',

      ),
	  array(
        'id'          => 'nifty_minutes_translate',
        'label'       => 'Translate the word "minutes"',
        'desc'        => 'Here you can translate the language string for "minutes" label, just below the counter.',
        'std'         => 'minutes',
        'type'        => 'text',
        'section'     => 'translation',

      ),
	  array(
        'id'          => 'nifty_seconds_translate',
        'label'       => 'Translate the word "seconds"',
        'desc'        => 'Here you can translate the language string for "seconds" label, just below the counter.',
        'std'         => 'seconds',
        'type'        => 'text',
        'section'     => 'translation',

      ),
      array(
        'id'          => 'social_settings',
        'label'       => 'Social settings',
        'desc'        => 'In order to link the social icons on the coming soon page with your social network pages or accounts, just enter your social profile URL\'s in the provided fields and save changes.',
        'std'         => '',
        'type'        => 'textblock-titled',
        'section'     => 'social_links',

      ),
      array(
        'id'          => 'facebook_page_or_profile_url',
        'label'       => 'Facebook page or profile URL',
        'desc'        => 'Enter your full Facebook page or profile URL along with https://',
        'std'         => '#link',
        'type'        => 'text',
        'section'     => 'social_links',

      ),
      array(
        'id'          => 'twitter_url',
        'label'       => 'Twitter URL',
        'desc'        => 'Enter your Twitter URL along with https://',
        'std'         => '#link',
        'type'        => 'text',
        'section'     => 'social_links',

      ),
      array(
        'id'          => 'linkedin_profile_url',
        'label'       => 'LinkedIn profile URL',
        'desc'        => 'Enter your LinkedIn profile URL along with https://',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social_links',

      ),
	   array(
        'id'          => 'pinterest_url',
        'label'       => 'Pinterest URL',
        'desc'        => 'Enter your Pinterest URL along with https://',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social_links',

      ),
	   array(
        'id'          => 'instagram_url',
        'label'       => 'Instagram profile URL',
        'desc'        => 'Enter your Instagram profile URL along with https://',
        'std'         => '#link',
        'type'        => 'text',
        'section'     => 'social_links',

      ),
      array(
        'id'          => 'google___profile_or_page_url',
        'label'       => 'Google + profile or page URL',
        'desc'        => 'Enter your Google+ page or profile URL along with https://',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'social_links',

      ),
      array(
        'id'          => 'documentation_and_faq',
        'label'       => 'Documentation and FAQ',
        'desc'        => '<h3 class="label">NIFTY COMING SOON - Documentation</strong></h3>

		<p>Plugin documentation will be added once the plugin reaches more mature levels. As for now we have stable version that works and offer many cool features.</p>
		<p>Feel free to get in touch and ask for help.
		<h3 class="label">RATE THE PLUGIN WITH 5 STARS</h3>
		<p>If you find this plugin useful, please take a minute and rate it with 5 start on WordPress. It will help me with keeping up with the updates and new features as always.</p>
		<p>Just log in into Your WordPress account and then access the <a href="https://wordpress.org/support/plugin/nifty-coming-soon-and-under-construction-page/reviews" target="_blank"> Review page </a>. Then just click on the button Add my review, make sure that you mark the 5 star and submit your review.</p>
		<p>Thanks. :)</p>
		<hr>
		<ul>
		<li><a href="https://wordpress.org/support/plugin/nifty-coming-soon-and-under-construction-page" target="_blank">WordPress Support forum</a></li>
		<li><a href="https://twitter.com/WebFactoryLtd" target="_blank">Follow on Twitter</a></li>
		</ul>
		</p>

		',
        'std'         => '',
        'type'        => 'textblock',
        'section'     => 'documentation',

      )
    )
  );



  /* allow settings to be filtered before saving */
  $custom_settings = apply_filters( ot_settings_id() . '_args', $custom_settings );

  /* settings are not the same update the DB */
  if ( $saved_settings !== $custom_settings ) {
    update_option( ot_settings_id(), $custom_settings );
  }

  /* Lets OptionTree know the UI Builder is being overridden */
  global $ot_has_custom_theme_options;
  $ot_has_custom_theme_options = true;

}

add_filter( 'ot_show_pages', '__return_false' );