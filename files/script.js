const id = document.getElementById("hello");
const btn = document.getElementById("btn");
const hlwWorld = "Hello World";
btn.addEventListener("click",function(e) {
    id.innerText = hlwWorld;
})
// id.addEventListener("mouseover",function(e) {
//     id.innerText = hlwWorld;
// })
id.addEventListener("keydown",function(e) {
    console.log(e);
})