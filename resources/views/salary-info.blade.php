@extends('layouts.master')
@section('title','Maaş Bilgileri')

@section('content')

<div class="animated fadeIn">

               

              <div class="row">

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Maaş Bilgileri</h3>
                        </div>
                        <div class="card-body">
                            <form class="" role="form" method="post" action="https://hrm.coderpixel.com/payroll/make-payment/post-custom-search">

                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="el2">Tarih</label>
                                            <input type="month" id="el2" class="form-control monthPicker" required="" name="month" value="2019-08">
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="el3">Personel</label>
                                            <select class="selectpicker form-control bs-select-hidden" data-live-search="true" name="employee">
                                                <option value="0">Personel Seçiniz</option>
                                                <option value="3">Jhon Doe (546817)</option>
                                            </select>                                                    
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="el3">Departman</label>
                                            <select class="selectpicker form-control bs-select-hidden" data-live-search="true" name="department">
                                                <option value="0">Personel Seçiniz</option>
                                                <option value="3">Jhon Doe (546817)</option>
                                            </select>                                                   
                                        </div>
                                    </div>
                                  
                              <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="el3">Görev Tanımı</label>
                                    <select class="selectpicker form-control bs-select-hidden" data-live-search="true" disabled="" name="designation" id="designation">
                                        <option value="0">Select Designation</option>
                                    </select>
                                </div>
                            </div>
         
                         </div>
                                <input type="hidden" name="_token" value="V693kHoe9JAv7P9XqJhHxfkjN4HHM551ZvFReIZe">
                                <button type="submit" class="btn btn-success pull-right"><i class="fa fa-search"></i> Search</button>

                            </form>
                        </div>
                    </div>
                </div>
           </div>
        </div>
      <div>
        <div class="card-header">
            <div class="card-body">
              <table class="table table-striped table-bordered datatable pull-right">
                <thead>
                  <tr>
                    <th>Tarih</th>
                    <th>Ad-Soyad</th>
                    <th>Sabit Maaş</th>
                    <th>İzinli Gün Sayısı</th>
                    <th>Maaş Bilgisi</th>

                </thead>
                <tbody>
                 <td><td>
                 <td></td>
                 <td></td>
                 <td style="width: 100px">
                    <input type="button" id="salary-info" value="Ödenmedi">
                    </input>
                </td>
                </tbody>
              </table>
        </div>
      </div>  
    </div>
  </div>

@endsection

@section('private-script')

 
  <!-- Plugins and scripts required by this views -->
  <script src="/asset/vendors/js/jquery.dataTables.min.js"></script>
  <script src="/asset/vendors/js/dataTables.bootstrap4.min.js"></script>

  <!-- Custom scripts required by this view -->
  <script src="/asset/js/views/datatables.js"></script>

  <script>
  $(document).ready(function(){
        $("#salary-info").click(function(){
         $(this).val('Ödendi');
        });
  });
  
  </script>
@endsection