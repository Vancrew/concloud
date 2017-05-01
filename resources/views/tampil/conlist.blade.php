@extends('layouts.default')
@section('content')

<div class="row">
  <div class="col-xs-12">
    <h3>Containers</h3>
    @if(Session::has('alert-success'))
        <div class="alert alert-success">
          {{ Session::get('alert-success') }}
        </div>
    @endif
    <div class="box box-primary">
      <div class="box-header">
          <button type="button" class="btn btn-primary">Refresh</button>
          <button type="button" class="btn btn-success">Deploy Container</button>
        

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
            <th>ID</th>
            <th>Node</th>
            <th>Name</th>
            <th>Image</th>
            <th>Status</th>
            <th>Created</th>
            <th>Action </th>
          </tr>
            <?php $no=1; ?>
            @foreach($containers as $container)
            <tr>
              <td>{{$no++}}</td>
              <td>{{$container->id_con}}</td>
              <td>{{$container->id_user}}</td>
              <td>
                <span class="label label-danger">Denied</span>
              </td>
              <td>
                <span class="label label-warning">Pending</span>
              </td>
              <td></td>
              <td>
                <button type="button" class="btn btn-primary"><i class="fa fa-search-plus"></i></button>
                <button type="button" class="btn btn-success"><i class="fa  fa-wrench"></i></button>
              </td>
            </tr>
            @endforeach
          </tbody></table>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
</div>
@endsection