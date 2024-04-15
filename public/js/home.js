
// Declarar la variable slideIndex para rastrear el índice del slide actual
var slideIndex = 1;
showSlides(slideIndex);

// Función para avanzar o retroceder en el slider
function plusSlides(n) {
    showSlides(slideIndex += n);
}

// Función para mostrar el slide actual
function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("slider-img");

    // Verificar si se ha llegado al final de las imágenes
    if (n > slides.length) {
        slideIndex = 1;
    }
    // Verificar si se ha retrocedido desde el primer slide
    if (n < 1) {
        slideIndex = slides.length;
    }

    // Ocultar todas las imágenes
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; // Oculta todas las imágenes
    }

    // Mostrar el slide actual
    slides[slideIndex - 1].style.display = "block";
}

//efecto de maquina de escribir no sé cual librería

$('#ejemplo').typeIt({
    // Opciones del efecto
    strings: ["Sientase seguro del control constante de su agua."],
    speed: 85,
    breakLines: false,
    loop: true
});

$('#aplicacion').typeIt({
    // Opciones del efecto
    strings: ["Descargue la aplicacion móvil para Android y iOS."],
    speed: 85,
    breakLines: false,
    loop: true
});
