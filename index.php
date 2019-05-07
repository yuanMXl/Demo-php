<?php
function scerweima($url=''){
  require_once 'phpqrcode/phpqrcode.php';
  $value = $url;         //二维码内容
  $errorCorrectionLevel = 'L';  //容错级别
  $matrixPointSize = 5;      //生成图片大小
  //生成二维码图片
  $filename = 'qrcode/'.microtime().'.png';
  QRcode::png($value,$filename , $errorCorrectionLevel, $matrixPointSize, 2);
  $QR = $filename;        //已经生成的原始二维码图片文件
  $QR = imagecreatefromstring(file_get_contents($QR));
  //输出图片
  imagepng($QR, 'qrcode.png');
  imagedestroy($QR);
  return '<img align="center"  src="qrcode.png" style="height: 20%;" alt="图片">';
}
$di = "localhost/uploadimg.php";//这里是url地址转换的

?>
<html style="font-size: 18.75px;">

		 <div style="text-align: center;"><?php echo scerweima($di);?></div>

		 </html>