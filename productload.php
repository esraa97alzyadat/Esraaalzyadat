<?php include 'header.php' ; ?>
<center>
<form action="productload.php" method="post">
    <input type="text" name="name" placeholder="product name" 
               class="form-control" style="width:30%; transform: scale(2);" required/> <br/><br/><br/>
    <input type="text" name="dis" placeholder="discrbtion" 
               class="form-control" style="width:30%; transform: scale(2);" required/> <br/><br/><br/>
    <input type="text" name="price" placeholder="price" 
               class="form-control" style="width:30%; transform: scale(2);" required/> <br/><br/><br/>
     <input type="submit" name="btn" value="Save"
               class="btn btn-danger" style="width:30%; transform: scale(2);" /> <br/><br/><br/>
    
</form>
</center>

<?php 
    $con = new mysqli("localhost","root","","nutri");
    $st = $con->prepare("insert into provitems(name,description,price) values(?,?,?)");
    $st->bind_param("sss", $_POST["name"],$_POST["dis"],$_POST["price"]);
    $st->execute();
    

?>


