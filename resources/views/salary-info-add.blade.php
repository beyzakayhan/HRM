@extends('layouts.master')
@section('title','Mesai Bilgisi Ekle')

@section('style')

  <link href="/asset/vendors/css/select2.min.css" rel="stylesheet">
@endsection

@section('content')

<div class="card">
                <div class="card-header">
                  <strong>Personel Maaş Bilgisi Ekle</strong>
                
                </div>
                <div class="card-body">
                  <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
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
                      <label class="col-md-3 col-form-label" for="salary">Sabit Maaş</label>
                      <div class="col-md-9">
                        <input type="text" id="salary" name="salary" class="form-control" placeholder="Maaş">
                      </div>
                    </div>
            <div class="card">
            <div class="card-header">
                <div class="card-body left">
                  <a href= ""><button type="button" class="btn btn-primary pull-right"><i class="fa fa-angle-double-right"></i>&nbsp;Kaydet</button></a>
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