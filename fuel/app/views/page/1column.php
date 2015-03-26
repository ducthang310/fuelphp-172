<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $title; ?></title>
    <meta charset="utf-8">
    <?php echo render('page/sectors/head', array('data' => array('css_files' => $data['css_files'], 'js_files' => $data['js_files'])))?>
</head>
<body id="page1">
<div class="main-bg">
    <div class="bg">
        <!--==============================header=================================-->
        <header>
            <?php echo render('page/sectors/header'); ?>
        </header>

        <!--==============================Middle================================-->
        <section id="content">
            <div class="ic">More Website Templates @ TemplateMonster.com - January 30, 2012!</div>
            <?php echo $content; ?>
        </section>

        <!--==============================footer=================================-->
        <footer>
            <?php echo render('page/sectors/footer')?>
        </footer>
    </div>
</div>
</body>
</html>