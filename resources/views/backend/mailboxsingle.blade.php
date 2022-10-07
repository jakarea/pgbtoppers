@extends('layouts.dashboard')
@section('content')
<div class="container">
    <div class="row">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="user-profile-wrap">
                    <div class="d-flex align-items-center justify-content-between">
                        <h1>Sender Profile</h1>
                        
                    </div>
                    
                    <div class="media align-items-center">
                        @if($mailbox->sender->photo)
                        <img id="preview" class="img-responsive" style="max-width: 120px" src="/images/thumbnail/{{ $mailbox->sender->photo }}"/ >
                        @else
                        <img id="preview" class="img-responsive" src="https://ui-avatars.com/api/?background=random&name={{ $mailbox->sender->name}}&rounded=true" alt="{{ $mailbox->sender->name}}" style="width: 120px;">
                        @endif
                        <div class="media-body ml-3">
                            <p><strong>Name: </strong> {{ $mailbox->sender->name }}</p>
                            <br>
                            <p><strong>Email: </strong> {{ $mailbox->sender->email }}</p>
                            <p><strong>Role: </strong>
                                @if($mailbox->sender->role === 1)
                                {{ ('Admin') }}
                                @elseif($mailbox->sender->role === 2)
                                {{ ('Intake Team') }}
                                @elseif($mailbox->sender->role === 3)
                                {{ ('Healthcare provider') }}
                                @else
                                {{ ('Looking for healthcare provider') }}
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="col-lg-12">
                <div class="user-profile-wrap">
                    <h1 class="mb-5">Mail</h1>
                    <h2><b>Onderwerp</b></h2><br/> <p>{{ $mailbox->title}}</p>
                    <h2><b>Message </b></h2><br/><p>{{ $mailbox->body}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection