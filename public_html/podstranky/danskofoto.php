<!--FOTOGALERIE-->
<div class="imgallery">
<h2 class="zeme">Fotogalerie - Dánsko</h2>
<?php
$folder_path = 'foto/denmark/'; //image's folder path

$num_files = glob($folder_path . "*.{JPG,jpg,gif,png,bmp}", GLOB_BRACE);

$folder = opendir($folder_path);
 
if($num_files > 0)
{
 while(false !== ($file = readdir($folder))) 
 {
  $file_path = $folder_path.$file;
  $extension = strtolower(pathinfo($file ,PATHINFO_EXTENSION));
  if($extension=='jpg' || $extension =='png' || $extension == 'gif' || $extension == 'bmp') 
  {
   ?>
            <a href="<?php echo $file_path; ?>"><img src="<?php echo $file_path; ?>" class="gallery" alt="Fotka z Dánska" title="Fotka z Dánska" /></a>
            <?php
  }
 }
}
else
{
 echo "Slozka je prazdna!";
}
closedir($folder);
?>
</div>