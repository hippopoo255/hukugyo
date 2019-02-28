@extends('layouts.default')
@section('page-title', 'マイページ')

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
                    {{Auth::User()->name}} さん、ようこそ！<br>
                    このページはただいま準備中です<br>
                    今しばらくお待ちください<br>
                </div>
            </div>
        </div>
    </div>
@endsection
