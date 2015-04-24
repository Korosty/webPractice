<?php
    $res = parse_url( $_SERVER['REQUEST_URI'] );
    echo ( $res['query'] );

