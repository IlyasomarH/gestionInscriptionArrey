

let form1=document.querySelector('#form1')
let form2=document.querySelector('#form2')
let bnt_inscription= document.querySelector('#btn-inscrire');




bnt_inscription.addEventListener('click', function(){
    form1.style.display="none"
    form2.style.display="block"
})



// recuperer le deux champs 


let pass= document.querySelector('#Ipass')
let Cpass=document.querySelector('#Cpass')
let btnInscription=document.querySelector('#btnIscription')
let messageAlert= document.querySelector('div.alert')

btnInscription.addEventListener('click',function(e){
    if(pass.value!=Cpass.value)
    {
        e.preventDefault()
        messageAlert.style.display='block'
    }
})
