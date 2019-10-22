
<html>
    

<head> 
    


<title> Mengirim hasil submit form ke Array Assosiative </title>
        <link rel="stylesheet/less" href="sidebar.less">
        <script type="text/javascript" src="less.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<title> </title>
</head>

<body>

        <form menthod="GET$_GET" >


        <div class="col-sm-5"> 
        <label> Nama anda </label>
        <input type="text" class="form-control" name="nama" placeholder="Masukan nama">
</div>

<div class="col-sm-5"> 
<label> Warna Font (dalam bahasa inggris) </label>
        <input type="text" class="form-control" name="warna" placeholder="Masukan warna">
</div>

<br>
<br>

<div class="form-group row">
    <div class="col-sm-10">
      <button  type="submit" name="submit"class="btn btn-primary">Submit</button>
    </div>
  </div>


</form>

<br>
<br>
<br>
 

<?php  if(isset($_GET["submit"])) {

                
           
    $nama = $_GET["nama"];       
    $warna = $_GET["warna"];
   

}


?>

<?php 

$tampungnama = strlen($nama);
$harga;

if($tampungnama <= 10 ) {

$harga = $tampungnama * 300;

} else if($tampungnama >10 && $tampungnama <21 ){

    $harga = $tampungnama *500;


}else if ($tampungnama >10 && $tampungnama <21 ){

    $harga = $tampungnama *700;

}


if ($warna == null){

    $warna = "red";

} else {

    $warna = $warna;


}



?>




<p> Nama : </p>
<p style="color: <?php echo $warna ?> "><?php echo $nama ?></p>

<?php 
echo "Harga : $harga";
?>
<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- Memanggil JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>

</html>