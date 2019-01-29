<?php 
include ("connection.php");
   session_start();
   $buyer_id= "001";//$_SESSION['buyer_id'];//must be used session store in log in
if (isset($_POST['add_cart'])) {
 
 
    $item_name=mysqli_real_escape_string($conn,$_POST["item_name"]);
    $item_price=mysqli_real_escape_string($conn,$_POST["item_price"]);
    $image_name=mysqli_real_escape_string($conn,$_POST["image_name"]);
    

    $sql="INSERT INTO cart (item_name, price, image_name, Buyer_id) values('$item_name','$item_price','$image_name','$buyer_id')";
        $result=mysqli_query($conn, $sql);
        if($result){
            echo "<script type='text/javascript'>alert('Item Added to Cart')</script>";
        }else {
            echo "<script type='text/javascript'>alert('submition Failed! Allredy Added')</script>";
        }


}

if (isset($_POST['Delete_btn'])) {
   $item_name=mysqli_real_escape_string($conn,$_POST["item_name"]);
    
    $sql2="DELETE FROM cart WHERE item_name='$item_name' ";
        $result2=mysqli_query($conn, $sql2);

}

 ?>

<!DOCTYPE html>
<html>

<head>
    <title>ART LIFESTYLE</title>
    <link rel="stylesheet" href="styles.css" />
    <!-- <script src="script.js" async></script> -->
    <style type="text/css">
        
.cart-items button {
  background-color: DodgerBlue;
  color: white;
}
.cart-items .table th,td{
    padding: 20px;
}
.cart-items .btn_delet,.btn_edit {
  
  height: auto;
  color: white;
  padding: 10px;
  border: none;
  cursor: pointer;
  width: 100PX;
  margin:0;
  opacity: 0.8;
}
.cart-items .btn_delet{
  background-color: #E74C3C  ;
}

.cart-items .btn_edit{
  
  background-color: DodgerBlue;
  
}
.cart-items .btn_delet:hover,.btn_edit:hover{
  opacity: 1;
}
    </style>
</head>

<body>
    <header class="main-header">
        <h1>
            <center>Art Lifestyle</center>
        </h1>
        <nav class="main-nav nav">
            <ul>
                <li>HOME</li>
                <li><a href="contact.html">CONTACT US</a></li>
            </ul>
        </nav>
    </header>
    <center>
        <h2>
            <i> Beautiful HD ARTS </i> <br>
            <font size="4"> <i> Buy Quality....</i> </font>
        </h2>
    </center>
    <section>
        <div class="art-collections">
            <form action="index.php" method="POST">
            <div class="art-collection">
                <img class="art-image" src="image/unsplash8.jpg">
                <span class="art-title" >MONA LISA PAINT</span>
                <div class="art-details">
                    <input type="hidden" name="item_name" value="MONA LISA PAINT">
                    <input type="hidden" name="item_price" value="100">
                    <input type="hidden" name="image_name" value="image/unsplash8.jpg">
                    <span class="art-price">€100</span>
                    <button class="btn first-button art-button" name="add_cart" type="submit">ADD TO CART</button>
                </div>
                </form>
            </div>
             <form action="index.php" method="POST">
            <div class="art-collection">
                <img class="art-image" src="image/unsplash4.jpg">
                <span class="art-title">ABSTRACT PAINT</span>
                <div class="art-details">
                     <input type="hidden" name="item_name" value="ABSTRACT PAINT">
                    <input type="hidden" name="item_price" value="80">
                    <input type="hidden" name="image_name" value="image/unsplash4.jpg">
                    <span class="art-price">€80</span>
                    <button class="btn first-button art-button" name="add_cart" type="submit">ADD TO CART</button>
                </div>
                </form>
            </div>
             <form action="index.php" method="POST">
            <div class="art-collection">
                <img class="art-image" src="image/unsplash5.jpg">
                <span class="art-title">ABSTRACT ART </span>
                <div class="art-details">
                     <input type="hidden" name="item_name" value="ABSTRACT ART">
                    <input type="hidden" name="item_price" value="70">
                    <input type="hidden" name="image_name" value="image/unsplash5.jpg">
                    <span class="art-price">€70</span>
                    <button class="btn first-button art-button" name="add_cart" type="submit">ADD TO CART</button>
                </div>
                </form>
            </div>
             <form action="index.php" method="POST">
            <div class="art-collection">
                <img class="art-image" src="image/unsplash7.jpg">
                <span class="art-title">HAND PYRAMID PAINT</span>
                <div class="art-details">
                     <input type="hidden" name="item_name" value="HAND PYRAMID PAINT">
                    <input type="hidden" name="item_price" value="90">
                    <input type="hidden" name="image_name" value="image/unsplash7.jpg">
                    <span class="art-price">€90</span>
                    <button class="btn first-button art-button" name="add_cart" type="submit">ADD TO CART</button>
                </div>
                </form>
            </div>
             <form action="index.php" method="POST">
            <div class="art-collection">
                <img class="art-image" src="image/unsplash6.jpg">
                <span class="art-title">ART NEON</span>
                <div class="art-details">
                     <input type="hidden" name="item_name" value="ART NEON">
                    <input type="hidden" name="item_price" value="50">
                    <input type="hidden" name="image_name" value="image/unsplash6.jpg">
                    <span class="art-price">€50</span>
                    <button class="btn first-button art-button" name="add_cart" type="submit">ADD TO CART</button>
                </div>
                </form>
            </div>
             <form action="index.php" method="POST">
            <div class="art-collection">
                <img class="art-image" src="image/unsplash9.jpg">
                <span class="art-title">TUNNEL PAINT</span>
                <div class="art-details">
                     <input type="hidden" name="item_name" value="TUNNEL PAINT">
                    <input type="hidden" name="item_price" value="50">
                    <input type="hidden" name="image_name" value="image/unsplash9.jpg">
                    <span class="art-price">€50</span>
                    <button class="btn first-button art-button" name="add_cart"  type="submit">ADD TO CART</button>
                </div>
                </form>
            </div>
        </div>
    </section>
    <section>
        <h2>CART</h2>
        <div class="cart-row">
            
        </div>
        <div class="cart-items">
            <table class=" table table-striped">
    <thead >
      <tr>
        <th>ITEM</th>
        <th>NAME </th>
        <th>PRICE </th>
      </tr>
    </thead>
    <tbody>
            <?php 
          $sql1="SELECT*FROM cart WHERE Buyer_id='$buyer_id'  " ; 
          $result1=mysqli_query($conn, $sql1);
          
          while ($result1_set=mysqli_fetch_assoc($result1)) {
          echo "<tr>"; 
          echo "<td><img class='cart-item-image' src='".$result1_set['image_name']."'' width='100' height='100'></td>"; 
          echo "<td>".$result1_set['item_name']."</td>"; 
          echo "<td>€".$result1_set['price']."</td>"; 
          
         

          echo "<td><form action='index.php' method='POST'>
           <input type='hidden' name='item_name'   value='".$result1_set['item_name']."'/>
           <input  type='submit'  name='Delete_btn' class='btn_delet' value='Delete' '/></form></td>";
          echo "</tr>";   
          }
       

           ?>
             </tbody>
  </table>
        </div>
        <div class="cart-total">

            <strong class="cart-title">Total</strong>
            <span class="gross-price"><?php 
             $sql_price="SELECT*FROM cart WHERE Buyer_id='$buyer_id'  " ; 
          $result_price=mysqli_query($conn, $sql_price);
            $price=0;
          while ($result_set_price=mysqli_fetch_assoc($result_price)) {
                $price=$price+$result_set_price['price'];
           }
           if($price==0){
                echo "€0";
           }else {
            echo  "€ ".$price;
        }
             ?>
           
                
            </span>
        </div>
        <button class="btn first-button btn-checkout" type="button">CHECKOUT</button>
    </section>
    <footer>
        <center>@ART-LIFESTYLE.COM</center>
    </footer>
</body>

</html>