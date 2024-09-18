const toggleMenuElement = document.getElementById("toggle-menu");
const mainMenuElement = document.getElementById("main-menu");

// Agrega un evento de clic al botón del menú (toggleMenuElement).
// Al hacer clic, añade o elimina la clase 'main-menu--show' en el menú principal.
toggleMenuElement.addEventListener("click", () => {
    mainMenuElement.classList.toggle("main-menu--show");
});

/*Carrusel*/ 
let indiceSlide = 0;

function moverSlide(n) {
    const slides = document.querySelector(".slides");
    const totalSlides = slides.querySelectorAll('img').length;

    // Actualiza el índice de la diapositiva (slide) con base en el valor 'n' recibido.
    indiceSlide += n;

    // Si se alcanza el final del carrusel, vuelve al principio.
    if (indiceSlide >= totalSlides) { indiceSlide = 0; }

    // Si el índice es menor a 0, se mueve al último slide.
    if (indiceSlide < 0) { indiceSlide = totalSlides - 1; }

    // Calcula el desplazamiento necesario para mover las imágenes del carrusel.
    const offset = -indiceSlide * 100;

    // Mueve las imágenes en el contenedor del carrusel usando una transformación en el eje X.
    slides.style.transform = `translateX(${offset}%)`;
}

// Mostrar el formulario al hacer clic en "Inscribete YA!"
document.getElementById("inscribirseBtn").addEventListener("click", function(event) {
    event.preventDefault(); // Evitar que se siga el enlace
    document.getElementById("formularioInscripcion").style.display = "block";
});

// Manejar el envío del formulario
document.getElementById("formInscribirse").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevenir el comportamiento por defecto

    // Capturar los datos del formulario
    const nombre = document.getElementById("nombre").value;
    const email = document.getElementById("email").value;
    const telefono = document.getElementById("telefono").value;

    // Mostrar los datos en la consola (simulación de guardado)
    console.log("Nombre: " + nombre);
    console.log("Email: " + email);
    console.log("Teléfono: " + telefono);

    // Aquí puedes añadir lógica para guardar los datos en un servidor o base de datos

    // Limpiar el formulario y ocultarlo
    document.getElementById("formInscribirse").reset();
    document.getElementById("formularioInscripcion").style.display = "none";
});
