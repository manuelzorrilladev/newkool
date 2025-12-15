<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Email de Contacto/Garantía</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">

    <div style="background-color: #f4f4f4; padding: 20px; border-radius: 8px;">
        <h1 style="color: #004d99; border-bottom: 2px solid #ccc; padding-bottom: 10px;">
            📧 Nuevo Email Recibido
        </h1>



        <h2 style="color: #555; margin-top: 30px; border-bottom: 1px solid #eee;">
            Datos del Remitente
        </h2>
        <ul style="list-style: none; padding: 0;">
            <li style="margin-bottom: 8px;">
                <strong>Nombre:</strong> {{ $data['name'] ?? 'N/A' }}
            </li>
            <li style="margin-bottom: 8px;">
                <strong>Email:</strong> <a href="mailto:{{ $data['email'] ?? '#' }}" style="color: #004d99; text-decoration: none;">{{ $data['email'] ?? 'N/A' }}</a>
            </li>
            <li style="margin-bottom: 8px;">
                <strong>Número de teléfono:</strong> {{ $data['phone'] ?? 'No proporcionado' }}
            </li>
            <li style="margin-bottom: 8px;">
                <strong>Dirección:</strong> {{ $data['location'] ?? 'No proporcionada' }}
            </li>
        </ul>

        <h2 style="color: #555; margin-top: 30px; border-bottom: 1px solid #eee;">
            Falla reportada
        </h2>
        <div style="border-left: 4px solid #004d99; background-color: #fff; padding: 15px; margin: 15px 0; border-radius: 4px;">
            <p style="white-space: pre-wrap; margin: 0; font-style: italic;">
                {{ $data['issue']  }}
            </p>
        </div>

        <p>Comentarios adicionales:</p>
        <p>{{ $data['comments'] ?? 'No hay comentarios adicionales.' }}</p>


        {{-- Lógica para mostrar el mensaje del archivo adjunto --}}
        @if (isset($data['attachmentPath']) && $data['attachmentPath'])
            <div style="margin-top: 30px; padding: 10px; background-color: #d9edf7; border: 1px solid #bce8f1; color: #31708f; border-radius: 4px;">
                <strong>📎 ¡Archivo Adjunto!</strong> Se ha adjuntado un archivo a este correo. 
            </div>
        @else
            <div style="margin-top: 30px; padding: 10px; background-color: #fff0f0; border: 1px solid #f0d5d5; color: #cc6666; border-radius: 4px;">
                No se adjuntó ningún archivo.
            </div>
        @endif
        
        <hr style="margin-top: 40px; border: 0; border-top: 1px solid #ccc;">

        <p style="font-size: 0.9em; color: #888; text-align: center;">
            <strong>ESTE MENSAJE ES AUTOMÁTICO, FAVOR NO RESPONDER.</strong> En caso de necesitar responder, elija uno de los métodos de contacto asignados en el mensaje original.
        </p>
    </div>

</body>
</html>