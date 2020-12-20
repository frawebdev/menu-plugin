<?php

function mp_deactivate_plugin(){
    flush_rewrite_rules();
}