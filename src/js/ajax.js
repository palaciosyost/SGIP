
const d = document;

(() => {
    const $form = d.querySelector('#form'),
        $div = d.querySelector('.alertas');
    $alerta = d.querySelector('.alert-danger')

    $form.addEventListener('submit', e => {
        e.preventDefault()
        let formdata = new FormData($form)
        fetch('src/controlador/login-controlador.php', {
            method: 'POST',
            body: formdata
        })
            .then(res => {
                return res.ok ? res.text() : Promise.reject();
            })
            .then(data => {
                console.log(data)
                if (data === '1') {
                    console.log('el usuario existe')
                    window.location.href = 'src/administrador/'
                }
                else if (data === '2') {
                    console.log('el usuario existe')
                    window.location.href = 'src/usuarios/'
                }else {
                    $div.innerHTML= (data)
                }
            }).catch(err => {
                console.log(err)
            })
    })


})()
