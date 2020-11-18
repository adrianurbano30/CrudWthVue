@extends('plantillas.app')

@section('contenido')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
           <div class="card">
                <div class="card-header">Tweets</div>
                <div class="card-body">
                    conexión api twitter
                </div>
            </div>
        </div>

        <div class="col-md-8">

            <div class="card">
                <div class="card-header">{{$user->name}}</div>

                <div class="card-body">
                  <p>published entries</p>
                  <ul>
                   @forelse($entris as $entri)

                       <li>{{$entri->title}}</li>

                   @empty
                    <li>no tengo ni m</li>
                   @endforelse
                 </ul>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection