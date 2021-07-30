<?php

namespace App\Http\Livewire;

use App\Models\Asignacion;
use App\Models\Division;
use App\Models\Negocio;
use App\Models\Objestrategico;
use App\Models\Objoperacional;
use App\Models\Objtactico;
use App\Models\Region;
use Carbon\Carbon;
use Livewire\Component;

class GestionAsignacion extends Component
{
    public $objestrategicos, $regions;

    public $objestrategicos_id ="";
    public $objtacticos_id ="";
    public $objoperacionals_id ="";

    public $region_id ="";
    public $division_id ="";
    public $negocio_id ="";

    public $usuario_id ="";

    public $tacticos = [];
    public $operacionals = [];

    public $divisions = [];
    public $negocios = [];

    public $usuarios= [];

    public $fecha_conformacion_i;
    public $fecha_conformacion_f;
    public $fecha_recopilacion_i;
    public $fecha_recopilacion_f;
    public $fecha_inf_i;
    public $fecha_inf_f;
    public $fecha_divulgacion_i;
    public $fecha_divulgacion_f;
    public $fecha_carga_i;
    public $fecha_carga_f;


    public function render()
    {
        return view('livewire.gestion-asignacion');
    }

    public function mount(){
        $this->objestrategicos=Objestrategico::all();
        $this->regions=Region::all();
     
      /*  $this->fecha_conformacion_f = optional()->format('m/d/Y');
        $this->fecha_recopilacion_i = optional()->format('m/d/Y');
        $this->fecha_recopilacion_f = optional()->format('m/d/Y');
        $this->fecha_inf_i = optional()->format('m/d/Y');
        $this->fecha_inf_f = optional()->format('m/d/Y');
        $this->fecha_divulgacion_i = optional()->format('m/d/Y');
        $this->fecha_divulgacion_f = optional()->format('m/d/Y');
        $this->fecha_carga_i= optional()->format('m/d/Y');
        $this->fecha_carga_f = optional()->format('m/d/Y');*/
    }



    public function updatedObjestrategicosId($value)
    {
        $estrategico = Objestrategico::find($value);
        $this->tacticos = $estrategico->objtacticos;
    }

    public function updatedObjtacticosId($value)
    {
        $tactic = Objtactico::find($value);
        $this->operacionals = $tactic->objoperacionals;
    }

    public function updatedRegionId($value)
    {
        $region_select = Region::find($value);
        $this->divisions = $region_select->divisions;
    }

    public function updatedDivisionId($value)
    {
        $division_select = Division::find($value);
        $this->negocios = $division_select->negocios;
    }

    public function updatedNegocioId($value)
    {
        $negocio_select = Negocio::find($value);
        $this->usuarios = $negocio_select->users;
    }

    public function save(){
     


      /*  Asignacion::create([
            'user_id' => $this->createForm['name'],
            'objestrategico_id' => $this->createForm['slug'],
            'objtactico_id' => $this->createForm['icon'],
            'objoperacional_id' => $this->createForm['icon'],
            'fecha_conformacion_i' => $this->createForm['icon'],
            'fecha_conformacion_f' => $this->createForm['icon'],
            'fecha_recopilacion_i' => $this->createForm['icon'],
            'fecha_recopilacion_f' => $this->createForm['icon'],
            'fecha_inf_i' => $this->createForm['icon'],
            'fecha_inf_f' => $this->createForm['icon'],
            'fecha_divulgacion_i' => $this->createForm['icon'],
            'fecha_divulgacion_f' => $this->createForm['icon'],
            'fecha_carga_i' => $this->createForm['icon'],
            'fecha_carga_f' => $this->createForm['icon'],
        ]);
        $this->emit('saved');*/

        $asignacion = new Asignacion();

        $this->fecha_conformacion_i = Carbon::parse($asignacion->fecha_conformacion_i)->format('Y/m/d');
        $this->fecha_conformacion_f = Carbon::parse($asignacion->fecha_conformacion_f)->format('Y/m/d');
        $this->fecha_recopilacion_i = Carbon::parse($asignacion->recopilacion_i)->format('Y/m/d');
        $this->fecha_recopilacion_f = Carbon::parse($asignacion->recopilacion_f)->format('Y/m/d');
        $this->fecha_inf_i = Carbon::parse($asignacion->fecha_inf_i)->format('Y/m/d');
        $this->fecha_inf_f = Carbon::parse($asignacion->fecha_inf_f)->format('Y/m/d');
        $this->fecha_divulgacion_i = Carbon::parse($asignacion->fecha_divulgacion_i)->format('Y/m/d');
        $this->fecha_divulgacion_f = Carbon::parse($asignacion->fecha_divulgacion_f)->format('Y/m/d');
        $this->fecha_carga_i = Carbon::parse($asignacion->fecha_carga_i)->format('Y/m/d');
        $this->fecha_carga_f = Carbon::parse($asignacion->fecha_carga_f)->format('Y/m/d');


        $asignacion->user_id = $this->usuario_id;
        $asignacion->objestrategico_id = $this->objestrategicos_id;
        $asignacion->objtactico_id = $this->objtacticos_id;
        $asignacion->objoperacional_id = $this->objoperacionals_id;
        $asignacion->fecha_conformacion_i = $this->fecha_conformacion_i;
        $asignacion->fecha_conformacion_f = $this->fecha_conformacion_f;
        $asignacion->fecha_recopilacion_i= $this->fecha_recopilacion_i;
        $asignacion->fecha_recopilacion_f = $this->fecha_recopilacion_f;
        $asignacion->fecha_inf_i = $this->fecha_inf_i;
        $asignacion->fecha_inf_f = $this->fecha_inf_f;
        $asignacion->fecha_divulgacion_i = $this->fecha_divulgacion_i;
        $asignacion->fecha_divulgacion_f = $this->fecha_divulgacion_f;
        $asignacion->fecha_carga_i = $this->fecha_carga_i;
        $asignacion->fecha_carga_f = $this->fecha_carga_f;
        

        $asignacion->save();

       // return redirect()->route('livewire.gestion', $product);

    }


}
