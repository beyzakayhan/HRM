@extends('layouts.master')
@section('title','Personel Detay')

@section('style')

  <link href="/asset/vendors/css/select2.min.css" rel="stylesheet">
@endsection

@section('content')

           <div class="card">
                <div class="card-header">
                  <strong>Yeni Personel</strong>
                </div>
                <div class="card-body" >
                  <form action=""  method="post" enctype="multipart/form-data" class="form-horizontal">
    
                    <label><img src="{{ asset('uploads/image') }}/{{ $employee->photo }}" alt="default avatar"  style="max-width: 100px; height: auto; border-radius:50%"></label>
                    <div class="form-group row">
                        <label class="col-md-2">Ad-Soyad</label>:
                           <p>{{$employee->name}}</p>
                        </label>
                        
                    </div>
                    <div class="form-group row">
                            <label class="col-md-2">Doğum Tarihi</label>:
                            <p>{{$employee->birthday}}</p>
                         </label>
                    </div>
                    <div class="form-group row">
                            <label class="col-md-2">Email</label>:
                            <p>{{$employee->email}}</p>
                         </label>
                    </div>
                    <div class="form-group row">
                            <label class="col-md-2">Telefon</label>:
                            <p>{{$employee->phone}}</p>
                         </label>
                    </div>
                    <div class="form-group row">
                            <label class="col-md-2">Adres</label>:
                            <p>{{$employee->addres}}</p>
                         </label>
                    </div>
                    <div class="form-group row">
                            <label class="col-md-2">Departman</label>:
                            <p>{{$employee->designation->department->name}}</p>
                         </label>
                    </div>
                    <div class="form-group row">
                            <label class="col-md-2">Branş</label>:
                            <p>{{$employee->designation->name}}</p>
                         </label>
                    </div>
                    <div class="form-group row">
                            <label class="col-md-2">İşe Giriş Tarihi</label>:
                            <p>{{$employee->join}}</p>
                         </label>
                    </div>
                    @if(isset($employee->quit))
                    <div class="form-group row">
                            <label class="col-md-2">İşten Ayrılma Tarihi</label>:
                            <p>{{$employee->quit}}</p>
                         </label>
                    </div>
                   @endif
                    <div class="form-group row">
                            <label class="col-md-2">Maaş</label>:
                            <p>{{$employee->salary_amount}}</p>
                         </label>
                    </div>
             </form>
          </div>
  </div>

@endsection

@section('private-script')


  <!-- Plugins and scripts required by this views -->
  <script src="/asset/vendors/js/jquery.maskedinput.min.js"></script>

  <script src="/asset/vendors/js/select2.min.js"></script>
  <script src="/asset/js/views/advanced-forms.js"></script>

  <!-- Custom scripts required by this view -->
  <script>

      $('#department').change(function(){
        
          var departmentId=$(this).val();
          if(departmentId>0) {
            $.ajax({
              type:"GET",
              url:"{{route('designations')}}",
              data:{department_id:departmentId},
              success:function(res){      
                 $('#designation').append('<option>Select</option>');
                 $.each(res,function(key,value){
                  $("#designation").append('<option value="'+value.id+'">'+value.name+'</option>');
                 });
              }
             
            });
          }
      });
  </script>
  
@endsection