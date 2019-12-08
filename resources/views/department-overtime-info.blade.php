@extends('layouts.master')
@section('title','Mesai Bilgileri')

@section('content')

<div class="animated fadeIn">
<div class="card">
              <div class="card-header">
                <strong>Mesai Ekle</strong>
              </div>
              <div iv class="card-body">
                <a href= "{{route('overtime-info-add')}}"><button type="button" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp; Ekle</button></a>
              </div>
            </div>  
          
            <div class="card-body">
              <table class="table table-striped table-bordered datatable">
                <thead>
                  <tr>
                    <th>Departman</th>
                    <th>Mesai Günleri</th>
                    <th>Tatil Günleri</th>
                    <th>Giriş Saati</th>
                    <th>Çıkış Saati</th>
                    <th>Düzenle</th>
                  </tr>
                </thead>
                <tbody>
           
                   @foreach ($workingShift as $info)
                    <tr>
                       <td>{{$info->department->name}}</td>
                       <td>{{$info->working_days}}</td>
                       <td>{{$info->holiday_days}}</td>
                       <td>{{$info->check_in}}</td>
                       <td>{{$info->check_out}}</td>

                       <td style="width: 150px">
                        <a href="{{route('overtime-edit',$info->id)}}" class="btn btn-xs btn-success" data-toggle="tooltip" data-placement="top" title="Düzenle">
                            <span class="fa fa-pencil"></span>
                        </a>
                        <a href="{{route('overtime-remove',$info->id)}}" class="btn btn-xs btn-danger" data-toggle="tooltip" data-placement="top" title="Sil" onclick="return confirm('Emin misiniz?')">
                            <span class="fa fa-trash"></span>
                        </a>
                    </td>
                    </tr>
                   @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>

@endsection

@section('private-script')

  <!-- Plugins and scripts required by this views -->
  <script src="/asset//asset/vendors/js/jquery.dataTables.min.js"></script>
  <script src="/asset//asset/vendors/js/dataTables.bootstrap4.min.js"></script>

  <!-- Custom scripts required by this view -->
  <script src="/asset/js/views/datatables.js"></script>
@endsection