<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Person Page | Masiya Assessments</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="css/AdminLTE.min.css">
  <link rel="stylesheet" href="css/skin-blue-light.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue-light sidebar-mini">
      <div class="row">
        <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs pull-right" >
              <li><a href="#department" data-toggle="tab">Department</a></li>
              <li class="active"><a href="#city" data-toggle="tab">City</a></li>
              <li class="pull-left header"> Person</li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="city">
                <div class="box-body table-responsive no-padding">  
                  <table class="table no-padding">
                    <tr style="background-color:#2EBCD2;color:#FFFFFF">
                      <th>Name</th>
                      <th>City</th>
                      <th>Department</th>
                      <th style="width: 80px">Status</th>
                    </tr>
                    @foreach($cities as $key => $rows)
                      <tr>
                        <td colspan="4" style="background-color:#25ADC2;color:#FFFFFF"><strong>{!! $key !!}</strong></td>
                        @foreach($rows as $key => $row)
                          <tr>
                            <td><strong>{!! $row['name'] !!}</strong><br>{!! $row['position'] !!}</td>
                            <td>{!! $row['city'] !!}</td>
                            <td>{!! $row['department'] !!}</td>
                            <td><span class="badge" style="background-color:{!! get_status_color($row['status']) !!}; padding:6px;">{!! get_status($row['status']) !!}</span></td>
                          </tr>
                        @endforeach
                      </tr>
                    @endforeach
                  </table>
                </div>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="department">
                <div class="box-body table-responsive no-padding">  
                  <table class="table no-padding">
                    <tr style="background-color:#2EBCD2;color:#FFFFFF">
                      <th>Name</th>
                      <th>City</th>
                      <th>Department</th>
                      <th style="width: 80px">Status</th>
                    </tr>
                    @foreach($departments as $key => $rows)
                      <tr>
                        <td colspan="4" style="background-color:#25ADC2;color:#FFFFFF"><strong>{!! $key !!}</strong></td>
                        @foreach($rows as $key => $row)
                          <tr>
                            <td><strong>{!! $row['name'] !!}</strong><br>{!! $row['position'] !!}</td>
                            <td>{!! $row['city'] !!}</td>
                            <td>{!! $row['department'] !!}</td>
                            <td><span class="badge" style="background-color:{!! get_status_color($row['status']) !!}; padding:6px;">{!! get_status($row['status']) !!}</span></td>
                          </tr>
                        @endforeach
                      </tr>
                    @endforeach
                  </table>
                </div>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
<script src="js/jquery-2.2.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
