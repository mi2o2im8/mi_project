const input= document.getElementById("search_box_input");

input.addEventListener("keyup",function(){
    let keyword= this.value.toLowerCase();

    let items= document.querySelectorAll("p, h1, h2, h3, h4, span, article, div");

    items.forEach(el =>{
        let text= el.textContent.toLowerCase();

        if (text.includes(keyword)){
            el.style.display= "";
        }else {
            el.style.display= "none";
        }
    });
});