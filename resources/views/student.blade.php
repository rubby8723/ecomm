<html>
   
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <body>
     
    {{Form::open(array('route' => 'forms','method' => 'post'))}} 
    
    @csrf
    <div @class(['container'])>
      <table class="table table-striped">
        <thead>
        <tr>
          <th>Name</th>
          <th>City</th>
          <th>Gender</th>
          <th>Hobbies</th>
        
          <th>view</th>
        </tr>
      </thead>
      <tbody>
        @foreach($getstudent as $students)
        <tr>
          <td>{{$students->id}}</td>
          <td>{{$students->name}}</td>
          <td>{{$students->gender}}</td>
          <td>{{$students->hobbies}}</td>
          <td><a href="{{route('edit',['id'=>$students->id])}}">Edit</a></td>

        </tr>
        @endforeach
      </tbody>
      </table>
    
    <div @class(['row'])>
    <div @class(['col-6 mt-5'])>
      {{-- Name--}}      
        {{Form::label('name');}}
            <div @class(['input-group input-group-lg'])>
                {{ Form::text('name', old('name'),['class'=>'form-control', 'placeholder'=>'Enter Name'])}}
            </div><br>
            @if($errors->has('name'))
            <div @class(['error'])>{{$errors->first('name')}}</div>
            @endif

      {{-- City --}}      
            {{Form::label('city','Student City');}}
            {{ Form::select('city',array('' => 'SElect City','L' => 'Large', 'S' => 'Small'),[],['class'=>'form-control'])}}
            <br><br>
              @if($errors->has('city'))
              <div @class(['error'])>{{ $errors->first('city') }}</div>
              @endif  

              <select class="form-select" name="student_id" aria-label="Default select example">
               @foreach($getstudent as $student)
                <option value="{{$student->id}}">{{$student->id}}</option>
               @endforeach
              </select>
              
       {{-- Gender --}}
              {{Form::label('email', 'Student Gender');}}
              <div class="form-check">
                {{ Form::radio('gender', 'Girl',['checked'=>'true'])}}
                {{Form::label('gender','Girl');}}
              </div>
              <div class="form-check">
                {{ Form::radio('gender', 'Boy')}}
                {{Form::label('gender','Boy');}}
              </div>
              <br>
              @if($errors->has('gender'))
            <div @class(['error'])>{{ $errors->first('gender') }}</div>
            @endif

     {{-- Hobbies --}}
            {{Form::label('hobbies', 'Student Hobbies');}}
              <div class="form-check">
                {{ Form::checkbox('hobbies', 'Playing',['checked'=>'true']);}}
                {{Form::label('hobbies', 'Playing');}}
                {{ Form::checkbox('hobbies', 'book Reading');}}
                {{Form::label('hobbies', 'book Reading');}}
                {{ Form::checkbox('hobbies', 'Yoga');}}
                {{Form::label('hobbies', 'Yoga');}}
                {{ Form::checkbox('hobbies', 'Meditation');}}
                {{Form::label('hobbies', 'Meditation')}}
              </div>
             <br>
       {{-- Image --}}
       {{Form::file('images')}} 
       <br> <br>
<button type="submit" class="btn btn-primary" name="submit">submit</button>
</div> {{-- col-6 closed --}}
</div>
</div>
{{Form::close()}}
</body>
</html>