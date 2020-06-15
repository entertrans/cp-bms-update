<header class="header">
    <div class="primary-header">
        <div class="container">
            <div class="primary-header-inner">
                <div class="header-logo">
                    <a href="#"><img src="<?= base_url() ?>/assets/mockup/core/img/logo-dark.png" alt="Indico"></a>
                </div>
                <div class="header-menu-wrap">
                    <ul class="dl-menu">
                        <li><a href="<?= base_url() ?>">Home</a></li>
                        </li>
                        <li><a href="#">Services</a>
                            <ul>
                                <li><a href="services-1.html">Services 01</a></li>
                                <li><a href="services-2.html">Services 02</a></li>
                            </ul>
                        </li>
                        <li><a href="<?= site_url('project') ?>">Project</a></li>
                        <li><a href="<?= site_url('about') ?>">About</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
                <div class="header-right">
                    <div class="dropdown">
                        <a class="btn btn-primary" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-fw fa-shopping-cart"></i> Cart <span class="badge badge-danger"><?= count($this->cart->contents()) ?></span>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="line-height: 10px;">
                            <!-- <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a> -->
                            <table class="table table-hover">
                                <thead>
                                    <tr class="dropdown-item">
                                        <th>Item(s)</th>
                                        <th>Qty(s)</th>
                                        <th>Price</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $cart = $this->cart->contents();
                                    foreach ($cart as $item) : ?>
                                        <tr class="dropdown-item">
                                            <td><?= $item['name'] ?></td>
                                            <td><?= $item['qty'] ?></td>
                                            <td><?= number_format($item['price'], 0, ',', '.') ?></td>
                                            <td>
                                                <button type="button" id="<?= $item['rowid'] ?>" class="hapus_cart btn btn-danger btn-xs">&times;</button>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                    <tr class="dropdown-item">
                                        <td colspan="2">Total</td>
                                        <td colspan="2"><?= number_format($this->cart->total(), 0, ',', '.') ?></td>
                                    </tr>
                                </tbody>
                            </table>
                            <a class="btn btn-outline-primary" href="<?= site_url('checkout') ?>">Checkout</a>
                        </div>
                    </div>

                    <div class="mobile-menu-icon">
                        <div class="burger-menu">
                            <div class="line-menu line-half first-line"></div>
                            <div class="line-menu"></div>
                            <div class="line-menu line-half last-line"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>