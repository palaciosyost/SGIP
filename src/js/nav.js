const d = document

const nav = () => {
    const $nav = d.querySelector('.nav'),
        $boton = d.querySelector('.hamburger');


    d.addEventListener('DOMContentLoaded', () => {
        d.addEventListener('click', e => {
            if (e.target.matches('.hamburger *')) {
                $boton.classList.toggle('is-active')
                $nav.classList.toggle('active')
            }
        })
    })
}
nav()


const scrollNav = () => {
    d.addEventListener('DOMContentLoaded', e => {
        let $nav = d.querySelector('.contenedor-nav'),
            $img = d.querySelector('.img-nav');;
        d.addEventListener('scroll', e => {
            let numScroll = pageYOffset;
            console.log(numScroll)
            if (numScroll > 80) {
                $nav.classList.add('active-nav')
                $img.classList.add('img-active')
            } else {
                $nav.classList.remove('active-nav')
                $img.classList.remove('img-active')
            }
        })
    })
}

scrollNav()