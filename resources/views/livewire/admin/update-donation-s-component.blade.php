<div>
    <div class="container" style="padding: 30px 0">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-6">
                            Update Tran Request
                        </div>
                        <div class="col-md-6">
                            <a href="{{route('admin.showdonation')}}" class="btn btn-secondary pull-right">All Donation</a>
                        </div>

                    </div>
                </div>
                <div class="panel-body">
                    @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                    @endif
                    <form class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent = "donates">
                        <div class="form-group">
                            <label class="col-md-4 control-label">Tran Name</label>
                            <div class="col-md-4">
                                <input type="text" placeholder="Title" class="form-control input-md" wire:model="tran_id" />
                                @error('name')  <p class="text-danger">{{$message}}</p>  @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Description</label>
                            <div class="col-md-4">
                                <textarea class="form-control" placeholder="Description" wire:model="user_id"></textarea>
                                @error('desc')  <p class="text-danger">{{$message}}</p>  @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Title</label>
                            <div class="col-md-4">
                                <input type="text" placeholder="Title" class="form-control input-md" wire:model="donate_as" />
                                @error('name')  <p class="text-danger">{{$message}}</p>  @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Description</label>
                            <div class="col-md-4">
                                <textarea class="form-control" placeholder="Description" wire:model="donate"></textarea>
                                @error('desc')  <p class="text-danger">{{$message}}</p>  @enderror
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-md-4 control-label">Status</label>
                            <div class="col-md-4">
                                <select class="form-control" wire:model="donate_s">
                                    <option value="Approved">Approved</option>
                                    <option value="Complete">Complete</option>
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
