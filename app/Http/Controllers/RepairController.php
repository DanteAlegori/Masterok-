<?php

namespace App\Http\Controllers;

use App\Repair;
use App\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class RepairController extends Controller
{
    public function index() 
    {
        $categories = Category::all();

        return view('repair', ['categories' => $categories]);
    }
    public function store(Request $request) 
    {

        $this->validate($request, [
            'address' => 'required',
            'description' => 'required',
            'category' => 'required',
            'price' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:2000'
        ]);
        
        $newImageName = time() . '-' . $request->file('image')->getClientOriginalName();

        $request->image->move(public_path('images'), $newImageName);


        $request->user()->repairs()->create([
            'address' => $request->address,
            'description' => $request->description,
            'category' => $request->category,
            'price' => $request->price,
            'image' => $newImageName
        ]);

        return redirect('/user');
    }
    public function destroy(Repair $repair) {
        $file_path = public_path().'\images\\'.$repair->image;
        $file_path_new = public_path().'\images\\'.$repair->image_new;
        $repair->delete();
        unlink($file_path);
        unlink($file_path_new);
        return back();
    }


    public function edit(Repair $repair) {
        $statuses = ['1' => 'Новая', '2' => 'Ремонтируется', '3' => 'Отремонтировано'];
        $categories = Category::all();

        return view('edit', ['repair' => $repair, 'statuses' => $statuses, 'categories' => $categories]);
    }

    public function change(Request $request, $repair) {
        $this->validate($request, [
            'status' => 'required',
        ]);

        $repair = Repair::find($repair);

        $repair->status = $request->status;

        if ($request->status == 2) {

            $this->validate($request, [
                'final_price' => 'required'
            ]);

            $repair->final_price = $request->final_price;

        }


        if ($request->status == 3) {

            $this->validate($request, [
                'image_new' => 'required|mimes:jpg,png,jpeg|max:2000'
            ]);

            $newImageName_new = time() . '-' . $request->file('image_new')->getClientOriginalName();
    
            $request->image_new->move(public_path('images'), $newImageName_new);

            $repair->image_new = $newImageName_new;

        }
       
        $repair->save();

        return redirect('/admin');
    }

}