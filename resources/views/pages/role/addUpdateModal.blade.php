<div class="modal fade" id="roleAdd" data-bs-backdrop="static" tabindex="-1">
    <div class="modal-dialog">
        <form class="modal-content" method="post">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title">Add Role</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter Name">
                        <span class="text-danger" id="nameError"></span>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Permission</label>
                        <div class="row ">
                        <span class="text-danger" id="permsError"></span>
                            @foreach($permissions as $perms)
                                <div class="col-md-3 list-group-item mb-3">
                                    <label> <input class="form-check-input me-1" type="checkbox" name="perms[]" value="{{ $perms->name }}">
                                        {{ $perms->name }}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary addRole">Save</button>
            </div>
        </form>
    </div>
</div>

<div class="modal fade" id="roleEdit{{ $role->id }}" data-bs-backdrop="static" tabindex="-1">
    <div class="modal-dialog">
        <form class="modal-content" method="post">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title">Edit Role</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col mb-3">
                        <input type="hidden" id="id" value="{{ $role->id }}">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter Name" value="{{ $role->name }}" >
                        <span class="text-danger" id="nameErrors"></span>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Permission</label>
                        <div class="row ">
                            @foreach($permissions as $perms)
                                <div class="col-md-3 list-group-item mb-3">
                                    <label> <input class="form-check-input me-1" type="checkbox" name="perms[]" value="{{ $perms->name }}" {{ in_array($perms->name, $role->perms) ? 'checked' :'' }} >
                                        {{ $perms->name }}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                        <span class="text-danger" id="permsErrors"></span>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary editRole">Save</button>
            </div>
        </form>
    </div>
</div>