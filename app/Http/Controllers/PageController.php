<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\City;
use App\Models\Donation;
use App\Models\Orphanage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PageController extends Controller
{
    public function home(Request $request)
    {
        $partners = [];
        $partners[] = ([
            "name" => "La Mater Market",
            "entete" => "Startup, Livraison alimentaire",
            "url" => "https://market.lamater.net/?ref=onenation_oneheart",
            "description" => "Plateforme de services de courses en ligne. La Mater Market nous aidera à livrer les packs alimentaires dans les orphélinats.",
            "background" => asset('lovecare/images/lamater.png'),
        ]);
        $partners[] = ([
            "name" => "Make Them Smile Corporation",
            "entete" => "Association",
            "url" => "https://facebook.com/hope.smile.leave",
            "description" => "If you have the power to make someone happy, Please do it. The world needs more of that.",
            "background" => asset('lovecare/images/mts.png'),
        ]);
        $partners[] = ([
            "name" => "YALI West Africa Alumni Association",
            "entete" => "Association",
            "url" => "https: //yali.state.gov/fr/",
            "description" => "Programme visant à forger un réseau actif de jeunes leaders Africains.",
            "background" => asset('lovecare/images/yali.png'),
        ]);

        $testimonies = [];
        $testimonies[] = [
            "name" => "Mr Kameni",
            "message" => "« Je loue d’éjà l’initiative et je me dois de coopérer pour la bonne marche du projet. Si tu as besoin de données, fais-moi savoir et que le Seigneur fasse grâce pour la bonne marche du projet.»",
            "title" => "Responsable du Centre d’Accueil Eau Vive",
            "image" => null,
        ];
        $testimonies[] = [
            "name" => "Paul Fouda",
            "message" => "« J’apprécie l’initiative et me rendrai disponible… »",
            "title" => "Champion du Cameroun des échecs parties rapide 2021.",
            "image" => null,
        ];
        $testimonies[] = [
            "name" => "M. OLA Antoine",
            "message" => "« La plateforme est intéressante parce qu’en effet les besoins réels des orphelinats les gens ne les connaissent pas en général. [...]»",
            "title" => "Bénévole et responsable communication de l’orphelinat Main dans la main",
            "image" => null,
        ];
        $testimonies[] = [
            "name" => "Hervé Cédric",
            "message" => "« Together we are more stronger! God Bless you and this marvelous initiative! We’ll definitely work together! »",
            "title" => "Vice Président de l’Association Yes Health",
            "image" => null,
        ];

        $testimonies[] = [
            "name" => "Maman Nanfack",
            "message" => "« Je trouve le projet très louable et vous encourage dans cette lancée. J’aimerais que nous travaillions ensemble et avoir des retours par rapports aux actions que vous menez.»",
            "title" => "Assistante sociale à l'hôpital de district de Biyem-Assi",
            "image" => null,
        ];

        $total_enfants = 0;

        $orphelinats = Orphanage::get();

        $total_orphanages = $orphelinats->count();

        foreach ($orphelinats as $data) {
            $total_kids = $data->datas;

            $total_enfants += intval($total_kids["total_children"]);
        }

        $total_donations = Donation::all()->sum("amount");

        $blogs = Blog::latest()->paginate(9);

        return view("front.home", compact("partners", "testimonies", "total_donations", "blogs", "total_enfants", "total_orphanages"));
    }
    public function contact(Request $request)
    {
        return view("front.contact");
    }
    public function about(Request $request)
    {
        $users = User::all();
        return view("front.about", compact("users"));
    }

    public function blog(Request $request)
    {
        $blogs = Blog::paginate(9);
        return view("front.blog", compact("blogs"));
    }

    public function blog_detail(Request $request, $orphanage_slug)
    {

        $blog = Blog::where("slug", $orphanage_slug)->first();
        views($blog)->record();
        return view("front.blogs_details", compact("blog"));
    }

    public function orphanages(Request $request)
    {

        $villes = City::all();
        $cities = City::whereIn('name', $request->villes ?? []);

        // recherche par le nom
        $orphelinats = Orphanage::where('name', 'like', "%{$request->search}%")
                                ->where('status', '=', 1);


        // Recherche par nom des villes
        if ($request->villes != null)
        {
            $orphelinats = Orphanage::
                                joinSub($cities, 'cities', function ($join) {
                                    $join->on('cities.id', '=', 'orphanages.city_id');
                                })
                                -> joinSub($orphelinats, 'orph', function ($join) {
                                    $join->on('orph.id', '=', 'orphanages.city_id');
                                })
                                ->select('orphanages.*');
        }

        //quartier
        if ($request->street != null) {
            $query = $orphelinats->newQuery();

            $orphelinats = $query->where('orphanages.location->street', 'like', "%{$request->street}%");
        }

        //le nombre d'enfants
        if ($request->profesional_search_children != null) {

        }

        //le nombre d'enfants en recherche de professionnalisation
        if ($request->total_children != null) {

        }

        //le nombre d'enfants en classe d'examen
        if ($request->exam_class_children != null) {

        }

        $orphelinats = $orphelinats->paginate(9);

        return view("front.orphanages", compact("orphelinats", "villes"));
    }
    public function orphanages_detail(Request $request, $orphanage_slug)
    {

        $orphelinat = Orphanage::where("slug", $orphanage_slug)->first();
        views($orphelinat)->record();
        return view("front.orphanages_details", compact("orphelinat"));
    }

    public function search(Request $request)
    {
        $searchResults = (new Search())
            ->registerModel(Orphanage::class, 'name', 'city')
            ->search($request->q);

    }

    public function joinus(Request $request)
    {
        return view("front.joinus");
    }

    public function joinus_register(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $datas = [];
        $datas["visible"] = 0; // invisible on homepage
        $datas["tel"] = $request->tel;
        $datas["register_from"] = "JoinUs Page";
        $datas["past_experience"] = $request->past_experience;
        $datas["provenance"] = $request->provenance;
        $datas["preferences"] = $request->preferences;
        $datas["ville"] = $request->city;
        $datas["pays"] = "";
        $datas["twitter"] = "";
        $datas["facebook"] = "";
        $datas["whatsapp"] = "";
        $datas["instagram"] = "";
        $datas["linkedin"] = "";
        $datas["description"] = "";
        $datas["profile_picture"] = "";
        $user->password = bcrypt(Str::random(8));
        $user->datas = $datas;
        $user->save();
        $user->assignRole(['user', 'volunteer']);

        return redirect()->back()->with("success", "Votre enregistrement a bien été pris en compte");
    }
    //
}
