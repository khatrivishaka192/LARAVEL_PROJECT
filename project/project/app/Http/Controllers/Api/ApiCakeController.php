<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cake; // Ensure Cake model exists

class ApiCakeController extends Controller
{
    // List all cakes
    public function index()
    {
        $cakes = Cake::all();
        return response()->json($cakes);
    }

    // Show single cake
    public function show($id)
    {
        $cake = Cake::find($id);
        if (!$cake) {
            return response()->json(['message' => 'Cake not found'], 404);
        }
        return response()->json($cake);
    }

    // Create new cake
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric'
        ]);

        $cake = Cake::create([
            'name' => $request->name,
            'price' => $request->price
        ]);

        return response()->json($cake, 201);
    }

    // Update cake
    public function update(Request $request, $id)
    {
        $cake = Cake::find($id);
        if (!$cake) {
            return response()->json(['message' => 'Cake not found'], 404);
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric'
        ]);

        $cake->update([
            'name' => $request->name,
            'price' => $request->price
        ]);

        return response()->json($cake);
    }

    // Delete cake
    public function destroy($id)
    {
        $cake = Cake::find($id);
        if (!$cake) {
            return response()->json(['message' => 'Cake not found'], 404);
        }

        $cake->delete();
        return response()->json(['message' => 'Cake deleted successfully']);
    }
}
