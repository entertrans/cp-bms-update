<html style="box-sizing: border-box;font-family: sans-serif;line-height: 1.15;-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;-ms-overflow-style: scrollbar;-webkit-tap-highlight-color: transparent;">
<head style="box-sizing: border-box;">
</head>
<body style="box-sizing: border-box;margin: 0;font-family: -apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Roboto,&quot;Helvetica Neue&quot;,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;,&quot;Segoe UI Symbol&quot;;font-weight: 400;line-height: 1.5;color: #212529;text-align: left;background-color: #fff;min-width: 992px!important;">

<div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 padding" style="box-sizing: border-box;position: relative;width: max-content;min-height: 1px;padding-right: 15px;padding-left: 15px;-ms-flex: 0 0 66.666667%;flex: 0 0 66.666667%;max-width: 66.666667%;margin-left: 16.666667%;">
     <div class="card" style="box-sizing: border-box;position: relative;display: flex;-ms-flex-direction: column;flex-direction: column;min-width: 0;word-wrap: break-word;background-color: #fff;background-clip: border-box;border: 1px solid rgba(0,0,0,.125);border-radius: .25rem;">
         <div class="card-header p-4" style="box-sizing: border-box;padding: 1.5rem!important;margin-bottom: 0;background-color: rgba(0,0,0,.03);border-bottom: 1px solid rgba(0,0,0,.125);border-radius: calc(.25rem - 1px) calc(.25rem - 1px) 0 0;">
             <div class="float-left" style="box-sizing: border-box;float: left!important;">
                 <h3 class="mb-0" style="box-sizing: border-box;margin-top: 0;margin-bottom: 0!important;font-family: inherit;font-weight: 500;line-height: 1.2;color: inherit;font-size: 1.75rem;orphans: 3;widows: 3;page-break-after: avoid;">[logo]</h3>
             </div>
             <div class="float-right" style="box-sizing: border-box;float: right!important;">
                 <h3 class="mb-0" style="box-sizing: border-box;margin-top: 0;margin-bottom: 0!important;font-family: inherit;font-weight: 500;line-height: 1.2;color: inherit;font-size: 1.75rem;orphans: 3;widows: 3;page-break-after: avoid;">Invoice #<?= $invoice ?></h3>
                 Date: <?= $date ?>
             </div>
         </div>
         <div class="card-body" style="box-sizing: border-box;-ms-flex: 1 1 auto;flex: 1 1 auto;padding: 1.25rem;">
             <div class="row mb-4" style="box-sizing: border-box;display: flex;-ms-flex-wrap: wrap;flex-wrap: wrap;margin-right: -15px;margin-left: -15px;margin-bottom: 1.5rem!important;">
                 <div class="col-sm-6" style="box-sizing: border-box;position: relative;width: 100%;min-height: 1px;padding-right: 15px;padding-left: 15px;-ms-flex: 0 0 50%;flex: 0 0 50%;max-width: 50%;">
                     <h5 class="mb-3" style="box-sizing: border-box;margin-top: 0;margin-bottom: 1rem!important;font-family: inherit;font-weight: 500;line-height: 1.2;color: inherit;font-size: 1.25rem;">From:</h5>
                     <h3 class="text-dark mb-1" style="box-sizing: border-box;margin-top: 0;margin-bottom: .25rem!important;font-family: inherit;font-weight: 500;line-height: 1.2;color: #343a40!important;font-size: 1.75rem;orphans: 3;widows: 3;page-break-after: avoid;">PT Bintang Muara Sejati</h3>
                     <div style="box-sizing: border-box;">29, Singla Street</div>
                     <div style="box-sizing: border-box;">Sikeston,New Delhi 110034</div>
                     <div style="box-sizing: border-box;">Email: contact@bbbootstrap.com</div>
                     <div style="box-sizing: border-box;">Phone: +91 9897 989 989</div>
                 </div>
                 <div class="col-sm-6 " style="box-sizing: border-box;position: relative;width: 100%;min-height: 1px;padding-right: 15px;padding-left: 15px;-ms-flex: 0 0 50%;flex: 0 0 50%;max-width: 50%;">
                     <h5 class="mb-3" style="box-sizing: border-box;margin-top: 0;margin-bottom: 1rem!important;font-family: inherit;font-weight: 500;line-height: 1.2;color: inherit;font-size: 1.25rem;">To:</h5>
                     <h3 class="text-dark mb-1" style="box-sizing: border-box;margin-top: 0;margin-bottom: .25rem!important;font-family: inherit;font-weight: 500;line-height: 1.2;color: #343a40!important;font-size: 1.75rem;orphans: 3;widows: 3;page-break-after: avoid;"><?= $name ?></h3>
                     <div style="box-sizing: border-box;"><?= $alamat ?></div>
                     <div style="box-sizing: border-box;">Email: <?= $email ?></div>
                     <div style="box-sizing: border-box;">Phone: +91 9897 989 989</div>
                 </div>
             </div>
             <div class="row mb-4" style="box-sizing: border-box;display: flex;-ms-flex-wrap: wrap;flex-wrap: wrap;margin-right: -15px;margin-left: -15px;margin-bottom: 1.5rem!important;">
                 <div class="col-sm-6 " style="box-sizing: border-box;position: relative;width: 100%;min-height: 1px;padding-right: 15px;padding-left: 15px;-ms-flex: 0 0 50%;flex: 0 0 50%;">
                     <h5 class="mb-3" style="box-sizing: border-box;margin-top: 0;margin-bottom: 1rem!important;font-family: inherit;font-weight: 500;line-height: 1.2;color: inherit;font-size: 1.25rem;">Pembayaran:</h5>
                     <h3 class="text-dark mb-1" style="box-sizing: border-box;margin-top: 0;margin-bottom: .25rem!important;font-family: inherit;font-weight: 500;line-height: 1.2;color: #343a40!important;font-size: 1.75rem;orphans: 3;widows: 3;page-break-after: avoid;"><?= $payment == 'transfer' ? 'Bank Transfer' : 'Cash On Delivery' ?></h3>
                     <div style="box-sizing: border-box;"><?= $payment == 'transfer' ? $rek . ' a/n ' . $an : '' ?></div>
                 </div>
             </div>
             <div class="table-responsive-sm" style="box-sizing: border-box;">
                 <table class="table table-striped" style="box-sizing: border-box;border-collapse: collapse!important;max-width: 100%;background-color: transparent;">
                     <thead style="box-sizing: border-box;display: table-header-group;">
                         <tr style="box-sizing: border-box;page-break-inside: avoid;">
                             <th style="box-sizing: border-box;text-align: inherit;padding: .75rem;vertical-align: bottom;border-top: 1px solid #dee2e6;border-bottom: 2px solid #dee2e6;background-color: #fff!important;">Item(s)</th>
                             <th class="center" style="box-sizing: border-box;text-align: inherit;padding: .75rem;vertical-align: bottom;border-top: 1px solid #dee2e6;border-bottom: 2px solid #dee2e6;background-color: #fff!important;">Qty(s)</th>
                             <th class="right" style="box-sizing: border-box;text-align: inherit;padding: .75rem;vertical-align: bottom;border-top: 1px solid #dee2e6;border-bottom: 2px solid #dee2e6;background-color: #fff!important;">Price</th>
                             <th class="right" style="box-sizing: border-box;text-align: inherit;padding: .75rem;vertical-align: bottom;border-top: 1px solid #dee2e6;border-bottom: 2px solid #dee2e6;background-color: #fff!important;">Sub Total</th>
                         </tr>
                     </thead>
                     <tbody style="box-sizing: border-box;">
                         <?php $cart = $this->cart->contents();
                         foreach($cart as $item) : ?>
                         <tr style="box-sizing: border-box;page-break-inside: avoid;">
                             <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;"><?= $item['name'] ?></td>
                             <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;"><?= $item['qty'] ?></td>
                             <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;"><?= number_format($item['price'], 0, ',', '.') ?></td>
                             <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;"><?= number_format($item['qty'] * $item['price'], 0, ',', '.') ?></td>
                         </tr>
                         <?php endforeach; ?>
                     </tbody>
                 </table>
             </div>
             <div class="row" style="box-sizing: border-box;display: flex;-ms-flex-wrap: wrap;flex-wrap: wrap;margin-right: -15px;margin-left: -15px;">
                 <div class="col-lg-4 col-sm-5" style="box-sizing: border-box;position: relative;width: 100%;min-height: 1px;padding-right: 15px;padding-left: 15px;-ms-flex: 0 0 33.333333%;flex: 0 0 33.333333%;max-width: 33.333333%;">
                 </div>
                 <div class="col-lg-4 col-sm-5 ml-auto" style="box-sizing: border-box;position: relative;width: 100%;min-height: 1px;padding-right: 15px;padding-left: 15px;-ms-flex: 0 0 33.333333%;flex: 0 0 33.333333%;max-width: 33.333333%;margin-left: 80px!important;">
                     <table class="table table-clear" style="box-sizing: border-box;border-collapse: collapse!important;width: 100%;max-width: 100%;margin-bottom: 1rem;background-color: transparent;">
                         <tbody style="box-sizing: border-box;">
                             <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                 <td class="left" style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                                     <strong class="text-dark" style="box-sizing: border-box;font-weight: bolder;color: #343a40!important;">Total</strong> </td>
                                 <td class="right" style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                                     <strong class="text-dark" style="box-sizing: border-box;font-weight: bolder;color: #343a40!important;"><?= number_format($this->cart->total(), 0, ',', '.') ?></strong>
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
</html>