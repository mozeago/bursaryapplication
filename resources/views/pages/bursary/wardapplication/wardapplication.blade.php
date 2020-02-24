@extends('layouts.app')
@section('template_fastload_css')
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-10 offset-lg-1"> 
            <div class="card">
                <div class="card-header @role('admin', true) bg-secondary text-white @endrole">
            
                    Ward Bursary Application
            
                </div>
                <div class="card-body">
                    <a class="nav-link" data-toggle="pill" href="#" role="tab" aria-controls="edit-settings-tab" aria-selected="false">
                        {{ trans('bursaryapplicationlinks.countyBursary') }}
                    </a>
                    <a class="nav-link" data-toggle="pill" href="#" role="tab" aria-controls="edit-settings-tab" aria-selected="false">
                        {{ trans('bursaryapplicationlinks.ngcdfBursary') }}
                    </a>
                    <a class="nav-link" data-toggle="pill" href="#" role="tab" aria-controls="edit-settings-tab" aria-selected="false">
                        {{ trans('bursaryapplicationlinks.countyBursary') }}
                    </a>
                    {{ csrf_field() }}
                    <form method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                      </div>
                    </form>
                </div>
               
            </div>
            </div>
        </div>
    </div>
@endsection
@section('footer_scripts')
@endsection
