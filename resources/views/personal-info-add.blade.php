@extends('layouts.master')
@section('title','Yeni Personel Ekle')

@section('style')

  <link href="/asset/vendors/css/select2.min.css" rel="stylesheet">
@endsection

@section('content')

           <div class="card">
                <div class="card-header">
                  <strong>Yeni Personel</strong>
                </div>
                <div class="card-body">
                  <form action="{{route('personal-save')}}"  method="post" enctype="multipart/form-data" class="form-horizontal">
                    {{ csrf_field() }}
                    @include('Layouts.partials.errors')
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">Ad Soyad</label>
                      <div class="col-md-9">
                      <input type="text" id="name" name="name" class="form-control" placeholder="Ad-Soyad" >
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label" for="birthday">Doğum Tarihi</label>
                      <div class="col-md-9">
                        <input type="date" id="birthday" name="birthday" class="form-control" value="2018-07-22">
                      </div>
                    </div>

                    <div class="form-group row">
                    <label for="gender" class="col-md-3 control-label" for="gender">Cinsiyet</label>

                    <div class="col-md-9">
                        <label class="radio-inline" >
                            <input type="radio"  name="gender" value="male" > 
                            Erkek
                        </label>

                        <label class="radio-inline">
                            <input type="radio" name="gender" value="female" > 
                            Kadin
                        </label>
                    </div>
                    </div>
                    
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label" for="email">Email</label>
                      <div class="col-md-9">
                        <input type="email" id="email" name="email" class="form-control" placeholder="Email" >
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label" for="phone">Telefon</label>
                      <div class="col-md-9">
                        <input type="text" id="phone" name="phone" class="form-control" placeholder="Telefon">
                        <small class="text-muted">ex. (999) 999-9999</small>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-md-3 col-form-label" for="addres">Adres</label>
                      <div class="col-md-9">
                        <textarea id="addres" rows="3" name="addres"  class="form-control" placeholder="Adres..">
                            
                        </textarea>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-md-3 col-form-label" for="department">Departman</label>
                      <div class="col-md-9">
                        <select id="department" name="department" class="form-control">
                          <option value="0">Seçiniz</option>
                          @foreach($employeeDepartments as $department)
                              <option value="{{ $department->id}}">{{ $department->name }}</option>              
                           @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label" for="designation">Görev</label>
                      <div class="col-md-9">
                        <select id="designation" name="designation_id" class="form-control">
                          
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label" for="join">İşe Giriş Tarihi</label>
                      <div class="col-md-9">
                        <input type="date" id="join" name="join"  class="form-control" placeholder="İşe Giriş Tarihi" >
                      </div>
                    </div>
                  
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label" for="quit">İşten Ayrılma Tarihi</label>
                      <div class="col-md-9">
                        <input  type="date" id="quit" name="quit"  class="form-control" placeholder="İşten Ayrılma Tarihi" >
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-md-3 col-form-label" for="salary">Maaş</label>
                      <div class="col-md-9">
                        <input  type="salary" id="salary" name="salary"  class="form-control" placeholder="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label" for="photo">Resim</label>
                      <div class="col-md-9">
                        <input  type="file" id="photo" name="photo"  class="form-control" accept="image/*" }>
                       
                     </div>
                  </div>
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
                 $("#designation").empty();
                 $('#designation').append('<option>Seçiniz</option>');
                 $.each(res,function(key,value){
                  $("#designation").append('<option value="'+value.id+'">'+value.name+'</option>');
                 });
              }
             
            });
          }
      });
  </script>
  
@endsection