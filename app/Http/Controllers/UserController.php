<?php
namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Mesaage;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        // Validation des données $request->validate(...);

        User::create($request->all());
        return redirect()->route('admin.users.index')->with('success', 'Utilisateur ajouté avec succès');
    }

    public function show(User $user)
    {
        return view('admin.users.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        // Validation des données $request->validate(...);

        $user->update($request->all());
        return redirect()->route('admin.users.index')->with('success', 'Utilisateur modifié avec succès');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users.index')->with('success', 'Utilisateur supprimé avec succès');
    }
}
