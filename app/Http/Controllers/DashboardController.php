<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Itemgroup;
use App\Models\Items;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

use Auth;
class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function logout(){
        Auth::logout();
        return redirect('login');
    }
    public function additem(){
                            
        $data=Items::All();
        return view('dashboard.additems',['data'=>$data]);
    }
 
    public function bills(){
        return view('dashboard.bills');
    }
    public function DisplayItems(){
        $data=DB::table('itemgroups')
        // الربط بين الجدولين 
        ->join('items','itemgroups.id','=','items.itemgroupno')
        ->get();
        //اسم المجلد واسم الصفحه اما الداتا كانت اسم متغير 
        return view('dashboard.cntrolpanel',['data'=>$data]);
    }
    public function displayadditemsgroup(){
        
        $data=Itemgroup::All();
        return view('dashboard.addgroupsitem',['data'=>$data]);
    }
    public function updateg(Request $request) {
        $item=Itemgroup::find($request->id);
        $item->itemgroupname=$request->itemgrname;

        $item->save();
        return redirect('itemgroup'); 
}
}