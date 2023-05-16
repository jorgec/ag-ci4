<?php namespace App\Modules\Demo\Controllers;

use CodeIgniter\Controller;
use App\Modules\Demo\Models\DemoModel;

class Demo extends Controller
{
    public function index()
    {
        $data = ['title' => 'Demo Page', 'view' => 'land/data', 'data' => 'Hello World from Demo Module -> Demo!'];
        return view('template/layout', $data);
    }
}
