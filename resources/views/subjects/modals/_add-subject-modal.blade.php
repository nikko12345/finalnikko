<!-- Modal -->
<div class="modal fade" id="add-subject-modal" tabindex="-1" role="dialog" aria-labelledby="add-subject-modalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form action="{{ route ('subjects.store') }}" method="post">
      <div class="modal-header">
        <h5 class="modal-title" id="add-subject-modalLabel">Add Subject</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
                  
                        @csrf
                        <input class="form-control mb-2" name="subject_code" placeholder="Subject Code"/>
                        <input class="form-control mb-2" name="subject_description" placeholder="Subject Description"/>         
                        <input class="form-control mb-2" name="subject_time" placeholder="Subject Time"/> 
                        
                    
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Add Subject</button>
        </div>
        </form>  
    </div>
  </div>
</div>