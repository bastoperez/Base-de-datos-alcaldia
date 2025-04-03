document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("uploadForm");

    if (form) {
        form.addEventListener("submit", function (event) {
            const archivo = document.getElementById("archivo").files[0];
            const oficina = document.getElementById("oficina").value.trim();
            const motivo = document.getElementById("motivo").value;

            if (!archivo) {
                alert("Por favor, seleccione un archivo para subir.");
                event.preventDefault();
                return;
            }

            if (oficina === "") {
                alert("Por favor, ingrese el nombre de la oficina.");
                event.preventDefault();
                return;
            }

            if (motivo === "") {
                alert("Por favor, seleccione un motivo.");
                event.preventDefault();
                return;
            }

            // Mensaje de carga mientras se sube el archivo
            const submitButton = document.querySelector(".btn-upload");
            if (submitButton) {
                submitButton.disabled = true;
                submitButton.innerText = "Subiendo...";
            }
        });
    }

    // Previsualizar imagen si se sube un archivo de tipo imagen
    const archivoInput = document.getElementById("archivo");
    if (archivoInput) {
        archivoInput.addEventListener("change", function () {
            const file = this.files[0];
            const preview = document.createElement("img");
            preview.style.maxWidth = "200px";
            preview.style.marginTop = "10px";

            if (file && file.type.startsWith("image/")) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    preview.src = e.target.result;
                    document.body.appendChild(preview);
                };
                reader.readAsDataURL(file);
            }
        });
    }

    // Efecto en las imágenes específicas (alcaldia.png y logo.png)
    const images = document.querySelectorAll(".logo, .top-left-image");

    images.forEach(img => {
        img.addEventListener("mouseover", function () {
            img.style.transform = "scale(1.1) rotate(3deg)";
            img.style.boxShadow = "0px 5px 15px rgba(0, 0, 0, 0.3)";
        });

        img.addEventListener("mouseout", function () {
            img.style.transform = "scale(1)";
            img.style.boxShadow = "none";
        });
    });
});
