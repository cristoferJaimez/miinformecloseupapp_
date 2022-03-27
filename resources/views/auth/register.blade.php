@include('layout.nav')
   <h1>register</h1>
    <form action="{{route('register')}}" method="POST">
        @csrf
            
    
        <button type="submit">crear</button>
    </form>