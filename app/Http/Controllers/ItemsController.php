<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Itemgroup;
use App\Models\Items;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class ItemsController extends Controller
{
    public function ShowItemGroup(){
        $data=Itemgroup::All();
        $count=$data->count();
        return view('welcome',['data'=>$data ,'count'=>$count]);
    }
    public function showproduct($id){
        $data=Items::where('itemgroupno',$id)
        ->get();
    Session::put('id',$id);
        return view('showproduct',['data'=>$data]);
    }
    public function AddtoCart($id){
    DB::table('carts')->insert(['iditem'=>$id]);//save table
$idgroup=Session::get('id');
$count=DB::table('carts')->get()->count();
Session::put('countitem',$count);
return redirect('showproduct/' . $idgroup);//redirect showproduct
}
public function Checkout(){
    $cartitems=Cart::All();

    return view('checkout',['cartitems'=>$cartitems]);
}       
public function SaveCheckout(){
    return view("success");
}

 public function GetItemGroup(){


$data=Itemgroup::All();
$issave=true;
return view('itemgroup' ,['data'=>$data , 'issave'=> $issave]);
 }
 public function SaveGroupItems(Request $request){

  
   $data=Itemgroup::create([
        'itemgroupname'=>$request->itemgroupname
    ]);

    $data->save();
    return redirect('itemgroup');
 }

 public function GetItems(){
$data=Items::All();
$isave=true;
return view('items',['data'=>$data, 'isave'=> $isave]);
}
public function SaveItems(Request $request){

$data=Items::create([
    'itemname'=>$request->itemname,
    'price'=>$request->price,
    'qty'=>$request->qty,
    'color'=>$request->color,
    'itemgroupno'=>$request->itemgroupno,

]);
$data->save();
return redirect('additem');


}
public function DeleteItems($id)
    {
        ////step delete
$find=Items::find($id);
$find->delete();
////end delete
return redirect()->route('item'); 

    }
    public function Edit($id){

$find=Items::where('id',$id)->first();
 
return view('edit',['item'=>$find]);
                 }
                 public function Update(Request $request) {
                    $find=Items::find($request->id);
                    $find->itemname=$request->itemname;
                    $find->price=$request->price;
                    $find->qty=$request->qty;
                    $find->color=$request->color;
                    $find->itemgroupno=$request->itemgroupno;

                    $find->save();
                    return redirect()->route('item'); 
                    
  
                }  
                
                public function Del($id)
    {
       
$find=Itemgroup::find($id);
$find->delete();
return redirect()->route('itemgroup'); 

    }
    public function EditGroup($id){

        $item=Itemgroup::where('id',$id)->first();
         
        return view('editgroup',['item'=>$item]);
                         }

                  public function UpdateGroup(Request $request) {
                     $item=Itemgroup::find($request->id);
                     $item->itemgroupname=$request->namegroup;

                     $item->save();
                     return redirect()->route('itemgroup'); 
                            
          
                        }  
                        
                            
          
                        }  
                        