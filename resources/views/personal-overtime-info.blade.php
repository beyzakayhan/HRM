@extends('layouts.master')
@section('title','Mesai Bilgileri')

@section('content')

<div class="animated fadeIn">
<div class="card">
                <div class="card-header">
                  <strong>Mesai Bilgileri</strong>
                </div>
          
            <div class="card-body">
              <table class="table table-striped table-bordered datatable">
                <thead>
                  <tr>
                    <th>Adı</th>
                    <th>Departman</th>
                    <th>Görev Tanımı</th>
                    <th>Mesai Günleri</th>
                    <th>Tatil Günleri</th>
                    <th>Giriş Saati</th>
                    <th>Çıkış Saati</th>
                  </tr>
                </thead>
                <tbody>
               
                   @foreach ($employees as $employee)
                    <tr>
                       <td>{{$employee->name}}</td>
                       <td>{{$employee->designation->department->name}}</td>
                       <td>{{$employee->designation->name}}</td>
                       <td>{{$employee->designation->department->working_shift->working_days}}</td>
                       <td>{{$employee->designation->department->working_shift->holiday_days}}</td>
                       <td>{{$employee->designation->department->working_shift->check_in}}</td>
                       <td>{{$employee->designation->department->working_shift->check_out}}</td>
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