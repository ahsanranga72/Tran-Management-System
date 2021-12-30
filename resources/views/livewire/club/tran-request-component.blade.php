<div>
    <div class="container" style="padding: 30px 0">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-6">
                            Add Tran Request
                        </div>
                        <div class="col-md-6">
                            <a href="{{route('club.mytrans')}}" class="btn btn-success pull-right">My Tran Request</a>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                    @endif
                    <form class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent = "tranrequest">
                        <div class="form-group">
                            <label class="col-md-4 control-label">Title</label>
                            <div class="col-md-4">
                                <input type="text" placeholder="Title" class="form-control input-md" wire:model="title" />
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
                            <label class="col-md-4 control-label">Image</label>
                            <div class="col-md-4">
                                <input type="file" class="input-file" wire:model="image" />
                                @error('image')  <p class="text-danger">{{$message}}</p>  @enderror
                                @if ($image)
                                    <img src="{{$image->temporaryUrl()}}" width="120">
                                @endif
                                @error('image')  <p class="text-danger">{{$message}}</p>  @enderror
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
