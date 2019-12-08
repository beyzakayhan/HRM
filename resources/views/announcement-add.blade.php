@extends('layouts.master')
@section('title','Departman Ekle')

@section('style')

  <link href="/asset/vendors/css/select2.min.css" rel="stylesheet">
@endsection

@section('content')

<div class="card">
                <div class="card-header">
                    <strong>Duyuru Ekle</strong>
                  </div>
                
                </div>
                <div class="card-body">
                  <form  method="post" enctype="multipart/form-data" class="form-horizontal" action="{{route('announcement-save')}}">
                    {{csrf_field()}}
                    <div class="form-group row">
                      <label class="col-md-1 col-form-label" for="name">Duyuru:</label>
                      <div class="col-md-11">
                      <textarea type="text" id="name" rows="9" name="name" class="form-control"></textarea></textarea>
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