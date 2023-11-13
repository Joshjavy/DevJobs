<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class PostularVacante extends Component
{
    use WithFileUploads;

    public $cv;

    protected $rules=[
        'cv'=>'required|mimes:pdf',
    ];

    public function postularme()
    {
        $datos= $this->validate();
        //Almacenar el cv
        $cv= $this->cv->store('public/cv');
        $datos['cv']=str_replace('public/cv/','', $cv);

        //Crear la vancante

        //Crear notificación y enviar el email

        //Mostrar al usuaru


    }
    public function render()
    {
        return view('livewire.postular-vacante');
    }
}
