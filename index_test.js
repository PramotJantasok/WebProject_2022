let doc = document;

function seePassword(){
    let see = this.see;
    if (Number(see.value) == 0){
        this.regis_pass.type="text";
        this.icon_see.className="bi bi-eye";
        see.value = "1";
        console.log(see.value);
        
    }else{
        this.regis_pass.type="password";
        this.icon_see.className="bi bi-eye-slash";
        see.value = "0";
        console.log(see.value);
        
    }
    
}

//<i class="bi bi-eye"></i>
// bi bi-eye-slash



function seePassword_login(){
    let see = this.login_see;
    if (Number(see.value) == 0){
        this.login_pass.type="text";
        this.login_icon_see.className="bi bi-eye";
        see.value = "1";
        console.log(see.value);
        
    }else{
        this.login_pass.type="password";
        this.login_icon_see.className="bi bi-eye-slash";
        see.value = "0";
        console.log(see.value);
        
    }
    
}



const signUp = doc.querySelector('.signUp-link');
const signIn = doc.querySelector('.signIn-link');
const center = doc.querySelector('.contents');

signUp.addEventListener("click", ( )=>{
    center.classList.add("active");
});

signIn.addEventListener("click", ( )=>{
    center.classList.remove('active')
});

function popup(){
    this.login_popup.style.display = "flex";
}

function closePup(){
    this.login_popup.style.display = "none";
}


