@extends('admin')

@section('content')
<div class="col-xl-12 col-md-12 mb-4">
    <div class="card">
        <div class="card-header">
            <h5> Roles List ({{ $roles->total() }}) <button data-bs-toggle="modal" data-bs-target="#roleAdd" class="btn btn-sm btn-primary float-end">Add New </button> </h5>
        </div>
        <div class="table-responsive text-nowrap">
            <table id="roleTable" class="table table-bordered table-striped mb-3">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Permissions</th>
                        <th>Active</th>
                        <th width="150">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($roles as $role)
                    <tr>
                        <td>{{ $role->id }}</td>
                        <td>{{ $role->name }}</td>
                        <td>@if($role->perms) {{ implode(', ', $role->perms) }}  @endif</td>
                        <td> <span class="badge bg-label-primary"> Active</span> </td>
                        <td> <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#roleEdit{{ $role->id }}"> <i class="ti ti-pencil"></i> </button>
                            <form action="{{ route('roles.destroy', $role->id) }}" method="post" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger"> <i class="ti ti-trash"></i> </button>
                            </form>
                            @include('pages.role.addUpdateModal')
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex float-end mr-2">
                {{ $roles->links() }}
            </div>
        </div>
    </div>
</div>
@include('pages.role.addUpdateModal')

<script>
    $(document).on('click', '.addRole', function(){
        var modal = $(this).closest('.modal')
        var formData = modal.find('form').serialize();

        $.ajax({
            url: '{{ route("roles.store") }}',
            method: 'post',
            data: formData,
            success: function(res) {
                if (res.success) {
                    modal.find('form')[0].reset();
                    modal.modal('hide');
                    toastr.success(res.message);
                    $('#roleTable').load(location.href+' #roleTable');
                }
            },
            error: function(error) {
                console.log(error.responseJSON.errors)
                $.each(error.responseJSON.errors, function(key, value) {
                    modal.find('#' + key + 'Error').text(value[0]);
                })
            }
        })
    });

    $(document).on('click', '.editRole', function() {
        var modal = $(this).closest('.modal');
        var formData = modal.find('form').serialize();

        $.ajax({
            url: '/admin/roles/' + modal.find('#id').val(),
            method: 'PUT',
            data: formData,
            success: function(res) {
                if (res.success) {
                    modal.modal('hide')
                    toastr.success(res.message);
                    $("#roleTable").load(location.href+ " #roleTable")
                    modal.find('#nameError').text('')
                }
            },
            error: function(error) {
                console.log(error.responseJSON.errors);
                $.each(error.responseJSON.errors, function(key, value) {
                    modal.find('#' + key + 'Errors').text(value[0]);
                })
            }
        })
    })
</script>

@endsection