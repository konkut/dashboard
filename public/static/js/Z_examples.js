document.addEventListener('DOMContentLoaded',(e)=>{
    document.getElementById('only_show').addEventListener("click",(e)=>{
        mdalert({title: "Alerta", type: "error", msg: "Ha ocurrido un error", msgs: JSON.stringify(['mensaje #1', 'mensaje #2', 'mensaje #3'])});
    });
    document.getElementById('alert_with_actions').addEventListener("click",(e)=>{
        mdalert({title: "Alerta con acciones", type: "success", msg: "Todo un éxito.", actions: JSON.stringify([{url: base+'/login', name: 'Ingresar', type: 'lime'}, {url: base+'/login', name: 'Otro', type: 'sky'}, {url: base+'/login', name: 'Info', type: 'amber'}, {url: base+'/login', name: 'Salir', type: 'rose'}]) });
    });
    document.getElementById('alert_confirm').addEventListener("click",(e)=>{
        mdalert({title: "¿Desea eliminar?", type: "delete", msg: "Si elimina este documento, ya no lo podrá recuperar", actions: JSON.stringify([{url: base+'/delete', name: 'Si, eliminar', type: 'rose'}]) });
    });
    document.getElementById('alert_callback').addEventListener("click",(e)=>{
        mdalert({title: "¿Desea eliminar?", type: "delete", msg: "Si elimina este documento, ya no lo podrá recuperar", actions: JSON.stringify([{url: base+'/delete', name: 'Si, eliminar', type: 'rose'}, {callback: 'callback_alert', params: "'param1','param2'", name: 'Si, eliminar', type: 'rose'}]) });
    });
    document.getElementById('alert_no_close').addEventListener("click",(e)=>{
        mdalert({title: "¿Desea eliminar?", type: "delete", msg: "Si elimina este documento, ya no lo podrá recuperar", actions: JSON.stringify([{url: base+'/delete', name: 'Si, eliminar', type: 'rose'}]), additional: JSON.stringify({hideclose: true}) });
    });
});

function callback_alert (param1, param2){
    console.log(param1,param2);
    md_alert_status('hide');
};