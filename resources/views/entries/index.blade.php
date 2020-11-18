@extends('plantillas.app')

@section('contenido')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <div class="card-header">MY ENTRIES</div>

                <div class="card-body">
                 <ul>
                   @forelse($entris as $entri)
                     <a href="{{route('entryshow',$entri)}}">
                       <li>{{$entri->title}}</li>
                     </a>
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