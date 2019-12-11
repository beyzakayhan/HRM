@extends('layouts.master')
@section('title','Kişisel Bilgiler')

@section('content')

<div class="animated fadeIn">
        <div class="card">
                    <div class="card-header">
                          <strong>Duyuru Ekle</strong>
                    </div>
                    <div  class="card-body">
                            <a href= "{{route('announcement-add')}}"><button type="button" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp; Ekle</button></a>
                    </div>
         </div>           
  <div class="card">
        @foreach ($announcements as $announcement)
            <div class="card-header">
                  <strong>{{$announcement->date}}</strong>
            </div>
           
            <div class="card-body ">
                <h5>{{$announcement->name}} <a href="{{route('announcement-remove', $announcement->id)}}" class="btn btn-xs btn-danger pull-right" data-toggle="tooltip" data-placement="top" title="Sil" onclick="return confirm('Emin misiniz?')">
                        <span class="fa fa-trash"></span>
                </a></h5>
            </div>
            
        @endforeach
            
    </div>
</div>
@endsection