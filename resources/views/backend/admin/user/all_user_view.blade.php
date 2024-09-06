
<div class="table-responsive">
    <table class="table table-bordered table-striped table-hover dataTable js-exportable" id="tableId">
        <thead>
            <tr>
                <th>S/N</th>
                <th>Name</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Role</th>
                <th>Created At</th>
                <th>Action</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>S/N</th>
                <th>Name</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Role</th>
                <th>Created At</th>
                <th>Action</th>
            </tr>
        </tfoot>
        <tbody>
            <?php
                                                $n = 1;
                                                ?>
            @foreach($data as $user)

            <tr>
                <td>{{ $n++ }}</td>
                <td>{{ $user->first_name . ' ' . $user->last_name}}</td>
                <td>{{ $user->phone_number }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->gender }}</td>
                <td>{{ $serviceModel->userRoleName($user->role) }}</td>
                <td>{{ \Carbon\Carbon::parse($user->created_at)->format('F, j, Y') }}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic outlined example">

                        <button type="button" title="Edit Action" onclick="editUser('<?=$user->id?>')"
                            class="btn btn-outline-primary" data-toggle="modal" data-target="#largeModal">
                            <i class="zmdi zmdi-edit text-success"></i></button>

                        <button type="button" title="Delete Action" onclick="deleteUser('<?=$user->id?>')"
                            class="btn btn-outline-danger ">
                            <i class="zmdi zmdi-delete text-danger"></i></button>

                    </div>
                </td>
            </tr>

            @endforeach

        </tbody>
    </table>
</div>

<script>
    $(document).ready(function () {

        let table = new DataTable('#tableId');
    });
</script>

