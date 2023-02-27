<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Bike; 

class BikeController extends Controller
{
    public function home(): View
    {
        return view('home/home');
    }

    public function showAll(): View
    {
        $viewData['bikes'] = Bike::all();
        return view('bike/showAll')->with("viewData", $viewData);
    }

    public function show(string $id): View
    {
        $viewData['bike'] = Bike::findOrFail($id);
        return view('bike/show')->with("viewData", $viewData);
    }

    public function create(): View
    {
        return view('bike/create');
    }

    public function success(): View
    {
        return view('bike/success');
    }

    public function save(Request $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            "name" => "required|max:30",
            "stock" => "required|integer|min:0",
            "price" => "required|integer|min:0",
            "shareable" => "required",
            "type" => "required",
            "brand" => "required|max:30",
            "image" => "required|mimes:jpg,png,jpeg|max:5048",
            "description" => "required|max:1024"
        ]);
        $input = $request->all();
        if($request->hasFile('image'))
        {
            $destination_path = public_path('images/bikes');
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('image')->move($destination_path, $image_name);
            $input['image'] = $image_name;
        }
        Bike::create([
            'name' => $input['name'],
            'stock' => $input['stock'],
            'price' => $input['price'],
            'shareable' => ($input['shareable'] == '1'),
            'type' => $input['type'],
            'brand' => $input['brand'],
            'image'=> $input['image'],
            'description' => $input['description'],
        ]);
        return redirect("/success");
    }

    public function remove(string $id): \Illuminate\Http\RedirectResponse
    {
        $bike = Bike::findOrFail($id);
        $bike->delete();
        return redirect("/showAll");
    }
}