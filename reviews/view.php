<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Effloresce  by FCT</title>
    <link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
    <link href="/template/css/style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="menu-wrapper">
    <div id="menu">
        <ul>
            <ul>
                <li><a href="/news/">Новости</a></li>
                <li><a href="/reviews/">Отзывы</a></li>
            </ul>
        </ul>
    </div>
    <!-- end #menu -->
</div>

<div id="wrapper">
    <div id="header-wrapper">
        <div id="header">
            <div id="logo">
                <h1>Тестовое задание</h1>
                <p>Тестовый шаблон для сайта</p>
            </div>
        </div>
    </div>
    <!-- end #header -->
    <div id="page">
        <div id="page-bgtop">
            <div id="page-bgbtm">
                <div id="content">
                    <div class="post">
                        <h1 class="title"><?= $reviewsItem['title'].' # '.$reviewsItem['id'];?></h1>
                        <p class="meta">Автор:  <a href="#"><?= $reviewsItem['author_name'];?></a> Дата: <?= $reviewsItem['date'];?>
                        <div class="entry">
                            <p><img src="/template/images/pic01.jpg" width="320" height="240" alt="<?= $reviewsItem['title'] ?>" /></p>
                            <p><?= $reviewsItem['short_content'];?></p>
                        </div>
                    </div>
                    <p><a href='/reviews/' class="permalink"> Back to HomePage</a></p>
                    <div style="clear: both;">&nbsp;</div>
                </div>
                <!-- end #content -->
                <div id="sidebar">
                    <ul>
                        <li>
                            <h2>Aliquam tempus</h2>
                            <p>Mauris vitae nisl nec metus placerat perdiet est. Phasellus dapibus semper consectetuer hendrerit.</p>
                        </li>
                        <li>
                            <h2>Categories</h2>
                            <ul>
                                <li><a href="#">Aliquam libero</a></li>
                                <li><a href="#">Consectetuer adipiscing elit</a></li>
                                <li><a href="#">Metus aliquam pellentesque</a></li>
                                <li><a href="#">Suspendisse iaculis mauris</a></li>
                                <li><a href="#">Urnanet non molestie semper</a></li>
                                <li><a href="#">Proin gravida orci porttitor</a></li>
                            </ul>
                        </li>
                        <li>
                            <h2>Blogroll</h2>
                            <ul>
                                <li><a href="#">Aliquam libero</a></li>
                                <li><a href="#">Consectetuer adipiscing elit</a></li>
                                <li><a href="#">Metus aliquam pellentesque</a></li>
                                <li><a href="#">Suspendisse iaculis mauris</a></li>
                                <li><a href="#">Urnanet non molestie semper</a></li>
                                <li><a href="#">Proin gravida orci porttitor</a></li>
                            </ul>
                        </li>
                        <li>
                            <h2>Archives</h2>
                            <ul>
                                <li><a href="#">Aliquam libero</a></li>
                                <li><a href="#">Consectetuer adipiscing elit</a></li>
                                <li><a href="#">Metus aliquam pellentesque</a></li>
                                <li><a href="#">Suspendisse iaculis mauris</a></li>
                                <li><a href="#">Urnanet non molestie semper</a></li>
                                <li><a href="#">Proin gravida orci porttitor</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- end #sidebar -->
                <div style="clear: both;">&nbsp;</div>
            </div>
        </div>
    </div>
    <!-- end #page -->
</div>
<div id="footer">
    <p>Copyright (c) 2013 Sitename.com. All rights reserved. Design by <a href="http://www.freecsstemplates.org">FCT</a>. Photos by Fotogrph</a>.</p>
</div>
<!-- end #footer -->
</body>
</html>
