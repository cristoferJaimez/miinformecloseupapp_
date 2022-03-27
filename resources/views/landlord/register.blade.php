    <h1>register</h1>
    <form action="{{route('landlord.register')}}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Name.." />
        <input type="text" name="domain" placeholder="Domain.." />
        <button type="submit">crear</button>
    </form>