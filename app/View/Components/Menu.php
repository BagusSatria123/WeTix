<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Menu extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
     public $active;

    public function __construct($active)
    {
    
        $this -> active = $active;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    { 
        //boleh didelete karna khusus controller
        // $list = $this -> list();
       

        return view('components.menu', ['active' => $this->active]);
    }

    public function list(){
        return [
            [
                'label' => 'Dashboard'
            ],
            [
                'label' => 'Movies'
            ],
            [
                'label' => 'Theaters'
            ],
            [
                'label' => 'Tickets'
            ],
            [
                'label' => 'Users'
            ]
            
            ];
    }
}
