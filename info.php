<?php include '_header.php';?>
<?php include '_nav.php';?>

  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <h1 class="section-heading">會員中心</h1>
      </div>
    </div>

	<div class="row">
		<div class="col-md-6">
			<div style="margin:0 0 25px 5%">
				<img src="pic/info.png" class="img-responsive">
			</div>
		</div>
	</div>
	
	<div class="row">
      <div class="col-md-8" style="margin-left: 2%">
        <h3 class="section-heading">基本資料</h3>
      </div>
    </div>
	
	<div class="row">
		<div class="col-md-8">
			<form class="form-horizontal" role="form" action="upload.php">
				<div class="form-group">
					<label for="RealName" class="col-md-offset-1 col-md-2 control-label">真實姓名：</label>
					<div class="col-md-6">
						<input type="text" class="form-control round input-sm border-1" id="RealName">
					</div>
				</div>
				
				<div class="form-group">
					<label for="Age" class="col-md-offset-1 col-md-2 control-label">年齡：</label>
					<div class="col-md-3">
						<input type="Number" class="form-control round input-sm" id="Age">
					</div>
				</div>
				
				<div class="form-group">
					<label for="Weight" class="col-md-offset-1 col-md-2 control-label">體重(kg)：</label>
					<div class="col-md-3">
						<input type="Number" class="form-control round input-sm" id="Weight">
					</div>
				</div>

				<div class="form-group">
					<label for="Height" class="col-md-offset-1 col-md-2 control-label">身高(cm)：</label>
					<div class="col-md-3">
						<input type="Number" class="form-control round input-sm border-1" id="Height">
					</div>
				</div>
				
				
				<div style="padding-left:3%;margin-bottom:25px;">
					<h3 class="section-heading">醫療資料</h3>
				</div>
				
				<div class="form-group">
					<label for="PersonHist" class="col-md-offset-1 col-md-2 control-label">過去病史：</label>
					<div class="col-md-6">
						<textarea class="form-control round input-sm" id="PersonHist" style="resize:none;"></textarea>
					</div>
				</div>
				
				<div class="form-group">
					<label for="FamilyHist" class="col-md-offset-1 col-md-2 control-label">家族史：</label>
					<div class="col-md-6">
						<textarea class="form-control round input-sm" id="FamilyHist" style="resize:none;"></textarea>
					</div>
				</div>
				
				<div class="form-group">
					<label for="Allergy" class="col-md-offset-1 col-md-2 control-label">藥物／食物過敏史：</label>
					<div class="col-md-6">
						<textarea class="form-control round input-sm" id="Allergy" style="resize:none;"></textarea>
					</div>
					<div class="col-md-3" style="position: relative;height:47.2px;">
						<button type="submit" class="btn btn-xs btn-primary2 btn-round" style="position: absolute;bottom:0;">繼續</button>	
					</div>
				</div>		
			</form>
		</div>	
	</div>
	
	<!-- Space -->
	<div class="form-group" style="margin: 75px 0;"></div>
	
	
	<?php include '_footer.php';?>
