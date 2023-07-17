
const base = location.protocol+"//"+location.host;
const route = document.getElementsByName("routeName")[0].getAttribute('content');
const csrftoken = document.getElementsByName("csrf-token")[0].getAttribute('content');
const app_name = 'Doris APP';
let loader_action,page_active;

document.addEventListener('DOMContentLoaded',(e)=>{
    
    console.log(route);
    page_active = document.getElementsByClassName(`page_${route}`)[0];
    if(page_active){
        page_active.classList.add('active');
    }
    
    loader_action = document.getElementById('loader_action');
    let show_password = document.getElementsByClassName('show_password');
    if(show_password){
        for(let i = 0; i < show_password.length; i++){
            show_password[i].addEventListener('click',(e)=>{
                show_password_login(show_password[i]);
            })
        }
    }
    //Autocomplete
    let fields_autocomplete = document.getElementsByClassName('autocomplete');
    if(fields_autocomplete){
        let date_autocomplete = Date.now();
        for(let i = 0; i < fields_autocomplete.length; i++){
            fields_autocomplete[i].setAttribute('value',`${date_autocomplete}`);            
        }
        let disable_autocomplete = document.getElementsByClassName('disable_autocomplete');
        if(disable_autocomplete){
            for(let i = 0; i < disable_autocomplete.length; i++){
                original_name = disable_autocomplete[i].getAttribute('name');
                disable_autocomplete[i].setAttribute('name',`${original_name}_${date_autocomplete}`);
                disable_autocomplete[i].setAttribute('autocomplete',`${original_name}_${date_autocomplete}`);
            }
        }
    }
})
//loader action status function
const loader_action_status = (status)=>{
    if(status == "show"){
        document.getElementsByTagName('body')[0].style.overflow = "hidden";
        loader_action.style.display = "flex";
        loader_action.classList.remove('loader_action_animation_hide');
        loader_action.classList.add('loader_action_animation_show');
        loader_action.classList.add('scale_animation');
    }
    if(status == "hide"){
        document.getElementsByTagName('body')[0].style.removeProperty("overflow");
        loader_action.style.display = "none";
        loader_action.classList.add('loader_action_animation_hide');
        loader_action.classList.remove('loader_action_animation_show');
        loader_action.classList.remove('scale_animation');
    }
};
//Show password field login function
const show_password_login=(show_password)=>{
    let target = show_password.getAttribute('data-target');
    let status = show_password.getAttribute('data-state');
    let input_password = document.getElementById(target);
    if(status == 'hide'){
        input_password.setAttribute('type','text');
        show_password.innerHTML = lang['hide_password'];
        show_password.setAttribute('data-state','show');
    }
    if(status == 'show'){
        input_password.setAttribute('type','password');
        show_password.innerHTML = lang['show_password'];
        show_password.setAttribute('data-state','hide');
    }
}