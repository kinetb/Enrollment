const form = document.querySelector(".login")
const enrollbutton = document.querySelector("#enrollb")
enrollbutton.addEventListener("click", function(){
    // form.style.display="block"
    form.classList.toggle("enrollbtn")

})

const form1 = document.querySelector(".loginadmin")
const adminsbtn = document.querySelector("#admins")
adminsbtn.addEventListener("click", function(){
    form1.classList.toggle("adminbtn")
})
