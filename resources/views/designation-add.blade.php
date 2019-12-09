@extends('layouts.master')
@section('title','Görev Tanımı Ekle')

@section('style')

  <link href="/asset/vendors/css/select2.min.css" rel="stylesheet">
@endsection

@section('content')

<div class="card">
                <div class="card-header">
                  <strong>Branş ve Görevi Ekle</strong>
                
                </div>
                <div class="card-body">
                <form action="{{isset($designation->id) ? route('designation-update', $designation->id): route('designation-save')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                    {{ @csrf_field() }}
                    @include('Layouts.partials.errors')
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label" for="name">Branş ve Görevi</label>
                      <div class="col-md-9">
                      <input type="text" id="name" name="name" class="form-control" placeholder="Branş ve Görevi" value="{{old('name',$designation->name)}}">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-md-3 col-form-label" for="department_id">Departman</label>
                      <div class="col-md-9">
                        <select id="department_id" name="department_id" class="form-control">
                          <option value="0">Seçiniz</option>
                          
                          @foreach($employeeDepartments as $department)
                          @if (isset($designaiton->department) && $department->name==$designation->department->name))
                          <option value="{{$department->id}}" selected>{{ $department->name }}</option>
                           @else
                            <option value="{{ $department->id}}">{{ $department->name }}</option>
                           @endif
                          @endforeach
                          
                        </select>
                      </div>
                    </div>
                    <div class="box-footer pull-right">
                    <div class="form-group">
                        <div class="col-md-8 ">
                            <button type="submit" class="btn btn-primary ">
                                Kaydet
                            </button>
                        </div>
                    </div>
                  </div>
          
            
</div>
</div>

@endsection

@section('private-script')


  <!-- Plugins and scripts required by this views -->
  <script src="/asset/vendors/js/jquery.maskedinput.min.js"></script>

  <script src="/asset/vendors/js/select2.min.js"></script>
  

  <!-- Custom scripts required by this view -->
  <script src="/asset/js/views/advanced-forms.js"></script>

@endsection