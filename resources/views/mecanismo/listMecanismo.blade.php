


<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Parte del Cuerpo</th>
            <th></th>
        
        </tr>
    </thead>
    <tbody>
        @foreach ( $listMecanismo as $Mecanismo )
            <tr>
                <td>{{$Mecanismo->denominacionMecanismo	}}</td>
                
                <td>
                    <a href="#" class="btn btn-warning">Editar</a>
                    <a href="#" class="btn btn-danger">Borrar</a> 
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
