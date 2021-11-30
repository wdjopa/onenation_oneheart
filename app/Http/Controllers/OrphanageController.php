<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Orphanage;
use Illuminate\Http\Request;

class OrphanageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $orphanages = Orphanage::all();
        return view("admin.orphanages.index", compact("orphanages"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::all();
        $fields = [];
        $fields[] = [
            "name" => "Nom",
            "field_name" => "name",
            "placeholder" => "Nom de l'orphelinat",
            "type" => "text",
            "required" => true,
        ];
        $fields[] = [
            "name" => "Email",
            "field_name" => "email",
            "placeholder" => "Email de l'orphelinat",
            "type" => "email",
        ];
        $fields[] = [
            "name" => "Tel",
            "field_name" => "tel",
            "placeholder" => "N° de téléphone l'orphelinat",
            "type" => "tel",
            "required" => true,
        ];
        $fields[] = [
            "name" => "Nom du gérant",
            "field_name" => "gerant",
            "placeholder" => "Nom du gérant",
            "type" => "text",
            "required" => true,
        ];
        $fields[] = [
            "name" => "Nombre d'enfants",
            "field_name" => "children",
            "placeholder" => "Nombre d'enfants du gérant",
            "type" => "text",
            "required" => true,
        ];

        return view("admin.orphanages.create", compact("cities", "fields"));
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $orphanage = new Orphanage();

        $orphanage->name = $request->name;
        $orphanage->status = $request->status ? 1 : 0;
        $datas = [
            "donates" => [
                'total_received' => 0,
                'total_remaining' => 0,
                'donators' => [],
            ],
            "email" => $request->email,
            "tel" => $request->tel,
            "gerant" => $request->tel,
            "total_children" => $request->children,
            "description" => $request->description,
            "public_content" => $request->public_content,
        ];
        $orphanage->datas = $datas;
        $orphanage->save();

        if ($request->files) {
            foreach ($request->files as $image) {
                $orphanage->addMedia($image)->toMediaCollection("images");
            }
        }

        return redirect()->route("orphanages.index")->with("success", "L'orphelinat a été enregistré avec succès.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Orphanage  $orphanage
     * @return \Illuminate\Http\Response
     */
    public function show(Orphanage $orphanage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Orphanage  $orphanage
     * @return \Illuminate\Http\Response
     */
    public function edit(Orphanage $orphanage)
    {

        $cities = City::all();
        $fields = [];
        $fields[] = [
            "name" => "Nom",
            "field_name" => "name",
            "placeholder" => "Nom de l'orphelinat",
            "type" => "text",
            "required" => true,
            "value" => $orphanage->name,
        ];
        $fields[] = [
            "name" => "Email",
            "field_name" => "email",
            "placeholder" => "Email de l'orphelinat",
            "type" => "email",
            "value" => $orphanage->datas["email"],
        ];
        $fields[] = [
            "name" => "Tel",
            "field_name" => "tel",
            "placeholder" => "N° de téléphone l'orphelinat",
            "type" => "tel",
            "required" => true,
            "value" => $orphanage->datas["tel"],
        ];
        $fields[] = [
            "name" => "Nom du gérant",
            "field_name" => "gerant",
            "placeholder" => "Nom du gérant",
            "type" => "text",
            "required" => true,
            "value" => $orphanage->datas["gerant"],
        ];
        $fields[] = [
            "name" => "Nombre d'enfants",
            "field_name" => "children",
            "placeholder" => "Nombre d'enfants du gérant",
            "type" => "text",
            "required" => true,
            "value" => $orphanage->datas["total_children"],
        ];

        return view("admin.orphanages.edit", compact("cities", "fields", "orphanage"));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Orphanage  $orphanage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Orphanage $orphanage)
    {

        $orphanage->name = $request->name;
        $orphanage->status = $request->status ? 1 : 0;
        $datas = [
            "donates" => [
                'total_received' => 0,
                'total_remaining' => 0,
                'donators' => [],
            ],
            "email" => $request->email,
            "tel" => $request->tel,
            "gerant" => $request->tel,
            "total_children" => $request->children,
            "description" => $request->description,
            "public_content" => $request->public_content,
        ];
        $orphanage->datas = $datas;
        $orphanage->save();

        if ($request->files) {
            foreach ($request->files as $image) {
                $orphanage->addMedia($image)->toMediaCollection("images");
            }
        }
        return redirect()->route("orphanages.index")->with("success", "L'orphelinat a été modifié avec succès.");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Orphanage  $orphanage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Orphanage $orphanage)
    {
        //
    }


    
    /**
     * Remove the specified resource from storage.
     *
     * @param  Request
     * @return \Illuminate\Http\Response
     */
    public function multipleDestroy(Request $request)
    {
        if ($request->ids) {
            $ids = $request->ids;
            foreach ($ids as $id) {
                $orphanage = Orphanage::find($id);
                //ActivityLogger::activity("Suppression de l'équipe ID:".$client->id.' par l\'utilisateur ID:'.Auth::id());
                $orphanage->delete();
            }
            $message = sizeof($ids) . ' orphelinat(s) supprimé(s) avec succès';
        } else {
            $message = "Aucun orphelinat n'a été supprimé";
        }
        return redirect()->route("orphanages.index")->with('success', $message);
    }

}
