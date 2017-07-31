  
  <body>
  
  <!-- Fixed navbar -->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
		
	  <!-- First Line -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar, #navbar2" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php"><img style="margin:0 15px;"src="/pic/icon.png" alt="Porto"></a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
		<form action="PHP/logout.php">
			<ul class="nav navbar-nav navbar-right">
				<li><a href=""><div class="black">ENG</div></a></li>
				<li><a href="reg.php"><div class="black">註冊</div></a></li>
				<li><a href="#" onclick="document.getElementById('LoginPanel').style.display='block'"><div class="black">登錄</div></a></li>
				<li><a href="#" type = "submit"><div class="black">登出</div></a></li>
				<li><a href="contact.php"><img style="margin:10px 0" src="/pic/tel.png" alt="Whatsapp"></a>
			</ul>
		</form>
      </div>
	</div>
	
	  <!-- Second Line -->
	<div class="container-fluid" id="nav2line">
		<div class="container">
		  <div class="navbar-collapse collapse"  id="navbar2" >
			<ul class="nav navbar-nav">
			  <li><a class="tab" href="service.php">服務流程</a></li>
			  <li><a class="tab" href="customize.php">客製服務</a></li>
			  <li><a class="tab" href="">合作機構</a></li>
			  <li><a class="tab" href="">關於我們</a></li>
			  <li><a class="tab" href="contact.php">聯絡我們</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="msgcenter.php"  style="padding:10px 0;"><img src="/pic/notice.png" alt="Whatsapp"><label name="newreply" class="overlap">2</label></a>
				<li><a href="member.php">會員中心</a></li>
			</ul>
		  </div>
		</div>
	</div>
	<!--/.nav-collapse -->
  </nav>
  
	 <!-- Login Panel --> 
	<div class="container">
	  	
		<div class="panel panel-primary login" id="LoginPanel">
			<div class="panel-heading small" style="position:relative;background-color: #58A0D8;border-color: #58A0D8;height:35px;">
				<p class="small">登錄</p>
				<div class="close" onclick="document.getElementById('LoginPanel').style.display='none'">X</div>
			</div>
					
			<div class="panel-body">
				<form class="form-horizontal" role="form" method="post" action="PHP/login.php">
					<div class="form-group">
						<label for="InputAccountName" class="col-md-4 control-label" style="text-align:right;">帳戶：</label>
						<div class="col-md-8" style="padding-left:0">
							<input type="text" class="form-control round input-sm" id="InputAccountName">
						</div>
					</div>
			
					<div class="form-group">
						<label for="InputPassword1" class="col-md-4 control-label" style="text-align:right">密碼：</label>
						<div class="col-md-8" style="padding-left:0">
							<input type="Password" class="form-control round input-sm" id="InputPassword1">
						</div>
					</div>

					<div class="form-group text-center">
						<button type="submit" class="btn btn-s btn-primary2 btn-round smaller">登錄</button>	
						<button type="button" class="btn btn-s btn-primary2 btn-round smaller" onclick="window.location='reg.php';">註冊</button>
					</div>
				</form>
			</div>
		</div>      
	</div>