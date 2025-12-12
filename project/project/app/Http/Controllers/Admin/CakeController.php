<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Cake;

class CakeController extends Controller
{
    // List cakes
    public function index() {
        if (!session()->get('isAdmin')) {
            return redirect('/admin/login');
        }
        $cakes = Cake::all(); // DB se data fetch ho raha hai
        return view('admin.cakes.index', compact('cakes'));
    }


    public function create()
    {
        $categories = Category::all(); // <-- VERY IMPORTANT

        return view('admin.cakes.create', compact('categories'));
    }


    // Store new cake
    // Store new cake
    public function store(Request $request) {

            $data = $request->validate([
//                'name' => 'required|string',
//                'category_id' => 'required|exists:categories,id',
//                'price' => 'required|numeric',
//                'image' => 'required|image',
//                'description' => 'nullable|string',
//                'ingredients' => 'nullable|string',
                'name' => 'required|string|max:255',
                'category_id' => 'required|integer|exists:categories,id',
                'price' => 'required|numeric|min:1',
                'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
                'description' => 'required|string|min:10',
                'ingredients' => 'required|string|min:5',
        ]);

        // Upload image
        $path = $request->file('image')->store('cakes', 'public');
        $data['image'] = $path;

        Cake::create($data);

        // ✅ Correct route name
        return redirect()->route('admin.cakes.index')->with('success', 'Cake added successfully!');
    }


    // Show edit form
    public function edit(Cake $cake) {
        return view('admin.cakes.edit', compact('cake'));
    }

    // Update cake
    public function update(Request $request, Cake $cake) {
        $data = $request->validate([
            'name' => 'required|string',
            'category' => 'required|in:regular,customized,wedding',
            'price' => 'required|numeric',
            'image' => 'nullable|image',
            'description' => 'nullable|string',
            'ingredients' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('cakes', 'public');
            $data['image'] = $path;
        }

        $cake->update($data);
        return redirect()->route('admin.cakes.index')->with('success', 'Cake updated successfully!');

    }

    // Delete cake
    public function destroy(Cake $cake) {
        $cake->delete();
        return redirect()->route('admin.cakes.index')->with('success', 'Cake deleted successfully!');
    }

}
