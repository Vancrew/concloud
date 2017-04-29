@extends('layouts.default')
@section('content')

<div class="row">
  <div class="col-xs-12">
    <div class="box box-primary">
      <div class="box-header">
          <button type="button" class="btn btn-primary">Refresh</button>
          <button type="button" class="btn btn-success">Pull Image</button>
        

        <div class="box-tools">
          <div class="input-group input-group-sm" style="width: 150px;">
            <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

            <div class="input-group-btn">
              <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
            </div>
          </div>
        </div>
      </div>
      <!-- /.box-header -->
      <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
          <tbody><tr>
            <th>Names</th>
            <th>ID</th>
            <th>Created</th>
            <th>Node</th>
            <th>Size</th>
            <th>Action </th>
          </tr>
          <tr>
            <td>Nginx:1.7.1</td>
            <td>92gb52ju72ml</td>
            <td>11-7-2014</td>
            <td><span class="label label-success">ejh-x1</span></td>
            <td>739.09MB</td>
            <td><button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button></td>
          </tr>
          <tr>
            <td>fedora:latest</td>
            <td>26vd62kh67wb</td>
            <td>11-7-2014</td>
            <td><span class="label label-warning">ejh-x1</span></td>
            <td>739.09MB</td>
            <td><button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button></td>
          </tr>
          <tr>
            <td>alpine:latest</td>
            <td>72nx38ks12df</td>
            <td>11-7-2014</td>
            <td><span class="label label-primary">ejh-x1</span></td>
            <td>739.09MB</td>
            <td> </td>
          </tr>
          <tr>
            <td>alpine:1.2.1</td>
            <td>72jc62ho88nk</td>
            <td>11-7-2014</td>
            <td><span class="label label-danger">ejh-x1</span></td>
            <td>739.09MB</td>
            <td> </td>
          </tr>
        </tbody></table>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
</div>
@endsection