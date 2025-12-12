<?php
//
//namespace App\Http\Controllers;
//
//use Illuminate\Http\Request;
//
//class CakeController extends Controller
//{
//    // Cake Data
//    private $cakes = [
//        'regular' => [
//            ['id' => 1, 'name' => 'Vanilla Dream', 'price' => 1800, 'image' => 'images/vanilla.jpg', 'description' => 'Classic vanilla sponge with buttercream.', 'ingredients' => 'Flour, Sugar, Eggs, Vanilla Essence'],
//            ['id' => 2, 'name' => 'Chocolate Bliss', 'price' => 2000, 'image' => 'images/cake1.jpg', 'description' => 'Rich chocolate layers with silky ganache.', 'ingredients' => 'Chocolate, Flour, Sugar, Eggs'],
//            ['id' => 3, 'name' => 'Strawberry Heaven', 'price' => 2200, 'image' => 'images/strawberry.jpg', 'description' => 'Soft vanilla cake topped with strawberries.', 'ingredients' => 'Strawberry, Cream, Vanilla, Flour'],
//            ['id' => 4, 'name' => 'Lemon Zest', 'price' => 1900, 'image' => 'images/lemon.jpeg', 'description' => 'Tangy lemon sponge with creamy frosting.', 'ingredients' => 'Lemon, Flour, Sugar, Eggs'],
//            ['id' => 5, 'name' => 'Coffee Delight', 'price' => 2100, 'image' => 'images/cofeedelight.jpeg', 'description' => 'Espresso-infused cake with mocha layers.', 'ingredients' => 'Coffee, Flour, Cream, Cocoa'],
//            ['id' => 6, 'name' => 'Red Velvet Love', 'price' => 2300, 'image' => 'images/red velvet.jpeg', 'description' => 'Moist red velvet with smooth cream cheese frosting.', 'ingredients' => 'Cocoa, Vinegar, Buttermilk, Flour'],
//            ['id' => 7, 'name' => 'Caramel Crunch', 'price' => 2400, 'image' => 'images/caramel.jpeg', 'description' => 'Rich caramel sponge topped with crisp praline.', 'ingredients' => 'Caramel, Cream, Sugar, Flour'],
//            ['id' => 8, 'name' => 'Pineapple Paradise', 'price' => 2000, 'image' => 'images/pineapple.jpeg', 'description' => 'Light and fruity pineapple-flavored cake.', 'ingredients' => 'Pineapple, Cream, Vanilla, Sugar'],
//        ],
//
//        'customized' => [
//            ['id' => 9, 'name' => 'Rainbow Fantasy', 'price' => 2500, 'image' => 'images/rainbow.jpeg', 'description' => 'Colorful layered cake for any celebration.', 'ingredients' => 'Butter, Eggs, Sugar, Food Colors'],
//            ['id' => 10, 'name' => 'Unicorn Magic', 'price' => 2800, 'image' => 'images/unicorn.jpeg', 'description' => 'Whimsical unicorn cake with pastel frosting.', 'ingredients' => 'Cream, Fondant, Sugar, Food Colors'],
//            ['id' => 11, 'name' => 'Photo Cake', 'price' => 2700, 'image' => 'images/photo.jpeg', 'description' => 'Add your photo on top — personalized delight.', 'ingredients' => 'Fondant, Cream, Edible Ink'],
//            ['id' => 12, 'name' => 'Cartoon Fun Cake', 'price' => 2600, 'image' => 'images/cartoon.jpeg', 'description' => 'Your kid’s favorite cartoon cake.', 'ingredients' => 'Fondant, Cream, Food Colors'],
//            ['id' => 13, 'name' => 'Marble Magic', 'price' => 2500, 'image' => 'images/marble.jpeg', 'description' => 'Beautiful marble swirl cake for classy events.', 'ingredients' => 'Chocolate, Vanilla, Butter, Sugar'],
//            ['id' => 14, 'name' => 'Galaxy Swirl', 'price' => 2900, 'image' => 'images/galaxy.jpeg', 'description' => 'Shiny galaxy effect cake for space lovers.', 'ingredients' => 'Fondant, Glitter, Food Colors'],
//            ['id' => 15, 'name' => 'Rose Gold Elegance', 'price' => 3100, 'image' => 'images/rose.jpeg', 'description' => 'Rose gold shimmer cake for luxury parties.', 'ingredients' => 'Fondant, Edible Glitter, Cream'],
//            ['id' => 16, 'name' => 'Game Controller Cake', 'price' => 3000, 'image' => 'images/game.jpeg', 'description' => 'Perfect for gamers — controller-shaped cake.', 'ingredients' => 'Fondant, Chocolate, Buttercream'],
//        ],
//
//        'wedding' => [
//            ['id' => 17, 'name' => 'Royal White', 'price' => 4000, 'image' => 'images/wedding1.jpeg', 'description' => 'Elegant white fondant wedding cake.', 'ingredients' => 'Fondant, Vanilla, Sugar, Cream'],
//            ['id' => 18, 'name' => 'Golden Bliss', 'price' => 4500, 'image' => 'images/wedding2.jpeg', 'description' => 'Luxurious gold-accented wedding tier.', 'ingredients' => 'Vanilla, Fondant, Gold Dust, Cream'],
//            ['id' => 19, 'name' => 'Floral Fantasy', 'price' => 4200, 'image' => 'images/wedding3.jpeg', 'description' => 'Decorated with fresh edible flowers.', 'ingredients' => 'Vanilla, Cream, Edible Flowers'],
//            ['id' => 20, 'name' => 'Pearl Perfection', 'price' => 4300, 'image' => 'images/wedding4.jpeg', 'description' => 'White pearls and soft frosting layers.', 'ingredients' => 'Fondant, Sugar, Cream, Pearls'],
//            ['id' => 21, 'name' => 'Romantic Red Roses', 'price' => 4400, 'image' => 'images/wedding5.jpeg', 'description' => 'Beautiful red rose wedding cake.', 'ingredients' => 'Fondant, Rose Cream, Vanilla'],
//            ['id' => 23, 'name' => 'Royal Gold Leaf', 'price' => 4700, 'image' => 'images/wedding6.jpeg', 'description' => 'Decorated with real edible gold leaves.', 'ingredients' => 'Gold Leaf, Cream, Vanilla'],
//            ['id' => 24, 'name' => 'Pastel Garden', 'price' => 4100, 'image' => 'images/wedding7.jpeg', 'description' => 'Soft pastel tones for spring weddings.', 'ingredients' => 'Fondant, Cream, Food Colors'],
//        ],
//    ];
//
//    // 🧁 Search Function
//
//    public function search(Request $request)
//    {
//        $query = $request->input('q', '');
//
//        // Flatten all cakes into a single array
//        $allCakes = collect($this->cakes)->flatten(1)->toArray();
//
//        // Filter by search query
//        $cakes = array_filter($allCakes, fn($cake) =>
//            stripos($cake['name'], $query) !== false
//        );
//
//        return view('cakes.search', ['cakes' => $cakes, 'query' => $query]);
//    }
//
//
//    // Show Categories
//    public function categories()
//    {
//        return view('cakes.categories');
//    }
//
//    // Show Cakes in a Category
//    // Show Cakes in a Category
//
//    // Show cakes by category
//    public function index($category = null)
//    {
//        $validCategories = ['regular', 'customized', 'wedding'];
//
//        $allCakes = [];
//
//        foreach ($this->cakes as $cat => $cakes) {
//            foreach ($cakes as $cake) {
//                $cake['category'] = $cat;   // add category
//                $allCakes[] = (object)$cake;
//            }
//        }
//
//        return view('cakes.index', [
//            'cakes' => $allCakes,
//            'category' => 'all'
//        ]);
//    }
//
//
//
//
//
//
//
//    // Show Individual Cake
//    public function show($id)
//    {
//        $cake = collect($this->cakes)->flatten(1)->firstWhere('id', $id) ?? abort(404);
//        return view('cakes.show', compact('cake'));
//    }
//    public function add(Request $request)
//    {
//        $cart = session()->get('cart', []);
//
//        $id = $request->id;
//        $name = $request->name;
//        $price = $request->price;
//        $pounds = $request->pounds;
//        $quantity = $request->quantity;
//        $instructions = $request->instructions;
//        $image = $request->image;
//
//        // If this cake already exists in cart → update quantity
//        if(isset($cart[$id])) {
//            $cart[$id]['quantity'] += $quantity;
//            $cart[$id]['total'] = $cart[$id]['price'] * $cart[$id]['pounds'] * $cart[$id]['quantity'];
//        } else {
//            // New cake to cart
//            $cart[$id] = [
//                'id' => $id,
//                'name' => $name,
//                'price' => $price,
//                'pounds' => $pounds,
//                'quantity' => $quantity,
//                'instructions' => $instructions,
//                'image' => $image,
//                'total' => $price * $pounds * $quantity,
//            ];
//        }
//
//        session()->put('cart', $cart);
//
//        return redirect()->route('cart.index');
//    }
//
//}
//


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cake;

class CakeController extends Controller
{

    public function index($category = null)
    {
        $query = Cake::query();

        if ($category) {
            $query->whereHas('category', function ($q) use ($category) {
                $q->where('name', 'LIKE', "%$category%"); // filter by name instead of slug
            });
        }

        $cakes = $query->get();
        return view('cakes.index', compact('cakes', 'category'));
    }


    // Show single cake

    // Search cakes
    public function ajaxSearch(Request $request)
    {
        $query = $request->query('query');
        $cakes = Cake::where('name', 'LIKE', "%{$query}%")
            ->orWhere('description', 'LIKE', "%{$query}%")
            ->get();
        return response()->json($cakes);
    }
    public function search(Request $request)
    {
        $query = $request->query('query');
        $cakes = Cake::where('name', 'LIKE', "%{$query}%")
            ->orWhere('description', 'LIKE', "%{$query}%")
            ->get();
        return view('cakes.index', compact('cakes'));
    }
    public function show($id)
    {
        $cake = Cake::findOrFail($id);
        return view('cakes.show', compact('cake'));
    }


    // Add to cart
    public function add(Request $request)
    {
        $cart = session()->get('cart', []);
        $id = $request->id;

        if (isset($cart[$id])) {
            $cart[$id]['quantity'] += $request->quantity;
        } else {
            $cart[$id] = [
                'id' => $id,
                'name' => $request->name,
                'price' => $request->price,
                'pounds' => $request->pounds,
                'quantity' => $request->quantity,
                'instructions' => $request->instructions,
                'image' => $request->image,
                'total' => $request->price * $request->pounds * $request->quantity,
            ];
        }

        session()->put('cart', $cart);
        return redirect()->route('cart.index');
    }

}
