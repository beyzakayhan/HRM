@extends('layouts.master')
@section('title','Departman Bilgileri')

@section('content')

<div class="animated fadeIn">
<div class="card">
                <div class="card-header">
                  <strong>Yeni Departman Ekle</strong>
                </div>
                <div class="card-body">
                  <a href= "{{route('designation-add')}}"><button type="button" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp; Ekle</button></a>
                </div>
              </div>
          <div class="card">
            <div class="card-header">
              <i class="fa fa-edit"></i> Personel Bilgileri
            </div>

           
            <div class="card-body">
              <table class="table table-striped table-bordered datatable">
                <thead>
                  <tr>
                    <th>Görev</th>
                    <th>Departman </th>  
                    <th>Düzenle</th>           
                  </tr>
                </thead>
                <tbody>
                 
                    @foreach($employeeDesignations as $des)
                    <tr>
                      <td>{{$des->name}}</td>
                      <td>{{$des->department->name}}</td>
                      <td style="width: 150px">
                        <a href="{{route('designation-edit',$des->id)}}" class="btn btn-xs btn-success" data-toggle="tooltip" data-placement="top" title="Düzenle">
                            <span class="fa fa-pencil"></span>

                        </a>
                        <a href="{{route('designation-remove',$des->id)}}" class="btn btn-xs btn-danger" data-toggle="tooltip" data-placement="top" title="Sil" onclick="return confirm('Emin misiniz?')">
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