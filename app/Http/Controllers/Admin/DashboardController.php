<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\{Guest, Vehicle};
use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {

        $totalUsers = User::/* where('tenant_id', $tenant->id)-> */count();

        $totalGuests = Guest::count();
        $totalVehicles = Vehicle::count();

        return view('admin.pages.home.home', compact(
            'totalUsers',
            'totalGuests',
            'totalVehicles'
        ));
    }

}
