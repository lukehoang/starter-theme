<!doctype html>
<html lang="en">

<head>
  <?php
  /**
   * For OneTrust and GTM/GA production scripts.
   * This should be set automatically by WP Engine.
   * If not, WP_ENVIRONMENT_TYPE should be set manually.
   */
  if ('production' !== wp_get_environment_type()) :
    // Enable "Discourage search engines from indexing this site"
    add_filter('pre_option_blog_public', '__return_zero', 999);
  ?>
  <?php else :
    /**
     * Non-poroduction versions of those scripts.
     */
  ?>

  <?php endif; ?>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title('|', true, 'right'); ?></title>

  <?php wp_head(); ?>
  
  <?php if($_SERVER['SERVER_NAME'] == 'aiportraitsofcancer.com'){?>
    <!-- PROD OneTrust Cookies Consent Notice start for aiportraitsofcancer.com --> <script type="text/javascript" src="https://cdn.cookielaw.org/consent/018e5cdc-e021-7b6c-83c1-77972f5384f7/OtAutoBlock.js" ></script> <script src="https://cdn.cookielaw.org/scripttemplates/otSDKStub.js" type="text/javascript" charset="UTF-8" data-domain-script="018e5cdc-e021-7b6c-83c1-77972f5384f7" ></script> <script type="text/javascript"> function OptanonWrapper() { } </script> <!-- OneTrust Cookies Consent Notice end for aiportraitsofcancer.com -->
  <?php }else{ ?>
    <!-- TEST OneTrust Cookies Consent Notice start for aiportraitsofcancer.com --> <script type="text/javascript" src="https://cdn.cookielaw.org/consent/018e5cdc-e021-7b6c-83c1-77972f5384f7-test/OtAutoBlock.js" ></script> <script src="https://cdn.cookielaw.org/scripttemplates/otSDKStub.js" type="text/javascript" charset="UTF-8" data-domain-script="018e5cdc-e021-7b6c-83c1-77972f5384f7-test" ></script> <script type="text/javascript"> function OptanonWrapper() { } </script> <!-- OneTrust Cookies Consent Notice end for aiportraitsofcancer.com -->

      <script>
        window.markerConfig = {
          project: '65f494e7f38c28c5ce50f489', 
          source: 'snippet'
        };

      !function(e,r,a){if(!e.__Marker){e.__Marker={};var t=[],n={__cs:t};["show","hide","isVisible","capture","cancelCapture","unload","reload","isExtensionInstalled","setReporter","setCustomData","on","off"].forEach(function(e){n[e]=function(){var r=Array.prototype.slice.call(arguments);r.unshift(e),t.push(r)}}),e.Marker=n;var s=r.createElement("script");s.async=1,s.src="https://edge.marker.io/latest/shim.js";var i=r.getElementsByTagName("script")[0];i.parentNode.insertBefore(s,i)}}(window,document);
      </script>
      
  <?php }?>
  
  <!-- Munchkin tracking -->
  <script type="text/javascript">
  (function() {
    var didInit = false;
    function initMunchkin() {
      if(didInit === false) {
        didInit = true;
        Munchkin.init('269-UHU-480');
      }
    }
    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.async = true;
    s.src = '//munchkin.marketo.net/munchkin.js';
    s.onreadystatechange = function() {
      if (this.readyState == 'complete' || this.readyState == 'loaded') {
        initMunchkin();
      }
    };
    s.onload = initMunchkin;
    document.getElementsByTagName('head')[0].appendChild(s);
  })();
  </script>

  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-PHXQM8JC');</script>
  <!-- End Google Tag Manager -->
  
</head>

<body <?php body_class(); ?>>

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PHXQM8JC"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <header>
    <div class="container">
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <?php the_custom_logo(); ?>
          <button class="navbar-toggler custom-navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
            </span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="main-nav">
            <div class="navbar-nav">
              <?php
                  echo wp_nav_menu(array(
                    'walker'      => new bootstrap_5_wp_nav_menu_walker(),
                    'menu'  => "main",
                    'container' => false,
                    'menu_class' => 'navbar-nav mr-auto',
                    'items_wrap' => '<ul id="%1$s" class="navbar-nav %2$s">%3$s</ul>',
                    'depth' => 2,
                    'fallback_cb' => '__return_false',
                  ));
                  ?>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <main id="main-content">
  
  