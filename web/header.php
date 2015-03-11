<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
    <?php wp_head(); ?>
    
</head>

<body>
    <!-- Header -->
    <header class="site-header">
        <nav class="site-nav">
            <div class="container">
               <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container_class' => 'topnav nav nav-pills' ) ); ?>
            </div>
        </nav>
        <div class="site-header-info">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class=" site-logo">
                            <a href="#"></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-offset-2">
                        <div class="lang-menu">
                            <span class="lang-label col-lg-offset-6">Choose a language:</span>

                            <a href="#" class="lang-item active">ENG</a>

                            <a href="#" class="lang-item ">RUS</a>

                            </ul>
                        </div>
                        <div class="contacts-menu">
                            <table>
                                <tr>
                                    <td>Contact us in:</td>
                                    <td>Canada</td>
                                    <td>+1 403 929 23 28</td>
                                    <td>Russia</td>
                                    <td>+7 921 304 55 14
                                        <br>+8 985 141-1936</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End header -->
    <!-- Main -->
    <main role="main">