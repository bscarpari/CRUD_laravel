<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use File;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->only(['create', 'store', 'edit', 'update', 'destroy']);
    }

    public function index()
    {
        if (!auth()->check() || !auth()->user()->admin) {
            return redirect()->route('login');
        }

        $products = Product::all();
        return view('products/index', compact('products'));
    }

    public function create()
    {
        return view('products/create');
    }

    public function store(Request $request)
    {
        $dataForm = $request->except('_token');
        $product = new Product;

        $this->validate($request, $product->rules, $product->messages);

        $this->saveImage($request, $product);

        Product::create($dataForm);

        return redirect()->route('products.index');
    }

    public function show($id)
    {
        $product = Product::find($id);
        return view('products/show', compact('product'));
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('products/edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $dataForm = $request->except(['_token', '_method']);

        $this->validate($request, $product->rules, $product->messages);

        $this->saveImage($request, $product);

        $product->update($dataForm);

        return redirect()->route('products.index');
    }

    public function destroy($id)
    {
        $product = Product::find($id);

        if ($product->image != 'no-image.jpg')
            File::delete("images/$product->image");

        $product->delete();

        return redirect()->route('products.index');
    }

    public function list($show, $quantity)
    {
        if (!$show)
            return redirect()->back();

        $products = Product::paginate($quantity);
        return view('index', compact('products'));
    }

    // Create a function to save the image
    public function saveImage($request, $product)
    {
        $dataForm = $request->except('_token');
        $photo = $request->file('photo');

        if ($request->hasFile('photo')) {
            $ext = strtolower($photo->getClientOriginalExtension());
            $newImgName = md5(time()) . '.' . $ext;
            $request->file('photo')->move('images', $newImgName);
            $dataForm['photo'] = $newImgName;

            if ($product->photo != 'no-image.jpg')
                File::delete(public_path("images/$product->image"));

            $product->photo = $newImgName;
        }

        return $dataForm;
    }
}
