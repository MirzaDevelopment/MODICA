<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use App\Models\Question;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{


    //To display the number of registered users in admin dashboard
    public function countUsersAndProducts()
    {
        // Save tenant slug in session
        $tenant = Auth::user()->tenant()->first();

        if ($tenant) {
            session(['tenantSlug' => $tenant->slug]);
        }
        //Active products, users, and questions 
        $usersCount = User::count();
        $productsCount = Product::count();
        $questionsCount = Question::where('status', 'neodgovoreno')->count();
        //Deleted products and users
        $deletedUsersCount = User::onlyTrashed()->count();
        $deletedProductsCount = Product::onlyTrashed()->count();

        Gate::authorize('create', Product::class);
        return view('dashboard')->with(["usersCount" => $usersCount, "questionsCount" => $questionsCount, "productsCount" => $productsCount, "deletedUsersCount" => $deletedUsersCount, "deletedProductsCount" => $deletedProductsCount]);
    }
}
