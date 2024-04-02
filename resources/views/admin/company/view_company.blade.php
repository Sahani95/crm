@foreach($users as $user)
<div class="modal fade" id="user-info{{$user->id}}">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Viewing <strong>{{$user->name}}</strong></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="Name" class="col-form-label">Name</label>
                            <div class="col-sm-10">
                                <p>{{$user->name}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="Email" class="col-form-label">Email</label>
                            <div class="col-sm-10">
                                <p>{{$user->email}}</p>
                            </div>
                        </div>
                    </div>                           
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="Mobile" class="col-form-label">Image</label>
                            <div class="col-sm-10">
                                <p><img src="{{ asset('storage/logos/' . $user->logo) }}" width="100px"></p>
                            </div>
                        </div>
                    </div>                 
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@endforeach
