<?php
function total($dish, $amount, $extras){
    $total = ($dish+$extras)*@$amount;
    return $total;
}
