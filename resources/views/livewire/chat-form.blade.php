<div>

    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" id="nombre" wire:model="nombre" >
        @error("nombre")
                <small class="text-danger">{{$nombre}} </small>
        @enderror


    </div>

    <div class="form-group">
        <label for="mensaje">mensaje</label>
        <input type="text" class="form-control" id="mensaje" wire:model="mensaje" >
        @error("mensaje")
                <small class="text-danger">{{$mensaje}} </small>
        @enderror
    </div>



<button class="btn btn-primary" wire:click="enviarMensaje"> Enviar Mensaje </button>

{{-- Mensajes de alerta --}}
<div style="position: absolute; top: 10px; right: 10px;"
class="alert alert-success collapse mt-3"
role="alert" id="avisoSuccess">
    Se ha enviado
</div>

<script>
    //Esto lo recibimos en JS cuando lo emite el componente
    //El evento "mensajeEnviado"
    window.livewire.on('mensajeEnviado', function(){

        //Mostramos el aviso
        $("#avisoSuccess").fadeIn("slow");

        //Ocultamos el aviso a los 3 segundos
        setTimeout(function(){$("#avisoSuccess").fadeOut("slow");},3000);
    });

</script>

</div>



