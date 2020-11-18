@extends('plantillas.app')

@section('contenido')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">CREAR ENTRIES</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" class="bg-white shadow rounded py-3 px-4"
                    action=" {{route('entrystore')}}">
                    @csrf
                    <h6 class="display-4">CREATE ENTRY</h6>
                    <hr>


                       <div class="form-group">
                            <label for="title">TITLE</label>
                            <input id="title"
                               autofocus="autofocus"
                               type="text"
                               placeholder="TITLE"
                               class="form-control
                                      border-0
                                      bg-light
                                      shadow-sm
                                      @error('title')
                                      is-invalid
                                      @else
                                      border-0
                                      @enderror
                                      "
                               name="title"
                               value="{{old('title')}}">

                            @error('title')
                               <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                               </span>
                            @enderror

                        </div>

                        <div class="form-group">
                             <label for="content" >CONTENT</label>
                             <textarea
                             id="content"
                             type="text"
                             class="form-control
                             @error('content')
                             is-invalid
                             @else
                             border-0
                             @enderror
                             form-control
                             border-0
                             bg-light
                             shadow-sm"
                             placeholder="CONTENT"
                             name="content">
                              {{old('content')}}
                             </textarea>

                            @error('content')
                               <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                               </span>
                            @enderror
                        </div>
                      <button class="btn btn-primary">PUBLISH</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
