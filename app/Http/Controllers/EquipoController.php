<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use App\Http\Requests\StoreEquipoRequest;
use App\Http\Requests\UpdateEquipoRequest;
use App\Models\DataDev;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EquipoController extends Controller
{
    public $data;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->data = new DataDev;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->filtro){
            $equipos = Equipo::where('cedula', $request->filtro)
            ->orWhere('nombre', 'LIKE', "%{$request->filtro}%")
            ->orWhere('correo', 'LIKE', "%{$request->filtro}%")
            ->orderBy('nombre', 'desc')
            ->paginate(12);
        }else{
            $equipos = Equipo::orderBy('id', 'desc')->paginate(12);
        }

        $respuesta = $this->data->respuesta;
        $notificaciones = $this->data->notificaciones;
        return view('admin.equipos.lista', compact('equipos', 'request', 'respuesta', 'notificaciones'));
    }


 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEquipoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEquipoRequest $request)
    {
        try {
            Equipo::create($request->all());
            return back()->with([
                "mensaje" => "El equipo se creó correctamente",
                "estatus" => Response::HTTP_OK
            ]);
        } catch (\Throwable $th) {
            return back()->with([
                "mensaje" => "¡Error interno!, descripción del error: " . $th->getMessage(),
                "estatus" => Response::HTTP_INTERNAL_SERVER_ERROR
            ]);
        }
    }



  

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEquipoRequest  $request
     * @param  \App\Models\Equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEquipoRequest $request, Equipo $equipo)
    {
        try {
        
            $equipo->update($request->all());
            return back()->with([
                "mensaje" => "El equipo se editó correctamente",
                "estatus" => Response::HTTP_OK
            ]);
        } catch (\Throwable $th) {
            return back()->with([
                "mensaje" => "¡Error interno!, descripción del error: " . $th->getMessage(),
                "estatus" => Response::HTTP_INTERNAL_SERVER_ERROR
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Equipo  $equipo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipo $equipo)
    {
        try {
            /** tambien se debe eliminar los datos de la tabla pibote bombero_equipos */

            /** eliminamos el equipo */
            $equipo->delete();
            return back()->with([
                "mensaje" => "El equipo se eliminó correctamente",
                "estatus" => Response::HTTP_OK
            ]);
        } catch (\Throwable $th) {
            return back()->with([
                "mensaje" => "¡Error interno!, descripción del error: " . $th->getMessage(),
                "estatus" => Response::HTTP_INTERNAL_SERVER_ERROR
            ]);
        }
    }
}
