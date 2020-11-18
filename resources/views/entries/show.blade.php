@extends('plantillas.app')

@section('contenido')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$entri->title}}</div>

                <div class="card-body">
                  <p>{{$entri->content}}</p>
                </div>

                <div class="card-footer">

                  @if($entri->user_id==auth()->id())

                 <a href="{{route('entryedit',$entri)}}" class="btn btn-warning btn-pill">Edit Entry</a>
                  @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection