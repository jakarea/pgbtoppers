@extends('layouts.default', ['body_class' => 'frontend-home-page'])
@section('content')
    <section class="hero">
        <div class="container">
            <div class="home-hero-text">
                <h1>Ik zoek een zorgverlener</h1>
            </div>
        </div>
    </section>

    <section class="zoek-view-sec">
        <div class="container"> 
            <h1 class="mb-5" style="font-size: 2.6rem; font-family: Arial, Helvetica, sans-serif; margin-bottom: 30px;">IK ZOEK EEN ZORGVERLENER</h1>
        </div>
        <div class="container">
            <div class="zoek-single-views">
            <div class="zoek-view-left">
            <div class="zoek-main-card" style="width: 100%;"> 
                     <div class="zoek-media">
                     @if($service->user->photo)
                <img id="preview" class="img-responsive" style="max-width: 120px" src="/images/thumbnail/{{ $service->user->photo }}"/ >
                @else
                <img id="preview" class="img-responsive" src="https://ui-avatars.com/api/?background=random&name={{$service->user->name}}&rounded=true" alt="{{$service->user->name}}" style="width: 120px;">
                @endif
                     <div class="zoek-media-body">
                        <h5><strong>Name: </strong>{{ $service->user ? $service->user->name : '' }}</h5>
                        <!-- <h6><strong>Email: </strong>{{ $service->user ? $service->user->email : '' }}</h6>  -->
                     </div>
                     </div>  
                </div>
                <div class="zoek-mail-box-wrap">
                    <h4>Stuur bericht naar <i> {{ $service->user->name }}</i></h4>

                    <form action="{{url('admin/send-mail') }}" method="POST"> 
                        @csrf
                        <input type="hidden" name="receiver_id" value="{{ $service->user->id }}">
                        <div class="form-group">
                            <label for="">Onderwerp:</label>
                            <input name="title" type="text" placeholder="Vul je onderwerp in..">
                            <p class="label-error" style="color: red; margin-top: 0px;">{{ $errors->first('title') }}</p>
                        </div>
                        <div class="form-group">
                            <label for="">Bericht:</label>
                            <textarea name="message" class="form-control"></textarea>
                            <p class="label-error" style="color: red; margin-top: 0px;">{{ $errors->first('message') }}</p>
                        </div>
                        <div class="form-btn">
                        <button type="submit" class="btn btn-submit">Verzenden</button>
                        @if (session()->has('message'))
                            <div class="text-success" style="text-align: center;">
                                <p style="color: green; margin: 0px;">{{ session('message') }}</p>
                            </div>
                        @endif
            
                            
                        </div>
                    </form>

                </div>
            </div>
            <div class="zoek-view-right">
                <div class="intake-table">
                    <div class="d-flex justify-content-between align-items-center">
                        <h1 class="my-5">Informatie</h1> 
                    </div>

                    <table class="table table-striped" style="width: 100%; margin: 0 auto;">
          
                    <tr>
                        <th>Naam</th>
                        <th>:</th>
                        <td>{{ $service->user->name }}</td>
                    </tr>
                    <tr>
                        <th>Leeftijd</th>
                        <th>:</th>
                        <td>{{ $service->age }}</td>
                    </tr>
                    <tr>
                        <th>Afstand</th>
                        <th>:</th>
                        <td>{{ $service->distance }}</td>
                    </tr>
                    <tr>
                        <th>Geslacht</th>
                        <th>:</th>
                        <td>{{ $service->gender }}</td>
                    </tr>
                    <tr>
                        <th>Dagen</th>
                        <th>:</th>
                        <td>{{ $service->days }}</td>
                    </tr>
                    <tr>
                        <th>Voorkeur</th>
                        <th>:</th>
                        <td>{{ $service->desired }}</td>
                    </tr>
                    <tr>
                        <th>Licentie</th>
                        <th>:</th>
                        <td>{{ $service->license }}</td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <th>:</th>
                        <td>{{ $service->candidate_status }}</td>
                    </tr>
                    <tr>
                        <th>Ervaring</th>
                        <th>:</th>
                        <td>{{ $service->experience }}</td>
                    </tr>
                    <tr>
                        <th>Aanvullende informatie</th>
                        <th>:</th>
                        <td>{{ $service->other }}</td>
                    </tr>
                    <tr>
                        <th>Diensten</th>
                        <th>:</th>
                        <td>{{ $service->services }}</td>
                    </tr> 
                    <tr>
                        <th>Specifieke Ervaring</th>
                        <th>:</th>
                        <td>{{ $service->specific_experience ?: 'N/A'}}</td>
                    </tr> 
                    </table> 
                </div>
            </div>
            </div>
        </div>
    </section>

<section class="footer_image footer_image_2"></section>
    
@endsection
