window.onload = function() {
    const chart = new Chartisan({
        el: '#chart',
        url: "/ruta/a/tu/controlador/de/graficos", // Asegúrate de reemplazar esto con la ruta a tu controlador de gráficos
        hooks: new ChartisanHooks()
            .colors(['#4299E1'])
            .datasets('line')
            .axis(true)
    });
}
