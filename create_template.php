<!DOCTYPE html>
<html>
    <head>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <meta charset="UTF-8">
        <?php
        $background = $_POST['background'];
        $title = $_POST['title'];
        $url = $_POST['url'];
        $name_logo = $_POST['name_logo'];
        $footer = $_POST['footer'];
        //check data
        function clean($data){
            trim($data);
            strip_tags($data);
            if(empty($data)){
                exit('Некорректные данные');
            }
            return $data;
        }
        $background = clean($background);
        $title = clean($title);
        $url = clean($url);
        $name_logo = clean($name_logo);
        $footer = clean($footer);
        ?>
        <title><?=$title?></title>
    </head>
    <body style="background-color: <?=$background?>">
        <div id="page" align="center">
		<div id="content" style="width:800px">
			<div id="logo" style="background-image: url(<?=$url?>)" >
				<div style="margin-top:70px" class="whitetitle"><?=$name_logo?></div>
			</div>
			<div id="topheader">
				<div align="left" class="bodytext">
					<br />
					<strong>Your Company Name</strong><br />
					Evergreen Terrace 742<br />
					Kansas Missouri<br />
					Phone: 432-653-3121<br />
					sales@thetiecompany.com
				</div>
				<div id="toplinks" class="smallgraytext">
					<a href="#">Home</a> | <a href="#">Sitemap</a> | <a href="#">Contact Us</a>
				</div>
			</div>
			<div id="menu">
				<div align="right" class="smallwhitetext" style="padding:9px;">
					<a href="#">Home</a> | <a href="#">About Us</a> | <a href="#">Products</a> | <a href="#">Our Services</a> | <a href="#">Contact Us</a>
				</div>
			</div>
			<div id="submenu">
				<div align="right" class="smallgraytext" style="padding:9px;">
					<a href="#">Submenu 1</a> | <a href="#">Submenu 2</a> | <a href="#">Submenu 3</a> | <a href="#">Submenu 4</a> | <a href="#">Submenu 5</a> | <a href="#">Submenu 6</a>
				</div>
			</div>
			<div id="contenttext">
				<div style="padding:10px">
					<span class="titletext">Welcome to <?=$name_logo?>!</span>
					</div>
					<div class="bodytext" style="padding:12px;" align="justify">
                                            <strong>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            </strong><br />
					<br />
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur id est   tincidunt nisl pellentesque tincidunt. Donec in mauris. Mauris neque magna,   consectetuer id, malesuada vitae, tincidunt sit amet, mi. Aliquam lacinia.   Suspendisse potenti. Proin justo lorem, rutrum ac, facilisis in, malesuada sed,   ligula. Mauris lobortis lacus at nibh. Aenean vitae odio vel odio placerat   hendrerit. Suspendisse lacus lacus, tempor id, pharetra eget, ornare sit amet,   pede. Sed aliquet, justo ac elementum pretium, arcu leo placerat est, a luctus   purus diam eget arcu. Nam augue diam, mollis a, scelerisque eget, aliquet   condimentum, pede. Vestibulum tristique lectus sed augue.<br /><br />
					Aenean ut mauris luctus mauris interdum convallis. Nunc vestibulum sodales nulla. Nulla vitae massa. Maecenas vel tellus vitae elit mattis adipiscing. In pulvinar felis sed est. Mauris non mi. Duis ultrices dolor ut orci. Quisque lacinia arcu et purus. Sed euismod metus nec augue. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc dolor leo, aliquam a, placerat sit amet, accumsan eget, dolor. Sed lacinia augue in magna. Fusce sed enim. Vestibulum et mauris. Phasellus in lectus. Pellentesque eu elit in dolor ullamcorper sodales. Vestibulum interdum ornare ligula. Mauris felis odio, rhoncus sed, adipiscing fermentum, tincidunt eu, metus. Suspendisse viverra rhoncus purus.
				</div>
			</div>
			<div id="leftpanel">
				<div align="justify" class="graypanel">
					<span class="smalltitle">News</span><br /><br />
					<span class="smallredtext">September 27, 2016</span><br />
					<span class="bodytext">Curabitur arcu tellus, suscipit in, aliquam eget, ultricies id, sapien. Nam est.</span><br />
					<a href="#" class="smallgraytext">More...</a><br /><br />
					<span class="smallredtext">September 27, 2016</span><br />
					<span class="bodytext">Curabitur arcu tellus, suscipit in, aliquam eget, ultricies id, sapien. Nam est.</span><br />
					<a href="#" class="smallgraytext">More...</a><br /><br />
					<span class="smallredtext">September 27, 2016</span><br />
					<span class="bodytext">Curabitur arcu tellus, suscipit in, aliquam eget, ultricies id, sapien. Nam est.</span><br />
					<a href="#" class="smallgraytext">More...</a><br /><br />
				</div>
			</div>
			<div id="footer" class="smallgraytext">
				<a href="#">Home</a> | <a href="#">About Us</a> | <a href="#">Products</a> | <a href="#">Our Services</a> | <a href="#">Contact Us</a>
				| <?=$footer?>
			</div>
		</div>
	</div>
    </body>
</html>