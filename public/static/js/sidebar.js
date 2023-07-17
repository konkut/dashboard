let list_child = document.querySelector(".list-child");
let list_parent = document.querySelector(".list-parent");
list_child.addEventListener("mousemove", (e)=>{
    list_parent.setAttribute('style','background-color: #23282e;');
});
list_child.addEventListener("mouseleave", (e)=>{
    list_parent.removeAttribute('style','background-color: #23282e;');
});

let sub_parent = document.querySelector(".sub_parent");
let sub = document.querySelector(".sub");
sub_parent.addEventListener("mousemove", (e)=>{
    sub.setAttribute('style','display: block;');
});
sub_parent.addEventListener("mouseleave", (e)=>{
    sub.removeAttribute('style','display: none;');
});

  