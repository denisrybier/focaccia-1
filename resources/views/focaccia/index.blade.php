{{-- @if (Session::has('mensaje'))
    {{ Session::get('mensaje') }}
@endif --}}


<table class="table table-bordered table-dark">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Precio</th>
            <th scope="col">Foto</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($focaccias as $focaccia)
            <tr>
                <td>{{ $focaccia->id }}</td>
                <td>{{ $focaccia->Nombre }}</td>
                <td>{{ $focaccia->Descripcion }}</td>
                <td>{{ $focaccia->Precio }}</td>
                <td>Foto
                    {{-- <img src="{{ asset('storage') . '/' . $focaccia->Foto }}" alt="" width="100"> --}}
                </td>
                <td>
                    {{-- <a href="{{ url('/focaccia/' . $focaccia->id . '/edit') }}">
                        Editar
                    </a> --}}

                    Editar | Borrar

                    {{-- <form action="{{ url('/focaccia/' . $focaccia->id) }}" method="post">
                        @csrf
                        {{ method_field('DELETE') }}
                        <input type="submit" onclick="return confirm('¿Estas seguro de eliminar este usuario')"
                            value="Borrar">
                    </form> --}}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
