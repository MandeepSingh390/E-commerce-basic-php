<?php
  include('dbconnection.php');
  session_start();

  if (!isset($_SESSION['login_user'])){
    $_SESSION['login_user'] = "guest";
    $login_session_id = $login_session = $_SESSION['login_user'];
    //echo $login_session_id;
    $guest_check = "SELECT user_id FROM shopping_cart WHERE user_id = 'guest'";
    $checkresult = mysqli_query($conn,$guest_check);
    $count = mysqli_num_rows($checkresult);

    if($count != 1) {
      $creatnewcart = "INSERT INTO `shopping_cart`(`product_id`, `user_id`, `quantity`) VALUES ('a:0:{}','$login_session_id','a:0:{}')";
      $createnewcartq= mysqli_query($conn,$creatnewcart);
    }
  }
  elseif($_SESSION['login_user']!="guest") {
    $user_check = $_SESSION['login_user'];
    //echo $user_check;
    $ses_sql = mysqli_query($conn,"select * from user_details where user_email = '$user_check' ");
    //print_r(mysqli_fetch_array($ses_sql,MYSQLI_ASSOC));
    $row1 = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
    //print_r($row1);
    $count1 = mysqli_num_rows($ses_sql);
    //echo $count1;

    if($count1 == 1) {
      $login_session = $row1['user_name'];
      $login_session_id = $row1['user_id'];
      $cartexists = "SELECT * FROM shopping_cart WHERE user_id = $login_session_id";
      $cartconf = mysqli_query($conn,$cartexists);
      $row2 = mysqli_fetch_array($cartconf,MYSQLI_ASSOC);
      //print_r($row2);
      $count2 = mysqli_num_rows($cartconf);

      if(!$count2 == 1) {
        $creatnewcart = "INSERT INTO `shopping_cart`(`product_id`, `user_id`, `quantity`) VALUES ('a:0:{}',$login_session_id,'a:0:{}')";
        $createnewcartq= mysqli_query($conn,$creatnewcart);
      }
    }    
  }
  elseif($_SESSION['login_user']="guest") {

    $login_session = $_SESSION['login_user'];
    $login_session_id = $_SESSION['login_user'];
  }
?>
