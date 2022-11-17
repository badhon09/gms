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
         {{-- <div class="pull-right">
            <a href="#basic-table" class="btn btn-primary btn-sm scroll-click" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-code"></i> Source Code</a>
         </div> --}}
      </div>
      <table class="table">
         <thead>
            <tr>
                <th>{{ __('Name')}}</th>
                <th>{{ __('Thumb')}}</th>
                <th>{{ __('Action')}}</th>
            </tr>
         </thead>
         <tbody>
            @forelse ($languages as $lang)
                <tr>
                    <td>{{$lang->name}}</td>
                    <td><img src="" alt="{{$lang->locale}}"></td>
                    <td><a href="{{route('admin.language.edit', $lang->id)}}" class="btn btn-primary"><i class="icon-copy fi-pencil"></i></a></td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">{{__('No Data Found!')}}</td>
                </tr>
            @endforelse
         </tbody>
      </table>
      <div class="collapse collapse-box" id="basic-table" >
         <div class="code-box">
            <div class="clearfix">
               <a href="javascript:;" class="btn btn-primary btn-sm code-copy pull-left"  data-clipboard-target="#basic-table-code"><i class="fa fa-clipboard"></i> Copy Code</a>
               <a href="#basic-table" class="btn btn-primary btn-sm pull-right" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-eye-slash"></i> Hide Code</a>
            </div>
            <pre><code class="xml copy-pre" id="basic-table-code">
<table class="table">
<thead>
<tr>
<th scope="col">#</th>
</tr>
</thead>
<tbody>
<tr>
<th scope="row">1</th>
</tr>
</tbody>
</table>
                </code></pre>
         </div>
      </div>
   </div>
</div>
@endsection
