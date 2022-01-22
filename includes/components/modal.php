<?php function createModal($id, $title, $msg, $color)
{ ?>
    <div class="modal fade" id="<?= $id ?>" tabindex="-1" role="dialog" aria-labelledby="<?= $id ?>" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header bg-<?= $color ?> text-light">
                    <h6 class="modal-title font-weight-bold"> <i class="fas fa-envelope"></i> <?= $title ?></h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-dark">
                    <p><?= $msg ?></p>
                </div>
                <div class="modal-footer">
                    <button type="button" autofocus class="btn btn-<?= $color ?>" data-dismiss="modal" id="modal-btn">Okay</button>
                </div>
            </div>
        </div>
    </div>
<?php } ?>