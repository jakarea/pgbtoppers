@extends('layouts.dashboard')

@section('content')
<div class="container">
     <div class="row"> 
        <div class="col-12">
            <div class="card mt-4">
               <div class="card-header">
               <div class="d-flex justify-content-between align-items-center">
                <h1>Bewerk Reviews Toevoegen</h1>
                <a href="{{ url('admin/testimonial') }}" class="btn btn-info">Rug</a>
                </div>
                 
               </div>
               <div class="card-body testimo-form-wrap">
               <form action="{{ route('testimonial.edit',$testimonial->id) }}" method="POST" class="intake_sign_up" enctype="multipart/form-data">

               @if($errors->any())
                    {{ implode('', $errors->all('<div>:message</div>')) }}
                @endif

                    @csrf
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="">Naam</label>
                                <input type="text" placeholder="Naam *" class="form-control" name="name" value="{{ $testimonial->name }}">
                                <span class="label-error" style="color: red;">{{ $errors->first('name') }}</span>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="">Aanduiding</label>
                                <input type="text" placeholder="Designation *" class="form-control" name="designation" value="{{ $testimonial->designation }}">
                                <span class="label-error" style="color: red;">{{ $errors->first('designation') }}</span>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="form-group">
                                <label for="">Geüploade afbeelding</label>
                                <img src="{{ asset('images/testimonial/'.$testimonial->image) }}" alt="Testmonial" class="img-fluid" style="width: 120px;">
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="form-group">
                                <label for="">Afbeelding</label>
                                <input type="file" class="form-control" name="image">
                                <span class="label-error" style="color: red;">{{ $errors->first('image') }}</span>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="">Beschrijving</label> 
                                <textarea name="description" class="form-control" cols="30" rows="10">
                                {{ $testimonial->description }}
                                </textarea>
                                <span class="label-error" style="color: red;">{{ $errors->first('description') }}</span>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="btn-submit text-right">
                                <button type="submit" class="btn btn-primary">Indienen</button>
                            </div>
                        </div>
                    </div> 
                </form>  
               </div>
            </div>
        </div>
     </div>
</div>
@endsection