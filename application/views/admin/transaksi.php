<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="min-height: 243px;">
    <!-- Main content -->
    <section class="content p-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <!-- <div class="card-header">
                            <h3 class="card-title">
                                <span class="btn btn-sm btn-primary">Tambah Data</span>
                            </h3>
                        </div> -->
                        <!-- /.card-header -->
                        <div class="card-body">
                            <!-- search -->
                            <!-- <div class="row">
                                <form class="form-horizontal col-md-4" method="post" action="#">
                                    <div class="input-group">
                                        <input type="text" class="form-control form-control-sm" placeholder="Search" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-sm btn-outline-info" type="button"><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                                <div class="col-md-2 p-0">
                                    <span class="btn btn-sm btn-outline-info" id="filter"><i class="fas fa-calendar-alt"></i> Filter</span>
                                    <span class="btn btn-sm btn-outline-info" id="export"><i class="fas fa-download"></i> Export</span>
                                </div>
                            </div> -->
                            <!-- /.seach -->

                            <table id="tbl_campaign" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Pembeli</th>
                                        <th>Nominal Pembayaran</th>
                                        <th>Invoice</th>
                                        <th>Tgl. Pemesanan</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($customer as $cust) :
                                        $total = $this->db->select_sum('price')->from('tbl_order')->where(['invoice' => $cust['invoice']])->get()->row_array();
                                        $order = $this->db->select('*')->from('tbl_order')->where(['invoice' => $cust['invoice']])->group_by('invoice')->get()->row_array(); ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td>
                                                <?= $cust['nama'] ?>
                                                <div class="dropdown-divider"></div>
                                                <span><?= $cust['email'] ?></span>
                                            </td>
                                            <td>
                                                Rp <?= number_format($total['price'], 0, ',', '.') ?><br>
                                                <p class="text-muted">via <?= $cust['payment'] == 'transfer' ? 'Transfer Bank' : 'Cash On Delivery' ?></p>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0)" onclick="invoice('<?= $cust['invoice'] ?>')">[Invoice]</a>
                                            </td>
                                            <td><?= tgl_indo(substr($order['tgl_order'], 0, 10)) ?></td>
                                            <td class="text-center">
                                                <span onclick="status('<?= $cust['invoice'] ?>')" style="cursor: pointer;">
                                                    <?= $order['status_order'] == 'Pending' ? '<p class="badge badge-warning">' . $order['status_order'] . '</p>' : '<p class="badge badge-success">' . $order['status_order'] . '</p>' ?>
                                                </span>
                                            </td>
                                            <td class="text-center">
                                                <p class="btn btn-danger btn-xs" onclick="hapus('<?= $cust['invoice'] ?>')" style="cursor: pointer;">Hapus</p>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!--/. container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-sm-12 padding">
                    <div class="card" style="box-sizing: border-box;position: relative;display: flex;-ms-flex-direction: column;flex-direction: column;min-width: 0;word-wrap: break-word;background-color: #fff;background-clip: border-box;border: 1px solid rgba(0,0,0,.125);border-radius: .25rem;">
                        <div class="card-header p-4" style="box-sizing: border-box;padding: 1.5rem!important;margin-bottom: 0;background-color: rgba(0,0,0,.03);border-bottom: 1px solid rgba(0,0,0,.125);border-radius: calc(.25rem - 1px) calc(.25rem - 1px) 0 0;">
                            <div class="float-left" style="box-sizing: border-box;float: left!important;">
                                <img src="https://lh3.googleusercontent.com/-SlepQyfQUcM09L44AQhdnVO_CBzoQrBRVaq2GuofUpiV8M5k_luU1wYhCFdBh-SPBQS2DuelKRT2n_3pQtuqHWXNf3Cmf751QKsQo-7C1EvKYhCd5tDka_aWit8NYHVNL32X-hIZU7nqcBczmEXV8fqsiF-wiljPCIkQX06DcMC-oHhJKJOD_cr6PlBLnzf2lZ8Drhgy1cT2xy7pgugG5m-eekSGDj22DTKCCniuIN2G_Ni5wB4lmrVx3ZCb35w_JLUlnClPvAPPO0RT9xNZ0mJH-T-2pk-YyGfDALwwkyzEdsP23uWWltHSJcbhqBnAh_FqJRMc0q-uJDdOiVN_Y-SwHPeELqoTq7VrmirqkWbfsMw-lMKa9jsOszCVv9AfuhzZXb0LsbFoxdX1m21BnVnVFTbqkPDtmVt2J5KTatc2RkOFbuUrODwUcPF6hcn_AaSF6y20_vrmkxh3FldT1S-69YnCC2uhX9VP5PgcfD_Ky_lANSAH6NFxVf6g7fMUy6ubFfwlMS8sZ-IugAvWsdgOY0UDMReW0v7P2FK6xAMzjsg-JiszMXkL6wyAwYIzVeJIzAisZAuGbeHR8KrY1ryil865cQoKptoiGh8SHYl7V3CvAxSdZRc61Hh0MGBAoZM5yBRsACmvbjz_wGgDgL7tvziCW74xs3tvUdQA0TBjBvLcEGmSavoLhk=w628-h657-no?authuser=3" width="100" height="100" alt="logo">
                            </div>
                            <div class="float-right" style="box-sizing: border-box;float: right!important;">
                                <h3 class="mb-0" id="no_invoice" style="box-sizing: border-box;margin-top: 0;margin-bottom: 0!important;font-family: inherit;font-weight: 500;line-height: 1.2;color: inherit;font-size: 1.75rem;orphans: 3;widows: 3;page-break-after: avoid;"></h3>
                                <p id="tgl_order"></p>
                            </div>
                        </div>
                        <div class="card-body" style="box-sizing: border-box;-ms-flex: 1 1 auto;flex: 1 1 auto;padding: 1.25rem;">
                            <div class="row mb-4" style="box-sizing: border-box;display: flex;-ms-flex-wrap: wrap;flex-wrap: wrap;margin-right: -15px;margin-left: -15px;margin-bottom: 1.5rem!important;">
                                <div class="col-sm-6" style="box-sizing: border-box;position: relative;width: 100%;min-height: 1px;padding-right: 15px;padding-left: 15px;-ms-flex: 0 0 50%;flex: 0 0 50%;max-width: 50%;">
                                    <h5 class="mb-3" style="box-sizing: border-box;margin-top: 0;margin-bottom: 1rem!important;font-family: inherit;font-weight: 500;line-height: 1.2;color: inherit;font-size: 1.25rem;">From:</h5>
                                    <h3 class="text-dark mb-1" style="box-sizing: border-box;margin-top: 0;margin-bottom: .25rem!important;font-family: inherit;font-weight: 500;line-height: 1.2;color: #343a40!important;font-size: 1.75rem;orphans: 3;widows: 3;page-break-after: avoid;">PT Bintang Muara Sejati</h3>
                                    <div style="box-sizing: border-box;">Jl. Cilincing Baru Pangkalan Pasir</div>
                                    <div style="box-sizing: border-box;">No. 38 Cilincing Jakarta Utara</div>
                                    <div style="box-sizing: border-box;">Email: bms.bintangmuarasejati@gmail.com</div>
                                    <div style="box-sizing: border-box;">Phone: (021) 4494 0288</div>
                                </div>
                                <div class="col-sm-6 " style="box-sizing: border-box;position: relative;width: 100%;min-height: 1px;padding-right: 15px;padding-left: 15px;-ms-flex: 0 0 50%;flex: 0 0 50%;max-width: 50%;">
                                    <h5 class="mb-3" style="box-sizing: border-box;margin-top: 0;margin-bottom: 1rem!important;font-family: inherit;font-weight: 500;line-height: 1.2;color: inherit;font-size: 1.25rem;">To:</h5>
                                    <h3 class="text-dark mb-1" id="nm_pelanggan" style="box-sizing: border-box;margin-top: 0;margin-bottom: .25rem!important;font-family: inherit;font-weight: 500;line-height: 1.2;color: #343a40!important;font-size: 1.75rem;orphans: 3;widows: 3;page-break-after: avoid;"></h3>
                                    <div id="alamat_pelanggan" style="box-sizing: border-box;"></div>
                                    <div id="email_pelanggan" style="box-sizing: border-box;"></div>
                                    <div id="telp_pelanggan" style="box-sizing: border-box;"></div>
                                </div>
                            </div>
                            <div class="row mb-4" style="box-sizing: border-box;display: flex;-ms-flex-wrap: wrap;flex-wrap: wrap;margin-right: -15px;margin-left: -15px;margin-bottom: 1.5rem!important;">
                                <div class="col-sm-6 " style="box-sizing: border-box;position: relative;width: 100%;min-height: 1px;padding-right: 15px;padding-left: 15px;-ms-flex: 0 0 50%;flex: 0 0 50%;">
                                    <h5 class="mb-3" style="box-sizing: border-box;margin-top: 0;margin-bottom: 1rem!important;font-family: inherit;font-weight: 500;line-height: 1.2;color: inherit;font-size: 1.25rem;">Pembayaran:</h5>
                                    <h3 class="text-dark mb-1" id="payment_method" style="box-sizing: border-box;margin-top: 0;margin-bottom: .25rem!important;font-family: inherit;font-weight: 500;line-height: 1.2;color: #343a40!important;font-size: 1.75rem;orphans: 3;widows: 3;page-break-after: avoid;"></h3>
                                    <div id="payment" style="box-sizing: border-box;">12345xxx a/n Anonymous</div>
                                </div>
                            </div>
                            <div class="table-responsive-sm" style="box-sizing: border-box;">
                                <table class="table table-striped" style="box-sizing: border-box;border-collapse: collapse!important;max-width: 100%;background-color: transparent;">
                                    <thead style="box-sizing: border-box;display: table-header-group;">
                                        <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                            <th style="box-sizing: border-box;text-align: inherit;padding: .75rem;vertical-align: bottom;border-top: 1px solid #dee2e6;border-bottom: 2px solid #dee2e6;background-color: #fff!important;">Nama Barang</th>
                                            <th style="box-sizing: border-box;text-align: inherit;padding: .75rem;vertical-align: bottom;border-top: 1px solid #dee2e6;border-bottom: 2px solid #dee2e6;background-color: #fff!important;">Jumlah</th>
                                            <th style="box-sizing: border-box;text-align: inherit;padding: .75rem;vertical-align: bottom;border-top: 1px solid #dee2e6;border-bottom: 2px solid #dee2e6;background-color: #fff!important;">Satuan</th>
                                            <th class="text-center" style="box-sizing: border-box;text-align: inherit;padding: .75rem;vertical-align: bottom;border-top: 1px solid #dee2e6;border-bottom: 2px solid #dee2e6;background-color: #fff!important;">Harga</th>
                                            <th class="text-center" style="box-sizing: border-box;text-align: inherit;padding: .75rem;vertical-align: bottom;border-top: 1px solid #dee2e6;border-bottom: 2px solid #dee2e6;background-color: #fff!important;">Sub Total</th>
                                        </tr>
                                    </thead>
                                    <tbody id="li_order" style="box-sizing: border-box;">
                                    </tbody>
                                </table>
                            </div>
                            <div class="row" style="box-sizing: border-box;display: flex;-ms-flex-wrap: wrap;flex-wrap: wrap;margin-right: -15px;margin-left: -15px;">
                                <div class="col-lg-4 col-sm-5" style="box-sizing: border-box;position: relative;width: 100%;min-height: 1px;padding-right: 15px;padding-left: 15px;-ms-flex: 0 0 33.333333%;flex: 0 0 33.333333%;max-width: 33.333333%;">
                                </div>
                                <div class="col-lg-4 col-sm-5 ml-auto text-right" style="box-sizing: border-box;position: relative;width: 100%;min-height: 1px;padding-right: 15px;padding-left: 15px;-ms-flex: 0 0 33.333333%;flex: 0 0 33.333333%;">
                                    <table class="table table-clear">
                                        <tbody>
                                            <tr>
                                                <td class="text-center">
                                                    <strong class="text-dark">Total</strong>
                                                </td>
                                                <td class="text-right">
                                                    <strong class="text-dark" id="total"></strong>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('admin/layout/footer'); ?>

<script>
    $('#tbl_campaign').DataTable({
        'responsive': true,
        'autoWidth': false,
        'searching': false,
        'ordering': false
    });

    function status(invoice) {
        if ($(this).next().text() == 'Pending') {
            Swal.fire({
                icon: 'question',
                title: 'Update status pembayaran',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Update Pembayaran',
                cancelButtonText: 'Tidak'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url: "<?= site_url('admin/transaksi/status/') ?>" + invoice,
                        type: "POST",
                        dataType: "JSON",
                        success: function(data) {
                            if (data.status == true) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Pembayaran berhasil dikonfirmasi',
                                    showConfirmButton: false,
                                    timer: 1500
                                }).then(function() {
                                    location.reload();
                                })
                            }
                        }
                    });
                }
            });
        } else {
            return true;
        }
    }

    function hapus(invoice) {
        Swal.fire({
            title: 'Anda yakin ingin menghapus data ini?',
            text: "Data yang terhapus tidak dapat dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Hapus',
            cancelButtonText: 'Tidak'
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: "<?= site_url('admin/transaksi/hapus/') ?>" + invoice,
                    type: "POST",
                    dataType: "JSON",
                    success: function(data) {
                        if (data.status == true) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Data pesanan berhasil dihapus',
                                showConfirmButton: false,
                                timer: 1500
                            }).then(function() {
                                location.reload();
                            })
                        }
                    }
                });
            }
        })
    }

    function number_format(number, decimals, dec_point, thousands_sep) {
        // Strip all characters but numerical ones.
        number = (number + '').replace(/[^0-9+\-Ee.]/g, '');
        var n = !isFinite(+number) ? 0 : +number,
            prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
            sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
            dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
            s = '',
            toFixedFix = function(n, prec) {
                var k = Math.pow(10, prec);
                return '' + Math.round(n * k) / k;
            };
        // Fix for IE parseFloat(0.55).toFixed(0) = 0;
        s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
        if (s[0].length > 3) {
            s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
        }
        if ((s[1] || '').length < prec) {
            s[1] = s[1] || '';
            s[1] += new Array(prec - s[1].length + 1).join('0');
        }
        return s.join(dec);
    }

    function invoice(invoice) {
        $('#exampleModal').modal('show');
        $('.modal-title').text('Invoice #' + invoice.toString().substring(0, 14))

        $.ajax({
            url: "<?= site_url('admin/transaksi/invoice/') ?>" + invoice,
            type: "POST",
            dataType: "JSON",
            success: function(data) {
                var cust = data.result.customer;
                var order = data.result.order;
                var total = data.result.total.price;

                $('#no_invoice').text('Invoice #' + invoice.toString().substring(0, 14));
                $('#tgl_order').text('Date : ' + order[0].tgl_order);
                $('#nm_pelanggan').text(cust.nama);
                $('#alamat_pelanggan').text(cust.alamat);
                $('#email_pelanggan').text('Email : ' + cust.email);
                $('#telp_pelanggan').text('Phone : ' + cust.no_telp);

                if (cust.payment == 'transfer') {
                    $('#payment_method').text('Transfer Bank');
                    $('#payment').css('display', 'flex');
                } else {
                    $('#payment_method').text('Cash On Delivery');
                    $('#payment').css('display', 'none');
                }

                var html = '';
                for (var i = 0; i < order.length; i++) {
                    var subtotal = order[i].qty * order[i].price;
                    html += '<tr>';
                    html += '<td>' + order[i].nm_prod + '</td>';
                    html += '<td>' + order[i].qty + '</td>';
                    html += '<td>' + order[i].option + '</td>';
                    html += '<td class="text-right">' + number_format(order[i].price, 0, ',', '.') + '</td>';
                    html += '<td class="text-right">' + number_format(subtotal, 0, ',', '.') + '</td>';
                    html += '</tr>';
                }
                $('#li_order').html(html);

                $('#total').text(number_format(total, 0, ',', '.'));
            }
        });
    }
</script>