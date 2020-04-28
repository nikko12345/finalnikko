<!-- Modal -->
<div class="modal fade" id="edit-subject-modal-{{ $subject->id }}" tabindex="-1" role="dialog" aria-labelledby="edit-subject-modalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
  
      <div class="modal-header">
        <h5 class="modal-title" id="edit-subject-modalLabel">Are you sure to Add {{ $subject->full_name }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

            <form action=" {{ route('subjects.update',array('id'=>$subject->id))}}" method="post">
                @csrf
                <div class="modal-body">
                </div>
                    <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger">Add Subject</button>
                    </div>
            </from>
    </div>
  </div>
</div>