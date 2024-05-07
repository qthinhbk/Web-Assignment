<?php
if (isset($data["oid"])) {
    $customer_id = $data["customer_id"];
    $total = $data["total"];
    $address = $data["address"];
    $note = $data["note"];
    /**
     * @var $orderModel OrderModel
     */
    $orderModel = $data["order_model"];
    $conn = $orderModel->con;
    if ($orderModel->add_order($customer_id, $total, $address, $note)) {
        $oid = $conn->insert_id;
        Utils\redirect_with_message(
            "Đặt hàng thành công. Mã đơn hàng của quý khách là #" . $oid . ". Cảm ơn quý khách rất nhiều.",
            Utils\BASE_URL . "/"
        );
    } else {
        Utils\redirect_with_message(
            "Đặt hàng thất bại. Vui lòng thử lại sau.",
            Utils\BASE_URL . "/"
        );
    }
}


