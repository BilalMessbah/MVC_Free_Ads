@extends('layouts.app')
@section('content')
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Profil') }}</div>
                <div>
                    {{$user->name}} <?php echo "<br />"; ?>
                    {{$user->email}}
                </div>
            </div>
        </div>
    </div>
                  
</div>
</body>
@endsection