<!DOCTYPE html>
<html>
<head>
	<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Financial Accounting</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<header class="header desktop">
	<div class="header-items">
		<label><h1>USMAN.</h1></label>
	</div>
	<div class="header-items">
		<ul>
			<li><a href="#home">HOME</a></li>
			<li><a href="#contact">CONTACT US</a></li>
			<li><div class="pixel" id="pixel"></div></li>
		</ul>
	</div>
	<div class="colors hidden" id="colors">
		<div class="p-red" id="t-red">

		</div>
					&nbsp;&nbsp;&nbsp;
		<div class="p-orange" id="t-orange">

		</div>
					&nbsp;&nbsp;&nbsp;
		<div class="p-green" id="t-green">

		</div>
			&nbsp;&nbsp;&nbsp;
		<div class="p-blue" id="t-blue">

		</div>

			&nbsp;&nbsp;&nbsp;
		<div class="p-black" id="t-black">

		</div>
	</div>
</header>


<?php
$AssetPrice = $_POST["AssetPrice"];
$Startdate = $_POST["Startdate"];
$Startmonth = $_POST["Startmonth"];
$Startyear = $_POST["Startyear"];
$Depreciation = $_POST["Depreciation"];
$NoOfYears = $_POST["NoOfYears"];
$count=0;
$time = 13-$Startmonth;
$endDate = 31;
$endMonth = 12;
$endYear = $Startyear;
$TotalDep = 0;
$Const = $AssetPrice;
$Method = $_POST["method"];
?>
<div class="table-container">

<h1>Depericiation</h1>
<br><h2><?php
if($Method==0){
echo "Straight Line Method";
}if($Method==1){
echo "Dimnishing Balance Method";
}
?></h2>
<table>
<tr>
<th>Date</th>
<th>Detail</th>
<th>Rs</th>
<th>Date</th>
<th>Detail</th>
<th>Rs</th>
</tr>
<?php
$i =1;
while(true){
?>
<tr>
<th>
<?php
echo $Startdate."/".$Startmonth."/".$Startyear;
?></th>
<th><?php
if($count==0){
print "Cash(".$AssetPrice.")";
}else{
print "Bal b/d";
}
?></th>
<th><?php
print $AssetPrice;
?></th>
<th><?php
echo $endDate."/".$endMonth."/".$endYear;
?></th>
<th>Depericiation<br>
<?php
if($Method==0){
echo $Const." * ".$Depreciation."% * ".$time." / 12";
}if($Method==1){
echo $AssetPrice." * ".$Depreciation."% * ".$time." / 12";
}
?>
</th>
<th><?php
if($Method==0){
$TotalDep = $Const*($Depreciation/100)*($time/ 12);
}
if($Method==1){
$TotalDep = $AssetPrice*($Depreciation/100)*($time/ 12);
}
echo $TotalDep;
?></th>
</tr>
<tr>
<th>&nbsp;&nbsp;</th>
<th>&nbsp;&nbsp;</th>
<th>&nbsp;&nbsp;</th>
<th>&nbsp;&nbsp;</th>
<th>Bal c/d</th>
<th><?php echo $AssetPrice-$TotalDep;
?></th>
</tr>
</tr>
<tr>
<th>&nbsp;&nbsp;</th>
<th>&nbsp;&nbsp;</th>
<th><?php echo $AssetPrice; ?>
</th>
<th>&nbsp;&nbsp;</th>
<th>&nbsp;&nbsp;</th>
<th><?php echo $AssetPrice; ?></th>
</tr>
<?php
$Startdate = 1;
$Startmonth = 1;
$Startyear++;
$endYear++;
$count++;
$AssetPrice-=$TotalDep;
$time = 12;
$i++;
if($i>$NoOfYears){
break;
}
}
?>
</table>
		<div class="back-button">
			<button type="button" name="button"> <a href="./">Go back</a> </button>
		</div>
</div>

<footer class="footer">
	<div class="footer-container">
		<div class="footer-items">
			<h4>Programmer</h4>
			<p>Name: Syed Muhammad Usman Ali Bukhari</p>
			<p>Education: BSCS Student</p>
			<p>Institution: GCU, Lahore Pakistan</p>
			<h4>Contact</h4>
			<div class="s-icons">
			<p><a href="https://www.facebook.com/usman.bukhari96" target="_blank"><i class="fab fa-facebook"></i></a>
			<a href="https://www.instagram.com/usman_ali_bukhari_shah?r=nametag" target="_blank"><i class="fab fa-instagram"></i></i></a></p>
		</div>
		</div>
		<div class="footer-items">
			<div class="s-i">
				<h4>Become a supporter</h4>
			</div>
			<div class="sp">

				<p> <img src="EP.svg" alt=""> </p>
				<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
				<p> <img src="JZ.svg" alt=""> </p>

			</div>
						<div class="s-i">
							<p> <u>#Support</u> </p>
						</div>
		</div>
	</div>
</footer>
<script src="java.js">

</script>
</body>
</html>
