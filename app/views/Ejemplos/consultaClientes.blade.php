<!DOCTYPE html>
<html>
    <head>
        {{HTML::style('css/boostrap.css')}}
        <meta charset="UTF-8">
        <title>Consultar clientes</title>
    </head>
    <body>
        <section class="col-md-12 ">
            <article class="col-md-6 col-md-offset-3">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Nombres</th>
                            <th>Apellido</th>
                            <th>Documentos</th>
                            <th>Usuarios</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(empty($Clientes))
                            <td>no hay </td>
                            <td>clientes registrados </td>
                            <td>por el </td>
                            <td>momento...</td>
                        @endif
                    @foreach ($Clientes as $Cliente)
                    <tr>
                        <td>{{$Cliente->primer_nombre}}</td>
                        <td>{{$Cliente->primer_apellido}}</td>
                        <td>{{$Cliente->documento}}</td>
                        <td>{{$Cliente->username}}</td>
                    </tr>
                    @endforeach

                    </tbody>
                </table>
            </article>
        </section>
    </body>
</html>
