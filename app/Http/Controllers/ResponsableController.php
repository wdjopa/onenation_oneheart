<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrphanageResponsable;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class ResponsableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $responsables = User::all();

        return view('admin.responsables.index', ['responsables' => $responsables, 'orphanage' => auth()->user()->orphanage]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fields = [];
        $fields[] = [
            "name" => "Nom",
            "field_name" => "name",
            "placeholder" => "Nom du responsable",
            "type" => "text",
            "required" => true,
        ];
        $fields[] = [
            "name" => "Email",
            "field_name" => "email",
            "placeholder" => "Email du responsable",
            "type" => "email",
            "required" => true,
        ];

        $fields[] = [
            "name" => "Mot de passe",
            "field_name" => "password",
            "placeholder" => "Mot de passe du responsable",
            "type" => "password",
            "required" => true,
        ];
        $fields[] = [
            "name" => "Tel",
            "field_name" => "tel",
            "placeholder" => "N° de téléphone l'utilisateur",
            "type" => "tel",
            "required" => true,
        ];

        return view('admin.responsables.create', ['fields' => $fields]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $datas = [];

        $datas['tel'] = $request->tel;
        $datas["visible"] = true;


        $user->datas = $datas;

        if (Role::where('name', 'responsable')->first() == null) Role::create(['name' => 'responsable']);

        
        $user->assignRole(['responsable']);

        $user->save();

        if ($request->file) {
            $user->addMedia($request->file)->toMediaCollection();
        }

        return redirect()->route("responsables.index")->with("success", "Le responsable a été enregistré avec succès.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function multipleDestroy() 
    {

    }
}
