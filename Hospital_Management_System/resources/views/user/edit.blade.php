@extends('layouts.master')
@section('content')
  <div class="row">
    <div class="col-md-12 ">
      <form method="post" action="{{ route('user.update') }}">
        @csrf
          <div class="card mb-3">
            <div class="card-header">
              <div class="row">
                  <div class="col-md-8 card_title_part">
                      <i class="fab fa-gg-circle"></i>User Registration
                  </div>  
                  <div class="col-md-4 card_button_part">
                      <a href="{{ route('user.home') }}" class="btn btn-sm btn-dark"><i class="fas fa-th"></i>All User</a>
                  </div>  
              </div>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label col_form_label">Name<span class="req_star">*</span>:</label>
                  <div class="col-sm-7">
                    <input type="hidden" name="id" value="{{ $data->id }}">
                    <input type="text" class="form-control form_control" id="" name="name" value="{{ $data->name }}">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label col_form_label">Phone:</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control form_control" id="" name="phone" value="{{ $data->phone }}">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label col_form_label">Email<span class="req_star">*</span>:</label>
                  <div class="col-sm-7">
                    <input type="email" class="form-control form_control" id="" name="email" value="{{ $data->email }}">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label col_form_label">Photo:</label>
                  <div class="col-sm-4">
                    <input type="file" class="form-control form_control" id="" name="photo" value="{{ $data->photo }}">
                  </div>
                </div>
            </div>
            <div class="card-footer text-center">
              <button type="submit" class="btn btn-sm btn-dark">REGISTRATION</button>
            </div>  
          </div>
      </form>
    </div>
    </div>
@endsection                