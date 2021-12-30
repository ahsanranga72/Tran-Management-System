<div>
    <div class="container" style="padding: 30px 0">
        <div class="row">
            <div class="panel panel-default">

                <div class="panel-body">
                    @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                    @endif
                    <form class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent = "donate">
                        <div class="form-group">
                            <label class="col-md-4 control-label">Want to Donate</label>
                            <div class="col-md-4">
                                <select class="form-control" wire:model="donate_as">
                                    <option value="">Select</option>
                                    <option value="Money">Money</option>
                                    <option value="Cloth">Cloth</option>
                                    <option value="Food">Food</option>
                                </select>
                                @error('donate_as')  <p class="text-danger">{{$message}}</p>  @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Description</label>
                            <div class="col-md-4">
                                <textarea class="form-control" placeholder="Description" wire:model="donate"></textarea>
                                @error('donate')  <p class="text-danger">{{$message}}</p>  @enderror
                            </div>
                        </div>



                        <div class="form-group">
                            <label class="col-md-4 control-label"></label>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-success">Donate</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
