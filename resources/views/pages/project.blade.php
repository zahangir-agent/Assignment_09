@extends('welcome')

@section('contain')
<div class="container-fluid text-center"><h1>Projects</h1></div>
<hr>
<div class="container">
    <div class="row">
        <div class="col-4 text-center">
            <img src="{{ asset('assets/images/eam2.png') }}" alt="Girl in a jacket" width="200" height="200">
            <h4>Inventory Management </h4>
        </div>
        <div class="col-8 ">
            <p> <strong>Inventory Management </strong>effectively covers the following areas</p>
           
            <div class="modules text-left"> 
                <h5>Modules :</h5>
               <h6>*Stock Manage</h6>
               <h6>* Work Reqest</h6>
               <h6>* Maintenance Activities</h6>
               <h6>* Issuing and Return</h6>
               <h6>* Transfer Movement</h6>
               <h6>* Disposal/ </h6>
               <h6>* Depriciation Calculation</h6>
            </div>
        </div>
        <hr>    
        <div class="col-4 text-center">
            
            
        </div>
        <div class="col-8 ">
            <p> <strong>Procurement </strong> </p>
           
            <div class="modules text-left"> 
                <h5>Modules :</h5>
               <h6>* Purchase </h6>
               <h6>* Negotiation</h6>
               <h6>* Reports</h6>
                        </div>
        </div>
<hr>
        <div class="col-4 text-center">
           
            
        </div>
        <div class="col-8 ">
            <p> <strong>Planning </strong> effectively covers the following areas</p>
           
            <div class="modules text-left"> 
                <h5>Modules :</h5>
               <h6>* Production Planning</h6>
              
            </div>
        </div>
    </div>
</div>
    
@endsection