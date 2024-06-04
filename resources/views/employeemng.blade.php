@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Employee Management') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content" style="width: 80%; margin: auto;">
    <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Add New Employee</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">First Name</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail3">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label" style="">Last Name</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="inputPassword3" >
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label" style="">Middle Name</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="inputPassword3" >
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label" style="">Address</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="inputPassword3" >
                    </div>
                  </div>

                <div class="input-group" style="display: flex;">
                  <label style="width: 16.7%;">Country:</label>
                  <select class="form-control select2bs4 select2-hidden-accessible" style="width: 40%; border-radius: 5px; margin-bottom:20px;" data-select2-id="17" tabindex="-1" aria-hidden="true">
                    <option selected="selected" data-select2-id="19">Please Select Your Country</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>

                <div class="input-group" style="display: flex;">
                  <label style="width: 16.7%;">State:</label>
                  <select class="form-control select2bs4 select2-hidden-accessible" style="width: 40%; border-radius: 5px; margin-bottom:20px;" data-select2-id="17" tabindex="-1" aria-hidden="true">
                    <option selected="selected" data-select2-id="19">Please Select Your State</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>

                <div class="input-group" style="display: flex;">
                  <label style="width: 16.7%;">City:</label>
                  <select class="form-control select2bs4 select2-hidden-accessible" style="width: 40%; border-radius: 5px; margin-bottom:20px;" data-select2-id="17" tabindex="-1" aria-hidden="true">
                    <option selected="selected" data-select2-id="19">Please Select Your City</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label" style="">ZIP</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail3">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label" style="">AGE</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="inputPassword3" >
                    </div>
                  </div>

                  <div class="input-group"  style="margin-bottom:20px;">
                  <label style="margin-right: 10.5%;">Birthday:</label>
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" inputmode="numeric">
                  </div>

                  <div class="input-group" style="margin-bottom:20px;">
                  <label style="margin-right: 9.5%;">Hired Date:</label>
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" inputmode="numeric">
                  </div>

                  <div class="input-group" style="display: flex;">
                  <label style="width: 16.7%;">Department:</label>
                  <select class="form-control select2bs4 select2-hidden-accessible" style="width: 40%; border-radius: 5px; margin-bottom:20px;" data-select2-id="17" tabindex="-1" aria-hidden="true">
                    <option selected="selected" data-select2-id="19">General Management</option>
                    <option>Computer Science</option>
                    <option>Earth and Space Sciences</option>
                    <option>Political Science</option>
                    <option>Biology</option>
                    <option>English and Modern Language</option>
                  </select>
                </div>

                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label" style="">Division</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="inputPassword3" >
                    </div>
                  </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Submit</button>
                  <button type="submit" class="btn btn-default float-right">Cancel</button>
                </div>
                  <!-- /.input group -->
                </div>
                </div>
                <!-- /.card-body -->
                <!-- /.card-footer -->
              </form>
            </div>
    </div>
    <!-- /.content -->
@endsection