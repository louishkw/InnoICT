<?php include '_header.php';?>
<?php include '_nav.php';?>

  <!-- Carousel -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img class="first-slide" src="pic/banner.png" alt="First slide">
        <div class="container">
          <div class="carousel-caption text-center" id="IndexCaption">
            <p><a class="btn btn-lg btn-primary indexbtn" href="reg.php" role="button">加入會員</a></p>
          </div>
        </div>
      </div>

	  <div class="item">
        <img class="second-slide" src="pic/banner.png" alt="Second slide">
        <div class="container">
          <div class="carousel-caption text-center" id="IndexCaption">
            <p><a class="btn btn-lg btn-primary indexbtn" href="reg.php" role="button">加入會員</a></p>
          </div>
        </div>
      </div>
	  
	  <div class="item">
        <img class="third-slide" src="pic/banner.png" alt="Third slide">
        <div class="container">
          <div class="carousel-caption text-center" id="IndexCaption">
            <p><a class="btn btn-lg btn-primary indexbtn" href="reg.php" role="button">加入會員</a></p>
          </div>
        </div>
      </div>
	  
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  </div>
  <!-- /.carousel -->

  <div class="container">

    <div class="row" id="corp">
      <div class="col-lg-12 text-center">
        <h1 class="section-heading">我們將與台灣各間知名醫院合作</h1>
        <h2 class="section-subheading text-muted"></h2>
      </div>
    </div>
	
	<!-- Thumbnail for cooperation company -->
    <div class="row">	
		<div id="thumbnail-slider">
			<div class="inner">
				<ul>
					<li>
						<a href="">
							<span class="thumb" style="background-image:url(pic/company1)">
								This slide demonstrates how to link the thumbnail image to another web page.
							</span>
						</a>
					</li>
					<li>
						<a href="">
							<span class="thumb" style="background-image:url(pic/company2)">
								This slide demonstrates how to link the thumbnail image to another web page.
							</span>
						</a>
					</li>
					<li>
						<a href="">
							<span class="thumb" style="background-image:url(pic/company3)">
								This slide demonstrates how to link the thumbnail image to another web page.
							</span>
						</a>
					</li>					<li>
						<a href="">
							<span class="thumb" style="background-image:url(pic/company4)">
								This slide demonstrates how to link the thumbnail image to another web page.
							</span>
						</a>
					</li>					<li>
						<a href="">
							<span class="thumb" style="background-image:url(pic/company5)">
								This slide demonstrates how to link the thumbnail image to another web page.
							</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
		
		<div style="clear:both;"></div>
    </div>
	<div class="row">
		<div class="category text-center">
			<a href="cancer.php"><div class="imgbox" style="background-image:url(pic/part1.png)">腫瘤科</div></a>
			<a href=""><div class="imgbox" style="background-image:url(pic/part2.png)">骨關節</div></a>
			<a href=""><div class="imgbox" style="background-image:url(pic/part3.png)">婦科</div></a>
			<a href=""><div class="imgbox" style="background-image:url(pic/part4.png)">生殖科</div></a>
			<a href=""><div class="imgbox" style="background-image:url(pic/part5.png)">醫美</div></a>
		</div>
	</div>
 </div>
 
	<!-- Thumbnail slider -->
	<link href="CSS/thumbnail-slider.css" rel="stylesheet" type="text/css" />
    <script src="js/thumbnail-slider.js" type="text/javascript"></script>
<?php include '_footer.php';?>
