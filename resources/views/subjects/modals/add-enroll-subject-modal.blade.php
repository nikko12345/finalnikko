<!-- Modal -->
<div class="modal fade" id="add-enroll-subject-modal-{{ $subject->id }}" tabindex="-1" role="dialog" aria-labelledby="add-enroll-subject-modalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
  
      <div class="modal-header">
        <h5 class="modal-title" id="add-enroll-subject-modalLabel">Are you already paid?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

            <form action=" {{ route('subjects.update',array('id'=>$subject->id))}}" method="post">
                @csrf
                <div class="modal-body">
                </div>
                    <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                            <button type="submit" class="btn btn-primary">Yes</button>
                    </div>
            </from>
    </div>
  </div>
</div>