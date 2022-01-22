<?php
function navItem($label, $route)
{
    global $url;
    $isActive = $url === $route;

    echo '<li class="nav-item ' .  ($isActive ? 'active' : '') . '">' .
        '<a class="nav-link ' . ($isActive ? '' : ($label === "Order Form" && !$_SESSION ? 'disabled" ' : '" href="' . $route)) . '">' . $label . '</a>' .
        '</li>';
}
