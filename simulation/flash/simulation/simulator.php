<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<div class="post" align="left">&nbsp; <!--leave this space as such.. som wired issue-->
<?php include('breadcum.php'); ?>

  <blockquote> 
    <span class="title">Zener Diode</span>
     <p>    <div class="postConentPadding">
	  <?php
	  	$defTemp="Olab";
		//@include('vlab/'.$sub.'/'.$brch.'/'.$sim.'/menu.php');
		@include('menu.php');
		if($_GET['temp']!="")
		{
			$temp=$_GET['temp'];
		}else
		{
			$temp=$defTemp;
		}
		$lan=$_GET['lan']; 
		if($lan==""){
			$lan="en-US";
		}

?>
</p>
<p align="center">
<iframe src="<?php  echo 'vlab/'.$sub.'/'.$brch.'/'.$sim.'/'.'zener_diode.html'; ?>" frameborder="0" height="600" width="810" scrolling="no"></iframe></p>
  <!-- <p class="content">This   simulation   is also available in <a href="?sub=PHY&amp;brch=ACS&amp;sim=ResonanceColumn&amp;cnt=simulator&amp;temp=vlab">vlab</a>, <a href="?sub=PHY&amp;brch=ACS&amp;sim=ResonanceColumn&amp;cnt=simulator&amp;temp=Olab">olab</a> </p>-->
   &nbsp;
</div>
