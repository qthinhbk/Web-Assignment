<?php
if (isset($data["oid"])) {
    $oid = $data["oid"];
    $uid = $data["uid"];
    $date = $data["date"];
    $price = $data["price"];
    $name = $data["name"];
    $email = $data["email"];
    $phone = $data["phone"];
    $address = $data["address"];
    $conn = $data["orderModal"]->con;
    $query = "INSERT INTO orderr (order_id, customer_id, order_date, total_price, address, phone, email, name) VALUES (N'$oid', N'$uid', N'$date', N'$price', N'$address', N'$phone', N'$email', N'$name');";
    if ($conn->query($query)) {
        echo "<script type='text/javascript'>alert('Đặt hàng thành công. Mã đơn hàng của quý khách là #" . $oid . ". Cảm ơn quý khách rất nhiều.');
            localStorage.clear();
            window.location.href = '<?php echo Utils\BASE_URL ?>/';
          </script>";
    } else {
        echo $conn->error;
    }
}


