@extends('layouts.default')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    ID: {{Auth::User()->id}} <br>
                    NAME: {{Auth::User()->name}} <br>
                    EMAIL: {{Auth::User()->email}} <br>
                    provider: {{Auth::User()->provider}} <br>
                    provider_id: {{Auth::User()->provider_id}} <br>
                    created_at: {{Auth::User()->created_at}} <br>
                    updated_at: {{Auth::User()->updated_at}} <br>
                </div>
            </div>
        </div>
    </div>
@endsection
