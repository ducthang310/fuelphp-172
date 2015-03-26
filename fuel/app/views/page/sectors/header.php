<?php
/**
 * Created by JetBrains PhpStorm.
 * User: DucThang
 * Date: 3/26/15
 * Time: 9:34 AM
 */
?>
<div class="main">
    <div class="wrapper">
        <h1><a href="<?php echo Uri::base(false)?>">logo</a></h1>
        <div class="fright">
            <div class="indent">
                <span class="address">8901 Marmora Road, Glasgow, D04 89GR</span>
                <span class="phone">Tel: +1 959 552 5963</span>
            </div>
        </div>
    </div>
    <nav>
        <ul class="menu">
            <li><a class="active" href="<?php echo Uri::base(false); ?>">Home</a></li>
            <li><a href="<?php echo Uri::create('index/about'); ?>">About Us</a></li>
            <li><a href="<?php echo Uri::create('index/maintenance'); ?>">Maintenance </a></li>
            <li><a href="<?php echo Uri::create('index/repair'); ?>">Repair</a></li>
            <li><a href="<?php echo Uri::create('index/price'); ?>">Price List</a></li>
            <li><a href="<?php echo Uri::create('index/locations'); ?>">Locations</a></li>
        </ul>
    </nav>

    <?php if (Request::active()->route->controller == 'Controller_Index' && Request::active()->route->action == 'index'): ?>
    <div class="slider-wrapper">
        <div class="slider">
            <ul class="items">
                <li>
                    <img src="<?php echo Asset::get_file('theme-car/slider-img1.jpg', 'img')?>" alt="" />
                </li>
                <li>
                    <img src="<?php echo Asset::get_file('theme-car/slider-img2.jpg', 'img')?>" alt="" />
                </li>
                <li>
                    <img src="<?php echo Asset::get_file('theme-car/slider-img3.jpg', 'img')?>" alt="" />
                </li>
            </ul>
        </div>
        <a class="prev" href="#">prev</a>
        <a class="next" href="#">next</a>
    </div>
    <?php endif; ?>
</div>