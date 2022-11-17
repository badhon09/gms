@extends('admin.master')
@section('content')
<div class="min-height-200px">
   <div class="page-header">
      <div class="row">
         <div class="col-md-6 col-sm-12">
            <div class="title">
               <h4>{{__('Edit Languages')}}</h4>
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
    <div class="clearfix">
        <div class="pull-left">
            <h4 class="text-blue h4">Default Basic Forms</h4>
        </div>
    </div>
    <form>
        <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">{{ __('Name')}}</label>
            <div class="col-sm-12 col-md-10">
                <input class="form-control" type="text" name="name" placeholder="{{ __('Name')}}">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">{{ __('Direction')}}</label>
            <div class="col-sm-12 col-md-10">
                <select name="direction" class="form-control">
                    <option value="ltr">{{ __('LTR')}}</option>
                    <option value="rtl">{{ __('RTL')}}</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">{{ __('Status')}}</label>
            <div class="col-sm-12 col-md-10">
                <select name="status" class="form-control" id="">
                    <option value="active">{{ __('Active')}}</option>
                    <option value="disable">{{ __('Disable')}}</option>
                </select>
            </div>
        </div>
        <div class="form-group row float-right">
            <a href="" class="btn btn-primary">{{ __('Edit')}}</a>
        </div>
    </form>
   </div>

</div>
@endsection
