
<div>
    @foreach($errors->all() as $error)
        {{$error}}
    @endforeach
    <br><br>
</div>

<div>
    <form action="{{Route('business.store')}}" method="post">
        @csrf
        <div>
            <input type="text" name="name" placeholder="Name" value="{{old('name')}}"><br>
            @error('name')
                {{$message}}
            @enderror
        </div>
        <div>
            <input type="text" name="email" placeholder="email" value="{{old('email')}}"><br>
            @error('email')
                {{$message}}
            @enderror
        </div>
        <div>
            <input type="text" name="address" placeholder="Address" value="{{old('address')}}">
            @error('address')
                {{$message}}
            @enderror
        </div>
        <div>
            <input type="submit" name="id" value="Submit">
        </div>
    </form>
</div>
