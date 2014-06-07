<?php require($_server['DOCUMENT_root']."../admin/settings.php");?>
<html>
<head>
</head>
<body>
<center>
<table style="font-family: Arial,Helvetica,sans-serif; font-size: 14px;"
class="pag" border="0" cellpadding="4" cellspacing="0" width="65%">

<center><H1>Archive Table</h1></center>

<center><form action="./dl.php" method="get"> 
       <input type="submit" name="button" value="View Raw Log" /> 
  </form></center>

<tbody>
<tr
style="background: rgb(255, 255, 204) none repeat scroll 0% 50%; -moz-background-clip: -moz-initial; -moz-background-origin: -moz-initial; -moz-background-inline-policy: -moz-initial;">
<td style="border-bottom: 3px solid rgb(255, 204, 153);">Datetime</td>
<td style="border-bottom: 3px solid rgb(255, 204, 153);">IP</td>
<td style="border-bottom: 3px solid rgb(255, 204, 153);">Type-Status</td>
</tr>
<?php $filename = 'archive.txt'; $fp = fopen($filename, "r"); if($fp) { while(!feof($fp)) { $line = fgets($fp); $data = explode('|', $line); echo '<tr> <td style="padding:5px; border-bottom:1px solid #ccc; border-right:1px solid #ccc;"">'.$data[1].'</td> <td style="padding:5px; border-bottom:1px solid #ccc; border-right:1px solid #ccc;"">'.$data[2].'</td> <td style="padding:5px; border-bottom:1px solid #ccc; border-right:1px solid #ccc;"">'.$data[3].'</td></tr>'; } } else { echo ' unable to open file for reading '; } ?><br>
</tbody>
</table>
</center>
</body>
</html>

