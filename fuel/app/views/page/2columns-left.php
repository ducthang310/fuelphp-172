<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $title; ?></title>
    <meta charset="utf-8">
    <?php echo Asset::css('file.css'); ?>
</head>
<body id="page1">
<div class="main-bg">
    <div class="bg">
        <!--==============================header==================================-->
        <?php echo render('page/sectors/header')?>

        <!--==============================Middle==================================-->
        <section id="content">
            <div class="ic">More Website Templates @ TemplateMonster.com - January 30, 2012!</div>

            <!--==============================left=============================-->
            <?php echo render('page/sectors/left')?>
            <!--==============================content==========================-->
            <?php echo $content; ?>
        </section>

        <!--==============================footer==================================-->
        <footer>
            <?php echo render('page/sectors/footer')?>
        </footer>
    </div>
</div>
</body>
</html>