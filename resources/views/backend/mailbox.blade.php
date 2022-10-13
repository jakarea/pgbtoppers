@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="intake-table">
                <h1 class="mb-5">Informatie over de Intakes</h1>
                <table class="table table-striped">
                    <tr>
                        <th>#</th>
                        <th>Sender</th>
                        <th>Receiver</th>
                        <th>Onderwerp</th>
                        <th>Message</th>  
                        <th>Action</th> 
                        </tr>
                    @php 
                        $i = isset($_GET['page']) ? $_GET['page'] : 1;
                        $i = ($i-1) * 20;
                    @endphp

                    @foreach($mailboxes as $mail)
                    <tr>
                        <td valign="middle">{{ ++$i }}</td> 
                        <td valign="middle">{{ $mail->sender->name }}</td>
                        <td valign="middle">{{ $mail->receiver->name }}</td>
                        <td valign="middle">{{ $mail->title }}</td>
                        <td valign="middle">{{ $mail->body }}</td>
                        <td valign="middle"><a href="{{ route('admin.mailboxsingle', $mail->id)}}">View</a></td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
        <div class="col-12">
            <div class="text-center  mt-4">
                @if ($mailboxes->hasPages())
                <div class="pagination-wrapper text-center">
                {{ $mailboxes->links("pagination::bootstrap-4") }}
                </div>
            @endif
            </div>
        </div>
     </div>
</div>
@endsection