<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PostularVacante extends Component
{

    public $cv;
    protected $rules=[
        'cv'=>'required|mines:pdf'
    ];

    public function postularme()
    {
        $this->validate();

        //Almacenar Cv en el HD

        //Crear la vancante

        //Crear notificación y enviar el email

        //Mostrar al usuaru


    }
    public function render()
    {
        return view('livewire.postular-vacante');
    }
}
