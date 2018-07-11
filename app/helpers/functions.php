<?php
function generate_unique_id(){
    return bin2hex(random_bytes(25));
}
