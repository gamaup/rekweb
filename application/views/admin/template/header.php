<div class='page-header'>
                <div class='page-info'>
                    <h3><?= $title ?></h3>
                    <h5><?= $subtitle ?></h5>
                </div>
                <?php if (isset($action)): ?>
                <div class='page-action'>
                    <?= isset($action) ? $action : '' ?>
                </div>
                <?php endif ?>
            </div>
            <div class='breadcrumb'>
                <a href='<?= base_url() ?>'>Dashboard</a><?php foreach ($breadcrumb as $bc): ?><?= '<i class="fa fa-angle-right"></i>'.$bc ?><?php endforeach; ?>
            </div>