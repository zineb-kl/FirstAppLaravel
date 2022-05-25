<?php

namespace App\Http\Controllers;
use App\Models\Pruduct;
use Illuminate\Http\Request;
use App\Exports\ProductExport;
use Maatwebsite\Excel\Facades\Excel;

class ProductController extends Controller
{
    public function  index()
    {
        //$data=Pruduct::paginate(5);
        $product=Pruduct::paginate(5);
        return view ('pages.product.index',compact('product'));
       
        //return view ('pages.product.index');
    }
    //show form to create new client
    public function  create()
    {
        return view ('pages.product.create');
    }
    //store data into database
    public function store(Request $request)
    {    
          switch ($request->submitbutton)
        {
            case 'Add Product':
                  $Product =new Pruduct();
                        $Product->refProduct=$request->input('refProduct');
                        $Product->name=$request->input('name');
                        $Product->designation=$request->input('designation');
                        $Product->stock=$request->input('stock');
                        $Product->unitPrice=$request->input('unitPrice');
                        $Product->storageUnit=$request->input('storageUnit');

                      
                        $Product->save();   
                    return redirect()->route('product');
           break;

            case 'List Product':
                      return redirect()->route('product');
            break;


        }
        //return $request->all();
    }


    public function edit ($refProduct)
    {
        $Product = Pruduct::find($refProduct);
        return view('pages.product.edit',['product'=>$Product]);

    }
    public function update(Request $request, $refProduct)
    {
        $Product = Pruduct::find($refProduct);
        $Product->refProduct=$request->input('refProduct');
        $Product->name=$request->input('name');
        $Product->designation=$request->input('designation');
        $Product->stock=$request->input('stock');
        $Product->unitPrice=$request->input('unitPrice');
        
        $Product->storageUnit=$request->input('storageUnit');
    $Product->save();   
    return redirect()->route('product');  
   
    }
    public function destory(Request $request, $refProduct)
    {
     $Product = Pruduct::find($refProduct);
     $Product->delete();
      return redirect()->route('product');
    }
    public function exportexcel()
    {
        return Excel::download(new ProductExport,'Product.xlsx');
    }
}
