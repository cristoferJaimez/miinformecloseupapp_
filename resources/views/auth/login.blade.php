    <h1>login</h1>
    @include('layout.nav')
    <form action="" method="POST">
        <!--token-->
        @csrf
        <label>
            <input type="email" name="email" placeholder="Correo Electronico" />
        </label>
        <br>
        <label>
            <input type="password" name="password" placeholder="Contraseña" />
        </label>
        <br>
            <button type="submit">Log in</button>
    </form>