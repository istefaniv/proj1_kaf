<?php


class menuItem
{
    public $id;
    public $name;
    public $price;
    public $note;


}

class menuSection
{
    public $items = [];

    public function count()
    {
        return count($this->items);
    }

    public function add($item)
    {
        $this->items[] = $item;
    }

}


class menu
{
    public $sections = [];

    public function sectionCount()
    {
        return count($this->sections);
    }

    //Все що пропонується
    public function itemsCount()
    {
        $i = 0;
        foreach ($this->sections as $item)
        {
            $i += $item->count();
        }
        return $i;
    }

    public function addSection($item)
    {
        $this->sections[] = $item;
    }


}


class my_cafe
{


}
