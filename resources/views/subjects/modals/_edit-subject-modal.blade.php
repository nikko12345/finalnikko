<!-- Modal -->
<div class="modal fade" id="edit-subject-modal-{{ $subject->id }}" tabindex="-1" role="dialog" aria-labelledby="edit-subject-modalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form action="{{ route ('subjects.update') }}" method="post">
      <div class="modal-header">
      <h5 class="modal-title" id="edit-subject-modalLabel">Are you sure to Add Subject {{ $subject->full_name }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
                  
                        @csrf
                        <input type="hidden" name="id" value="{{ $subject->id }}"/>
                        <input class="form-control mb-2" name="subject_code" placeholder="Subject Code" value="{{ $subject->subject_code }}"/>
                        <input class="form-control mb-2" name="subject_description" placeholder="Subject Description" value="{{ $subject->subject_description }}"/>         
                        <input class="form-control mb-2" name="subject_time" placeholder="Subject Time" value="{{ $subject->subject_time }}"/> 
                        
                    
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Add Subject</button>
        </div>
        </form>  
    </div>
  </div>
</div>