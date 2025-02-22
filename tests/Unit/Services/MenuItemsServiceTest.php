<?php

namespace Tests\Unit\Service;

use App\Services\Templates\MenuItemsService;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Illuminate\Support\Facades\View;
use Mockery;
use ReflectionMethod;



class MenuItemsServiceTest extends TestCase
{

    protected function tearDown(): void
    {
        Mockery::close(); // Limpia los mocks después de cada prueba
        parent::tearDown();
    }

    #[Test]
    public function set_and_get_items()
    {
        // Simula la estructura de los items del menu de navegacion definido en config/templates.php
        $items = [
            [
                'type' => 'item',
                'link' => '#item1',
                'name' => 'Item1',
            ],
            [
                'type' => 'item',
                'link' => '#item2',
                'name' => 'Item2',
            ],
            [
                'type' => 'item',
                'link' => '#item3',
                'name' => 'Item3',
            ],
            [
                'type' => 'item',
                'link' => '#item4',
                'name' => 'Item4',
            ]
        ];

        // Establece los items del menu
        MenuItemsService::setItems($items);

        // Verifica que los items sean iguales
        $this->assertEquals($items, MenuItemsService::getItems());
    }

    #[Test]
    public function add_items_into_list()
    {
        // Simula la estructura de los items del menu de navegacion definido en config/templates.php
        $items = [
            [
                'type' => 'item',
                'link' => '#item1',
                'name' => 'Item1',
            ],
            [
                'type' => 'item',
                'link' => '#item2',
                'name' => 'Item2',
            ],
            [
                'type' => 'item',
                'link' => '#item3',
                'name' => 'Item3',
            ]
        ];

        // Establece los items del menu
        MenuItemsService::setItems($items);

        // Nuevo item a agregar
        $newItems = [
            'type' => 'item',
            'link' => '#item6',
            'name' => 'Item6',
        ];

        // Se agrega item al final de la lista
        MenuItemsService::addItem($newItems);

        // Verifica la cantidad de items
        $this->assertCount(4, MenuItemsService::getItems());

        // Verifica el nombre del item agregado
        $this->assertEquals('Item6', MenuItemsService::getItems()[3]['name']);

        // Otro nuevo item a agregar
        $otherItem = [

            'type' => 'item',
            'link' => '#item6A',
            'name' => 'Item6_A',

        ];

        // Se agrega item despues del elemento que tenga de llave 'name' el valor 'Item3' 
        MenuItemsService::addItem($otherItem, 'Item3');

        // Verifica la cantidad de items
        $this->assertCount(5, MenuItemsService::getItems());

        // Verifica el nombre del item agregado
        $this->assertEquals('Item6_A', MenuItemsService::getItems()[3]['name']);
    }

    #[Test]
    public function updates_existing_item_correctly()
    {
        // Simula la estructura de los items del menu de navegacion definido en config/templates.php
        $items = [
            [
                'type' => 'item',
                'link' => '#item1',
                'name' => 'Item1',
            ],
            [
                'type' => 'item',
                'link' => '#item2',
                'name' => 'Item2',
            ],
            [
                'type' => 'item',
                'link' => '#item3',
                'name' => 'Item3',
            ]
        ];

        // Establece los items del menu
        MenuItemsService::setItems($items);

        // Verifica el link antes de ser actualizado
        $this->assertEquals('#item2', MenuItemsService::getItems()[1]['link']);

        // Verifica el nombre antes de ser actualizado
        $this->assertEquals('Item2', MenuItemsService::getItems()[1]['name']);
        // Actualiza el items del menu especificado por el nombre
        MenuItemsService::updateItem('Item2', ['link' => '/inicio', 'name' => 'Home']);

        // Verifica el link despues de ser actualizado
        $this->assertEquals('/inicio', MenuItemsService::getItems()[1]['link']);

        // Verifica el nombre despues de ser actualizado
        $this->assertEquals('Home', MenuItemsService::getItems()[1]['name']);
    }

    #[Test]
    public function removes_existing_item_correctly()
    {
        // Simula la estructura de los items del menu de navegacion definido en config/templates.php
        $items = [
            [
                'type' => 'item',
                'link' => '#item1',
                'name' => 'Item1',
            ],
            [
                'type' => 'item',
                'link' => '#item2',
                'name' => 'Item2',
            ],
            [
                'type' => 'item',
                'link' => '#item3',
                'name' => 'Item3',
            ],
            [
                'type' => 'item',
                'link' => '#item4',
                'name' => 'Item4',
            ],
            [
                'type' => 'item',
                'link' => '#item5',
                'name' => 'Item5',
            ]
        ];

        // Establece los items del menu
        MenuItemsService::setItems($items);

        // Verifica la cantidad de items antes de remover el item especificado
        $this->assertCount(5, MenuItemsService::getItems());

        // Verifica que 'name' exista antes de ser removido
        $this->assertEquals('Item4', MenuItemsService::getItems()[3]['name']);

        // Remueve el items del menu especificado por el nombre
        MenuItemsService::removeItem('Item4');

        // Verifica la cantidad de items despues de remover el item especificado
        $this->assertCount(4, MenuItemsService::getItems());

        // Verifica que el item removido ya no exista en el array
        $this->assertArrayNotHasKey(3, MenuItemsService::getItems());
    }

    #[Test]
    public function find_index_by_name_returns_correct_index_when_item_exists()
    {
        // Simula la estructura de los items del menu de navegacion definido en config/templates.php
        $items = [
            [
                'type' => 'item',
                'link' => '#item1',
                'name' => 'Item1',
            ],
            [
                'type' => 'item',
                'link' => '#item2',
                'name' => 'Item2',
            ],
            [
                'type' => 'item',
                'link' => '#item3',
                'name' => 'Item3',
            ],
            [
                'type' => 'item',
                'link' => '#item4',
                'name' => 'Item4',
            ],
            [
                'type' => 'item',
                'link' => '#item5',
                'name' => 'Item5',
            ]
        ];

        // Establece los items del menu
        MenuItemsService::setItems($items);

        // Se accede al metodo protegido
        $reflection = new ReflectionMethod(MenuItemsService::class, 'findIndexByName');
        $reflection->setAccessible(true);

        // Se ejecuta el metodo
        $indexItem2 = $reflection->invokeArgs(null, ['Item2']);
        $indexItem4 = $reflection->invokeArgs(null, ['Item4']);

        // Se verifican que los indices sean los correctos
        $this->assertEquals(1, $indexItem2);
        $this->assertEquals(3, $indexItem4);
    }

    #[Test]
    public function find_index_by_name_returns_false_when_item_does_not_exist()
    {
        // Simula la estructura de los items del menu de navegacion definido en config/templates.php
        $items = [
            [
                'type' => 'item',
                'link' => '#item1',
                'name' => 'Item1',
            ],
            [
                'type' => 'item',
                'link' => '#item2',
                'name' => 'Item2',
            ],
            [
                'type' => 'item',
                'link' => '#item3',
                'name' => 'Item3',
            ],
            [
                'type' => 'item',
                'link' => '#item4',
                'name' => 'Item4',
            ],
            [
                'type' => 'item',
                'link' => '#item5',
                'name' => 'Item5',
            ]
        ];

        // Establece los items del menu
        MenuItemsService::setItems($items);

        // Se accede al metodo protegido
        $reflection = new ReflectionMethod(MenuItemsService::class, 'findIndexByName');
        $reflection->setAccessible(true);

        // Se ejecuta el metodo
        $index = $reflection->invokeArgs(null, ['NoExiste']);

        // Se verifica que retorne False, cuando no encuentra el nombre 
        $this->assertFalse($index);
    }

   

    #[Test]
    public function generate_menu_html_returns_correct_html_for_simple_menu()
    {
        // Simula la estructura de los items del menu de navegacion definido en config/templates.php
        $items = [
            ['type' => 'item', 'name' => 'Home', 'link' => '/'],
            ['type' => 'item', 'name' => 'Sobre Mi', 'link' => '/about-me'],
            ['type' => 'item', 'name' => 'Servicios', 'link' => '/services'],
            ['type' => 'item', 'name' => 'Proyectos', 'link' => '/projects']
        ];

        // Establece los items del menu
        MenuItemsService::setItems($items);

        // Simula la fachada View
        View::shouldReceive('make->render')->andReturn('<li><a href="/">Home</a></li><li><a href="/about-me">Sobre Mi</a></li><li><a href="/services">Servicios</a></li><li><a href="/projects">Proyectos</a></li>');

        // Genera el html para crear la vista del menu de navegacion
        $html = MenuItemsService::generateMenuHtml(MenuItemsService::getItems());

        // Se verifica si lo el valor retornado contiene las cadenas esperadas.
        $this->assertStringContainsString('<li><a href="/">Home</a></li>', $html);
        $this->assertStringContainsString('<li><a href="/services">Servicios</a></li>', $html);
        $this->assertStringContainsString('<li><a href="/projects">Proyectos</a></li>', $html);
    }

    #[Test]
    public function generate_menu_html_returns_correct_html_for_menu_with_dropdown()
    {
        $this->markTestSkipped('Depuración pendiente: Problema con la recursividad y el mock de la vista.');
        // Simula la estructura de los items del menu de navegacion definido en config/templates.php
        $items = [
            [
                'type' => 'item', 
                'name' => 'Home', 
                'link' => '/'
            ],
            [
                'type' => 'item', 
                'name' => 'Sobre Mi', 
                'link' => '/about-me'
            ],
            [
                'type' => 'dropdown', 
                'name' => 'Servicios', 
                'link' => '#',
                'children' => [
                    [
                        'type' => 'item', 
                        'name' => 'Desarrollo Web', 
                        'link' => '/web-development'
                    ],
                    [
                        'type' => 'item', 
                        'name' => 'Desarrollo de Software', 
                        'link' => '/software-development'
                    ],
                    [
                        'type' => 'item', 
                        'name' => 'Consultoría Técnica', 
                        'link' => '/consulting'
                    ],
                ],
            ],
            [
                'type' => 'dropdown', 
                'name' => 'Proyectos', 
                'link' => '#',
                'children' => [
                    [
                        'type' => 'item', 
                        'name' => 'React', 
                        'link' => '/projects/react'
                    ],
                    [
                        'type' => 'item', 
                        'name' => 'Vue', 
                        'link' => '/projects/vue'
                    ],
                    [
                        'type' => 'item', 
                        'name' => 'Laravel', 
                        'link' => '/projects/laravel'
                    ],
                ],
            ]
        ];

        // Establece los items del menu
        MenuItemsService::setItems($items);

        // Simula la fachada View
        View::shouldReceive('make->render')->andReturn('<li><a href="/">Home</a></li><li><a href="/about-me">Sobre Mi</a></li><li class="dropdown"><a href="#">Servicios</a><ul><li><a href="/web-development">Desarrollo Web</a></li><li><a href="/software-development">Desarrollo de Software</a></li><li><a href="/consulting">Consultoría Técnica</a></li></ul></li><li class="dropdown"><a href="#">Proyectos</a><ul><li><a href="/projects/react">React</a></li><li><a href="/projects/vue">Vue</a></li><li><a href="/projects/laravel">Laravel</a></li></ul></li>');

        // Genera el html para crear la vista del menu de navegacion
        $html = MenuItemsService::generateMenuHtml(MenuItemsService::getItems());

  
        // Assert (Aserción)
        $this->assertStringContainsString('<li><a href="/">Home</a></li>', $html);
        $this->assertStringContainsString('<li class="dropdown">', $html);
        $this->assertStringContainsString('<li><a href="/web-development">Desarrollo Web</a></li>', $html);
        $this->assertStringContainsString('<li><a href="/projects/vue">Vue</a></li>', $html);
    }

    #[Test]
    public function generate_menu_html_returns_empty_string_for_empty_menu()
    {
        // Arrange (Preparación)
        MenuItemsService::setItems([]);

        // Act (Acción)
        $html = MenuItemsService::generateMenuHtml(MenuItemsService::getItems());

        // Assert (Aserción)
        $this->assertEmpty($html); // Verifica que el HTML esté vacío
    }
}
