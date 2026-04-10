const optionBtn = document.querySelectorAll('.category-card');
let service_box = document.querySelectorAll(".images-services")

let plumbers = document.querySelectorAll(".plumber")

let painters = document.querySelectorAll(".painter")

let electricians = document.querySelectorAll(".electrician")

let tutors = document.querySelectorAll(".tutor")

let carpenters = document.querySelectorAll(".carpenter")

let cleaners = document.querySelectorAll(".cleaning")



// service_box.forEach((box)=>{
//     box.addEventListener("click",()=>{
//         alert("hello")
//     })

// })


selectCategories = (button) => {
    if (button.value === "all") {
        service_box.forEach((box) => {
            box.classList.remove("change")

        })
    }

    else if (button.value === "plumber") {
        service_box.forEach((box) => {
            box.classList.add("change")
            plumbers.forEach((plumber)=>{
                plumber.classList.remove("change")
            })

        })

    }
    else if (button.value === "electrician") {
        service_box.forEach((box) => {
            box.classList.add("change")
            electricians.forEach((electrician)=>{
                electrician.classList.remove("change")
            })

        })

    }


    else if (button.value === "tutor") {
        service_box.forEach((box) => {
            box.classList.add("change")
            tutors.forEach((tutor)=>{
                tutor.classList.remove("change")
            })

        })

    }

    else if (button.value === "cleaner") {
        service_box.forEach((box) => {
            box.classList.add("change")
            cleaners.forEach((cleaner)=>{
                cleaner.classList.remove("change")
            })

        })

    }


    else if (button.value === "painter") {
        service_box.forEach((box) => {
            box.classList.add("change")
            painters.forEach((painter)=>{
                painter.classList.remove("change")
            })

        })

    }
    else  {
        service_box.forEach((box) => {
            box.classList.add("change")
            carpenters.forEach((carpenter)=>{
                carpenter.classList.remove("change")
            })

        })

    }
 



}


optionBtn.forEach(button => {
    button.addEventListener('click', () => {
        // 1. Check if the clicked button is already active
        // const isActive = button.classList.contains('active');

        // 2. Remove active class from ALL buttons
        optionBtn.forEach(btn => btn.classList.remove('active'));
        button.classList.add('active');
        // console.log(button.value)

        selectCategories(button)


        // 3. If it WASN'T active before, add the class now
        // If it WAS active, it stays removed (the toggle off effect)
        // if (isActive) {
        //     button.classList.add('active');
        // }
    });
});





