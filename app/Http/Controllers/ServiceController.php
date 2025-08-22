<?php

namespace App\Http\Controllers;

use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all(); // lấy toàn bộ dịch vụ từ DB
        return view('service.index', compact('services'));
    }
}
