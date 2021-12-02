<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $blogs = Blog::all();
        return view("admin.blogs.index", compact("blogs"));
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
            "name" => "Titre",
            "field_name" => "name",
            "placeholder" => "Titre de l'article",
            "type" => "text",
            "required" => true,
        ];


        return view("admin.blogs.create", compact("cities", "fields"));
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
        $blog = new Blog();

        $blog->name = $request->name;
        $blog->slug = Str::slug($request->name);
        $blog->status = $request->status ? 1 : 0;
        $datas = [
            "author_id" => Auth::user()->id,
            "author" => Auth::user()->name,
            "description" => $request->description,
            "public_content" => $request->public_content,
        ];
        $blog->datas = $datas;
        $blog->save();

        // dd($request->files);
        if ($request->files) {
            foreach ($request->files as $image) {
                $blog->addMedia($image)->toMediaCollection("images");
            }
        }

        return redirect()->route("blogs.index")->with("success", "L'article a été enregistré avec succès.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {

        $cities = City::all();
        $fields = [];
        $fields[] = [
            "name" => "Nom",
            "field_name" => "name",
            "placeholder" => "Nom de l'article",
            "type" => "text",
            "required" => true,
            "value" => $blog->name,
        ];
        $fields[] = [
            "name" => "Email",
            "field_name" => "email",
            "placeholder" => "Email de l'article",
            "type" => "email",
            "value" => $blog->datas["email"],
        ];
        $fields[] = [
            "name" => "Tel",
            "field_name" => "tel",
            "placeholder" => "N° de téléphone l'article",
            "type" => "tel",
            "required" => true,
            "value" => $blog->datas["tel"],
        ];
        $fields[] = [
            "name" => "Nom du gérant",
            "field_name" => "gerant",
            "placeholder" => "Nom du gérant",
            "type" => "text",
            "required" => true,
            "value" => $blog->datas["gerant"],
        ];
        $fields[] = [
            "name" => "Nombre d'enfants",
            "field_name" => "children",
            "placeholder" => "Nombre d'enfants du gérant",
            "type" => "number",
            "required" => true,
            "value" => $blog->datas["total_children"],
        ];

        return view("admin.blogs.edit", compact("cities", "fields", "blog"));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {

        $blog->name = $request->name;
        $blog->slug = Str::slug($request->name);
        $blog->status = $request->status ? 1 : 0;
        $blog->city_id = $request->city_id;
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
        $blog->datas = $datas;
        $blog->save();

        if ($request->files) {
            foreach ($blog->getMedia("images") as $media) {
                $media->delete();
            }

            foreach ($request->files as $image) {
                $blog->addMedia($image)->toMediaCollection("images");
            }
        }
        return redirect()->route("blogs.index")->with("success", "L'article a été modifié avec succès.");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
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
                $blog = Blog::find($id);
                //ActivityLogger::activity("Suppression de l'équipe ID:".$client->id.' par l\'utilisateur ID:'.Auth::id());
                $blog->delete();
            }
            $message = sizeof($ids) . ' article(s) supprimé(s) avec succès';
        } else {
            $message = "Aucun article n'a été supprimé";
        }
        return redirect()->route("blogs.index")->with('success', $message);
    }

}
