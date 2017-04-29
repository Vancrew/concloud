@extends('layouts.default')
@section('content')

<div class="row">
  <div class="col-xs-12">
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
          <tr>
            <td>4hjib683dgyr</td>
            <td>swarm</td>
            <td>Apache</td>
            <td>alpine:latest</td>
            <td><span class="label label-success">Approved</span></td>
            <td>19-04-2017</td>
            <td>
              <button type="button" class="btn btn-primary"><i class="fa fa-search-plus"></i></button>
              <button type="button" class="btn btn-success"><i class="fa  fa-wrench"></i></button>
            </td>
          </tr>
          <tr>
            <td>8423dv987jnd</td>
            <td>swarm</td>
            <td>mysql</td>
            <td>mysql:latest</td>
            <td><span class="label label-warning">Pending</span></td>
            <td>19-04-2017</td>
            <td><button type="button" class="btn btn-primary"><i class="fa fa-search-plus"></i></button></td>
          </tr>
          <tr>
            <td>9okhnb543dfi</td>
            <td>swarm</td>
            <td>mysql</td>
            <td>mysql:latest</td>
            <td><span class="label label-primary">Approved</span></td>
            <td>19-04-2017</td>
            <td> </td>
          </tr>
          <tr>
            <td>0olku89of4g6</td>
            <td>swarm</td>
            <td>Apache</td>
            <td>apache:latest</td>
            <td><span class="label label-danger">Denied</span></td>
            <td>19-04-2017</td>
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