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
                        <li><a href="#">Services</a></li>
                        <li><a href="<?= site_url('project') ?>">Project</a></li>
                        <li><a href="<?= site_url('about') ?>">About</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
                <div class="header-right">
                    <?php if ($this->uri->segment(1) == '') : ?>
                        <div class="dropdown">
                            <a class="btn btn-primary" href="#" role="button" id="dropdownMenuLink" <?= count($this->cart->contents()) > 0 ? "data-toggle='dropdown'" : "" ?> aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-fw fa-shopping-cart"></i> Cart <span class="badge badge-danger"><?= count($this->cart->contents()) ?></span>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <table class="table">
                                    <thead>
                                        <tr style="line-height: normal;">
                                            <th>Item</th>
                                            <th>Qty</th>
                                            <th>Satuan</th>
                                            <th>Amount</th>
                                            <th>&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $cart = $this->cart->contents();
                                        foreach ($cart as $item) : ?>
                                            <tr style="line-height: normal;">
                                                <td class="text-left"><?= $item['name'] ?></td>
                                                <td class="text-right"><?= $item['qty'] ?></td>
                                                <td class="text-right"><?= $item['options']['Size'] ?></td>
                                                <td class="text-right"><?= number_format($item['price'], 0, ',', '.') ?></td>
                                                <td class="text-center"><span onclick="cartRemove('<?= $item['rowid'] ?>');" title="Remove" class="text-danger" style="cursor: pointer;"><i class="fa fa-fw fa-times"></i></span></td>
                                            </tr>
                                        <?php endforeach; ?>
                                        <tr style="line-height: normal; background-color: lightgrey">
                                            <th colspan="3">Sub Total</th>
                                            <th colspan="2"><?= number_format($this->cart->total(), 0, ',', '.') ?></th>
                                        </tr>
                                    </tbody>
                                </table>
                                <div style="text-align: center!important; line-height: normal; padding-bottom: 15px;">
                                    <a class="btn btn-outline-primary" href="<?= site_url('checkout') ?>">Checkout</a>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

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