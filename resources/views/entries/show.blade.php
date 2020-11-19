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

                  @can('update',$entri)

                     <a href="{{route('entryedit',$entri)}}" class="btn btn-warning btn-pill">Edit Entry</a>

                  @endcan
                </div>
            </div>
        </div>
    </div>
</div>
@endsection