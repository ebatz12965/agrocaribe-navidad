@extends('layout')

@section('content')

    <h3 style="text-align:center;">Mensajes Navideños 🎁</h3>

    <div class="personajes">
        <div class="personaje">
            <div class="emoji">🧑‍💻</div>
            Pancho
        </div>
        <div class="personaje">
            <div class="emoji">🎸</div>
            Hubertt
        </div>
        <div class="personaje">
            <div class="emoji">🤓</div>
            Batz
        </div>
    </div>

    <input type="text" id="buscador" placeholder="Buscar tu nombre...">

    <div id="resultados"></div>

    <script>
        const buscador = document.getElementById('buscador');
        const resultados = document.getElementById('resultados');

        buscador.addEventListener('keyup', async () => {
            const q = buscador.value.trim();
            resultados.innerHTML = '';

            if (q.length < 2) return;

            const res = await fetch(`/buscar?q=${q}`);
            const data = await res.json();

            data.forEach(item => {
                const div = document.createElement('div');
                div.className = 'result';
                div.textContent = item.nombre_completo;
                div.onclick = () => window.location.href = `/mensaje/${item.id}`;
                resultados.appendChild(div);
            });
        });
    </script>

@endsection
