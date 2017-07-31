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
				<img src="pic/upload.png" class="img-responsive">
			</div>
		</div>
	</div>
	
	<div class="row">
      <div class="col-md-8" style="margin-left: 2%">
        <h3 class="section-heading">資料上傳</h3>
      </div>
    </div>
	
	<div class="row">
		<form class="form-horizontal" role="form" action="">
			<div class="col-md-offset-1 col-md-5">
			
				<div class="form-group">
					<div class="row">
						<label for="DiagnosticCert" class="col-md-3">診斷證明書：</label>
						<input type="file" id="DiagnosticCert" class="file">
						<div class="input-group col-md-7" style="float:left">
							<input type="text" class="form-control input-xs round" disabled>
							<span class="input-group-btn">
								<button class="browse btn btn-primary btn-xs btn-round" type="button">選擇檔案</button>
							</span>
						</div>
					</div>
					<div class="row">
						<label for="CMForDiagnosticCert" class="col-md-2">備註：</label>
						<div class="col-md-10">
							<textarea class="form-control round" id="CMForDiagnosticCert" style="resize:none;"></textarea>
						</div>
					</div>
				</div>
				
				<!-- Space -->
				<div class="form-group" style="margin-bottom:50px;"></div>
				
				<div class="form-group">				
					<div class="row">
						<label for="MedicalRecord" class="col-md-3">病歷資料：</label>
						<input type="file" id="MedicalRecord" class="file">
						<div class="input-group col-md-7" style="float:left">
							<input type="text" class="form-control input-xs round" disabled>
							<span class="input-group-btn">
								<button class="browse btn btn-primary btn-xs btn-round" type="button">選擇檔案</button>
							</span>
						</div>
					</div>
					<div class="row">
						<label for="CMForMedicalRecord" class="col-md-2">備註：</label>
						<div class="col-md-10">
							<textarea class="form-control round" id="CMForMedicalRecord" style="resize:none;"></textarea>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-md-offset-1 col-md-5">				
				<div class="form-group">
					<div class="row">
						<label for="MedicalImage" class="col-md-3">醫療影像：</label>
						<input type="file" id="MedicalImage" class="file">
						<div class="input-group col-md-7" style="float:left">
							<input type="text" class="form-control input-xs round" disabled>
							<span class="input-group-btn">
								<button class="browse btn btn-primary btn-xs btn-round" type="button">選擇檔案</button>
							</span>
						</div>
					</div>
					<div class="row">
						<label for="CMForMedicalImage" class="col-md-2">備註：</label>
						<div class="col-md-10">
							<textarea class="form-control round" id="CMForMedicalImage" style="resize:none;"></textarea>
						</div>
					</div>
				</div>
				
				<!-- Space -->
				<div class="form-group" style="margin-bottom:50px;"></div>
				
				<div class="form-group">				
					<div class="row">
						<label for="ImageDiagnosticReport" class="col-md-3">影像診斷報告：</label>
						<input type="file" id="ImageDiagnosticReport" class="file">
						<div class="input-group col-md-7" style="float:left">
							<input type="text" class="form-control input-xs round" disabled>
							<span class="input-group-btn">
								<button class="browse btn btn-primary btn-xs btn-round" type="button">選擇檔案</button>
							</span>
						</div>
					</div>
					<div class="row">
						<label for="CMForImageDiagnosticReport" class="col-md-2">備註：</label>
						<div class="col-md-10">
							<textarea class="form-control round" id="CMForImageDiagnosticReport" style="resize:none;"></textarea>
						</div>
					</div>
				</div>
				<div class="form-group text-right">
					<button type="submit" class="btn btn-xs btn-primary2 btn-round">繼續</button>	
					<button type="reset" class="btn btn-xs btn-default btn-round" onclick="window.location='profile.php';">跳過</button>
				</div>	
			</div>
		</form>
	</div>
	
	<!-- Space -->
	<div class="form-group" style="margin: 75px 0;"></div>

	<?php include '_footer.php';?>
