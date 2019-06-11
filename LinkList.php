<?php

include "Node.php";

class LinkList
{
/// * Liên kết đến nút đầu tiên trong danh sách * /
    private $firstNode;

/// * Liên kết đến nút cuối cùng trong danh sách * /
    private $lastNode;

/// * Tổng số nút trong danh sách * /
    private $count;

    public function __construct()
    {
        $this->firstNode = null;
        $this->lastNode = null;
        $this->count = 0;
    }

    public function insertFirst($data)
    {
        $link = new Node($data);
        $link->next = $this->firstNode;
        $this->firstNode = $link;

// * Nếu đây là nút đầu tiên được chèn trong danh sách
//    sau đó đặt con trỏ lastNode cho nó.

        if ($this->lastNode == NULL)
            $this->lastNode = $link;

        $this->count++;
    }

    public function insertLast($data)
    {
        if ($this->firstNode != NULL) {
            $link = new Node($data);
            $this->lastNode->next = $link;
            $link->next = NULL;
            $this->lastNode = $link;
            $this->count++;
        } else {
            $this->insertFirst($data);
        }
    }

    public function totalNodes()
    {
        return $this->count;
    }

    public function readList()
    {
        $listData = array();
        $current = $this->firstNode;

        while ($current != NULL) {
            array_push($listData, $current->readNode());
            $current = $current->next;
        }
        return $listData;
    }
}