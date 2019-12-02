@extends('layouts.master')
@section('title','Departman Bilgileri')

@section('content')

<div class="animated fadeIn">
<div class="card">
                <div class="card-header">
                  <strong>Yeni Departman Ekle</strong>
                </div>
                <div class="card-body">
                  <a href= "{{route('department-add')}}"><button type="button" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp; Ekle</button></a>
                </div>
              </div>
          <div class="card">
            <div class="card-header">
              <i class="fa fa-edit"></i> Personel Bilgileri
              <div class="card-actions">
                <a href="https://datatables.net">
                  <small class="text-muted">docs</small>
                </a>
              </div>
            </div>

           
            <div class="card-body">
              <table class="table table-striped table-bordered datatable">
                <thead>
                  <tr>
                    <th>Departman İsmi</th>
                    <th>Açıklama</th>              
                  </tr>
                </thead>
                <tbody>
                    @foreach($employeeDepartments as $departments)
                      <tr>
                      <td>{{$departments->name}}</td>
                      <td>{{$departments->description}}</td>
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