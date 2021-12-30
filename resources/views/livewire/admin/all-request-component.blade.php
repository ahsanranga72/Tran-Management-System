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
                            <div class="col-md-8">
                                <h3>All Tran Request</h3>
                            </div>
                            <div class="col-md-1">
                                <a href="{{route('admin.newrequest')}}" class="btn btn-warning pull-right">New</a>
                            </div>
                            <div class="col-md-1">
                                <a href="{{route('admin.approvedrequest')}}" class="btn btn-primary pull-right">Approved</a>
                            </div>
                            <div class="col-md-1">
                                <a href="{{route('admin.completerequest')}}" class="btn btn-success pull-right">Complete</a>
                            </div>
                            <div class="col-md-1">
                                <a href="{{route('admin.declinedrequest')}}" class="btn btn-danger pull-right">Decline</a>
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
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($trans as $tran)
                                    <tr>
                                        <td>{{$tran->id}}</td>
                                        <td><img src="{{ asset('assets/images/products')}}/{{$tran->image}}" width="60px" alt="{{$tran->title}}"></td>
                                        <td>{{$tran->title}}</td>
                                        <td>{{$tran->status}}</td>
                                        <td>{{$tran->created_at}}</td>
                                        <td>
                                            <a href="{{ route('admin.updatetran', ['tran_slug'=>$tran->slug])}}" ><i class="fa fa-edit fa-2x test-info"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        {{$trans->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
