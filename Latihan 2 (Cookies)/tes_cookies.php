 <?php setcookie("test_cookie", "test", time() + 3600, '/'); ?>
<html>
<body>
 <?php if(count($_COOKIE) > 0) {
 echo "Cookies enabled.";
 } else {
 echo "Cookies disabled.";
 } ?>
 <!-- KENAPA PADA BROWSER INCOGNITO COOKIES "DISABLED" ?
 
 sebab pada mode incognito ,browser tidak menyimpan cache,cookies dan history dari website yang kita akses.

 jadi walaupun kita set cookies , maka browser tidak menyimpan apa yang kita set ,jadi akan tetap menampilkan Cookies Disabled
 
  -->


 
 </body>
 </html>