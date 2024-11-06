<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        // Retrieve all active services from the database
        $services = Service::where('active', true)->get();

        // Return the view and pass the services data
        return view('service', compact('services'));
    }
}
