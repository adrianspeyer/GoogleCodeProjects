<?php require($_server['DOCUMENT_root']."../admin/settings.php");?>
<?php

unlink('./files/newindex.php');
//unlink('./files/files.php');
//unlink('./files/files2.php');
//unlink('./files/files3.php');
//unlink('./files/files4.php');
//unlink('./files/files5.php');
//unlink('./files/files6.php');
//unlink('./files/files7.php');
//unlink('./files/files8.php');
//unlink('./files/files9.php');
//unlink('./files/files10.php');


if (!is_dir('files')) {
    mkdir('files');
}

rmdir('files');
?>

Thanks, all done!