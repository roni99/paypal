<?php $page = 'dashboard'; ?>
<?php 
@session_start();
if(isset($_SESSION['phone_no']))
{
?>
<?php include("../connection.php");
@session_start();
if(isset($_SESSION['phone_no']))
{		
$phone_no=mysql_real_escape_string($_SESSION['phone_no']);
$query=mysql_fetch_array(mysql_query("select * from sv_user_profile where phone_no='$phone_no'"));
$address=mysql_real_escape_string($query['address']);		
}	
?>
<?php 
if(isset($_REQUEST['postal_code']))
{
$postal_code=$_REQUEST['postal_code'];
}
else{$postal_code="";}
?>
<body class="splash-index">
  <?php include("../header.php") ?>
  <section class="teaser main-teaser bg-top">
    <div class="min-space">
    </div>
    <div class="min-space">
    </div>
    <div class="min-space">
    </div>
    <h1 class="sub-title">Dashboard
    </h1>
    <div class="min-space">
    </div>
    <div class="min-space">
    </div>
  </section>
  <style type="text/css">
    body{
      overflow-x:hidden;
    }
  </style>
  <section class="teaser">
    <div class="min-space">
    </div>
    <div class="container">
      <div class="col-lg-3 col-md-3 col-sm-3">
        <?php include("side_menu.php") ?>
        <div class="min-space">
        </div>
      </div>
      <div class="col-lg-9 col-md-9 col-sm-9">
        <h3>Order Details
        </h3>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>SNo
                </th>		
                <th>City
                </th>
                <th>Address
                </th>
                <th>Services
                </th>
                <th>Sub_Services </th>
				<th>Order_ID</th>
                <th>Order_date
                </th>
                <th>Order_Time
                </th>
                <th>Requirement
                </th>
				<th>Price</th>
			<th>Payment_mode</th>
			<th>Payment_status</th>
			<th>Currency_code</th>
              </tr>
            </thead>
            <?php
$sno=0;
$res=mysql_query("select * from sv_user_order where phone_no='$phone_no' ORDER BY order_id DESC");
while($row=mysql_fetch_array($res))
{
$sno++;
$services=mysql_real_escape_string($row['services']);
$sub_id=mysql_real_escape_string($row['sub_services']);
$query=mysql_fetch_array(mysql_query("select * from sv_services where services_id='$services'"));			
$date=mysql_real_escape_string(date("d-m-Y",strtotime($row['date'])));	
$city_id=mysql_real_escape_string($row['city_name']);
$city=mysql_fetch_array(mysql_query("select * from sv_city where city_id='$city_id'"));
$sub=mysql_fetch_array(mysql_query("select * from sv_services_sub where sid='$sub_id'"));			
?>  
            <tbody>
              <tr>
                <td>
                  <?php echo $sno; ?>
                </td>
                <td>
                  <?php echo $city['city_name']; ?>
                </td>
                <td>
                  <?php echo $row['address']; ?>
                </td>
                <td>
                  <?php echo $query['services_name'];?>
                </td>
                <td>
                  <?php echo $sub['services_sub_name']; ?>
                </td>
				<td><?php echo $row['order_id']; ?></td>
                <td>
                  <?php echo $date; ?>
                </td>
                <td>
                  <?php echo $row['order_time']; ?>
                </td>
                <td>
                  <?php echo $row['requirement']; ?>
                </td>
				<td><?php echo $row['price']; ?></td>
		<td><?php echo $row['payment_mode']; ?></td>
		<td><?php echo $row['payment_status']; ?></td>
		<td><?php echo $row['currency_code']; ?></td>
              </tr>
            </tbody>
            <?php } ?>	
          </table>
        </div>
      </div>
    </div>
    <div class="min-space">
    </div>
  </section>
  <?php include("../footer.php") ?>
  </html>
<?php } else { header('Location:sign_in.php'); }?>
