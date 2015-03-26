<?php
/**
 * Created by JetBrains PhpStorm.
 * User: DucThang
 * Date: 3/26/15
 * Time: 5:35 PM
 */
?>
<div class="main">
    <div class="container_12">
        <?php echo render('cms/service'); ?>
        <div class="container-bot">
            <div class="container-top">
                <div class="container">
                    <div class="wrapper">
                        <article class="grid_4">
                            <div class="indent-left">
                                <h3>Why is Maintenance <strong>Important?</strong></h3>
                                <h6>Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</h6>
                                <p class="indent-bot">Sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua vero eos et accusam et justo duo dolores et ea rebum. </p>
                                <figure class="indent-bot"><img src="<?php echo Asset::get_file('theme-car/page3-img1.png', 'img')?>" alt=""></figure>
                                <p class="prev-indent-bot2">Stet clita kasd gubergren, no sea takimata sanctus est:</p>
                                <ul class="list-2">
                                    <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                                    <li><a href="#">Consetetur sadipscing elitr, sed diam </a></li>
                                    <li><a href="#">Nonumy eirmod tempor invidunt ut labore </a></li>
                                    <li><a href="#">Dolore magna aliquyam erat</a></li>
                                </ul>
                            </div>
                        </article>
                        <article class="grid_8">
                            <div class="indent-left2">
                                <h3 class="p1">Car Care Video Tutorials</h3>
                                <div class="wrapper img-indent-bot">
                                    <figure class="img-indent3"><a class="lightbox" href="<?php echo Asset::get_file('theme-car/video_AS3.swf', 'video')?>?width=495&amp;height=275&amp;fileVideo=intro06.flv" data-gal="prettyVideo[prettyVideo-1]"  title="Video 1"><img src="<?php echo Asset::get_file('theme-car/page3-img2.png', 'img')?>" alt=""></a></figure>
                                    <div class="extra-wrap">
                                        <p class="p1">Video 1</p>
                                        <h6><strong>Consetetur sadipscing elitr sed diam </strong></h6>
                                        Nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est.
                                    </div>
                                </div>
                                <div class="wrapper img-indent-bot">
                                    <figure class="img-indent3"><a class="lightbox" href="<?php echo Asset::get_file('theme-car/video_AS3.swf', 'video')?>?width=495&amp;height=275&amp;fileVideo=intro06.flv" data-gal="prettyVideo[prettyVideo-2]" title="Video 2"><img src="<?php echo Asset::get_file('theme-car/page3-img3.png', 'img')?>" alt=""></a></figure>
                                    <div class="extra-wrap">
                                        <p class="p1">Video 2</p>
                                        <h6><strong>Lorem ipsum dolor amet consetetur sadipscing </strong></h6>
                                        Sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata.
                                    </div>
                                </div>
                                <div class="wrapper img-indent-bot">
                                    <figure class="img-indent3"><a class="lightbox" href="<?php echo Asset::get_file('theme-car/video_AS3.swf', 'video')?>?width=495&amp;height=275&amp;fileVideo=intro06.flv" data-gal="prettyVideo[prettyVideo-3]" title="Video 3"><img src="<?php echo Asset::get_file('theme-car/page3-img4.png', 'img')?>" alt=""></a></figure>
                                    <div class="extra-wrap">
                                        <p class="p1">Video 3</p>
                                        <h6><strong>Dorem ipsum dolor sit amet</strong></h6>
                                        Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum stet clita kasd gubergren.
                                    </div>
                                </div>
                                <div class="wrapper">
                                    <figure class="img-indent3"><a class="lightbox" href="<?php echo Asset::get_file('theme-car/video_AS3.swf', 'video')?>?width=495&amp;height=275&amp;fileVideo=intro06.flv" data-gal="prettyVideo[prettyVideo-4]" title="Video 4"><img src="<?php echo Asset::get_file('theme-car/page3-img5.png', 'img')?>" alt=""></a></figure>
                                    <div class="extra-wrap">
                                        <p class="p1">Video 4</p>
                                        <h6><strong>Nam liber tempor cum soluta nobis eleifend </strong></h6>
                                        Option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $(".lightbox").append("<span></span>");
        $("a[data-gal^='prettyVideo']").prettyPhoto({animation_speed:'normal',theme:'facebook',slideshow:false, autoplay_slideshow: false});
    });
    Cufon.now();
</script>
