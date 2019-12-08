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
                    <th>Ad-Soyad</th>
                    <th>Departman</th>
                    <th>Branş ve Görevi</th>
                    <th>İzin Başlama Tarihi</th>
                    <th>İzin Bitiş Tarihi</th>
                    <th>İzinli Olacağı Gün Sayısı</th>
                    <th>İzin Nedeni</th>
                  
                  </tr>
                </thead>
                <tbody>
                   @foreach($attendances as $attendance)
                   <tr>
                   <td>{{$attendance->employee->name}}</td>
                   <td>{{$attendance->employee->designation->department->name}}</td>
                   <td>{{$attendance->employee->designation->name}}</td>
                   <td>{{$attendance->start_date}}</td>
                   <td>{{$attendance->end_date}}</td>
                   <td>{{$attendance->day}}</td>
                   <td>{{$attendance->resaon}}</td>
                   @endforeach
                  </tr>
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