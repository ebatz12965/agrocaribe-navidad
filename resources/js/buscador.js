input.addEventListener("keyup", async () => {
    const res = await fetch(`/buscar?q=${input.value}`);
    const data = await res.json();
    renderResultados(data);
});
