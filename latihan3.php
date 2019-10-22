
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
        <label> Bilangan faktorial </label>
        <input type="number" class="form-control" name="bilangan" placeholder="Masukan nama">
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

                
           
    $bilangan = $_GET["bilangan"];       

}


?>

<?php 



function faktorial($bilangan){

    if ($bilangan<=0) {
        
        $jumlah=1;
        }

else {
$jumlah=1;

for ($bil=1; $bil<=$bilangan; $bil++)
{

$jumlah = $jumlah*$bil;

}



}


echo "<b>Nilai faktorial dari $bilangan adalah $jumlah</b>"; 




}

faktorial($bilangan);

?>






<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- Memanggil JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>

</html>