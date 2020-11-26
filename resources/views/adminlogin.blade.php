<h1>Admin  Login</h1>

<form action="#" method="post">
    @csrf
  
    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>
      @error('useranme')
      {{ $message }}
          
      @enderror
  
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
       @error('useranme')
      {{ $message }}
          
      @enderror
  
      <button type="submit">Login</button>
   
       
  </form>

</form>