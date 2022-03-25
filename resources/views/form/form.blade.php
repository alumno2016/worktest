    <h1>{{$type}} users</h1>

    @if(count($errors)>0)
    
        <div class="alert alert-danger" role="alert">
            
           <ul>
           @foreach( $errors->all() as $error)
               <li>
                    {{$error}}
               </li>
            @endforeach
           </ul>

        </div>

    @endif

    <label for="">User-name:</label>
    @error('user')
    <br/>
    <small>*{{$message}}</small>
    @enderror
    <input class="form-control" type="text" name="user" value="{{ isset($data->user) ? $data->user : old('user')}}">
    <label for="">Name:</label>
    @error('name')
    <br/>
    <small>*{{$message}}</small>
    @enderror
    <input class="form-control" type="text" name="name" value="{{ isset($data->name) ? $data->name : old('name')}}">
    <label for="">Phone/Cel:</label>
    @error('phone')
    <br/>
    <small>*{{$message}}</small>
    @enderror
    <input class="form-control" type="number" name="phone" value="{{ isset($data->phone) ? $data->phone : old('phone')}}">
    <label for="">Address:</label>
    @error('addresss')
    <br/>
    <small>*{{$message}}</small>
    @enderror
    <input class="form-control" type="text" name="address" value="{{ isset($data->address) ? $data->address : old('address')}}">
    <label for="">Email:</label>
    @error('email')
    <br/>
    <small>*{{$message}}</small>
    @enderror
    <input class="form-control" type="email" name="email" value="{{ isset($data->email) ? $data->email : old('email')}}">