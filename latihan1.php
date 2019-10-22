
<html>
    

<head> 
    


<title> Mengirim hasil submit form ke Array Assosiative </title>
        <link rel="stylesheet/less" href="sidebar.less">
        <script type="text/javascript" src="less.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<title> </title>
</head>

<body>

        <form menthod="GET" >


        <div class="col-sm-5"> 
        <label> Bilangan 1 </label>
        <input type="number" class="form-control" name="bilangan1" placeholder="Masukan bilangan 1">
</div>

<div class="col-sm-5"> 
<label> Bilangan 2 </label>
        <input type="number" class="form-control" name="bilangan2" placeholder="Masukan bilangan 2">
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

                
           
    $bil1 = $_GET["bilangan1"];       
    $bil2 = $_GET["bilangan2"];
   

}


?>

<?php 

function tukar(&$bil1,&$bil2){
    $temp = $bil1;
    $bil1 = $bil2;
    $bil2 = $temp;
}

?>

<?php 


tukar($bil1,$bil2);

echo "Bilangan 1 = $bil1";
echo "<br>";
echo "Bilangan 2 = $bil2"; 

?>
<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- Memanggil JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>

</html>