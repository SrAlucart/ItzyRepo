<?php
// app/controllers/NetController.php

class NetController {
    public function index() {
        include __DIR__ . '/../views/layouts/header.php';
        include __DIR__ . '/../views/net.php';
        include __DIR__ . '/../views/layouts/footer.php';
    }
}
?>