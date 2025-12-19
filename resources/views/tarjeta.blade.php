@extends('layout')

@section('content')

    <div id="tarjeta" class="card">
        <h2>🎄 Feliz Navidad 🎄</h2>

        <p><strong>{{ $companero->nombre_completo }}</strong></p>

        <p>{{ $companero->mensaje->mensaje }}</p>

        <hr>

        <p style="font-size:0.9rem;">
            Con cariño,<br>
            <strong>Edwing Batz</strong>
        </p>
    </div>

    <button class="btn btn-download" onclick="descargar()">Descargar tarjeta</button>
    <button class="btn btn-close" onclick="window.location.href='/'">Cerrar</button>

    <script src="https://cdn.jsdelivr.net/npm/html2canvas@1.4.1/dist/html2canvas.min.js"></script>

    <script>
        function descargar() {
            html2canvas(document.getElementById('tarjeta')).then(canvas => {
                const link = document.createElement('a');
                link.download = 'Mensaje-Navidad-Edwing-Batz.png';
                link.href = canvas.toDataURL();
                link.click();
            });
        }
    </script>

@endsection
