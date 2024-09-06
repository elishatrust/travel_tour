<?php
use App\Models\User;
$userinfo = new User();

?>

<div class="table-responsive">
      <table class="table table-bordered table-striped table-hover dataTable js-exportable" id="tableId">
            <thead>
                  <tr>  <th>S/N</th>
                        <th>Full Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Location</th>
                        <th>Gender</th>
                        <th>status</th>
                        <th>Action</th>
                  </tr>
            </thead>
            <tfoot>
                  <tr>
                        <th>S/N</th>
                        <th>Full Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Location</th>
                        <th>Gender</th>
                        <th>status</th>
                        <th>Action</th>
                  </tr>
            </tfoot>
            <tbody>
                  <?php 

                  $n=1;
                  foreach($data as $mapp){ ?>
                        <tr>                     
                              <td><?=$n?></td>
                              <td><?=$userinfo->userFullName($mapp->user_id)?></td>
                              <td><?=$userinfo->userPhone($mapp->user_id)?></td>
                              <td><?=$userinfo->userEmail($mapp->user_id)?></td>
                              <td><?=$userinfo->userLocation($mapp->village_id) ?></td>
                              <td><?=$userinfo->userGender($mapp->user_id)?></td>
                              <td><?=$mapp->status == 1 ? 'Active' : 'Inactive'  ?></td>
                              <td>
                                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                    
                                                <button type="button" title="Edit Action"  onclick="editGeographicalMapping('<?=$mapp->id?>')" class="btn btn-outline-primary">
                                                <i class="zmdi zmdi-edit text-success"></i></button>
                  
                                                <button type="button" title="Delete Action" onclick="deleteGeographicalMapping('<?=$mapp->id?>')" class="btn btn-outline-danger ">
                                                <i class="zmdi zmdi-delete text-danger"></i></button>
                                                <button type="button" title="Edit Action"  onclick="viewGeographicalMapping('<?=$mapp->id?>')" class="btn btn-outline-primary">
                                                View</button>
                  
                                    </div>
                              </td>
                        </tr>
                  <?php $n++;} ?>
            </tbody>
      </table>     
</div>

<script>
       $(document).ready(function () {
            let table = new DataTable('#tableId');
      });
</script>