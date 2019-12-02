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
                     <th>T.C Kimlik No</th>
                    <th>Ad</th>
                    <th>Soyad</th>
                    <th>Branş ve Görevi</th>
                    <th>Tatil Günleri</th>
                    <th>ikametgah Adresi</th>
                    <th>İzin Başlama Tarihi</th>
                    <th>İzinli Olacağı Gün Sayısı</th>
                    <th>İzin Nedeni</th>
                    <th>Yönetici Onayı</th>
                  </tr>
                </thead>
                <tbody>
                
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