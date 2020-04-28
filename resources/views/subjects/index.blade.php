@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
                <h1>Subject</h1>
               
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#subject-enroll-modal">Subject Enroll</button>
                @include('subjects.modals._subject-enroll-modal')
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Subject Code</th>
                                <th>Subject Description</th>
                                <th>Subject Schedule</th>
                                <th>Action</th>
                            </tr>
                         </thead>
                         <tbody>
                            @foreach($subjects as $subject)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $subject->subject_code }}</td>            
                                <td>{{ $subject->subject_description }}</td> 
                                <td>{{ $subject->subject_time }}</td>
                                <td>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-subject-modal-{{$subject->id}}">Add</button>
                                    @include('subjects.modals._edit-subject-modal')
                                    
                                </td>
                            </tr>  
                            @endforeach 
                            </tbody>
                    </table> 
                                               
            
        </div>
    </div>
</div>
@endsection
