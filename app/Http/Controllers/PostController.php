<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Categorie;


class PostController extends Controller
{
    public function home()
    {
        $posts=Post::paginate(100);
        // $posts = Post::orderBy('published_at', 'desc')->get();
        return view ('home',  compact('posts'));
    }




    public function admin()
    {
        $categories=Categorie::all();

        $posts=Post::paginate(100);
        return view('admin', compact('posts', 'categories'));
    }
    public function ListProduit()
    {

        $posts=Post::paginate(100);
        return view('admin.users.produit', compact('posts'));
    }
    public function panier()
    {

        return view('panier');
    }

    public function ajouter_post_traitement(Request $request)
    {
        $request->validate([
            'titre' => 'required',
            'contenue' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:32768', // Validation de l'image
            'prix' => 'required',
        ]);

        $post = new Post;
        $post->titre = $request->titre;
        $post->contenue = $request->contenue;
        $post->prix = $request->prix;
        $post->categorie_id = $request->categorie_id;



        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $post->image = $imagePath;
        }

       $post->save();

        return redirect('/admin')->with('status', 'Post ajouter avec succes!!');
    }

    public function ajouterAuPanier($id) {
        // Logique pour ajouter l'article au panier, par exemple :
        $post = Post::find($id);

        $article = [
            'titre'=> $post->titre,
            'prix'=> $post->prix,
            'image'=> $post->imagePath,
        ];
        $panier = session('panier', []);
        $panier[] = $article;

        session(['panier' => $panier]);
        return redirect('')->with('success', 'Article ajouté au panier avec succès');
    }
    public function remove($key)
    {
        $cart = session()->get('panier');
        unset($cart[$key]);
        session()->put('panier', $cart);
        return redirect()->back();
    }
    public function delete_post($id){
        $post= Post::find($id);
        $post->delete();
        return redirect('/admin')->with('status', 'L\'etudiant a bien ete suprimé avec succes!!');

    }

}
