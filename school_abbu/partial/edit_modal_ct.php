<?php 
echo
'<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Edit Name</h5>
        </div>
        <form action="class_teacher.php" method="POST">
          <div class="modal-body">
            <input type="hidden" name="snoEdit" id="snoEdit">
           <div class="form-group">
              <label for="title">Roll No</label>
              <input type="text" class="form-control" id="titleEdit" name="roll_no" aria-describedby="emailHelp">
            </div> 

            <div class="form-group">
              <label for="desc">Name</label>
              <textarea class="form-control" id="descriptionEdit" name="name" rows="3"></textarea>
            </div> 
          </div>
          <div class="modal-footer d-block mr-auto">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>';




?>