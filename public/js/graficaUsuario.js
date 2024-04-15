fetch("/chart-Userdata") // Cambia la URL a la nueva función
    .then((response) => response.json())
    .then((data) => {
        console.log(data); // Imprime los datos aquí
        let labels = data.map((corte) => corte.fecha); // Solo usa la fecha para las etiquetas
        let datasets = data.map((corte) => {
            return {
                label: corte.fecha, // Solo usa la fecha como etiqueta
                data: [{x: corte.fecha, y: corte.litros}], // Solo usa la fecha como etiqueta en el eje x
                backgroundColor: 'rgba(92, 77, 148, 1)', // Color de las barras
                borderColor: 'rgba(173, 120, 241, 1)', // Color de la línea
                pointBackgroundColor: 'rgba(13, 255, 255, 1)', // Color de los puntos
                pointRadius: 7,
                barThickness: 50,
            };
        });
        new Chart(document.getElementById("chartUser"), {
            type: "line",
            data: {
                labels: labels,
                datasets: datasets,
            },
            options: {
                responsive: true,
                animation: {
                    duration: 1000,
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
                            color: 'rgba(255, 255, 255, 0.2)',
                            borderColor: 'rgba(255, 255, 255, 0.2)',
                            tickColor: 'rgba(255, 255, 255, 0.2)',
                            lineWidth: 1,
                            borderDash: [5, 5],
                            tickLength: 10,
                        },
                    },
                    x: {
                        ticks: {
                            color: "white",
                        },
                        grid: {
                            color: 'rgba(255, 255, 255, 0.2)',
                            borderColor: 'rgba(255, 255, 255, 0.2)',
                            tickColor: 'rgba(255, 255, 255, 0.2)',
                            lineWidth: 1,
                            borderDash: [5, 5],
                            tickLength: 10,
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
                                return context[0].label; // Solo muestra la fecha en el título del tooltip
                            },
                            label: function(context) {
                                return context.dataset.label + ': ' + context.parsed.y + ' litros'; // Muestra la fecha y los litros en la etiqueta del tooltip
                            },
                        },
                    },
                },
            },
        });
    });
