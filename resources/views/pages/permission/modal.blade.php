<div class="modal fade" id="backDropModal{{$per->id}}" data-bs-backdrop="static" tabindex="-1">
    <div class="modal-dialog">
        <form class="modal-content" method="post">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title">Edit Permission</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="id" value="{{ $per->id }}">
                <div class="row">
                    <div class="col mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter Name" value="{{ $per->name }}">
                        <span class="text-danger" id="nameError"></span>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary editPermission">Save</button>
            </div>
        </form>
    </div>
</div>

<div class="modal fade" id="backDropModal" data-bs-backdrop="static" tabindex="-1">
    <div class="modal-dialog">
        <form class="modal-content" method="post">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title">Add Permission</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter Name">
                        <span class="text-danger" id="nameErrors"></span>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary addPermission">Save</button>
            </div>
        </form>
    </div>
</div>