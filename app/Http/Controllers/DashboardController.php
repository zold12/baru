<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Surat;
use App\Models\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
       
        $categoryCount = Category::count();
        $userCount = User::count();
        // $suratcount = Surat::count();

        return view('dashboard', [  'category_count' => $categoryCount, 'user_count' => $userCount]);
    }
}
