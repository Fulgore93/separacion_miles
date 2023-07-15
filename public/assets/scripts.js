const createIMask = (input) => {

    /**
     * procedemos a setear el valor de mask, en el input que se encuentra oculto
     **/
    const setInputValue = (input) => {
        const reference = input.getAttribute('data-input-value');

        if (!reference) return;
        if (reference) return document.querySelector(reference).value = mask.typedValue;
    }

    /**
     * creamos una funcion que controle ciertos errores
     * de esta forma limitamos los separadores a ciertos simbolos
     **/

    const validateErrorSeparator = (thousandsSeparator, decimalSeparator) => {
        const regex = /^[.,\s]+$/;

        if (thousandsSeparator === decimalSeparator) throw Error('Error el separador de miles, debe ser distinto al de decimal');
        if (!regex.test(thousandsSeparator) || !regex.test(decimalSeparator)) throw Error("Error el separador de miles y decimal, solo admite los siguientes caracteres ',' '.'");
    }

    /**
     * definimos una configuracion base para los inputs
     **/

    const config = {
        scale: input.getAttribute('data-scale') ?? 2,
        thousandsSeparator: input.getAttribute('data-thousands-separator')?.trim() ?? '.',
        decimalSeparator: input.getAttribute('data-decimal-separator')?.trim() ?? ',',
    }

    validateErrorSeparator(config.thousandsSeparator, config.decimalSeparator);

    /**
     * inicializamos la configuracion necesaria para manipular
     * los valores ingresados en el input
     **/

    const mask = IMask(input, {
        mask: Number,
        scale: parseInt(config.scale),
        thousandsSeparator: config.thousandsSeparator,
        radix: config.decimalSeparator,
        // min: 0,
        // max: 100
    }).on("complete", function (event) {

        if (!event) return;

        setInputValue(event.target);
    })

    return { mask, setInputValue };
}

window.addEventListener('load', () => {
    const inputs = document.querySelectorAll('.input-mask');

    if (inputs.length >= 1) inputs.forEach(input => createIMask(input));

    /* inputs && inputs.forEach(input => {

        // if (!input.classList.contains('input-calculator')) return;

        createIMask(input);


        // input.addEventListener('change', function (e) {
        //     document.querySelector('.input-test').value = mask.typedValue * 2
        // })
    }); */

    /**
     * de esta forma inicializamos la libreria
     * en base a elementos creados dinamicamente
     **/

    // const newInput = document.createElement('input');

    // newInput.type = 'text';
    // newInput.classList.add('input-mask', 'border', 'border-dark', 'px-2', 'py-1', 'focus:outline-none');
    // newInput.setAttribute('data-thousands-separator', ',');
    // newInput.setAttribute('data-decimal-separator', '.');
    // newInput.setAttribute('data-input-value', '.numero-3');

    // const newInputValue = document.createElement('input');
    // newInputValue.type = 'hidden';
    // newInputValue.classList.add('numero-3');

    // createIMask(newInput);

    // document.querySelector('.custom-input').append(newInput);
    // document.querySelector('.custom-input').append(newInputValue);

});

