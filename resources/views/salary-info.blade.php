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
                        <form class="" role="form" method="post" action="{{route('filter')}}">
                             {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="el2">Tarih</label>
                                            <input type="month" id="date" class="form-control monthPicker" required="" name="month" value="2019-08">
                                        </div>
                                    </div>
                         </div>
                                <button type="submit" id="button" class="btn btn-success pull-right"><i class="fa fa-search"></i> Search</button>
                            </form>
                        </div>
                    </div>
                </div>
           </div>
        </div>
      <div>
        
        <form id=form style={{$none}}>
        <div class="card-header"  >
            <div class="card-body">
              <table class="table table-striped table-bordered datatable pull-right">
                <thead>
                  <tr>
                
                    <th>Ad-Soyad</th>
                    <th>Sabit Maaş</th>

                    <th>Maaş Bilgisi</th>

                </thead>
                <tbody>
                   
                
                    @foreach($employees as $employee)  
                    <tr>
                     <td id="name"> {{$employee->name}}</td>
                     <td id="salary"> {{$employee->salary_amount}}</td>
                     <td style="width: 100px">
                        @if(isset($payscales) && in_array($employee->id, $payscales)) 
                            <input type="button"  value="Ödendi">
                        @else
                           <input type="button" class="salary-info" value="Odenmedi" data-name="{{$employee->id}}">
                      @endif
                     </td>
                  </tr>
                 @endforeach
                </tbody>
              </table>
        </div>
      </div>  
    </div>
  </div>
</form>
@endsection

@section('private-script')

 
  <!-- Plugins and scripts required by this views -->
  <script src="/asset/vendors/js/jquery.dataTables.min.js"></script>
  <script src="/asset/vendors/js/dataTables.bootstrap4.min.js"></script>

  <!-- Custom scripts required by this view -->
  <script src="/asset/js/views/datatables.js"></script>

  <script>
    
    $("#date").change(function(){
        
        date=$("#date").val();
    });

   
    $(".salary-info").click(function(){
           $("#form").show();
            $(this).val('Ödendi');
            var id=$(this).data('name');
            var date = $("#date").val();
            $.ajax({
                url:"{{route('salary-info-add')}}",
                data:{id:id, date:date},
                success:function(res){
                    console.log(res);
                },
                error: function(err){
                    console.error(err);
                }
            });
            
        });


  
  </script>
@endsection