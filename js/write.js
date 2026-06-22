function submitBoard(e){
    e.preventDefault();

    var title= document.getElementById('title_input').value;
    var writer= document.getElementById('name_input').value;
    var password= document.getElementById('pw_input').value;
    var message= document.getElementById('text_input').value;

    var data= {
        title:title,
        writer:writer,
        password:password,
        msg:message
    }

    var jsonData= JSON.stringify(data);
// ../backend/board/insertBoard.php
    fetch('../../backend/board/insertBoard.php',{
        method:'POST',
        headers:{'Content-Type':'application/json'},
        body: JSON.stringify(data)
    })
    .then(function(res){
        return res.text();
    })
    .then(function(text){
        alert(text);
        window.location.href='../QnA.html';
    })
}