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
                  <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">

                  <div class="form-group row">
                      <label class="col-md-3 col-form-label" for="select2">Departman</label>
                      <div class="col-md-9">
                        <select id="select2" name="select2" class="form-control">
                          <option value="0">Seçiniz</option>
                          <option value="1">Option #1</option>
                          <option value="2">Option #2</option>
                          <option value="3">Option #3</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label" for="select2">Görev</label>
                      <div class="col-md-9">
                        <select id="select3" name="select3" class="form-control">
                          <option value="0">Seçiniz</option>
                          <option value="1">Option #1</option>
                          <option value="2">Option #2</option>
                          <option value="3">Option #3</option>
                        </select>
                      </div>
                    </div>
                  <div class="form-group row">
                      <div class="col-md-3">
                          <label>Mesai Günleri</label>
                      </div>
                      <div class="col-md-9">
                          <select id="select2-2" class="form-control select2-multiple" multiple="">
                            <option>Pazartesi</option>
                            <option selected="">Salı</option>
                            <option>Çarşamba</option>
                            <option>Perşembe</option>
                            <option>Cuma</option>
                            <option>Cumartesi</option>
                            <option>Pazar</option>
                          </select>
                      </div>
                </div>
                 
                  <div class="form-group row">
                      <div class="col-md-3">
                          <label>Tatil Günleri</label>
                      </div>
                      <div class="col-md-9">
                          <select id="select2-3" class="form-control select2-multiple" multiple>
                          <option>Pazartesi</option>
                            <option selected="">Salı</option>
                            <option>Çarşamba</option>
                            <option>Perşembe</option>
                            <option>Cuma</option>
                            <option>Cumartesi</option>
                            <option>Pazar</option>
                          </select>
                      </div>
                   </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">Giriş Saati</label>
                      <div class="col-md-9">
                      <input type="time" id="time" name="time" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">Çıkış Saati</label>
                      <div class="col-md-9">
                      <input type="time" id="time2" name="time2" class="form-control">
                      </div>
                    </div>
            <div class="card">
            <div class="card-header">
                <div class="card-body left">
                  <a href= "{{route('salary-info-add')}}"><button type="button" class="btn btn-primary pull-right"><i class="fa fa-angle-double-right"></i>&nbsp;İleri</button></a>
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