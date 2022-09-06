@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col md-12 mx-auto">
                <h3>Contactos</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Telefono</th>
                            <th>Email</th>
                            <th>Mensaje</th>
                            <th>Fecha</th>
                            <th>Accion</th>
                        </tr>
                    </thead>
                  <tbody>
                    @foreach ($contactos as $contacto)
                    <tr>
                        <td>{{ $contacto->nombre}}</td>
                        <td>{{ $contacto->telefono}}</td>
                        <td>{{ $contacto->email}}</td>
                        <td>{{ $contacto->mensaje}}</td>
                        <td>{{ $contacto->created_at}}</td>
                        <td>
                            <form action="{{ route('contactos.destroy',$contacto)}}" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger btn-sm show_confirm" type="submit"><i class="bi bi-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                        
                    @endforeach
                  </tbody>
                </table>
                  {{ $contactos->links()}}
            </div>
        </div>
    </div>
@endsection
@section('js')
  <script src="{{ asset('js/jquery.js')}}"></script>  
  <script src="{{ asset('js/sweetalert2.js')}}"></script>
  <script type="text/javascript">
    $('.show_confirm').click(function(event) {
         var form =  $(this).closest("form");
         var name = $(this).data("name");
         event.preventDefault();
         swal({
             title: `Are you sure you want to delete this record?`,
             text: "If you delete this, it will be gone forever.",
             icon: "warning",
             buttons: true,
             dangerMode: true,
         })
         .then((willDelete) => {
           if (willDelete) {
             form.submit();
           }
         });
     });
</script>
@endsection