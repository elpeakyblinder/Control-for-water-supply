fetch("/chart-data")
    .then((response) => response.json())
    .then((data) => {
        console.log(data); // Imprime los datos aquí
        let labels = data.map((corte) => corte.vivienda + ' - ' + corte.fecha); // Crea un conjunto de etiquetas con la vivienda y la fecha
        let datasets = data.map((corte) => {
            return {
                label: corte.fecha + ' - ' + corte.vivienda, // Etiqueta con la fecha y la vivienda
                data: [{x: corte.vivienda + ' - ' + corte.fecha, y: corte.litros}], // Asigna el nombre de la vivienda y la fecha como la etiqueta en el eje x
                backgroundColor: 'rgba(92, 77, 148, 1)', // Color de las barras
                borderColor: 'rgba(173, 120, 241, 1)', // Color de la línea
                pointBackgroundColor: 'rgba(13, 255, 255, 1)', // Color de los puntos
                pointRadius: 7, // Ajusta el tamaño de los puntos
                barThickness: 50, // Ajusta el grosor de las barras
            };
        });
        new Chart(document.getElementById("chart"), {
            type: "line", // Cambia 'bar' a 'line' para una gráfica de líneas
            data: {
                labels: labels, // Usa el conjunto de etiquetas que hemos creado
                datasets: datasets,
            },
            options: {
                responsive: true, // Hace que la gráfica sea responsiva
                animation: {
                    duration: 1000, // Duración de la animación en milisegundos
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: "Litros",
                            color: "white",
                            font: {
                                family: "Silkscreen, sans-serif",
                                size: 20,
                            },
                        },
                        ticks: {
                            color: "white",
                        },
                        grid: {
                            color: 'rgba(255, 255, 255, 0.2)', // Cambia el color de las líneas de la cuadrícula
                            borderColor: 'rgba(255, 255, 255, 0.2)', // Cambia el color del borde de la cuadrícula
                            tickColor: 'rgba(255, 255, 255, 0.2)', // Cambia el color de las marcas de la cuadrícula
                            lineWidth: 1, // Cambia el ancho de las líneas de la cuadrícula
                            borderDash: [5, 5], // Cambia el patrón de las líneas de la cuadrícula (este es un patrón de guiones)
                            tickLength: 10, // Cambia la longitud de las marcas de la cuadrícula
                        },
                    },
                    x: {
                        // title: {
                        //     display: true,
                        //     text: "Vivienda",
                        //     color: "white",
                        //     font: {
                        //         family: "Silkscreen, sans-serif",
                        //         size: 20,
                        //     },
                        // },
                        ticks: {
                            color: "white",
                        },
                        grid: {
                            color: 'rgba(255, 255, 255, 0.2)', // Cambia el color de las líneas de la cuadrícula
                            borderColor: 'rgba(255, 255, 255, 0.2)', // Cambia el color del borde de la cuadrícula
                            tickColor: 'rgba(255, 255, 255, 0.2)', // Cambia el color de las marcas de la cuadrícula
                            lineWidth: 1, // Cambia el ancho de las líneas de la cuadrícula
                            borderDash: [5, 5], // Cambia el patrón de las líneas de la cuadrícula (este es un patrón de guiones)
                            tickLength: 10, // Cambia la longitud de las marcas de la cuadrícula
                        },
                    },
                },
                plugins: {
                    legend: {
                        display: false // Esto oculta todo el texto en la leyenda y también los labels.
                    },
                    tooltip: {
                        callbacks: {
                            title: function(context) {
                                return context[0].label.split(' - ')[1]; // Muestra solo la fecha en el título del tooltip
                            },
                            label: function(context) {
                                return context.dataset.label.split(' - ')[0] + ': ' + context.parsed.y + ' litros'; // Muestra la vivienda y los litros en la etiqueta del tooltip
                            },
                        },
                    },
                },
            },
        });
    });

let canvas = document.getElementById("chart");
canvas.style.width = "800px";
canvas.style.height = "50vh";
canvas.style.display = "flex";
canvas.style.justifyContent = "center";
canvas.style.alignItems = "center";
canvas.style.textAlign = "center";
canvas.style.gap = 15;
