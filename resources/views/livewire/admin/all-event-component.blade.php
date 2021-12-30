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
                                <h3>All Events</h3>
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.addevent')}}" class="btn btn-success pull-right">Add Event</a>
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
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($events as $event)
                                    <tr>
                                        <td>{{$event->id}}</td>
                                        <td><img src="{{ asset('assets/images/event')}}/{{$event->image}}" width="60px" alt="{{$event->title}}"></td>
                                        <td>{{$event->title}}</td>
                                        <td>{{$event->created_at}}</td>
                                        <td>
                                            <a href="{{ route('admin.editevent', ['event_slug'=>$event->slug])}}" ><i class="fa fa-edit fa-2x test-info"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        {{$events->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
