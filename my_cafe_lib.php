<?php


class commodity
{
    public $id;
    public $name;
    public $purchase_price;
    public $selling_price;
    public $units_of_measurement;
    public $count;
    public $photo;
    public $note;


}


class storage
{
    public $commodities = [];

    public $id;
    public $name;
    public $units_of_measurement;
    public $price;
    public $note;


}


class menuItem
{
    public $id;
    public $name;
    public $unit_of_calculation;
    public $price;
    public $note;


}

class menu_item_creation
{



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
