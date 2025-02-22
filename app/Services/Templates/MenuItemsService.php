<?php

namespace App\Services\Templates;

use Illuminate\Support\Facades\View;

class MenuItemsService
{
    protected static array $items = [];
    public function __construct()
    {}

    public static function setItems(array $items)
    {
        self::$items = $items;
    }

    public static function getItems()
    {
        return self::$items;
    }

    public static function addItem(array $item, string $after = null)
    {
        if ($after === null) {
            self::$items[] = $item;
        } else {
            $index = self::findIndexByName($after);
            
            if ($index !== false) {
                array_splice(self::$items, $index + 1, 0, [$item]);
            } else {
                self::$items[] = $item;
            }
        }
    }

    public static function removeItem(string $name)
    {
        $index = self::findIndexByName($name);
        
        if ($index !== false) {
            unset(self::$items[$index]);
        }
    }

    public static function updateItem(string $name, array $newData)
    {
        $index = self::findIndexByName($name);
        
        if ($index !== false) {
            self::$items[$index] = array_merge(self::$items[$index], $newData);
        }
    }

    public static function generateMenuHtml(array $items): string
    {
        $html = '';
        foreach ($items as $item) {
            if ($item['type'] === 'item') {
                $html .= View::make('components.templates.gp.header.navbar-item', [
                            'name' => $item['name'],
                            'urlLink' => $item['link'],
                         ])->render();
            } elseif ($item['type'] === 'dropdown') {
                 $children = self::generateMenuHtml($item['children']);
                 $html .= View::make('components.templates.gp.header.dropdown-item', [
                     'name' => $item['name'],
                     'children' => $children,
                 ])->render();
            }
        }
        
        return $html;
    }

    protected static function findIndexByName(string $name)
    {
        foreach (self::$items as $index => $item) {
            
            if ($item['name'] === $name) {
                
                return $index;
            }
        }
        
        return false;
    }

    

}
