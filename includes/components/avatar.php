<?php
function avatar($name)
{
    $colors = ['success', 'danger', 'warning', 'secondary', 'dark', 'primary', 'info'];
?>

    <div class="rounded-circle d-flex mr-2 justify-content-center align-content-center bg-<?php echo $colors[rand(0, 6)] ?> text-center text-light" style="height: 30px; width:30px;">
        <span class="m-auto">
            <?= $name[0] ?? 'X' ?>
        </span>
    </div>
<?php } ?>