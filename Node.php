<?php


class Node
{
/// * Dữ liệu nút * /
public $data;

// Liên kết đến nút tiếp theo * /
public $next;

public function __construct($data)
{
    $this->data = $data;
    $this->next = null;
}

public function readNode(){
    return $this->data;
}
}