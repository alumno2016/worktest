    <h1>{{$type}} users</h1>

    <label for="">User-name</label>
    @error('user')
    <br/>
    <small>*{{$message}}</small>
    @enderror
    <input type="text" name="user" value="{{ isset($data->user) ? $data->user : ''}}">
    <label for="">Name:</label>
    @error('name')
    <br/>
    <small>*{{$message}}</small>
    @enderror
    <input type="text" name="name" value="{{ isset($data->name) ? $data->name : ''}}">
    <label for="">Phone/Cel:</label>
    @error('phone')
    <br/>
    <small>*{{$message}}</small>
    @enderror
    <input type="number" name="phone" value="{{ isset($data->phone) ? $data->phone : ''}}">
    <label for="">Address:</label>
    @error('addresss')
    <br/>
    <small>*{{$message}}</small>
    @enderror
    <input type="text" name="address" value="{{ isset($data->address) ? $data->address : ''}}">
    <label for="">Email:</label>
    @error('email')
    <br/>
    <small>*{{$message}}</small>
    @enderror
    <input type="email" name="email" value="{{ isset($data->email) ? $data->email : ''}}">