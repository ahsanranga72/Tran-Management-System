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
                                My Trans
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('club.tranrequest.create')}}" class="btn btn-success pull-right">Tran Request</a>
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
