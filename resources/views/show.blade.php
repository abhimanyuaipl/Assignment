<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>




<div class="flex ">
    <div class="mr-4">
        <img class="mr-2" src="https://i.pravatar.cc/40" style="vertical-align: middle;
        width: 40px;
        height: 40px;
        border-radius: 50%;"
         alt="">
  

    </div>
    <div>
      
        <h5 class="font-bold mb-4"> {{$note->User->name }}</h5>
        <p class="text-sm" style="border-bottom: 2px solid gray;
        background-color:whitesmoke;">
            {{ $note->body }}
        </p>
        <a href="/edit/{{ $note->id }}"<button class="btn btn-primary">edit</button>
        <a href="/delete/{{ $note->id }}"><button class="btn btn-danger">delete</button></a>
    
    </div>

</div>