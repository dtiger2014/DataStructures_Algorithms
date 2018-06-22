<?php

class node 
{
    public $element;
    public $next;

    public function __construct($e=null, $next=null)
    {
        $this->element = $e;
        $this->next = $next;
    }
}

class LinkedList 
{
    private $head;
    private $size;

    public function __construct()
    {
        $this->head = null;
        $this->size = 0;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function isEmpty()
    {
        return $this->size == 0;
    }
    
    public function addFirst($element)
    {
        $head = new node($element, $head);
        $size++;
    }

    public function addLast($element)
    {
        add($size, $element);
    }

    public function add($int, $element)
    {

    }
}