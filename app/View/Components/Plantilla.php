<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Plantilla extends Component
{
    
    public $titulo;
    public $nombrePagina;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($nombrePagina, $titulo)
    {
        $this->nombrePagina = $nombrePagina;
        $this->titulo = $titulo;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.plantilla');
    }
}
