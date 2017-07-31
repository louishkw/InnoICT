<?php include '_header.php';?>
<?php include '_nav.php';?>

  <div class="container">
    <div class="row">
      <div class="col-md-2">
        <h1 class="section-heading">會員中心</h1>
      </div>
	  <div class="col-md-4" style="margin-top:5%">
		<button type="submit" class="btn btn-xs btn-primary2 btn-round" onclick="window.location='info.php';">修改內容</button>	
	  </div>
    </div>

	<div class="row">
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-8" style="margin-left: 2%">
					<h3 class="section-heading">基本資料</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-md-offset-1 col-md-3">
					<label>真實姓名：</label>
				</div>
				<div class="col-md-8">
					<p id="Name">陳大明</p>
				</div>				
			</div>
			<div class="row">
				<div class="col-md-offset-1 col-md-3">
					<label>年齡：</label>
				</div>
				<div class="col-md-8">
					<p id="Age">33</p>
				</div>	
			</div>
			<div class="row">
				<div class="col-md-offset-1 col-md-3">
					<label>體重(kg)：</label>
				</div>
				<div class="col-md-8">
					<p id="Weight">66</p>
				</div>	
			</div>
			<div class="row">
				<div class="col-md-offset-1 col-md-3">
					<label>身高(cm)：</label>
				</div>
				<div class="col-md-8">
					<p id="Height">175</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8" style="margin-left: 2%">
					<h3 class="section-heading">醫療資料</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-md-offset-1 col-md-3">
					<label>過去病史：</label>
				</div>
				<div class="col-md-8">
					<p id="PersonHist">病患本人、家屬、法定代理人或委託人
申請人如非病人本人，其配偶或親屬須取得病人同意委託書及身份證之正本與被委託人身分證正本方得申請
申請人若為未成年，其家屬或親屬須取得委託人的委託書、身分證正本及病患戶口名簿與被委託人身分證。</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-offset-1 col-md-3">
					<label>家族史：</label>
				</div>
				<div class="col-md-8">
					<p id="FamilyHist">病患本人、家屬、法定代理人或委託人
申請人如非病人本人，其配偶或親屬須取得病人同意委託書及身份證之正本與被委託人身分證正本方得申請
申請人若為未成年，其家屬或親屬須取得委託人的委託書、身分證正本及病患戶口名簿與被委託人身分證。</p>
				</div>				
			</div>
			<div class="row">
				<div class="col-md-offset-1 col-md-3">
					<label>藥物／食物過敏史：</p>
				</div>
				<div class="col-md-8">
					<p id="Allergy">病患本人、家屬、法定代理人或委託人
申請人如非病人本人，其配偶或親屬須取得病人同意委託書及身份證之正本與被委託人身分證正本方得申請
申請人若為未成年，其家屬或親屬須取得委託人的委託書、身分證正本及病患戶口名簿與被委託人身分證。</p>
				</div>
			</div>
			
			<!-- Space -->
			<div class="form-group" style="margin: 50px 0;"></div>	
		
		</div>
		
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-offset-1 col-md-3">
					<label>診斷證明書：</label>
				</div>
				<div class="col-md-8">
					<a href="#" id="DiagnosticCert">XXXXX.pdf</a>
				</div>	
			</div>
			<div class="row">
				<div class="col-md-offset-1 col-md-3">
					<label>備註：</label>
				</div>
				<div class="col-md-8">
					<p id="CMForDiagnosticCert">病患本人、家屬、法定代理人或委託人
申請人如非病人本人，其配偶或親屬須取得病人同意委託書及身份證之正本與被委託人身分證正本方得申請
申請人若為未成年，其家屬或親屬須取得委託人的委託書、身分證正本及病患戶口名簿與被委託人身分證。</p>
				</div>	
			</div>
			
			<div class="row">
				<div class="col-md-offset-1 col-md-3">
					<label>病歷資料：</label>
				</div>
				<div class="col-md-8">
					<a href="#" id="MedicalRecord">XXXXX.pdf</a>
				</div>	
			</div>
			<div class="row">
				<div class="col-md-offset-1 col-md-3">
					<label>備註：</label>
				</div>
				<div class="col-md-8">
					<p id="CMForMedicalRecord">病患本人、家屬、法定代理人或委託人
申請人如非病人本人，其配偶或親屬須取得病人同意委託書及身份證之正本與被委託人身分證正本方得申請
申請人若為未成年，其家屬或親屬須取得委託人的委託書、身分證正本及病患戶口名簿與被委託人身分證。</p>
				</div>	
			</div>
			
			<div class="row">
				<div class="col-md-offset-1 col-md-3">
					<label>醫療影像：</label>
				</div>
				<div class="col-md-8">
					<a href="#" id="MedicalImage"></a>
				</div>	
			</div>
			<div class="row">
				<div class="col-md-offset-1 col-md-3">
					<label>備註：</label>
				</div>
				<div class="col-md-8">
					<p id="CMForMedicalImage"></p>
				</div>	
			</div>
			
			<div class="row">
				<div class="col-md-offset-1 col-md-3">
					<label>影像診斷報告：</label>
				</div>
				<div class="col-md-8">
					<a href="#" id="ImageDiagnosticReport"></a>
				</div>	
			</div>
			<div class="row">
				<div class="col-md-offset-1 col-md-3">
					<label>備註：</label>
				</div>
				<div class="col-md-8">
					<p id="CMForImageDiagnosticReport"></p>
				</div>	
			</div>
		</div>
	</div>	
	
	
	<?php include '_footer.php';?>
