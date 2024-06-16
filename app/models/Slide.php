<?php

class Slide {
    private $db;

    public function __construct() {
        $this->db = (new Database())->connect();
    }

    public function getSlide($id) {
        $stmt = $this->db->prepare('SELECT * FROM slides WHERE id = ?');
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
}
