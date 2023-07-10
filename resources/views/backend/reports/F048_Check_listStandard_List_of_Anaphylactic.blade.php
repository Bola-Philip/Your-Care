@extends('main')
@section('main_title')
Monthly Checklist
@endsection
@section('title2')
<h4 class="mt-5">Standard Physical Therapy visit note</h4>
@endsection
@section('title1')
<h4 class=" w-50 text-center">Medication Kit</h4>
@endsection
@section('style')
<style>
 .kbw-signature { width: 50%; height: 100px;}

    #signaturePad canvas{
width: 100% !important;
height: auto;
}
    </style>
@endsection
@section('content')
<div class="row">
    <div class="col-12 border mb-3">
            <form action="" class="p-3" id="myform">
                @foreach($drugs as $drug)
               <div class="row">
                <div class="form-group  col-12 d-inline-flex">
                    <label class="form-label mr-3">Drug Name:</label>
                    <input type="text" name="Drug Name" value="{{$drug->name}}" class="form-control w-50">
                </div>
                    <div class="form-group  col-6 d-inline-flex">
                        <label class="form-label mr-3">Exp Date:</label>
                        <input type="date" name="Exp Date" class="form-control">
                    </div>

                    <div class="form-group  col-6  d-inline-flex">
                        <label class="form-label mr-3">Lot no:</label>
                        <input type="string" name="Lot no" class="form-control">
                    </div>

                    <div class="form-group  col-6 d-inline-flex">
                        <label class="form-label mr-3">Approved Qty:</label>
                        <input type="number" name="Qty" class="form-control ">
                    </div>
                </div> 

                <div class="row mb-3">
                   <div class="col-6">
                    <div class="form-check form-check-inline">
                        <label class="form-check-label mr-3" for="inlineCheckbox1">LASA</label>
                        <input class="form-check-input" type="checkbox" name="lasa" id="inlineCheckbox1" value="lasa">
                      </div>
                      <div class="form-check form-check-inline">
                        <label class="form-check-label mr-3" for="inlineCheckbox2">High Alert</label>
                        <input class="form-check-input" type="checkbox" name="High Alert" id="inlineCheckbox2" value="alert">
                      </div>
                      <div class="form-check form-check-inline">
                        <label class="form-check-label mr-3" for="inlineCheckbox3">Hazard</label>
                        <input class="form-check-input" type="checkbox" name="hazard" id="inlineCheckbox3" value="hazard">
                      </div>                      
                   </div>
                </div>

                <div class="row">
                    <div class="form-group  col-12 d-inline-flex">
                        <label class="form-label mr-3">Month</label>
                        <input type="month" name="month" value="{{ \Carbon\Carbon::now()->format('F Y') }}" class="form-control w-50">
                    </div>
                </div>    
               <hr>
                @endforeach

                <div class="row">
                    <div class="form-group  col-12 d-inline-flex">
                        <label class="form-label mr-3">Drug Name:</label>
                        <input type="text" name="Drug Name" value="" class="form-control w-50">
                    </div>
                        <div class="form-group  col-6 d-inline-flex">
                            <label class="form-label mr-3">Exp Date:</label>
                            <input type="date" name="Exp Date" class="form-control">
                        </div>
    
                        <div class="form-group  col-6  d-inline-flex">
                            <label class="form-label mr-3">Lot no:</label>
                            <input type="string" name="Lot no" class="form-control">
                        </div>
    
                        <div class="form-group  col-6 d-inline-flex">
                            <label class="form-label mr-3">Approved Qty:</label>
                            <input type="number" name="Qty" class="form-control ">
                        </div>
                    </div> 
    
                    <div class="row mb-3">
                       <div class="col-6">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label mr-3" for="inlineCheckbox1">LASA</label>
                            <input class="form-check-input" type="checkbox" name="lasa" id="inlineCheckbox1" value="lasa">
                          </div>
                          <div class="form-check form-check-inline">
                            <label class="form-check-label mr-3" for="inlineCheckbox2">High Alert</label>
                            <input class="form-check-input" type="checkbox" name="High Alert" id="inlineCheckbox2" value="alert">
                          </div>
                          <div class="form-check form-check-inline">
                            <label class="form-check-label mr-3" for="inlineCheckbox3">Hazard</label>
                            <input class="form-check-input" type="checkbox" name="hazard" id="inlineCheckbox3" value="hazard">
                          </div>                      
                       </div>
                    </div>
    
                    <div class="row">
                        <div class="form-group  col-12 d-inline-flex">
                            <label class="form-label mr-3">Month</label>
                            <input type="month" name="month" value="{{ Carbon\Carbon::now()->format('F Y') }}" class="form-control w-50">
                        </div>
                    </div>    
                   <hr>
                   <div class="row">
                    <div class="form-group  col-12 d-inline-flex">
                        <label class="form-label mr-3">Drug Name:</label>
                        <input type="text" name="Drug Name" value="" class="form-control w-50">
                    </div>
                        <div class="form-group  col-6 d-inline-flex">
                            <label class="form-label mr-3">Exp Date:</label>
                            <input type="date" name="Exp Date" class="form-control">
                        </div>
    
                        <div class="form-group  col-6  d-inline-flex">
                            <label class="form-label mr-3">Lot no:</label>
                            <input type="string" name="Lot no" class="form-control">
                        </div>
    
                        <div class="form-group  col-6 d-inline-flex">
                            <label class="form-label mr-3">Approved Qty:</label>
                            <input type="number" name="Qty" class="form-control ">
                        </div>
                    </div> 
    
                    <div class="row mb-3">
                       <div class="col-6">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label mr-3" for="inlineCheckbox1">LASA</label>
                            <input class="form-check-input" type="checkbox" name="lasa" id="inlineCheckbox1" value="lasa">
                          </div>
                          <div class="form-check form-check-inline">
                            <label class="form-check-label mr-3" for="inlineCheckbox2">High Alert</label>
                            <input class="form-check-input" type="checkbox" name="High Alert" id="inlineCheckbox2" value="alert">
                          </div>
                          <div class="form-check form-check-inline">
                            <label class="form-check-label mr-3" for="inlineCheckbox3">Hazard</label>
                            <input class="form-check-input" type="checkbox" name="hazard" id="inlineCheckbox3" value="hazard">
                          </div>                      
                       </div>
                    </div>
    
                    <div class="row">
                        <div class="form-group  col-12 d-inline-flex">
                            <label class="form-label mr-3">Month</label>
                            <input type="month" name="month" value="{{ Carbon\Carbon::now()->format('F Y') }}" class="form-control w-50">
                        </div>
                    </div>    
                   <hr>
                   <div class="row">
                    <div class="form-group  col-12 d-inline-flex">
                        <label class="form-label mr-3">Drug Name:</label>
                        <input type="text" name="Drug Name" value="" class="form-control w-50">
                    </div>
                        <div class="form-group  col-6 d-inline-flex">
                            <label class="form-label mr-3">Exp Date:</label>
                            <input type="date" name="Exp Date" class="form-control">
                        </div>
    
                        <div class="form-group  col-6  d-inline-flex">
                            <label class="form-label mr-3">Lot no:</label>
                            <input type="string" name="Lot no" class="form-control">
                        </div>
    
                        <div class="form-group  col-6 d-inline-flex">
                            <label class="form-label mr-3">Approved Qty:</label>
                            <input type="number" name="Qty" class="form-control ">
                        </div>
                    </div> 
    
                    <div class="row mb-3">
                       <div class="col-6">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label mr-3" for="inlineCheckbox1">LASA</label>
                            <input class="form-check-input" type="checkbox" name="lasa" id="inlineCheckbox1" value="lasa">
                          </div>
                          <div class="form-check form-check-inline">
                            <label class="form-check-label mr-3" for="inlineCheckbox2">High Alert</label>
                            <input class="form-check-input" type="checkbox" name="High Alert" id="inlineCheckbox2" value="alert">
                          </div>
                          <div class="form-check form-check-inline">
                            <label class="form-check-label mr-3" for="inlineCheckbox3">Hazard</label>
                            <input class="form-check-input" type="checkbox" name="hazard" id="inlineCheckbox3" value="hazard">
                          </div>                      
                       </div>
                    </div>
    
                    <div class="row">
                        <div class="form-group  col-12 d-inline-flex">
                            <label class="form-label mr-3">Month</label>
                            <input type="month" name="month" value="{{ Carbon\Carbon::now()->format('F Y') }}" class="form-control w-50">
                        </div>
                    </div>    
                   <hr>
                   <div class="row">
                    <div class="form-group  col-12 d-inline-flex">
                        <label class="form-label mr-3">Drug Name:</label>
                        <input type="text" name="Drug Name" value="" class="form-control w-50">
                    </div>
                        <div class="form-group  col-6 d-inline-flex">
                            <label class="form-label mr-3">Exp Date:</label>
                            <input type="date" name="Exp Date" class="form-control">
                        </div>
    
                        <div class="form-group  col-6  d-inline-flex">
                            <label class="form-label mr-3">Lot no:</label>
                            <input type="string" name="Lot no" class="form-control">
                        </div>
    
                        <div class="form-group  col-6 d-inline-flex">
                            <label class="form-label mr-3">Approved Qty:</label>
                            <input type="number" name="Qty" class="form-control ">
                        </div>
                    </div> 
    
                    <div class="row mb-3">
                       <div class="col-6">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label mr-3" for="inlineCheckbox1">LASA</label>
                            <input class="form-check-input" type="checkbox" name="lasa" id="inlineCheckbox1" value="lasa">
                          </div>
                          <div class="form-check form-check-inline">
                            <label class="form-check-label mr-3" for="inlineCheckbox2">High Alert</label>
                            <input class="form-check-input" type="checkbox" name="High Alert" id="inlineCheckbox2" value="alert">
                          </div>
                          <div class="form-check form-check-inline">
                            <label class="form-check-label mr-3" for="inlineCheckbox3">Hazard</label>
                            <input class="form-check-input" type="checkbox" name="hazard" id="inlineCheckbox3" value="hazard">
                          </div>                      
                       </div>
                    </div>
    
                    <div class="row">
                        <div class="form-group  col-12 d-inline-flex">
                            <label class="form-label mr-3">Month</label>
                            <input type="month" name="month" value="{{ Carbon\Carbon::now()->format('F Y') }}" class="form-control w-50">
                        </div>
                    </div>    
                   <hr>
                   <div class="row">
                    <div class="form-group  col-12 d-inline-flex">
                        <label class="form-label mr-3">Drug Name:</label>
                        <input type="text" name="Drug Name" value="" class="form-control w-50">
                    </div>
                        <div class="form-group  col-6 d-inline-flex">
                            <label class="form-label mr-3">Exp Date:</label>
                            <input type="date" name="Exp Date" class="form-control">
                        </div>
    
                        <div class="form-group  col-6  d-inline-flex">
                            <label class="form-label mr-3">Lot no:</label>
                            <input type="string" name="Lot no" class="form-control">
                        </div>
    
                        <div class="form-group  col-6 d-inline-flex">
                            <label class="form-label mr-3">Approved Qty:</label>
                            <input type="number" name="Qty" class="form-control ">
                        </div>
                    </div> 
    
                    <div class="row mb-3">
                       <div class="col-6">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label mr-3" for="inlineCheckbox1">LASA</label>
                            <input class="form-check-input" type="checkbox" name="lasa" id="inlineCheckbox1" value="lasa">
                          </div>
                          <div class="form-check form-check-inline">
                            <label class="form-check-label mr-3" for="inlineCheckbox2">High Alert</label>
                            <input class="form-check-input" type="checkbox" name="High Alert" id="inlineCheckbox2" value="alert">
                          </div>
                          <div class="form-check form-check-inline">
                            <label class="form-check-label mr-3" for="inlineCheckbox3">Hazard</label>
                            <input class="form-check-input" type="checkbox" name="hazard" id="inlineCheckbox3" value="hazard">
                          </div>                      
                       </div>
                    </div>
    
                    <div class="row">
                        <div class="form-group  col-12 d-inline-flex">
                            <label class="form-label mr-3">Month</label>
                            <input type="month" name="month" value="{{ Carbon\Carbon::now()->format('F Y') }}" class="form-control w-50">
                        </div>
                    </div>    
                   <hr>
                   <div class="row">
                    <div class="form-group  col-12 d-inline-flex">
                        <label class="form-label mr-3">Drug Name:</label>
                        <input type="text" name="Drug Name" value="" class="form-control w-50">
                    </div>
                        <div class="form-group  col-6 d-inline-flex">
                            <label class="form-label mr-3">Exp Date:</label>
                            <input type="date" name="Exp Date" class="form-control">
                        </div>
    
                        <div class="form-group  col-6  d-inline-flex">
                            <label class="form-label mr-3">Lot no:</label>
                            <input type="string" name="Lot no" class="form-control">
                        </div>
    
                        <div class="form-group  col-6 d-inline-flex">
                            <label class="form-label mr-3">Approved Qty:</label>
                            <input type="number" name="Qty" class="form-control ">
                        </div>
                    </div> 
    
                    <div class="row mb-3">
                       <div class="col-6">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label mr-3" for="inlineCheckbox1">LASA</label>
                            <input class="form-check-input" type="checkbox" name="lasa" id="inlineCheckbox1" value="lasa">
                          </div>
                          <div class="form-check form-check-inline">
                            <label class="form-check-label mr-3" for="inlineCheckbox2">High Alert</label>
                            <input class="form-check-input" type="checkbox" name="High Alert" id="inlineCheckbox2" value="alert">
                          </div>
                          <div class="form-check form-check-inline">
                            <label class="form-check-label mr-3" for="inlineCheckbox3">Hazard</label>
                            <input class="form-check-input" type="checkbox" name="hazard" id="inlineCheckbox3" value="hazard">
                          </div>                      
                       </div>
                    </div>
    
                    <div class="row">
                        <div class="form-group  col-12 d-inline-flex">
                            <label class="form-label mr-3">Month</label>
                            <input type="month" name="month" value="{{ Carbon\Carbon::now()->format('F Y') }}" class="form-control w-50">
                        </div>
                    </div>    
                   <hr>
                   <div class="row">
                    <div class="form-group  col-12 d-inline-flex">
                        <label class="form-label mr-3">Drug Name:</label>
                        <input type="text" name="Drug Name" value="" class="form-control w-50">
                    </div>
                        <div class="form-group  col-6 d-inline-flex">
                            <label class="form-label mr-3">Exp Date:</label>
                            <input type="date" name="Exp Date" class="form-control">
                        </div>
    
                        <div class="form-group  col-6  d-inline-flex">
                            <label class="form-label mr-3">Lot no:</label>
                            <input type="string" name="Lot no" class="form-control">
                        </div>
    
                        <div class="form-group  col-6 d-inline-flex">
                            <label class="form-label mr-3">Approved Qty:</label>
                            <input type="number" name="Qty" class="form-control ">
                        </div>
                    </div> 
    
                    <div class="row mb-3">
                       <div class="col-6">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label mr-3" for="inlineCheckbox1">LASA</label>
                            <input class="form-check-input" type="checkbox" name="lasa" id="inlineCheckbox1" value="lasa">
                          </div>
                          <div class="form-check form-check-inline">
                            <label class="form-check-label mr-3" for="inlineCheckbox2">High Alert</label>
                            <input class="form-check-input" type="checkbox" name="High Alert" id="inlineCheckbox2" value="alert">
                          </div>
                          <div class="form-check form-check-inline">
                            <label class="form-check-label mr-3" for="inlineCheckbox3">Hazard</label>
                            <input class="form-check-input" type="checkbox" name="hazard" id="inlineCheckbox3" value="hazard">
                          </div>                      
                       </div>
                    </div>
    
                    <div class="row">
                        <div class="form-group  col-12 d-inline-flex">
                            <label class="form-label mr-3">Month</label>
                            <input type="month" name="month" value="{{ Carbon\Carbon::now()->format('F Y') }}" class="form-control w-50">
                        </div>
                    </div>    
                   <hr>
                   <div class="row">
                    <div class="form-group  col-12 d-inline-flex">
                        <label class="form-label mr-3">Drug Name:</label>
                        <input type="text" name="Drug Name" value="" class="form-control w-50">
                    </div>
                        <div class="form-group  col-6 d-inline-flex">
                            <label class="form-label mr-3">Exp Date:</label>
                            <input type="date" name="Exp Date" class="form-control">
                        </div>
    
                        <div class="form-group  col-6  d-inline-flex">
                            <label class="form-label mr-3">Lot no:</label>
                            <input type="string" name="Lot no" class="form-control">
                        </div>
    
                        <div class="form-group  col-6 d-inline-flex">
                            <label class="form-label mr-3">Approved Qty:</label>
                            <input type="number" name="Qty" class="form-control ">
                        </div>
                    </div> 
    
                    <div class="row mb-3">
                       <div class="col-6">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label mr-3" for="inlineCheckbox1">LASA</label>
                            <input class="form-check-input" type="checkbox" name="lasa" id="inlineCheckbox1" value="lasa">
                          </div>
                          <div class="form-check form-check-inline">
                            <label class="form-check-label mr-3" for="inlineCheckbox2">High Alert</label>
                            <input class="form-check-input" type="checkbox" name="High Alert" id="inlineCheckbox2" value="alert">
                          </div>
                          <div class="form-check form-check-inline">
                            <label class="form-check-label mr-3" for="inlineCheckbox3">Hazard</label>
                            <input class="form-check-input" type="checkbox" name="hazard" id="inlineCheckbox3" value="hazard">
                          </div>                      
                       </div>
                    </div>
    
                    <div class="row">
                        <div class="form-group  col-12 d-inline-flex">
                            <label class="form-label mr-3">Month</label>
                            <input type="month" name="month" value="{{ Carbon\Carbon::now()->format('F Y') }}" class="form-control w-50">
                        </div>
                    </div>    
                   <hr>
                   <div class="row">
                    <div class="form-group  col-12 d-inline-flex">
                        <label class="form-label mr-3">Drug Name:</label>
                        <input type="text" name="Drug Name" value="" class="form-control w-50">
                    </div>
                        <div class="form-group  col-6 d-inline-flex">
                            <label class="form-label mr-3">Exp Date:</label>
                            <input type="date" name="Exp Date" class="form-control">
                        </div>
    
                        <div class="form-group  col-6  d-inline-flex">
                            <label class="form-label mr-3">Lot no:</label>
                            <input type="string" name="Lot no" class="form-control">
                        </div>
    
                        <div class="form-group  col-6 d-inline-flex">
                            <label class="form-label mr-3">Approved Qty:</label>
                            <input type="number" name="Qty" class="form-control ">
                        </div>
                    </div> 
    
                    <div class="row mb-3">
                       <div class="col-6">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label mr-3" for="inlineCheckbox1">LASA</label>
                            <input class="form-check-input" type="checkbox" name="lasa" id="inlineCheckbox1" value="lasa">
                          </div>
                          <div class="form-check form-check-inline">
                            <label class="form-check-label mr-3" for="inlineCheckbox2">High Alert</label>
                            <input class="form-check-input" type="checkbox" name="High Alert" id="inlineCheckbox2" value="alert">
                          </div>
                          <div class="form-check form-check-inline">
                            <label class="form-check-label mr-3" for="inlineCheckbox3">Hazard</label>
                            <input class="form-check-input" type="checkbox" name="hazard" id="inlineCheckbox3" value="hazard">
                          </div>                      
                       </div>
                    </div>
    
                    <div class="row">
                        <div class="form-group  col-12 d-inline-flex">
                            <label class="form-label mr-3">Month</label>
                            <input type="month" name="month" value="{{ Carbon\Carbon::now()->format('F Y') }}" class="form-control w-50">
                        </div>
                    </div>    
                   <hr>
                   <div class="row">
                    <div class="form-group  col-12 d-inline-flex">
                        <label class="form-label mr-3">Drug Name:</label>
                        <input type="text" name="Drug Name" value="" class="form-control w-50">
                    </div>
                        <div class="form-group  col-6 d-inline-flex">
                            <label class="form-label mr-3">Exp Date:</label>
                            <input type="date" name="Exp Date" class="form-control">
                        </div>
    
                        <div class="form-group  col-6  d-inline-flex">
                            <label class="form-label mr-3">Lot no:</label>
                            <input type="string" name="Lot no" class="form-control">
                        </div>
    
                        <div class="form-group  col-6 d-inline-flex">
                            <label class="form-label mr-3">Approved Qty:</label>
                            <input type="number" name="Qty" class="form-control ">
                        </div>
                    </div> 
    
                    <div class="row mb-3">
                       <div class="col-6">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label mr-3" for="inlineCheckbox1">LASA</label>
                            <input class="form-check-input" type="checkbox" name="lasa" id="inlineCheckbox1" value="lasa">
                          </div>
                          <div class="form-check form-check-inline">
                            <label class="form-check-label mr-3" for="inlineCheckbox2">High Alert</label>
                            <input class="form-check-input" type="checkbox" name="High Alert" id="inlineCheckbox2" value="alert">
                          </div>
                          <div class="form-check form-check-inline">
                            <label class="form-check-label mr-3" for="inlineCheckbox3">Hazard</label>
                            <input class="form-check-input" type="checkbox" name="hazard" id="inlineCheckbox3" value="hazard">
                          </div>                      
                       </div>
                    </div>
    
                    <div class="row">
                        <div class="form-group  col-12 d-inline-flex">
                            <label class="form-label mr-3">Month</label>
                            <input type="month" name="month" value="{{ Carbon\Carbon::now()->format('F Y') }}" class="form-control w-50">
                        </div>
                    </div>    
                   <hr>
                                    
                   <div class="row">
                    <div class="form-group  col-12 d-inline-flex">
                        <label class="form-label mr-3">Drug Name:</label>
                        <input type="text" name="Drug Name" value="" class="form-control w-50">
                    </div>
                        <div class="form-group  col-6 d-inline-flex">
                            <label class="form-label mr-3">Exp Date:</label>
                            <input type="date" name="Exp Date" class="form-control">
                        </div>
    
                        <div class="form-group  col-6  d-inline-flex">
                            <label class="form-label mr-3">Lot no:</label>
                            <input type="string" name="Lot no" class="form-control">
                        </div>
    
                        <div class="form-group  col-6 d-inline-flex">
                            <label class="form-label mr-3">Approved Qty:</label>
                            <input type="number" name="Qty" class="form-control ">
                        </div>
                    </div> 
    
                    <div class="row mb-3">
                       <div class="col-6">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label mr-3" for="inlineCheckbox1">LASA</label>
                            <input class="form-check-input" type="checkbox" name="lasa" id="inlineCheckbox1" value="lasa">
                          </div>
                          <div class="form-check form-check-inline">
                            <label class="form-check-label mr-3" for="inlineCheckbox2">High Alert</label>
                            <input class="form-check-input" type="checkbox" name="High Alert" id="inlineCheckbox2" value="alert">
                          </div>
                          <div class="form-check form-check-inline">
                            <label class="form-check-label mr-3" for="inlineCheckbox3">Hazard</label>
                            <input class="form-check-input" type="checkbox" name="hazard" id="inlineCheckbox3" value="hazard">
                          </div>                      
                       </div>
                    </div>
    
                    <div class="row">
                        <div class="form-group  col-12 d-inline-flex">
                            <label class="form-label mr-3">Month</label>
                            <input type="month" name="month" value="{{ Carbon\Carbon::now()->format('F Y') }}" class="form-control w-50">
                        </div>
                    </div> 
                    <hr>   
                <div class="row">
                    <div class="form-group  col-12 d-flex flex-column" id="signature-container">
                        <label class="form-label">SIGNATURE AND BADGE</label>
                        <div id="signaturePad" ></div>
                       <div id="image-container" style="display: none;"></div>
                  <button id="clear" class="btn btn-danger btn-sm w-25 mt-3">Clear Signature</button>
                 <textarea id="signature64" name="signed" style="display: none"></textarea>

                    </div>
                </div>

                <div class="row d-flex justify-content-end mt-3">
                <button type="submit" id="printPageButton" class="btn btn-primary">Submit</button>
                </div>
            </form>
    </div>
</div>
@endsection
@push('scripts')
<script type="text/javascript">
  $(document).ready(function() {
     var signaturePad = $('#signaturePad').signature({syncField: '#signature64', syncFormat: 'PNG'});
     $('#clear').click(function(e) {
     e.preventDefault();
     signaturePad.signature('clear');
     $("#signature64").val('');
     });
    $(document).on('submit','#myform',function(e){
     e.preventDefault()
     const element = $("#content").clone()
    element.find('#image-container').css('display','flex')
    element.find('#printPageButton').remove()
    element.find('#clear').remove()
    element.find('#signaturePad').remove()
    var canvas = $('#signaturePad')[0];
    html2canvas(canvas).then(function (blob) {
    var imageData = blob.toDataURL();
    $('<img/>', {src: imageData}).appendTo('#image-container');       
    })
          var month=$('input[name="month"]').val()
       const options = { 
       filename: `drug-checklist-${month}.pdf`, 
       margin: [0, 0], 
       html2canvas:  { scale:3 , useCORS: true}, 
      };
           html2pdf().set(options).from(element[0]).outputPdf('blob').then((blob) => {
           const formData = new FormData();
           formData.append('file', blob, `drug-checklist-${month}.pdf`);
     //    redirect to route report.store to save pdf file in public/storage/pdfs
         $.ajax({
             url:'{{route("report.store")}}',
             method:'post',
            headers: { 'X-CSRF-TOKEN': $('meta[name=csrf-token]').attr('content') },
            data:formData,
               processData:false,
             contentType:false,
              success:function(response){
                 console.log(response);
                 alert('report saved in pdf successfully')
              },error:function(){
                 alert('report failed to save')
              }
          });
       });
 
    })
});
     </script> 
 
@endpush