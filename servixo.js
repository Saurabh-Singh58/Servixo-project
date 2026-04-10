const howitWork_btn=document.querySelector(".btn-secondary")
const arrow = document.getElementById("arrowIcon");
// let how_Section=document.querySelector(".how_section")

 

howitWork_btn.addEventListener("click",()=>{
 
     

     const how_Section=document.querySelector(".howSection")
     
     if(how_Section.style.display==="none"){
        how_Section.style.display="block"
         howitWork_btn.innerHTML = 'How it works <span id="arrowIcon">▼</span>'  }
     else{
        how_Section.style.display="none"
         howitWork_btn.innerHTML = 'How it works <span id="arrowIcon">▶</span>'
        
     }

})
 

const buttons = document.querySelectorAll('.category-card');

buttons.forEach(button => {
    button.addEventListener('click', () => {
        // 1. Check if the clicked button is already active
        const isActive = button.classList.contains('active');

        // 2. Remove active class from ALL buttons
        buttons.forEach(btn => btn.classList.remove('active'));

        // 3. If it WASN'T active before, add the class now
        // If it WAS active, it stays removed (the toggle off effect)
        if (!isActive) {
            button.classList.add('active');
        }
    });
});