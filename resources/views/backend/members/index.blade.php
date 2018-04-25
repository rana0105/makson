@extends('backend.layouts.dashboard')
@section('content')
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="{{url('/dashboard')}}">Dashboard</a></li>
                            <li class="active">Members</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body table-responsive">
                              <table id="membersTable" class="table  table-bordered " cellspacing="0" width="100%">
                                <thead>
                                  <tr>
                                    <th>Auto ID</th>
                                    <th>Name</th>
                                    <th>Age</th>
                                    <th>Address</th>
                                    <th>Profession</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Martial Status</th>
                                    <th>Vehicle</th>
                                    <th>Quiz</th>
                                    <th>Video</th>
                                    <th>Total Point</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @foreach($members as $member)
                                  <tr>
                                    <td>{{ $member->member_auto_id }}</td>
                                    <td>{{ $member->name }}</td>
                                    <td>{{ $member->age }}</td>
                                    <td>{{ $member->address }}</td>
                                    <td>{{ $member->profession }}</td>
                                    <td>{{ $member->phone }}</td>
                                    <td>{{ $member->email }}</td>
                                    <td>{{ $member->marital_status }}</td>
                                    <td>{{ $member->vehicle }}</td>
                                    <td>{{ $member->quiz_point }}</td>
                                    <td>{{ $member->video_point }}</td>
                                    <td>{{ $member->total_point }}</td>
                                    @endforeach
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
@endsection
@section('script')
<script>
    $(document).ready(function() {
        $('#membersTable').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'csv', 'excel', 'pdf', 'print'
            ],
            "order": [[ 11, "desc" ]]
        });
    });
</script>
@endsection