<?php
Utils\ensure_logged_in();
$claims = Utils\jwt_get_claims($_SESSION["_token"]);
?>

<style>
    .paypal {
        display: flex;
        margin-top: 30px;
        margin-left: auto;
        margin-right: auto;
        justify-content: center;
        align-items: center;
        width: 500px;
        border-radius: 20px;
    }

    .user-id {
        display: none;
    }

    .cod {
        display: flex;
        padding: 20px;
        margin-top: 30px;
        margin-left: auto;
        margin-right: auto;
        justify-content: center;
        align-items: center;
        width: 500px;
        border-radius: 20px;
        font-size: 24px;
    }
</style>

<div class="page-wrapper">
    <?php
    if (isset($data)) {
        require_once "./mvc/views/" . $data["header"] . ".php";
    }
    ?>
    <main class="page-main">

        <div class="section-first-screen">
            <div class="first-screen__bg hide-in-sd"
                 style="background-color: rgba(248, 78, 69, 15%); height: 300px;"></div>
            <div class="first-screen__content hide-in-sd" style="height: 300px;">
                <div class="uk-container" style="padding: 32px 0">
                    <div class="first-screen__box page-info">
                        <h2 class="first-screen-page">Thanh toán</h2>
                        <div class="first-screen__breadcrumb">
                            <ul class="uk-breadcrumb">
                                <li><a href="<?php echo Utils\BASE_URL ?>/home/index">Trang chủ</a></li>
                                <li><a href="<?php echo Utils\BASE_URL ?>/home/cart">Giỏ hàng</a></li>
                                <li><a href="">Thanh toán</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="user-id">
                <?php echo $_SESSION["id"]; ?>
            </div>
            <div class="page-content">
                <div id="paypal-button" class="uk-button-link paypal">
                </div>
                <a class="uk-button cod" href="#" id="cod-payment" onclick="getOrder()">COD</a>
            </div>
    </main>
    <?php
    require_once "./mvc/views/" . $data["footer"] . ".php";
    ?>
</div>
<script
        src="https://www.paypal.com/sdk/js?client-id=Aa74v1mrh1qryJE6Bo9asTWMjJ3M8AIDHQAY-1ols8ZslTGWIRCU2s6xTcw2puhr6QYurpjtUjp-LoAh&currency=USD&disable-funding=credit,card">
</script>

<script>
    let paypal_price = 0;
    let price = 0;
    const address = localStorage.getItem("address");
    let userID = JSON.parse(document.getElementsByClassName('user-id')[0].innerHTML);
    let note = localStorage.getItem("note");

    function getOrder() {
        const btn = document.getElementById('cod-payment');
        btn.href = '<?php echo Utils\BASE_URL ?>/Home/success/' + `${userID}/${price}/${address}/${note}`;
    }

    paypal.Buttons({
        style: {
            color: 'blue',
        },
        createOrder: function (data, actions) {
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: paypal_price
                    }
                }]
            });
        },
        onApprove: function (data, actions) {
            return actions.order.capture().then(function (orderData) {
                const transaction = orderData.purchase_units[0].payments.captures[0];
                window.location.href = '<?php echo Utils\BASE_URL ?>/Home/success/' + `${userID}/${price}/${address}/${note}`;
            });
        },

    }).render('#paypal-button');
</script>