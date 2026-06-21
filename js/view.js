var no=location.search.split('=')[1];
var url=`/backend/board/getBoard.php?no=${no}`;

fetch(url)
.then(function(res){return res.json()})
.then(function(json){
    document.querySelector('#title_Memo').innerHTML= json.title;

    document.querySelector('.col_1').innerHTML= json.no;
    document.querySelector('.col_2').innerHTML= json.writer;
    document.querySelector('.col_3').innerHTML= json.date;
    document.querySelector('.col_4').innerHTML= json.hit;
    document.querySelector('#content').innerHTML= json.content;
})