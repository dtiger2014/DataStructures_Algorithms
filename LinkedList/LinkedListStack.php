<?php

require("LinkedList.php");

class LinkedListStack
{
    private $list;

    public function __construct($e=null, $next=null)
    {
        $this->list = new LinkedList();
    }

    public function getSize()
    {
        return $this->list->getSize();
    }

    public function isEmpty()
    {
        return $this->list->isEmpty();
    }

    public function push($element)
    {
        $this->list->addFirst($element);
    }

    public function pop()
    {
        return $this->list->removeFirst();
    }

    public function peek()
    {
        return $this->list->getFirst();
    }

    public function toString()
    {
        $str = "Stack: top ";
        $str .= $this->list->toString();
        return $str;
    }
}


TestLinkedListStack();

function TestLinkedListStack()
{
    $stack = new LinkedListStack();
    for ($i = 0; $i < 5; $i++) {
        $stack->push($i);
        echo $stack->toString();
    }

    $stack->pop();
    echo $stack->toString();
}