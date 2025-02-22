<?php

namespace App\View\Components\Templates\Gp\Header;

use App\Services\Templates\MenuItemsService;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;


class Navbar extends Component
{
    protected $menuItems;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->menuItems = MenuItemsService::getItems();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.templates.gp.header.navbar', [
            'menuHtml' => MenuItemsService::generateMenuHtml($this->menuItems)
        ]);
    }
}
