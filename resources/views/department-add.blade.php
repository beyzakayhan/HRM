@extends('layouts.master')
@section('title','Departman Ekle')

@section('style')

  <link href="/asset/vendors/css/select2.min.css" rel="stylesheet">
@endsection

@section('content')

<div class="card">
                <div class="card-header">
                  <strong>Departman Ekle</strong>
                
                </div>
                <div class="card-body">
                  <form  method="post" enctype="multipart/form-data" class="form-horizontal" action="{{route('department-save')}}">
                    {{csrf_field()}}
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label" for="name">Departman Adı</label>
                      <div class="col-md-9">
                        <input type="text" id="name" name="name" class="form-control" placeholder="Departman">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-md-3 col-form-label" for="description">Açıklama</label>
                      <div class="col-md-9">
                        <textarea id="description" name="description" rows="9" class="form-control" placeholder="Açıklama giriniz.."></textarea>
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