@extends('admin.master')
@section('content')
<div class="min-height-200px">
   <div class="page-header">
      <div class="row">
         <div class="col-md-6 col-sm-12">
            <div class="title">
               <h4>Basic Tables</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">{{__('Languages')}}</li>
               </ol>
            </nav>
         </div>

      </div>
   </div>
   <div class="pd-20 card-box mb-30">
      <div class="clearfix mb-20">
         <div class="pull-left">
            <h4 class="text-blue h4">{{__('Languages')}}</h4>
         </div>
      </div>



   </div>
</div>
@endsection
