<?php
include('connection.php');
if($_GET){
    echo "Access Denied";
}elseif(isset($_POST['buy_submit'])){
include('cryptofunctions.php');

//////////////////////////////////////////////////////////////////////////////////    
  $sql = "SELECT * FROM `admin` WHERE `id` = 1" ;
          if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){ 
    $bitcoin_address =$row['bitcoin_address'];  
    $ethereum_address =$row['ethereum_address'];  
        }
        mysqli_free_result($result);

    }else{

         }
}else{ 
            
}    
/////////////////////////////////////////////////////////////////////////////////////////    
    
    
    
    
    
$amount = $_POST['de_amount'];
$pay_currency = $_POST['pay_currency'];
$email = $_POST['de_email'];
$de_name = $_POST['de_name'];
$de_address = $_POST['de_address'];
$u_id = $_POST['u_id'];
$username = $_POST['username'];
$type = $_POST['type'];
$name= $_POST['name'];

    
if(empty($email)){
    $message = array("error"=>"Please Enter E-mail");
                     
            echo json_encode($message);
            die();
} 
    
if(empty($pay_currency)){
    $message = array("error"=>"Please Select Currency");
                     
            echo json_encode($message);
            die();
}
//////////////////////////////////////////////////////////////////    
$url='https://bitpay.com/api/rates';
$json=json_decode( file_get_contents( $url ) );
$dollar=$btc=0;
//print_r($json);
foreach( $json as $obj ){
    if( $obj->code=='USD' ){
        $btc_to_usd_rate=$obj->rate;
    }elseif($obj->code=='ETH'){
        $btc_to_eth_rate=$obj->rate;
    }
    
}
/////////////////////////////////////////////////////////////
$scurrency = "USD";
//$rcurrency = "BTC";

$main_amount = converting($amount, $btc_to_usd_rate, $btc_to_eth_rate, $pay_currency);  

    $wallet_address = $bitcoin_address;
if($pay_currency == "BTC"){
    $wallet_address = $bitcoin_address;
}elseif($pay_currency == "ETH"){
    $wallet_address = $ethereum_address;
}
    
    
                $sql= "INSERT INTO `mining_payments`(`u_id`,`username`, `type`,`from_currency`, `entered_amount`,`to_currency`,`amount`,`status`,`type_name`,`name`,`address`) VALUES ('$u_id','$username','$type','$scurrency','$amount','$pay_currency','$main_amount','initialized','$name','$de_name','$de_address')";
    
        if(mysqli_query($link, $sql)){
            
            $last_id = $link->insert_id;
            
            $message = array("error"=>"ok",
                             "amount"=> $main_amount,
                             "to_currency"=>$pay_currency,
                             "last_id"=>$last_id,
                             "wallet_address"=>$wallet_address);

            echo json_encode($message);
            
            
        }else{
            $message = array("error"=>"Error Saving data",
                             "amount"=> $main_amount,
                             "to_currency"=>$rcurrency,
                             "wallet_address"=>$wallet_address);

            echo json_encode($message);
        }
    
    

}elseif(isset($_POST['hashcode_button'])){
    $hashcode = mysqli_real_escape_string($link, $_POST['hashcode']);
    $u_id = $_POST['u_id'];
    $payment_id = $_POST['payment_id'];
   
    if(empty($hashcode)){
        $message = array("error"=>"Enter Hashcode");
                     
            echo json_encode($message);
//    echo '<div class="alert alert-danger" style="border-radius:3px;text-align:center;background-color:#E23D28;color:#fff;padding:10px 85px;margin-top:0px">Enter Hashcode</div>';
        die();
    } 
    
    
    $sql = "UPDATE `mining_payments` SET `hashcode`='$hashcode',`status`='pending' WHERE `id`= '$payment_id'";  
    
        if(mysqli_query($link, $sql)){
            
            $message = array("error"=>"ok");

            echo json_encode($message);
            
        }else{
            $message = array("error"=>"Error Occurred");
                     
            echo json_encode($message);
//            echo '<div class="alert alert-danger" style="border-radius:3px;text-align:center;background-color:#E23D28;color:#fff;padding:10px 85px;margin-top:0px">Error Occurred</div>';
        }
  
}
?>