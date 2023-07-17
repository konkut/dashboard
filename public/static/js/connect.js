let form_connect_login;
let form_connect_two_auth; 
document.addEventListener('DOMContentLoaded',(e)=>{
  form_connect_login = document.getElementById('form_connect_login');
  if(form_connect_login){
    form_connect_login.addEventListener('submit',(e)=>{
      e.preventDefault();
      connect_user_login();
    })
  } 
  form_connect_two_auth = document.getElementById('form_connect_two_auth');
  if(form_connect_two_auth){
    form_connect_two_auth.addEventListener('submit',(e)=>{
      e.preventDefault();
      connect_two_auth();
    })
  } 
})
let url, bodyFormData, request;
const connect_user_login = ()=>{
    loader_action_status('show');
    url = base+'/api-js/connect/login';
    bodyFormData = new FormData(form_connect_login);
    
    const request_data =async()=>{
      try{
        request = await axios({method: "post",url: url,data: bodyFormData,headers: { "X-CSRF-TOKEN": csrftoken }});
        loader_action_status('hide');     
        if(request.data.type == "error"){
          mdalert(request.data);
        }
        if(request.data.type == "success"){
          window.location.href = base;
        }
      }catch(e){
        loader_action_status('hide');     
        mdalert({title: app_name, type: "error", msg: lang['error']});
      }
    }
    request_data();
    // let http = new XMLHttpRequest();
    // http.open('POST',url, true);
    // http.setRequestHeader('X-CSRF-TOKEN',csrftoken);
    // http.onreadystatechange = function (){
    //   if(this.readyState == "4" && this.status == "200"){
    //     console.log(this.responseText)
    //   }
    //   if(this.status != 200){
    //     mdalert({title: "Doris APP", type: "error", msg: "Ha ocurrido un error desconocido"});
    //   }
    //   loader_action_status('hide');
    // }    
    // http.send(new FormData(document.getElementById('form_connect_login')))
}
const connect_two_auth = ()=>{
  loader_action_status('show');
  url = base+'/api-js/connect/twoauth';
  bodyFormData = new FormData(form_connect_two_auth);
  const request_data_two_auth =async()=>{
    try{
      request = await axios({method: "post",url: url,data: bodyFormData,headers: { "X-CSRF-TOKEN": csrftoken }});
      loader_action_status('hide');     
      if(request.data.type == "error"){
        mdalert(request.data);
      }
      if(request.data.type == "success"){
        window.location.href = base;
      }
    }catch(e){
      loader_action_status('hide');     
      mdalert({title: app_name, type: "error", msg: lang['error']});
    }
  }
  request_data_two_auth();
}
