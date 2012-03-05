<link rel="stylesheet" href="../css/style.css" type="text/css" />
<div id="single-content">
	<h2>Report Download Form</h2>
	<br />
	<p>	Before viewing the report, we would like for you to provide us with some information to assist us in our program evaluation efforts. The following information will be kept confidential and will only be used by Asian American Studies Program at University of Maryland.
	</p>
	<br /><br />
	<p>
	<form name="downloadForm">
	<?php
		if(isset($_POST['reportType']))
			$reportType = $_POST['reportType'];
		else
			$reportType = '';		
	?>
		<input type="text" size="20" name="firstName" value="First Name *" onblur="if(this.value=='')this.value=this.defaultValue" onfocus="if(this.value==this.defaultValue)this.value=''">
		
		<input type="text" size="20" name="lastName" value="Last Name *" onblur="if(this.value=='')this.value=this.defaultValue" onfocus="if(this.value==this.defaultValue)this.value=''">
		
		<br /><br />
		<input type="text" size="30" name="organization" value="Organization *" onblur="if(this.value=='')this.value=this.defaultValue" onfocus="if(this.value==this.defaultValue)this.value=''">
		
		<br /><br />
		<input type="text" size="30" name="email" value="E-mail *" onblur="if(this.value=='')this.value=this.defaultValue" onfocus="if(this.value==this.defaultValue)this.value=''">
		
		<br /><br />
		<textarea rows="3" cols="31" name="purpose" onblur="if(this.value=='')this.value=this.defaultValue" onfocus="if(this.value==this.defaultValue)this.value=''">Purpose for downloading</textarea>
		
		<br /><br />
		<input class="button" type="submit" name="submit" value="Send Form" />
		
	</form>
	

</div>