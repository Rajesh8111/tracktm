<div class="modal fade" id="add_task_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-faded">
        <h5 class="modal-title" id="exampleModalLabel">Add Task</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
           <div class="row input-group">
               <div class="col-6">
                    <label>Title</label>
               </div>
               <div class="col-6">
                    <input type="text" id="title" name="title" class="w-100"></input>
               </div>
           </div>

            <div class="row input-group">
               <div class="col-6">
                    <label>Project</label>
               </div>
               <div class="col-6">
               <SELECT name="Project" id="Project" class="w-100 form-control-sm">
                <OPTION VALUE="Value1">Choice 1 Text
                <OPTION VALUE="Value2">Choice 2 Text
                </SELECT>
               </div>
           </div>

            <div class="row input-group">
               <div class="col-6">
                    <label>Start Date</label>
               </div>
               <div class="col-6">
                    <input type="date" class="w-100"></input>
               </div>
           </div>

            <div class="row input-group">
               <div class="col-6">
                    <label>Duration</label>
               </div>
               <div class="col-2">
                        <input type="number" name="points" step="1" name="Days" id="Days" class="text-mini">Days                  
               </div>
               <div class="col-2">
                        <input type="number" name="points" step="1" name="Months" id="Months" class="text-mini">Hours                    
               </div>
               <div class="col-2">
                        <input type="number" name="points" step="1" name="Minutes" id="Minutes" class="text-mini">Mins                    
               </div>
           </div>

           <div class="row input-group">
               <div class="col-6">
                    <label>Description</label>
               </div>
               <div class="col-6">
                    <textarea type="textarea" class="w-100"></textarea>
               </div>
           </div>

           

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Add Task</button>
      </div>
    </div>
  </div>
</div>