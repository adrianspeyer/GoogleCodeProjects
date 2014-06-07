<?php require($_server['DOCUMENT_root']."../admin/settings.php");?>
<?php include("version.php"); ?>

<?php

        $msg = '';

	if (ini_get('allow_url_fopen') == 0){
		$msg .= "<img src=../images/ico_warn.gif> This server does not allow accesing of remote files from php.<br>";
	}else{
		$available = file ('http://ymmv-stats.googlecode.com/svn/trunk/version.txt');
	}
	$installed = $YMMV_version;
	if (!$available){
		$msg .= "<img src=../images/ico_notice.gif> Coud not get new version number";
		$disabled = "disabled";
		}else{
		if ($installed==rtrim($available[0])) {
		$msg .= "<img src=../images/ico_yes.gif> Installed version of YMMV Web Stats is the latest one,you don't need to update.";
		$disabled = "disabled";
		}else{
		$msg .= "<img src=../images/ico_warn.gif> New version of YMMV Web Stats is available!";
		$disabled = "";
		}
	}

?>
<center>
<form action='http://code.google.com/p/ymmv-stats/downloads/list?can=3&q=&colspec=Filename+Summary+Uploaded+ReleaseDate+Size+DownloadCount' method='post'>
        <?php echo "<p>&nbsp;$msg</p>"; ?>
	<table>
	<th width='150'><b>Installed version:<b></th>
	<th width='150'><b>Available version:<b></th>
                <tr>
		<td style="text-align: center;"><?php echo $installed ?><br></td>
		<td style="text-align: center;"><?php echo $available[0] ?><br></td>
                </tr>
		<tr><td><p>&nbsp;</p></td></tr>
		<tr>
                        <td colspan="2" align="center"><input class=input type='submit' name='submit' value='Get new version !' <?php echo $disabled ?> >
		</tr>
        </table>
</form>
<br><br>

</center>
</body>
</html>