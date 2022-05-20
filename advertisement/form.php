<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Form</title>
	<!-- Bootstrap core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="../project/css/all.css" rel="stylesheet">
	<link href="../project/css/style.css" rel="stylesheet">
 
    
</head>
<body onLoad="iFrameOn();">
<?php include('../header.php'); ?>
<!-- full Title -->
<div class="full-title">
		<div class="container">
			<!-- Page Heading/Breadcrumbs -->
			<h1 class="mt-4 mb-3" >Create your Ads</h1>
		</div>
	</div>
<br>
<div class=row>
<div class="col-md-4 col-lg-4">
				<a href="#">
					<img class="rounded mb-3 mb-md-0" src="images/image15.jpg" alt="" style="width:350px; height:650px; margin-left:30px; margin-top:30px;" />
				</a>
			</div>
 <div class="col-md-8 col-lg-8">
<div class="details">
<div class="content_wr">
    	<form method="post" action="insert.php" enctype="multipart/form-data" name="addform" id="addform" class="form-group">
    	<table>
        	<tr>
            
     		</tr>
            <tr>
            	<td></td>
                <td style="color:red;">
					<?php 
						if(!empty(isset($_GET['message'])) ){ 
							echo $_GET['message']; 
						}
					?>
                </td>
            </tr>
            <tr>
            	<td style="color:#3d423e; font-size:15px;">Subject:</td>
                
                <td><input type="text" name="subject" id="subject" class="form-control" placeholder="your subject here"style="width:520px; height:35px;"></td>
          <br> 
            </tr>
            <tr>
            	<td></td>
                
                <td>
                <br>
                	<select name="fontname" id="fontname" onChange="iFontName()" class="custom-select" style="width:250px;"   >
                    	<option id="1">Verdana</option>
                        <option id="2">Arial</option>
                        <option id="3">Georgia</option>
                        <option id="4">Trebuchet MS</option>
                        <option id="5">Times New Roman</option>
                        <option id="6">Sans-serif</option>
                        <option id="7">Comic Sans MS</option>
                    </select>
                	<select name="fontsize" id="fontsize" onChange="iFontSize()" class="custom-select" style="width:250px;">
                    	<option id="1">1</option>
                        <option id="2">2</option>
                        <option id="3">3</option>
                        <option id="4">4</option>
                        <option id="5">5</option>
                        <option id="6">6</option>
                        <option id="7">7</option>
                    </select>
                    <select name="forecolor" id="forecolor" onChange="iForeColor()" class="custom-select"  style="width:250px;" >
                        <option id="2"  style="background:#000; color:#000;" value="black">black</option>
                        <option id="1"  style="background:#FFF; color:#FFF;" value="white">white</option>
                        <option id="3"  style="background:green; color:green;" value="green">green</option>
                        <option id="4"  style="background:red; color:red;" value="red">red</option>
                        <option id="5"  style="background:blue; color:blue;" value="blue">blue</option>
                        <option id="6"  style="background:yellow; color:yellow;" value="yellow">yellow</option>
                        <option id="7"  style="background:violet; color:violet;" value="violet">violet</option>
                        <option id="8"  style="background:pink; color:pink;" value="pink">pink</option>
                        <option id="9"  style="background:orange; color:orange;" value="orange">orange</option>
                        <option id="10" style="background:brown; color:brown;" value="brown">brown</option>
                    </select>
                        <br>
                        <br>
                    <input type="button" onClick="iJustifyLeft()" value="Left" class="btn btn-dark" >

                    <input type="button" onClick="iJustifyCenter()" value="Center" class="btn btn-dark"   >
                    <input type="button" onClick="iJustifyRight()" value="Right"class="btn btn-dark"    >
                	<input type="button" onClick="iBold()" value="B" class="btn btn-dark"   > 
  					<input type="button" onClick="iUnderline()" value="U"  class="btn btn-dark"  >
  					<input type="button" onClick="iItalic()" value="I" class="btn btn-dark"   >
  					<input type="button" onClick="iHorizontalRule()" value="HR" class="btn btn-dark"   >
  					<input type="button" onClick="iUnorderedList()" value="OL"   class="btn btn-dark"  >
  					<input type="button" onClick="iOrderedList()" value="UL" class="btn btn-dark"  >
  					<input type="button" id="btnImage" value="Image"class="btn btn-dark"   >
            	</td>
            </tr>
            <tr>
            	<td></td>
            	<td>
                	 <div id="image" style="display:none;">
    					<form enctype="multipart/form-data"  method="post" action="image_upload.php" name="frmFile" id="frmFile" style="width:200px; height:25px;">
                            <input name="file" type="file" id="file" style="width:200px; height:30px;"/>
                             <input readonly type="text" name="path" id="path" style="width:100px; height:30px;">
                           	<input type="button" name="btnok" id="ok" value="Ok" onClick="iImage()" style="color:#000;">
    					</form>
                        </div>
                    </td>
            </tr>
            <tr>
            	<td style="color:#3d423e; font-size:15px;">Body:</td>
                <div class="form group">
                <textarea style="display:none;" name="body" class="form-control"  placeholder="your description here"id="body" ></textarea>
                <td>
                    <iframe name="richTextField" id="richTextField" scrolling="no" style="border:#2e302e 1px solid; width:650px; height:380px; margin-top: 80px;" ></iframe>
                </td>
                    </div>
            </tr>
            <tr>
            	<td colspan="3"><input type="submit" id="submit" name="submit" value="Submit" onClick="submit_form();"></td>
            </tr>
        </table>
        </form>
    </div>
</div>
                    </div>
                    </div>


<?php include('../footer.php'); ?>
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
   <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js"></script>
   <script type="text/javascript" src="js/index.js"></script>
    <script src="js/prepareUpload.js"></script>

</body>
</html>