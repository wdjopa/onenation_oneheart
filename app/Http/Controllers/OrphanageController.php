<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Orphanage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
            "type" => "number",
            "required" => true,
        ];

        // new fields

        $fields[] = [
            "name" => "Nombre d'enfants en classe d'examen",
            "field_name" => "exam_class_children",
            "placeholder" => "Nombre d'enfants en classe d'examen",
            "type" => "number",
            "required" => false,
        ];
        $fields[] = [
            "name" => "Nombre d'enfants en recherche de professionnalisation",
            "field_name" => "profesional_search_children",
            "placeholder" => "Nombre d'enfants en recherche de professionnalisation",
            "type" => "number",
            "required" => false,
        ];
        $fields[] = [
            "name" => "Quartier",
            "field_name" => "street",
            "placeholder" => "Quartier",
            "type" => "text",
            "required" => true,
        ];
        $fields[] = [
            "name" => "Adresse exacte",
            "field_name" => "exact_address",
            "placeholder" => "Adresse exacte",
            "type" => "text",
            "required" => true,
        ];
        $fields[] = [
            "name" => "Latitude",
            "field_name" => "latitude",
            "placeholder" => "Latitude",
            "type" => "text",
            "required" => true,
        ];
        $fields[] = [
            "name" => "Longitude",
            "field_name" => "longitude",
            "placeholder" => "Longitude",
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
        $orphanage->slug = Str::slug($request->name);
        $orphanage->status = $request->status ? 1 : 0;
        $orphanage->city_id = $request->city_id;
        $datas = [
            // "donates" => [
            //     'total_received' => 0,
            //     'total_remaining' => 0,
            //     'donators' => [],
            // ],
            "email" => $request->email,
            "tel" => $request->tel,
            "gerant" => $request->gerant,
            "total_children" => $request->children,
            "exam_class_children" => $request->exam_class_children,
            "profesional_search_children" => $request->profesional_search_children,
            "description" => $request->description,
            "public_content" => $request->public_content,
        ];
        $orphanage->datas = $datas;
        $location = [
            "street" => $request->street,
            'exact_address' => $request->exact_address,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude
        ];
        $orphanage->location = $location;
        $orphanage->save();

        // dd($request->files);
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
            "type" => "number",
            "required" => true,
            "value" => $orphanage->datas["total_children"],
        ];

        // new fields
        $fields[] = [
            "name" => "Nombre d'enfants en classe d'examen",
            "field_name" => "exam_class_children",
            "placeholder" => "Nombre d'enfants en classe d'examen",
            "type" => "number",
            "required" => false,
            "value" => $orphanage->datas["total_children_exam_class"],
        ];
        $fields[] = [
            "name" => "Nombre d'enfants en recherche de professionnalisation",
            "field_name" => "profesional_search_children",
            "placeholder" => "Nombre d'enfants en recherche de professionnalisation",
            "type" => "number",
            "required" => false,
            "value" => $orphanage->datas["total_children_profesional_search"],
        ];
        $fields[] = [
            "name" => "Quartier",
            "field_name" => "street",
            "placeholder" => "Quartier",
            "type" => "text",
            "required" => true,
        ];
        $fields[] = [
            "name" => "Adresse exacte",
            "field_name" => "exact_address",
            "placeholder" => "Adresse exacte",
            "type" => "text",
            "required" => true,
            "value" => $orphanage->location["exact_address"],
        ];
        $fields[] = [
            "name" => "Latitude",
            "field_name" => "latitude",
            "placeholder" => "Latitude",
            "type" => "text",
            "required" => true,
            "value" => $orphanage->location["latitude"],
        ];
        $fields[] = [
            "name" => "Longitude",
            "field_name" => "longitude",
            "placeholder" => "Longitude",
            "type" => "text",
            "required" => true,
            "value" => $orphanage->location["longitude"],
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
        $orphanage->slug = Str::slug($request->name);
        $orphanage->status = $request->status ? 1 : 0;
        $orphanage->city_id = $request->city_id;
        $datas = [
            // "donates" => [
            //     'total_received' => 0,
            //     'total_remaining' => 0,
            //     'donators' => [],
            // ],
            "email" => $request->email,
            "tel" => $request->tel,
            "gerant" => $request->gerant,
            "total_children" => $request->children,
            "description" => $request->description,
            "public_content" => $request->public_content,
        ];
        $orphanage->datas = $datas;
        $location = [
            "street" => $request->street,
            'exact_address' => $request->exact_address,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude
        ];
        $orphanage->location = $location;

        $orphanage->save();

        if ($request->files) {
            foreach($orphanage->getMedia("images") as $media)
            $media->delete();
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
