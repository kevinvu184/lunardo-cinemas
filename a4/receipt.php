<?php
require_once('tools.php');
session_start();


if (!empty($_SESSION['cart'])) {
    // initialise variables we need with default values
    $id = $_SESSION['cart']['movie']['id'];
    $day = $_SESSION['cart']['movie']['day'];
    $hour = $_SESSION['cart']['movie']['hour'];
    $name = $_SESSION['cart']['cust']['name'];
    $email = $_SESSION['cart']['cust']['email'];
    $mobile = $_SESSION['cart']['cust']['mobile'];
    $card = $_SESSION['cart']['cust']['card'];
    $expiryMonth = $_SESSION['cart']['cust']['expiryMonth'];
    $expiryYear = $_SESSION['cart']['cust']['expiryYear'];
    $now = date('d/m h:i');

    movieTitle($id);
    movieHour($hour);
} else {
    header('Location: ./index.php');
}
?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Affordable and cozy cinema">
    <meta name="author" content="Kevin Vu & Ted Vu">

    <title>Lunardo Cinemas | Invoice</title>

    <link id='stylecss' type="text/css" rel="stylesheet" href="../a4/style.css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Red+Hat+Text:400,500,700&display=swap');
    </style>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap');
    </style>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap');
    </style>

    <link rel="icon" href="../../media/lunardo_logo_icon.png" />
</head>

<body>
    <h1>Invoice</h1>
    <h2><?php echo htmlspecialchars($id); ?> - <?php echo htmlspecialchars($day); ?> - <?php echo htmlspecialchars($hour); ?></h2>
    <header>
        <section id="company-detail">
            <h3>Company Details</h3>
            <div><span class="title">Lunardo Cinemas<span></div>
            <div><a href="https://titan.csit.rmit.edu.au/~s3678491/wp/a4/index.php">lunardo.com</a></div>
            <div><a href="tel:012-345-6789">+012-345-6789</a></div>
            <div><a href="mailto:lunardo@example.com">lunardo@example.com</a></div>
            <div>1 Lunar Street, VIC, Melbourne</div>
            <div>ABN: 00 123 456 789</div>
        </section>
        <section id="receipt-deltail">
            <h3>Details</h3>
            <div>Receipt no: </span>#000</div>
            <div>Issue date: </span><?= $now; ?></div>
        </section>
    </header>

    <main>
        <section id="customer-detail">
            <h3>Bill to</h3>
            <div><span class="title"><?php echo htmlspecialchars($name); ?><span></div>
            <div><a href="tel:"><?php echo htmlspecialchars($mobile); ?></a></div>
            <div><a href="mailto:"><?php echo htmlspecialchars($email); ?></a></div>
        </section>

        <section id="table">
            <table class="summary-table">
                <thead>
                    <tr>
                        <th class="" scope="col">Description</th>
                        <th class="" scope="col">QTY</th>
                        <th class="" scope="col">UnitPrice</th>
                        <th class="" scope="col">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $subtotal = 0; ?>
                    <?php foreach ($codes as $code) : ?>
                        <tr>
                            <th class="" scope="row"><?php echo movieDes($code); ?></th>
                            <td class=""><?php echo htmlspecialchars($_SESSION['cart']['seats'][$code] ?: 0); ?></td>
                            <td class="">$ <?php echo movieUnitPrice($code, $day, $hour); ?></td>
                            <td class="">$ <?php $total = (float)($_SESSION['cart']['seats'][$code] ?: 0) * movieUnitPrice($code, $day, $hour);
                                            echo number_format($total, 2); ?></td>
                        </tr>
                        <?php $subtotal += $total; ?>
                    <?php endforeach; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="3">Subtotal</th>
                        <td>$ <?php echo htmlspecialchars(number_format($subtotal, 2)); ?></td>
                    </tr>
                    <tr>
                        <th colspan="3">GST</th>
                        <td>$ <?php echo htmlspecialchars(number_format(round($subtotal / 11, 2), 2)); ?></td>
                    </tr>
                    <tr>
                        <th colspan="3">Balance Due</th>
                        <td>$ <?php echo htmlspecialchars(number_format(round($subtotal / 11 + $subtotal, 2), 2)); ?></td>
                    </tr>
                </tfoot>
            </table>
        </section>
    </main>

    <footer>
        <div>
            &copy;
            <script>
                document.write(new Date().getFullYear());
            </script>Tuan Vu - S3678491/Khoa Vu - S3678490. Last modified <?= date("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.
        </div>
        <div>
            Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.
        </div>
    </footer>

    <?php $ticket_no = 1; ?>
    <?php foreach ($codes as $code) : ?>
        <?php $count = ($_SESSION['cart']['seats'][$code] ?: 0); ?>
        <?php while ($count > 0) : ?>
            <section class="ticket">
                <div class="row">
                    <div class="left"><img src='../../media/lunardo_logo.png' alt='logo' /></div>
                    <div class="right">
                        <div><span class="ticket-content">Ticket #<?php echo $ticket_no++; ?> // <?php echo movieDes($code); ?></span></div>
                        <div class="movie-title"><span><?php echo htmlspecialchars($id); ?></span></div>
                        <div class="row">
                            <div class="right"><span class="ticket-content"><?php echo htmlspecialchars($day); ?> - <?php echo htmlspecialchars($hour); ?></span></div>
                            <div class="left"><span class="ticket-content"><?php echo htmlspecialchars($name); ?></span></div>
                        </div>
                    </div>
                </div>
            </section>
            <?php $count--; ?>
        <?php endwhile; ?>
    <?php endforeach; ?>
</body>

</html>
<?php

$GLOBALS['formatSeat'] = $_SESSION['cart']['seats'];

foreach ($GLOBALS['formatSeat'] as $code => $qty) {
    if ($qty == '') {
        $GLOBALS['formatSeat'][$code] = 0;
    }
}

$cells = array_merge(
    [$now],
    (array)$name,
    (array)$email,
    (array)$mobile,
    $_SESSION['cart']['movie'],
    $GLOBALS['formatSeat'],
    (array)('$' . number_format($subtotal, 2))
);
$cart = $_SESSION['cart'];
$fp = fopen('bookings.txt', 'a');
fputcsv($fp, $cells, "\t");
fclose($fp);

//destroy session after ordering ticket
session_destroy();

table('POST Data', $_POST);
table('GET Data', $_GET);
table('SESSION[\'cart\'] Data', $_SESSION['cart']);
debugModule();
?>