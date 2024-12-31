<?php 
echo
'<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Edit Marks</h5>
        </div>
        <form action="enter_marks.php?s='.$s_val.'" method="POST">
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

            <div class="form-group">
              <label for="title">Marks</label>
              <input type="number" class="form-control" id="marksEdit" name="'.  $inp_name_w.'" aria-describedby="emailHelp">
            </div> 

            <div class="form-group">
              <label for="title">Marks</label>
              <input type="number" class="form-control" id="marks_pEdit" name="'.  $inp_name_p.'" aria-describedby="emailHelp">
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