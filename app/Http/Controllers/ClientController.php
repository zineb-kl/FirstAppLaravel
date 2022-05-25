<?php

namespace App\Http\Controllers;
use App\Exports\ClientExport;
use Illuminate\Http\Request;
use App\Models\Client;
use Maatwebsite\Excel\Facades\Excel;

class ClientController extends Controller
{

    //show data  
    public function  index()
    {
        $data=Client::paginate(5);
        return view ('pages.client.Client',compact('data'));
    }

   //show form to create new client
    public function  create()
    {
        return view ('pages.client.create');
    }
    
   //store data into database
    public function store(Request $request)
    {    
          switch ($request->submitbutton)
        {
            case 'Add Customer':
                  $Client =new Client();
                        $Client->name=$request->input('name');
                        $Client->phone=$request->input('phone');
                        $Client->email=$request->input('email');
                        $Client->adresse=$request->input('adresse');
                    $Client->save();   
                    return redirect()->route('Client');
           break;

            case 'List Customer':
                      return redirect()->route('Client');
            break;


        }
        //return $request->all();
        //dd($request->all());
        //Client::create($request->all());
    }



    public function edit ($id)
    {
        $Client = Client::find($id);
        return view('pages.client.edit',['Client'=>$Client]);

    }
    
    public function update(Request $request, $id)
    {
        $Client= Client::find($id);
        $Client->name=$request->input('name'); 
        $Client->phone=$request->input('phone');
        $Client->email=$request->input('email');
        $Client->adresse=$request->input('adresse');
    $Client->save();   
   
    return redirect()->route('Client');
    }

    public function destory(Request $request, $id)
    {
      $Client= Client::find($id);
      $Client->delete();
      return redirect()->route('Client');
    }
    public function exportexcel()
    {
        return Excel::download(new ClientExport,'Client.xlsx');
    }
}
