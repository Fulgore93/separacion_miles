

const validateErrorSeparator = (thousandsSeparator, decimalSeparator) => {
    const regex = /^[.,\s]+$/;

    if (thousandsSeparator === decimalSeparator) throw Error('Error el separador de miles, debe ser distinto al de decimal');
    if (!regex.test(thousandsSeparator)) throw Error("Error el separador de miles y decimal, solo admite los siguientes caracteres ',' '.'");
    if (!regex.test(decimalSeparator)) throw Error("Error el separador de miles y decimal, solo admite los siguientes caracteres ',' '.'");
}

window.addEventListener('load', () => {
    let inputs = document.querySelectorAll('.input-mask');

    inputs && inputs.forEach(input => {
        
        const config = {
            scale: input.getAttribute('data-scale') ?? 2,
            thousandsSeparator: input.getAttribute('data-thousands-separator')?.trim() ?? '.',
            decimalSeparator: input.getAttribute('data-decimal-separator')?.trim() ?? ',',
        }

        validateErrorSeparator(config.thousandsSeparator, config.decimalSeparator);

        IMask(input, {
            mask: 'num',
            blocks: {
                num: {
                    scale: 2,
                    mask: Number,
                    thousandsSeparator: config.thousandsSeparator,
                    radix: config.decimalSeparator
                }
            }
        }).on("complete", function (event) {
            // console.log(mask.typedValue, event)
        });
    });
});

