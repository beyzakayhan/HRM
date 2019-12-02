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
                  <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                  <div class="form-group row">
                      <label class="col-md-3 col-form-label">T.C Kimlik No</label>
                      <div class="col-md-9">
                      <input type="text" id="tc" name="tc" class="form-control" placeholder="T.C Kimlik No">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">Ad</label>
                      <div class="col-md-9">
                      <input type="text" id="ad" name="ad" class="form-control" placeholder="Ad">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label" for="soyad">Soyad</label>
                      <div class="col-md-9">
                        <input type="text" id="soyad" name="soyad" class="form-control" placeholder="Soyad">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label" for="email-input">Branş ve Görevi</label>
                      <div class="col-md-9">
                        <input type="email" id="email-input" name="email-input" class="form-control" placeholder="Email">
                      </div>
                    </div>
                
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label" for="date">İzin Başlama Tarihi</label>
                      <div class="col-md-9">
                        <input type="date" id="date" name="date"  class="form-control" placeholder="İşe Giriş Tarihi"></input>
                      </div>
                    </div>
            
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label" for="date">İzin Sonrası İşbaşı Tarihi</label>
                      <div class="col-md-9">
                        <input  type="date" id="date" name="date2"  class="form-control" placeholder="İşten Ayrılma Tarihi"></input>
                      </div>
                    </div>

                    
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label" for="date">İzinli Olacağı Gün Sayısı</label>
                      <div class="col-md-9">
                        <input  type="text id="date" name="date2"  class="form-control" placeholder="İzinli Olacağı Gün Sayısı"></input>
                      </div>
                    </div>

                    
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label" for="textarea-input">İzin Nedeni</label>
                      <div class="col-md-9">
                        <textarea id="cause" name="cause" rows="9" class="form-control" placeholder="Açıklama.."></textarea>
                      </div>
                    </div>
              </div>
            </div>
          
            <div class="card">
            <div class="card-header">
                <div class="card-body left">
                  <a href= "{{route('overtime-info-add')}}"><button type="button" class="btn btn-primary pull-right"><i class="fa fa-angle-double-right"></i>&nbsp;İleri</button></a>
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