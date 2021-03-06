@extends('layouts.master')
@section('title','Mesai Bilgisi Ekle')

@section('style')

  <link href="/asset/vendors/css/select2.min.css" rel="stylesheet">
@endsection

@section('content')

<div class="card">
                <div class="card-header">
                  <strong>Personel Mesai Bilgisi Ekle</strong>
                
                </div>
              
                <div class="card-body">
                <form action="{{route('overtime-update',$workingShift->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                   {{ csrf_field() }}
                  <div class="form-group row">
                      <label class="col-md-3 col-form-label" for="department_id">Departman</label>
                      <div class="col-md-9">
                        <select id="department_id" name="department_id" class="form-control">
                          <option value="0">Seçiniz</option>
                          @foreach($employeeDepartment as $department)
                          @if (($department->name==$workingShift->department->name))
                          <option value="{{$department->id}} "selected>{{$department->name}}</option>
                          @else
                          <option value="{{$department->id}} ">{{$department->name}}</option>
                          @endif
                          @endforeach
                        </select>
                      </div>
                    </div>
                  <div class="form-group row">
                      <div class="col-md-3">
                          <label>Mesai Günleri</label>
                      </div>
                      <div class="col-md-9">
                          <select name="working_days[]" id="select2-2" class="form-control select2-multiple" multiple="">
                            @foreach($days as $day)
                          <option
                            @foreach ($working_days as $working_day)
                              @if($working_day == $day)
                                selected
                              @endif
                            @endforeach
                            >{{ $day }}</option>
                        @endforeach
                          </select>
                      </div>
                </div>
                 
                  <div class="form-group row">
                      <div class="col-md-3">
                          <label>Tatil Günleri</label>
                      </div>
                      <div class="col-md-9">
                          <select name="holiday_days[]" id="select2-3" class="form-control select2-multiple" multiple>
                            @foreach($days as $day)
                            <option
                              @foreach ($holiday_days as $holiday_day)
                                @if($holiday_day == $day)
                                  selected
                                @endif
                              @endforeach
                              >{{ $day }}</option>
                          @endforeach
                          </select>
                      </div>
                   </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">Giriş Saati</label>
                      <div class="col-md-9">
                      <input type="time" id="check_in" name="check_in" class="form-control" value="{{$workingShift->check_in}}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">Çıkış Saati</label>
                      <div class="col-md-9">
                      <input type="time" id="check_out" name="check_out" class="form-control" value="{{$workingShift->check_out}}">
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