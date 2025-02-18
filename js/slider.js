const changeSlideButton = document.querySelectorAll("[data-change-slide-button]")

changeSlideButton.forEach(botao => {
    botao.addEventListener("click", () =>{
        const slides = document.querySelector(".slides")
        const activeSlide = slides.querySelector("[data-active]")
        let indexActiveSlide = Array.from(slides.children).indexOf(activeSlide)

        indexActiveSlide = botao.dataset.changeSlideButton === "next" ? 
        (     indexActiveSlide + 1
        ) : (
            indexActiveSlide - 1
        )

        if (indexActiveSlide >= slides.children.length){
            indexActiveSlide = 0
        } 

        if (indexActiveSlide < 0){
            indexActiveSlide = slides.children.length - 1
        }

        activeSlide.removeAttribute("data-active")
        slides.children[indexActiveSlide].dataset.active = true

    })
})