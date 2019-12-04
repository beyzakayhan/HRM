@extends('layouts.master')
@section('title','Kişisel Bilgiler')

@section('content')

<div class="animated fadeIn">
<div class="card">
                <div class="card-header">
                  <strong>Yeni Personel Ekle</strong>
                </div>
                <div class="card-body">
                  <a href= "{{route('personal-info-add')}}"><button type="button" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp; Ekle</button></a>
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
                    <th>Resim</th>
                    <th>Ad-Soyad</th>
                    <th>Departman</th>
                    <th>Branş</th>
                    <th>Maaş</th>
                    <th>Durum</th>
                    
                  </tr>
                </thead>
                <tbody>
                  @foreach ($employees as $employee)  
                  <td>$employee->photo</td>
                  <td>$employee->name</td>
                  <td></td>
                  <td></td>
                  <td>
                    @if($employee->quit==null)
                     "aktif"
                  </td>
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