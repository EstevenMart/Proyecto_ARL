<div>
    <br><br>
    <h5 class="mt3"><strong>Lista de mensajes</strong></h5>

    @foreach ($mensajes as $mensaje)
        <li>{{$mensaje["usuario"]}} - {{$mensaje["mensaje"]}}</li>
    @endforeach

    <script>

        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('d56906a00fed05f8b18a', {
          cluster: 'us2'
        });

        var channel = pusher.subscribe('chat-channel');
        channel.bind('chat-event', function(data) {
          //alert(JSON.stringify(data));
          window.livewire.emit('mensajeRecibido',data);
        });
      </script>

</div>
