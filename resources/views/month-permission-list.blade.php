@extends('layouts.master')
@section('title','Maaş Bilgileri')

@section('style')
  <link href="/asset/css/error.css" rel="stylesheet">
@endsection
@section('content')

<div class="animated fadeIn">

              <div class="row">

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Maaş Bilgileri</h3>
                        </div>
                        <div class="card-body">
                        <form class="" role="form" method="post" action="{{route('month-permission-filter')}}">
                             {{ csrf_field() }}
                            
                         @if(isset($error))
                          <div class="error">{{$error}}</div>
                          @endif
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="el2">Tarih</label>
                                            <input type="date" id="date" class="form-control monthPicker" required="" name="start_date" value="{{ old('start_date',isset($start_date) ? $start_date: "2019-01-01") }}"> 
                                        </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="el2">Tarih</label>
                                                <input type="date" id="date" class="form-control monthPicker" required="" name="end_date" value="{{old('end_date',isset($end_date) ? $end_date : "2019-01-02")}}">
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
        
        <form style={{$none}}>
                <div class="card-header"  >
                        <div class="card-body">
                          <table class="table table-striped table-bordered datatable pull-right">
                            <thead>
                              <tr>
                            
                                <th>Ad-Soyad</th>
                                <th>toplam izin</th>
            
                            </thead>
                            <tbody>
                               
                                @if(isset($employees))
                                @foreach($employees as $employee)  
                                <tr>
                                 <td > {{$employee->employee->name}}</td>
                                 <td > {{$employee->total}}</td>
                                 
                              </tr>
                             @endforeach
                             @endif
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