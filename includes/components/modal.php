<?php function createModal($id, $title, $msg, $color, $icon, $hasCancel = false, $redirect = false)
{ ?>
    <div class="modal fade" id="<?= $id ?>" tabindex="-1" role="dialog" aria-labelledby="<?= $id ?>" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header bg-<?= $color ?> text-light">
                    <h6 class="modal-title font-weight-bold"> <i class="fas fa-<?= $icon ?>"></i> <?= $title ?></h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-dark">
                    <p><?= $msg ?></p>
                </div>
                <div class="modal-footer">
                    <button type="button" id="<?= $id ?>-btn" <?php echo ($redirect ? ("onclick=location.href='" . $redirect . "'") : '') ?> autofocus class="btn btn-<?= $color ?>" data-dismiss="modal">Okay</button>
                    <?php if ($hasCancel) { ?>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
<?php } ?>