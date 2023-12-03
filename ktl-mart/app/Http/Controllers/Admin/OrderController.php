<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function Index(){
        return view('admin.pendingorder');
    }
    
    // public function CpmpletedOrder(){
    //     return view('admin.completedorder');
    // }

    // public function CancelledOrder(){
    //     return view('admin.cancelledorder');
    // }
}
