<!DOCTYPE html>
<?php include('api/links.php'); ?>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="Jeremy Ancog" />
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>
	<title>Home</title>
    <link rel="stylesheet" media="screen" href="style.css" />
</head>
<body>
    <div id="bodyContainer" class="">
    	<div id="divHeader" class="fullwidth">
            <div id="titleBox" class="floatleft">
                <a href="index.php" alt="Welcome to Biology Study Guide">
                    <div id="logoBox" class="logo">Bio 103</div>
                </a>
            </div>
            <div id="headingBox" class="floatleft">Fundamentals of Plant Biology</div>
            <div class="clear"></div>   
        </div>
        <div id="divBody" class="fullwidth">
        	<div id="navWrapper" class="floatleft">
                <ul class="accordion">
                	<?php
                    foreach($navlinks as $mainLink => $items){
                        echo('<li class=""><a id="'.$mainLink.'" href="'.$items['link'].'" class="navi"><div class="icon floatleft">'.$items['icon'].'</div><div class="menu" floatleft">'.$items['name'].'</div><div class="clear"></div></a>');
                        if(is_array($items['items'])){
                            echo('<ul class="sub-menu">');
                                foreach($items['items'] as $key => $subitems){
                                    echo('<li>');
                                    echo('<a id="'.$key.'" href="'.$subitems['sublink'].'" class="navi"><div class="subicon floatleft">'.$subitems['subicon'].'</div><div class="submenu floatleft">'.$subitems['subname'].'</div><div class="clear"></div></a>');
                                    echo('</li>');
                                }
                            echo('</ul>');
                        } else {
                            echo("");
                        }
                        echo('</li>');
                    }
                    ?>
                </ul>
            </div>
            <div id="contentWrapper" class="floatleft">
            <img alt="full screen background image" src="img/bigbg-cover.jpg" id="bgimg" />
                <div id="bodyContent" class="floatright">
                    
                <h1>Header One</h1>
                <h2>Header Two</h2>
                <h3>Header Three</h3>
                <h4>Header Four</h4>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur commodo sit amet lectus ac porta. In hac habitasse platea dictumst. In non turpis in nisi rutrum semper id sit amet enim. Pellentesque facilisis in nulla vitae facilisis. Curabitur egestas orci tortor, aliquet pharetra enim scelerisque pharetra. Donec vehicula, sem eget accumsan rutrum, quam mauris gravida felis, in elementum arcu diam imperdiet ipsum. Cras euismod tincidunt hendrerit. Integer viverra, nisl sit amet luctus placerat, ipsum massa aliquam turpis, vel auctor lectus massa sed elit. Etiam lacinia, nisi non ornare molestie, elit augue egestas nisl, a euismod dolor dolor pulvinar quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eros eros, ullamcorper ac justo ut, sodales eleifend nibh. Sed at semper felis.</p>
                <p>Quisque eleifend dui ac mattis venenatis. Etiam quis neque vulputate metus fringilla ullamcorper eu eu metus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam vel rhoncus ligula. Sed sed tellus metus. Ut ac venenatis nisl. Mauris mollis porta nisl sed molestie. </p>
                <p>Cras nisi ipsum, posuere vitae bibendum laoreet, sagittis non velit. Phasellus at lorem aliquam mi aliquam tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur sollicitudin nunc sed quam faucibus, id auctor urna tincidunt. In lobortis tellus nec nunc rhoncus vehicula. Nullam eget auctor dui. Suspendisse congue purus eu consectetur tristique. Suspendisse et nibh leo. Aliquam sagittis lorem fermentum, tempor tortor eget, ullamcorper velit. </p>

                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
        <div id="divFooter" class="fullwidth"></div>    
    </div>
    <?php include('jquery.php'); ?>
</body>
</html>