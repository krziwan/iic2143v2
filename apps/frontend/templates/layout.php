<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
	<!--[if lte IE 6]>
    <link href="css/msie.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <![endif]-->
    
    <title>Fundación Chile Unido</title>
  </head>
  <body>

    <div id="layout" >
      
      <div id="header">
        
        <h1 id="logo"><a href="./" title="Company">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	Acoge una vida<span></span></a></h1>

		        <hr class="noscreen" />   

		        <div id="nav" class="box">
		        <ul>
		          <li id="first"><a href="#">INICIO</a></li> 
		          <li><a href="#">ABOUT US</a></li>
		          <li><a href="#">PRODUCTS</a></li>
							<li><a href="#">PHOTOS</a></li>
							<li><a href="#">CONTACT</a></li>
							<? if($sf_user->isAuthenticated()):  ?>
							<li><a href="<?= url_for('sf_guard_signout') ?>">SALIR&nbsp;(<?= $sf_user->getUsername() ?>)</a></li>
							<?  endif; ?>
						</ul>
		        <hr class="noscreen" />
		      </div>      

		      </div>

		      <hr class="noscreen" />

		      <div id="container" class="box">

		        <div id="obsah" class="content box">
		          <div class="in">
					<?=  $sf_content ?>
		          </div>
		        </div>

		        <div id="panel-left" class="box panel">
		          <div class="in">
		          <h3>Menu</h3>
		          <ul>
		            <li><a href="/">Lorem ipsum</a></li>
		            <li><a href="/">Dolor sit amet</a></li>
		            <li><a href="/">Consectetur</a></li>
		            <li><a href="/">Adipisicing Elit</a></li>
		            <li><a href="/">Lorem ipsum</a></li>
		            <li><a href="/">Dolor sit amet</a></li>
		          </ul>

		          <h3>Links</h3>
		          <ul>
		            <li><a href="/">Lorem ipsum</a></li>
		            <li><a href="/">Dolor sit amet</a></li>
		            <li><a href="/">Consectetur</a></li>
		            <li><a href="/">Adipisicing Elit</a></li>
		          </ul>
		          <div class="sep"></div>
		          </div>
		        </div>

		      </div>

		      <div id="footer">  
		        <span class="f-left">&copy; 2011 iic2143 Pontificia Universidad Cat&oacute;lica de Chile</span>
		      </div>
		    </div>
		  </body>
		</html>
