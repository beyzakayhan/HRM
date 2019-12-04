@extends('layouts.master')
@section('title','İzin Formu')

@section('style')

  <link href="/asset/vendors/css/select2.min.css" rel="stylesheet">
@endsection

@section('content')

<div class="card">
                <div class="card-header">
                  <strong>Yeni Personel</strong>
                
                </div>
                <div class="card-body">
                <form action="{{route('permission-save')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                  {{ csrf_field() }}
                  <div class="form-group row">
                      <label class="col-md-3 col-form-label" for="employee_id">Personel</label>
                      <div class="col-md-9">
                        <select id="employee_id" name="employee_id" class="form-control">
                          <option value="0">Seçiniz</option>
                          @foreach($employees as $employee)
                          <option value="{{$employee->id}}">{{$employee->name}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                   
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label" for="start_date">İzin Başlama Tarihi</label>
                      <div class="col-md-9">
                        <input type="date" id="start_date" name="start_date"  class="form-control" placeholder="İşe Giriş Tarihi">
                      </div>
                    </div>
            
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label" for="end_date">İzin Sonrası İşbaşı Tarihi</label>
                      <div class="col-md-9">
                        <input  type="date" id="end_date" name="end_date"  class="form-control" value="00.00.0000">
                      </div>
                    </div>

                    
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label" for="day">İzinli Olacağı Gün Sayısı</label>
                      <div class="col-md-9">
                        <input  type="text" id="day" name="day"  class="form-control" placeholder="İzinli Olacağı Gün Sayısı">
                      </div>
                    </div>

                    
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label" for='resaon'>İzin Nedeni</label>
                      <div class="col-md-9">
                        <textarea id='resaon' name='resaon' rows="9" class="form-control" placeholder="Açıklama.."></textarea>
                      </div>
                    </div>
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
            </form>
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