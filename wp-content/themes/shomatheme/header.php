<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Document</title>

    <?php wp_head(); ?>
</head>

<body>

    <header>
        <div class="container">

            <div class="row" id="siteTitle">
                <h1><?php echo get_bloginfo('name'); ?></h1>
            </div>


            <div class="row" id="menuItems">
                <?php 

                    wp_nav_menu(
                        array(
                            'theme_location' => 'top-menu',
                            'menu_class' => 'top-bar'
                            )
                    );      
 
		        ?>

            </div>
        </div>

    </header>