<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

<h3>Make your Notes</h3>
<h4>{{ session('msg') }}</h4>

<div>
    @foreach ($notes as $note)
        
  <form action="store/{{ $note->User->id }}" method="POST">

    @endforeach
   {{-- <label for="notes">MAKE NOTES</label> --}}
   @csrf
   <textarea name="body" 
                id="body"
                cols="30"   
                rows="10" ></textarea>
                <span class="error">
                    @error('body')
                    {{ $message }}
                        
                    @enderror</span>
  
    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>
