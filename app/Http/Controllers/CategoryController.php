<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Repair;

class CategoryController extends Controller
{
    public function add(Request $request) {
        $this->validate($request, [
            'name' => 'required',
        ]);

        Category::create([
            'name' => $request->name
        ]);

        return redirect('/admin');
    }
    public function delete(Category $category) {
        $repairs = Repair::where('category', $category->id)->get();
        foreach ($repairs as $repair) {
            $file_path = public_path().'\images\\'.$repair->image;
            if ($repair->image_new != 'image_new') {
                $file_path_new = public_path().'\images\\'.$repair->image_new;
            }
            $repair->delete();
            unlink($file_path);
            if ($repair->image_new != 'image_new') {
                unlink($file_path_new);
            }
        }
        $category->delete();
        return redirect('/admin');
    }
}
