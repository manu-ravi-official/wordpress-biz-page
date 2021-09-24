<?php
    function load_stylesheet()
    {
        wp_register_style('manu',get_template_directory_uri() . '/https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700',array(),1,'all');
        wp_enqueue_style('manu');

        wp_register_style('manu1',get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css',array(),1,'all');
        wp_enqueue_style('manu1');

        wp_register_style('manu2',get_template_directory_uri() . '/assets/vendor/icofont/icofont.min.css',array(),1,'all');
        wp_enqueue_style('manu2');

        wp_register_style('manu3',get_template_directory_uri() . '/assets/vendor/font-awesome/css/font-awesome.min.css',array(),1,'all');
        wp_enqueue_style('manu3');

        wp_register_style('manu4',get_template_directory_uri() . '/assets/vendor/ionicons/css/ionicons.min.css',array(),1,'all');
        wp_enqueue_style('manu4');

        wp_register_style('manu5',get_template_directory_uri() . '/assets/vendor/animate.css/animate.min.css',array(),1,'all');
        wp_enqueue_style('manu5');

        wp_register_style('manu6',get_template_directory_uri() . '/assets/vendor/venobox/venobox.css',array(),1,'all');
        wp_enqueue_style('manu6');

        wp_register_style('manu7',get_template_directory_uri() . '/assets/vendor/owl.carousel/assets/owl.carousel.min.css',array(),1,'all');
        wp_enqueue_style('manu7');

        wp_register_style('manu8',get_template_directory_uri() . '/assets/vendor/aos/aos.css',array(),1,'all');
        wp_enqueue_style('manu8');

        wp_register_style('manu9',get_template_directory_uri() . '/assets/css/style.css',array(),1,'all');
        wp_enqueue_style('manu9');

        wp_register_style('manu21',get_template_directory_uri() . '/assets/img/favicon.png',array(),1,'all');
        wp_enqueue_style('manu21');

        wp_register_style('manu22',get_template_directory_uri() . '/assets/img/apple-touch-icon.png',array(),1,'all');
        wp_enqueue_style('manu22');

    }
    add_action('wp_enqueue_scripts','load_stylesheet');

    function add_js()
    {
        wp_register_script('manu10',get_template_directory_uri() . '/assets/vendor/jquery/jquery.min.js',array(),1,1,1);
      wp_enqueue_script('manu10');

      wp_register_script('manu11',get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js',array(),1,1,1);
      wp_enqueue_script('manu11');

      wp_register_script('manu12',get_template_directory_uri() . '/assets/vendor/jquery.easing/jquery.easing.min.js',array(),1,1,1);
      wp_enqueue_script('manu12');

      wp_register_script('manu13',get_template_directory_uri() . '/assets/vendor/php-email-form/validate.js',array(),1,1,1);
      wp_enqueue_script('manu13');

      wp_register_script('manu14',get_template_directory_uri() . '/assets/vendor/waypoints/jquery.waypoints.min.js',array(),1,1,1);
      wp_enqueue_script('manu14');


      wp_register_script('manu15',get_template_directory_uri() . '/assets/vendor/counterup/counterup.min.js',array(),1,1,1);
      wp_enqueue_script('manu15');

      wp_register_script('manu16',get_template_directory_uri() . '/assets/vendor/isotope-layout/isotope.pkgd.min.js',array(),1,1,1);
      wp_enqueue_script('manu16');

      wp_register_script('manu17',get_template_directory_uri() . '/assets/vendor/venobox/venobox.min.js',array(),1,1,1);
      wp_enqueue_script('manu17');

      wp_register_script('manu18',get_template_directory_uri() . '/assets/vendor/owl.carousel/owl.carousel.min.js',array(),1,1,1);
      wp_enqueue_script('manu18');

      wp_register_script('manu19',get_template_directory_uri() . '/assets/vendor/aos/aos.js',array(),1,1,1);
      wp_enqueue_script('manu19');

      wp_register_script('manu20',get_template_directory_uri() . '/assets/js/main.js',array(),1,1,1);
      wp_enqueue_script('manu20');
    }
    add_action('wp_enqueue_scripts','add_js');

?>