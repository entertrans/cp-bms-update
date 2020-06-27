<html>
<head>
    <style type='text/css'>
        body {
            background-color: #000
        }

        .padding {
            padding: 2rem !important
        }

        .card {
            margin-bottom: 30px;
            border: none;
            -webkit-box-shadow: 0px 1px 2px 1px rgba(154, 154, 204, 0.22);
            -moz-box-shadow: 0px 1px 2px 1px rgba(154, 154, 204, 0.22);
            box-shadow: 0px 1px 2px 1px rgba(154, 154, 204, 0.22)
        }

        .card-header {
            background-color: #fff;
            border-bottom: 1px solid #e6e6f2
        }

        h3 {
            font-size: 20px
        }

        h5 {
            font-size: 15px;
            line-height: 26px;
            color: #3d405c;
            margin: 0px 0px 15px 0px;
            font-family: 'Circular Std Medium'
        }

        .text-dark {
            color: #3d405c !important
        }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body>

<div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 padding">
     <div class="card">
         <div class="card-header p-4">
             <div class="float-left">
                 <h3 class="mb-0">[logo]</h3>
             </div>
             <div class="float-right">
                 <!-- <h3 class="mb-0">Invoice #<?= $invoice ?></h3>
                 Date: <?= $date ?> -->
             </div>
         </div>
         <div class="card-body">
             <div class="row mb-4">
                 <div class="col-sm-6">
                     <h5 class="mb-3">From:</h5>
                     <h3 class="text-dark mb-1">PT Bintang Muara Sejati</h3>
                     <div>29, Singla Street</div>
                     <div>Sikeston,New Delhi 110034</div>
                     <div>Email: contact@bbbootstrap.com</div>
                     <div>Phone: +91 9897 989 989</div>
                 </div>
                 <div class="col-sm-6 ">
                     <h5 class="mb-3">To:</h5>
                     <!-- <h3 class="text-dark mb-1"><?= $name ?></h3>
                     <div><?= $alamat ?></div>
                     <div>Email: <?= $email ?></div> -->
                     <div>Phone: +91 9897 989 989</div>
                 </div>
             </div>
             <div class="row mb-4">
                 <div class="col-sm-6 ">
                     <h5 class="mb-3">Pembayaran:</h5>
                     <!-- <h3 class="text-dark mb-1"><?= $payment == 'transfer' ? 'Bank Transfer' : 'Cash On Delivery' ?></h3>
                     <div><?= $payment == 'transfer' ? $rek . ' a/n ' . $an : '' ?></div> -->
                 </div>
             </div>
             <div class="table-responsive-sm">
                 <table class="table table-striped">
                     <thead>
                         <tr>
                             <th>Item(s)</th>
                             <th class="center">Qty(s)</th>
                             <th class="right">Price</th>
                             <th class="right">Sub Total</th>
                         </tr>
                     </thead>
                     <tbody>
                         <!-- <?php $cart = $this->cart->contents();
                         foreach($cart as $item) : ?>
                         <tr>
                             <td><?= $item['name'] ?></td>
                             <td><?= $item['qty'] ?></td>
                             <td><?= number_format($item['price'], 0, ',', '.') ?></td>
                             <td><?= number_format($item['qty'] * $item['price'], 0, ',', '.') ?></td>
                         </tr>
                         <?php endforeach; ?> -->
                     </tbody>
                 </table>
             </div>
             <div class="row">
                 <div class="col-lg-4 col-sm-5">
                 </div>
                 <div class="col-lg-4 col-sm-5 ml-auto">
                     <table class="table table-clear">
                         <tbody>
                             <tr>
                                 <td class="left">
                                     <strong class="text-dark">Total</strong> </td>
                                 <td class="right">
                                     <!-- <strong class="text-dark"><?= number_format($this->cart->total(), 0, ',', '.') ?></strong> -->
                                 </td>
                             </tr>
                         </tbody>
                     </table>
                 </div>
             </div>
         </div>
     </div>
</div>

</body>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js'></script>
</html>