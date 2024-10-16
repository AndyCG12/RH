<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PerfilController extends Controller
{
    public function index()
    {
        $usuario = Auth::user();
        return view('auth.edit_usuario', compact('usuario'));
    }

    public function updateName(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
        ]);

        $user = Auth::user();
        $user->first_name = $request->input('first_name');
        $user->save();

        return redirect()->back()->with('success', 'Nombre actualizado con éxito.');
    }

    public function updatePhoto(Request $request)
    {
        $request->validate([
            'profile_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $user = Auth::user();

        if ($request->hasFile('profile_photo')) {
            // Eliminar la foto antigua si existe
            if ($user->profile_photo) {
                Storage::disk('public')->delete($user->profile_photo);
            }

            // Subir nueva foto
            $filePath = $request->file('profile_photo')->store('profile_photos', 'public');
            $user->profile_photo = $filePath;
            $user->save();
        }

        return redirect()->back()->with('success', 'Foto de perfil actualizada con éxito.');
    }
}
