<!-- Modal -->
<div class="modal fade" id="subject-enroll-modal" tabindex="-1" role="dialog" aria-labelledby="subject-enroll-modalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form action="{{ route ('subjects.subjectenroll') }}" method="post">
      <div class="modal-header">
        <h5 class="modal-title" id="subject-enroll-modalLabel">Subject Enroll</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
        <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Subject Code</th>
                                <th>Subject Description</th>
                                <th>Subject Schedule</th>
                               
                            </tr>
                         </thead>
                         <tbody>
                            @foreach($subjects as $subject)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $subject->subject_code }}</td>            
                                <td>{{ $subject->subject_description }}</td> 
                                <td>{{ $subject->subject_time }}</td>

                            </tr>  
                            @endforeach 
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add-enroll-subject-modal-{{$subject->id}}">Paid</button>
                                    @include('subjects.modals.add-enroll-subject-modal')
                            </tbody>
                    </table> 
        </div>
        </form>  
    </div>
  </div>
</div>