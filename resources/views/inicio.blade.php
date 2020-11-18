@extends('plantillas.app')

@section('contenido')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

                <h2>LAST ENTRIES</h2>

                 @foreach($entris as $entri)
                      <div class="card mt-4 mb-4">
                        <div class="card-header">{{$entri->title}}</div>
                           <div class="card-body">
                             <p>{{$entri->content}}</p>
                           </div>
                            <div class="card-footer">
                              autor:
                              <a href="{{route('authorshow',$entri->user->id)}}">
                                {{$entri->user->name}}
                              </a>
                            </div>
                      </div>
                @endforeach

        </div>
       {{ $entris->render() }}
    </div>

</div>
@endsection