<?php

/**
 * Template Name: Send Email
 *
 * The template for displaying the Send Email Template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aquinas
 */

$from_name = "Marcus Borger";
$from_email = "mborger@diocesan.com";

$emails = explode(",", "mborger+fc1@diocesan.com,mborger+fc2@diocesan.com,mborger+fc3@diocesan.com,mborger+fc4@diocesan.com,mborger+fc5@diocesan.com,mborger+fc6@diocesan.com,mborger+fc7@diocesan.com,mborger+fc8@diocesan.com,mborger+fc9@diocesan.com,mborger+fc10@diocesan.com,mborger+fc11@diocesan.com,mborger+fc12@diocesan.com,mborger+fc13@diocesan.com,mborger+fc14@diocesan.com,mborger+fc15@diocesan.com");
$subject = "this is a test";
$message = "this is just a test";
$headers[] = 'From: ' . "=?UTF-8?B?" . base64_encode($from_name) . "?=" . ' <' . $from_email . '>';
$headers[] = 'Content-Type: text/html; charset=UTF-8';

foreach ($emails as $email) {

    $email_sent = wp_mail($email, $subject, $message, $headers);
}

get_header();
?>

<div class="content-area" id="primary">
    <main class="site-main page-template-email-test" id="main">
        this page just sent some emails.
        <pre><?php var_dump($email); ?></pre>
        <pre><?php var_dump($subject); ?></pre>
        <pre><?php var_dump($message); ?></pre>
        <pre><?php var_dump($headers); ?></pre>
    </main>
</div>

<?php get_footer();