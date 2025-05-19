    const boton = document.getElementById('boton');
    const numeroInput = document.getElementById('numero');
    const resultado = document.getElementById('resultado');

    // Deshabilita el botón inicialmente
    boton.disabled = true;

    numeroInput.addEventListener('input', () => {
        // Si el campo tiene algún valor, habilita el botón; de lo contrario, lo deshabilita
        boton.disabled = numeroInput.value.trim() === '';
    });

    boton.addEventListener('click', () => {
        const numero = parseInt(numeroInput.value);
        const probabilidad = Math.floor(Math.random() * 100) + 1;
        resultado.innerText = "TIENES " + probabilidad + "% DE GANAR";

        boton.disabled = true; // Bloquea el botón después del primer clic
    });