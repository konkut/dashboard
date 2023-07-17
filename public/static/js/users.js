document.addEventListener('DOMContentLoaded',(e)=>{
    
    //Colors buttons events
    let content_icon = document.querySelectorAll('.content-icon');
    let message = document.querySelectorAll('.message');
        if(content_icon){
            for(let i = 0; i < content_icon.length; i++){
                content_icon[i].addEventListener('mousemove',(e)=>{
                    message[i].setAttribute('style','display: inline-block');    
                    if(i == 0){
                        message[i].classList.add('blue');
                        message[i].classList.add('blue-tooltip');   
                        content_icon[i].classList.add('blue');   
                    } 
                    if(i == 1){
                        message[i].classList.add('orange');
                        message[i].classList.add('orange-tooltip');
                        content_icon[i].classList.add('orange');   
                    } 
                    if(i == 2){
                        message[i].classList.add('green');
                        message[i].classList.add('green-tooltip');   
                        content_icon[i].classList.add('green');   
                    } 
                    if(i == 3){
                        message[i].classList.add('red');
                        message[i].classList.add('red-tooltip');   
                        content_icon[i].classList.add('red'); 
                    } 
                }) 
                
                content_icon[i].addEventListener('mouseleave',(e)=>{
                    message[i].removeAttribute('style','display: inline-block');
                    if(i == 0){
                        message[i].classList.remove('blue');   
                        message[i].classList.remove('blue-tooltip');   
                        content_icon[i].classList.remove('blue');   
                    } 
                    if(i == 1){
                        message[i].classList.remove('orange');
                        message[i].classList.remove('orange-tooltip');   
                        content_icon[i].classList.remove('orange');   
                    } 
                    if(i == 2){
                        message[i].classList.remove('green');
                        message[i].classList.remove('green-tooltip');      
                        content_icon[i].classList.remove('green');   
                    } 
                    if(i == 3){
                        message[i].classList.remove('red');
                        message[i].classList.remove('red-tooltip');        
                        content_icon[i].classList.remove('red');
                    }  
                })
           }
        }

    //form submit
    let form_user_edit = document.getElementById('form_user_edit');
    if(form_user_edit){
        form_user_edit.addEventListener('submit',(e)=>{
            e.preventDefault();
            user_edit_submit();
        })
    }
})

const user_edit_submit = ()=>{
    loader_action_status('show');
    url = base+'/api-js/user/update';
    bodyFormData = new FormData(form_user_edit);
    const request_user_edit_submit =async()=>{
      try{
        request = await axios({method: "post", url: url, data: bodyFormData, headers: { "X-CSRF-TOKEN": csrftoken }});
        loader_action_status('hide');     
        if(request.data.type == "error"){
          mdalert(request.data);
        }
        if(request.data.type == "success"){
          mdalert(request.data);
        }
      }catch(e){
        loader_action_status('hide');     
        mdalert({title: app_name, type: "error", msg: lang['error']});
      }
    }
    request_user_edit_submit();
}
