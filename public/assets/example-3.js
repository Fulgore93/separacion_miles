window.addEventListener('load', () => {
    const calculator = document.querySelector('.input-calculator');
    const result = document.querySelector('.input-result');

    /**
     * inicializamos la mascara para los inputs
     */

    const calculatorMask = createIMask(calculator);
    const resultMask = createIMask(result);

    /**
     * nuestro input tendra un evento que se ejecutara cada vez que una tecla se deje de presionar
     */

    calculator.addEventListener('keyup', () => {

        /**
         * asignamos el valor limpo del primer input en el segundo
         * es importante mencionar que en estaa ocasion, nuestro segundo input
         * tambien fue inicializado con la libreria
         */

        resultMask.mask.value = (calculatorMask.mask.typedValue * 2).toString();

        /**
         * ahora seteamos el input oculto
         */

        resultMask.setInputValue(result);
    });
});