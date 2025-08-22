<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        // Lấy tất cả dữ liệu từ DB (Seeder đã thêm sẵn)
        $projects = Project::all();

        return view('project.index', compact('projects'));
    }
}
