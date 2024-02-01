@extends('admin')

@section('content')
<div class="col-xl-12 col-md-12 mb-4">
    <div class="card">
        <div class="card-header">
            <h5> Permissions List ({{ $permissions->total() }}) <button data-bs-toggle="modal" data-bs-target="#backDropModal" class="btn btn-sm btn-primary float-end">Add New </button> </h5>
        </div>
        <div class="table-responsive text-nowrap">
            <table id="permissionTable" class="table table-bordered table-striped mb-3">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Active</th>
                        <th width="150">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($permissions as $per)
                    <tr>
                        <td>{{ $per->id }}</td>
                        <td>{{ $per->name }}</td>
                        <td> <span class="badge bg-label-primary"> Active</span> </td>
                        <td>
                            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#backDropModal{{ $per->id }}"><i class="ti ti-pencil"></i></button>

                            <form action="{{ route('permissions.destroy', $per->id) }}" method="post" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')"> <i class="ti ti-trash"></i> </button>
                            </form>
                            @include('pages.permission.modal')
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex float-end mr-2">
                {{ $permissions->links() }}
            </div>
        </div>
    </div>
</div>
@include('pages.permission.modal')

<script>

   $(document).on('click', '.addPermission', function(){
        var modal = $(this).closest('.modal');
        var formData = modal.find('form').serialize();
        $.ajax({
            url: '{{ route("permissions.store") }}',
            method: 'post',
            data: formData,
            success: function(res) {
                if (res.success) {
                    modal.find('form')[0].reset();
                    modal.modal('hide')
                    toastr.success(res.message);
                    $('#permissionTable').load(location.href + ' #permissionTable');
                }
            },
            error: function(error) {
                $.each(error.responseJSON.errors, function(key, value) {
                    $('#' + key + 'Errors').text(value[0]);
                })
            }
        })
    });

    $(document).on('click', '.editPermission', function(){
        var modal = $(this).closest('.modal');
        var formData = modal.find('form').serialize();
        $.ajax({
            url: '/admin/permissions/' + modal.find('#id').val(),
            method: 'PUT',
            data: formData,
            success: function(resp) {
                if (resp.success) {
                    modal.modal('hide');
                    toastr.success(resp.message);
                    $('#permissionTable').load(location.href + " #permissionTable");
                    modal.find('#nameError').text('')
                }
            },
            error: function(error) {
                $.each(error.responseJSON.errors, function(key, value) {
                    modal.find('#' + key + 'Error').text(value[0]);
                })
            }
        })
    });
</script>

@endsection