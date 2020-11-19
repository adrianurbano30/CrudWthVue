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
                     <a href="{{route('entryshow',$entri->slug.'-'.$entri->id)}}">
                       <li>{{$entri->title}}</li>
                     </a>
                   @empty
                    <li>I DOESNT HAVE ANY ENTRY</li>
                   @endforelse
                 </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection