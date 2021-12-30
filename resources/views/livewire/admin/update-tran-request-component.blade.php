<div>
    <div class="container" style="padding: 30px 0">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-10">
                            Update Tran Request
                        </div>
                        <div class="col-md-1">
                            <a href="{{route('admin.allrequest')}}" class="btn btn-secondary pull-right">All</a>
                        </div>
                        <div class="col-md-1">
                            <a href="{{route('admin.newrequest')}}" class="btn btn-warning pull-right">New</a>
                        </div>
                    </div>
                </div>
                <div class="panel-body">


                    @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                    @endif
                    <form class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent = "updatetran">
                        <div class="form-group">
                            <label class="col-md-4 control-label">Title</label>
                            <div class="col-md-4">
                                <input type="text" placeholder="Title" class="form-control input-md" wire:model="title"  />
                                @error('name')  <p class="text-danger">{{$message}}</p>  @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Description</label>
                            <div class="col-md-4">
                                <textarea class="form-control" placeholder="Description" wire:model="desc"></textarea>
                                @error('desc')  <p class="text-danger">{{$message}}</p>  @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Status</label>
                            <div class="col-md-4">
                                <select class="form-control" wire:model="status">
                                    <option value="Approved">Approved</option>
                                    <option value="Complete">Complete</option>
                                    <option value="Declined">Declined</option>
                                </select>
                                @error('status')  <p class="text-danger">{{$message}}</p>  @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label"></label>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-success">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
