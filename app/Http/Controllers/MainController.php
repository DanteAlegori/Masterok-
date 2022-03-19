<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Repair;
use App\Category;

class MainController extends Controller
{
    
    public function index() {
        $repairs = Repair::paginate(4);
        $repairsNew = Repair::where('status', 1)->get();
        $repairsProcess = Repair::where('status', 2)->get();
        $repairsDone = Repair::where('status', 3)->get();
        $categories = Category::get();

        return view('home', ['repairs' => $repairs, 'repairsNew' => $repairsNew, 'repairsProcess' => $repairsProcess, 'repairsDone' => $repairsDone, 'categories' => $categories]);
    }
    public function user() {
        $repairs = Repair::get();
        $statuses = ['1' => 'Новая', '2' => 'Ремонтируется', '3' => 'Отремонтировано'];
        $categories = Category::get();

        return view('user', ['repairs' => $repairs, 'statuses' => $statuses, 'categories' => $categories]);
    }
    public function admin() {
        $repairs = Repair::get();
        $statuses = ['1' => 'Новая', '2' => 'Ремонтируется', '3' => 'Отремонтировано'];
        $categories = Category::get();

        return view('admin', ['repairs' => $repairs, 'statuses' => $statuses, 'categories' => $categories]);
    }
}
