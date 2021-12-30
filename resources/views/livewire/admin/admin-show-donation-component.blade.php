<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block !important;
        }
    </style>
    <div class="container" style="padding: 30px 0">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                My Donation
                            </div>
                            <div class="col-md-6">

                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if (Session::has('message'))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Donate As</th>
                                    <th>Donation Status</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($donations as $donation)
                                    <tr>
                                        <td>{{$donation->id}}</td>
                                        <td>{{$donation->donate_as}}</td>
                                        <td>{{$donation->donate_s}}</td>
                                        <td>{{$donation->created_at}}</td>
                                        <td>
                                            <a href="{{ route('admin.updatedonations', ['donate_id'=>$donation->id])}}" ><i class="fa fa-edit fa-2x test-info"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        {{$donations->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
