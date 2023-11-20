<?php

namespace App\Http\Livewire;

use App\Models\Vacante;
use App\Notifications\NuevoCandidato;
use Livewire\Component;
use Livewire\WithFileUploads;

class PostularVacante extends Component
{
    use WithFileUploads;

    public $cv;
    public $vacante;


    protected $rules=[
        'cv'=>'required|mimes:pdf',
    ];

    public function mount( Vacante $vacante)
    {
        $this->vacante=$vacante;
    }

    public function postularme()
    {
        $datos= $this->validate();
        //Almacenar el cv
        $cv= $this->cv->store('public/cv');
        $datos['cv']=str_replace('public/cv/','', $cv);

        //crear el candidato a la vacante
            $this->vacante->candidatos()->create([
                'user_id'=>auth()->user()->id,
                'cv'=> $datos['cv'],
            ]);
        //Crear notificación y enviar el email
        $nuevoCandidato=new NuevoCandidato($this->vacante->id,$this->vacante->titulo,auth()->user()->id);
        // dd($nuevoCandidato);
        $this->vacante->reclutador->notify($nuevoCandidato);
        //Mostrar al usuaru
            session()->flash('mensaje','Se envió correctamente tu información, mucha suerte');
            return redirect()->back();
    }
    public function render()
    {
        return view('livewire.postular-vacante');
    }
}
