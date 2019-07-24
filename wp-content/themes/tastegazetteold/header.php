<!doctype html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, user-scalable=no,
    initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.6.3/css/all.css"
          integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">



    <title><?php bloginfo('name');
        echo "|"; bloginfo('description'); ?>
    </title>

	<?php wp_head();
	wp_site_icon(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <div class="navbar">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar">
                    <span>
                        <span></span><span></span><span></span><span></span>
                </button>
            </div>
        </div>
    </div>
</header>