const miBoton = document.getElementById("miBoton");
const etiquetaLeyenda = document.getElementById("etiquetaLeyenda");
// Ahora puedes trabajar con el elemento del botón
miBoton.addEventListener("mouseenter", () => {
    etiquetaLeyenda.style.display = "block";
  });
  
  miBoton.addEventListener("mouseleave", () => {
    etiquetaLeyenda.style.display = "none";
  });