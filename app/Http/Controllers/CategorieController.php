<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Categorie;
class CategorieController extends Controller
{
    public function categorieproduit()
    {
        $posts=Post::paginate(10);
        return view('/admin/users/categorie', compact('posts'));
    }
    public function ajouter_categorie(Request $request)
    {
        $request->validate([
            'nom' => 'required',
        ]);
        $categorie = new Categorie();
        $categorie->nom = $request->nom;
        $categorie->save();

        return redirect('/admin/users/categorie')->with('status', 'Le tuteur a bien ete ajouter avec succes!!');
    }

}
