
@extends('layouts.app-master')


@push('client')
<link rel="stylesheet" href="{{asset('assets/css/order/invo.css')}}">
<link src="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
@endpush

@include('scripts.client')
@section('content')
   
<div class="page-content container">
    <div class="page-header text-blue-d2">
        <h1 class="page-title text-secondary-d1">
            Invoice
            <small class="page-info">
                <i class="fa fa-angle-double-right text-80"></i>
                 No: {{$Order->ref_Order}}
            </small>
        </h1>

        <div class="page-tools">
            <div class="action-buttons">
                <a class="btn bg-primary btn-light mx-1px text-95  text-white" href="#" data-title="Print">
                    Print
                </a>
                <a class="btn bg-danger btn-light mx-1px text-95 text-white" href="{{url('Invoice/'.$Order->ref_Order.'/downloadPDF')}}" data-title="PDF">
                 PDF
                </a>
            </div>
        </div>
    </div>

    <div class="container px-0">
        <div class="row mt-4">
            <div class="col-12 col-lg-12">
                
                <!-- .row -->

                <hr class="row brc-default-l1 mx-n1 mb-4" />

                <div class="row">
                    <div class="col-sm-6">
                        <div>
                            <span class="text-sm text-grey-m2 align-middle">To:</span>
                            <span class="text-600 text-110 text-blue align-middle">{{$Order->client->name}}</span>
                        </div>
                        <div class="text-grey-m2">
                            <div class="my-1">
                                adresse:
                            {{$Order->client->adresse}}
                            </div>
                            
                            <div class="my-1"><i class="fa fa-phone fa-flip-horizontal text-secondary"></i> <b class="text-600">{{$Order->client->phone}} </b></div>
                        </div>
                    </div>
                    <!-- /.col -->

                    <div class="text-95 col-sm-6 align-self-start d-sm-flex justify-content-end">
                        <hr class="d-sm-none" />
                        <div class="text-grey-m2">
                            <div class="mt-1 mb-2 text-secondary-m1 text-600 text-125">
                                Invoice
                            </div>

                            <div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i> <span class="text-600 text-90">No:</span>  {{$Order->ref_Order}}</div>

                            <div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i> <span class="text-600 text-90">Date:</span> {{$Order->dateOrder}}</div>

                             </div>
                    </div>
                    <!-- /.col -->
                </div>

                <div class="mt-4">
                    <div class="row text-600 text-white bgc-default-tp1 py-25">
                        <div class="d-none d-sm-block col-1">#</div>
                        <div class="col-9 col-sm-5">Description</div>
                        <div class="d-none d-sm-block col-4 col-sm-2">Qty</div>
                        <div class="d-none d-sm-block col-sm-2">Unit Price</div>
                        <div class="col-2">Amount</div>
                    </div>

                    @php $total= "0" @endphp
                    <div class="text-95 text-secondary-d3">
                        <div class="row mb-2 mb-sm-0 py-25">
                            <div class="d-none d-sm-block col-1">1</div>
                            @foreach($Order->pruducts as $pruduct )
                            <div class="col-9 col-sm-5">{{$pruduct->name}}</div>
                            @endforeach
                            <div class="d-none d-sm-block col-2">{{$Order->quantity}}</div>
                            <div class="d-none d-sm-block col-2 text-95">{{number_format($Order->price,2)}} $</div>
                            <div class="col-2 text-secondary-d2">{{$Order->price * $Order->quantity}} $ </div>
                        </div>
                        @php $total= $total+($Order->price * $Order->quantity) @endphp

          
                    </div>

                    <div class="row border-b-2 brc-default-l2"></div>

                    <div class="row mt-3">
                        <div class="col-12 col-sm-7 text-grey-d2 text-95 mt-2 mt-lg-0">
                            </div>

                        <div class="col-12 col-sm-5 text-grey text-90 order-first order-sm-last">
                            <div class="row my-2">
                                <div class="col-7 text-right">
                                    SubTotal
                                </div>
                                <div class="col-5">
                                    <span class="text-120 text-secondary-d1">{{number_format($total,0)}} $</span>
                                </div>
                            </div>

                            <div class="row my-2">
                                <div class="col-7 text-right">
                                    Tax (%)
                                </div>
                                <div class="col-5">
                                    <span class="text-110 text-secondary-d1">
                                     @if(isset($Order->VAT))
                                            @php  
                                            $tax=$Order->VAT;
                                            $tax_total= ($total*$tax)/100;
                                            @endphp
                                            {{number_format($tax_total)}} $
                                            @else
                                            0
                                     @endif
                                    </span>
                                </div>
                            </div>

                            <div class="row my-2 align-items-center bgc-primary-l3 p-2">
                                <div class="col-7 text-right">
                                    Total Amount
                                </div>
                                <div class="col-5">
                                    <span class="text-150 text-success-d3 opacity-2">
                                     @if(isset($Order->VAT))
                                        @php  
                                        $grand_total=$tax_total+$total
                                        @endphp
                                        {{number_format($grand_total,0)}} $
                                        @else
                                        {{number_format($total,0)}} $
                                     @endif
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                 <hr />

                </div>
            </div>
        </div>
    </div>
</div>     

@endsection