<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Client;
use App\Models\Pruduct;
use App\Models\Detail;
use DB;
use PDF;
use App\Exports\OrderExport;
use Maatwebsite\Excel\Facades\Excel;

class OrderController extends Controller
{

 public function index()
    {
        $Order=Order::paginate(5);

        return view ('pages.order.index',compact('Order'));
    }

    //display form to create new client

 public function  create(Request $request)
    { 

        return view ('pages.order.create');


    }


  //store data into database
  public function store(Request $request)
   {    
        switch ($request->submitbutton)
      {
          case 'next':
         
            $orderRef_Order= DB::table('orders')->insertGetId(array(

                     'ref_Order'=>$request->input('Ref-Order'),
                      'dateOrder'=>$request->input('date'),
                     'paymentWay'=>$request->input('paymentway'),
                     'client_id' =>$request->client_id,
                     'quantity'=>$request->input('quantity'),
                     'price'=>$request->input('price'),
                      'reduction'=>$request->input('reduction'),
                      'VAT' =>$request->input('VAT'),
                     'amountHT'=>$request->input('amountHT'),
                    'amountTTC' =>$request->input('amountTTC')
                     
                  )
            );
                 DB::table('order_pruduct')->insert(array(

                    'order_ref_Order'=>$request->input('Ref-Order'),
                    'pruduct_refProduct'=>$request->refProduct

                 )    
            );

                      return redirect()->route('order');
         break;

          case 'cancel':
                    return redirect()->route('order');
          break;

         

      }
    }


 public function edit ($ref_Order)
    {
        $Order = Order::find($ref_Order);
        return view('pages.order.edit',['order'=>$Order]);

    }


 public function update(Request $request, $Ref_Order)
    {
        $order = Order::find($Ref_Order);
        $order->ref_Order=$request->input('Ref_Order');
        $order->dateOrder=$request->input('date');
        $order->paymentWay=$request->input('paymentway');
        $order->client_id =$request->input('client_id');
        $order->quantity=$request->input('quantity');
        $order->price=$request->input('price');
        $order->reduction=$request->input('reduction');
        $order->VAT =$request->input('VAT');
        $order->amountHT=$request->input('amountHT');
        $order->amountTTC =$request->input('amountTTC');
        $order->save();   
        return redirect()->route('order'); 
   
    }


 public function destory(Request $request, $Ref_Order)
    {
     $order = Order::find($Ref_Order);
     $order->delete();
     return redirect()->route('order');
    }


 public function exportexcel()
    {
        return Excel::download(new OrderExport,'orders.xlsx');
    }
     

 public function invoice($ref_Order)
    { 
        $Order = Order::findOrFail($ref_Order);

       return view('pages.order.invoice',compact('Order'));
       //$Order = Order::where('ref_Order', $ref_Order)->first();

    }
         
   
 public function downloadPDF($ref_Order)
    { 
        $Order = Order::findOrFail($ref_Order);

        $data = [
          'Order' => $Order
      ];
      $pdf = PDF::loadView('pages.order.downloadPDF', $data)->setOptions(['defaultFont' => 'sans-serif']);;

      return $pdf->download('invoice.pdf');
    }


 public function sellings()
    { 
        $Order = Order::paginate(5);
        return view('pages.order.sellings',compact('Order'));
      
    }


 public function details($ref_order)
    { 
        $Order = Order::find($ref_order);
        return view('pages.order.details',compact('Order'));
      
    }


 public function ListInvoice()
    { 
        $Order = Order::paginate(5);
        return view('pages.order.ListInvoice',compact('Order'));
      
    }
   
  
}
