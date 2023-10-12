<?php

include 'config.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:login.php');
}

if(isset($_POST['update_order'])){

   $order_update_id = $_POST['order_id'];
   $update_payment = $_POST['update_payment'];
   mysqli_query($conn, "UPDATE `orders` SET payment_status = '$update_payment' WHERE id = '$order_update_id'") or die('query failed');
   $message[] = 'payment status has been updated!';

}

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM `orders` WHERE id = '$delete_id'") or die('query failed');
   header('location:admin_orders.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>orders</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/admin_style.css">


   <style>
  /* Style the table */
  .order-table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
  }

  .order-table th, .order-table td {
    padding: 10px;
    text-align: left;
    border: 1px solid #ccc;
  }

  /* Style the table headers */
  .order-table thead {
    background-color: #333;
    color: #fff;
  }

  .order-table th {
    font-weight: bold;
  }

  /* Style each row */
  .order-table tbody tr:nth-child(even) {
    background-color: #f2f2f2;
  }

  /* Style specific column headings */
  .user-id-heading {
    background-color: #007bff;
    color: #fff;
  }

  .total-price-heading {
    background-color: #ff6c40;
    color: #fff;
  }

  /* Style the update and delete buttons */
  .option-btn, .delete-btn {
    background-color: #007bff;
    color: #fff;
    padding: 5px 10px;
    border: none;
    cursor: pointer;
    text-decoration: none;
  }

  .option-btn:hover, .delete-btn:hover {
    background-color: #0056b3;
  }

  .delete-btn {
    background-color: #d9534f;
  }

  /* Style the "No orders placed yet!" message */
  .empty {
    text-align: center;
    font-style: italic;
    color: #888;
  }
</style>





</head>
<body>

<?php include 'admin_header.php'; ?>

<section class="orders">

   <h1 class="title">placed orders</h1>

   <table class="order-table">
   <thead>
      <tr>
         <th>User ID</th>
         <th>Placed On</th>
         <th>Name</th>
         <th>Number</th>
         <th>Email</th>
         <th>Address</th>
         <th>Total Products</th>
         <th>Total Price</th>
         <th>Payment Method</th>
         <th>Payment Status</th>
         <th>Actions</th>
      </tr>
   </thead>
   <tbody>
      <?php
      $select_orders = mysqli_query($conn, "SELECT * FROM `orders`") or die('query failed');
      if(mysqli_num_rows($select_orders) > 0){
         while($fetch_orders = mysqli_fetch_assoc($select_orders)){
            echo '<tr>';
            echo '<td>' . $fetch_orders['user_id'] . '</td>';
            echo '<td>' . $fetch_orders['placed_on'] . '</td>';
            echo '<td>' . $fetch_orders['name'] . '</td>';
            echo '<td>' . $fetch_orders['number'] . '</td>';
            echo '<td>' . $fetch_orders['email'] . '</td>';
            echo '<td>' . $fetch_orders['address'] . '</td>';
            echo '<td>' . $fetch_orders['total_products'] . '</td>';
            echo '<td>Rs.' . $fetch_orders['total_price'] . '/-</td>';
            echo '<td>' . $fetch_orders['method'] . '</td>';
            echo '<td>' . $fetch_orders['payment_status'] . '</td>';
            echo '<td>';
            echo '<form action="" method="post">';
            echo '<input type="hidden" name="order_id" value="' . $fetch_orders['id'] . '">';
            echo '<select name="update_payment">';
            echo '<option value="" selected disabled>' . $fetch_orders['payment_status'] . '</option>';
            echo '<option value="pending">pending</option>';
            echo '<option value="completed">completed</option>';
            echo '</select>';
            echo '<input type="submit" value="Update" name="update_order" class="option-btn">';
            echo '<a href="admin_orders.php?delete=' . $fetch_orders['id'] . '" onclick="return confirm(\'Delete this order?\');" class="delete-btn">Delete</a>';
            echo '</form>';
            echo '</td>';
            echo '</tr>';
         }
      } else {
         echo '<tr><td colspan="11" class="empty">No orders placed yet!</td></tr>';
      }
      ?>
   </tbody>
</table>



</section>










<!-- custom admin js file link  -->
<script src="js/admin_script.js"></script>

</body>
</html>
