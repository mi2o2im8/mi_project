function loaded(){
    fetch('이거 php만들면 연결')
    .then(function(response){
        return response.text();
    })
    .then(function(text){
        var json= JSON.parse(text);
        var list= document.querySelector('.board_title>p');
        list.innerHTML= "자유롭게 게시글을 작성하며 이야기를 나누세요. [총 게시글 수 : "+ json.total+"]";

        for(board of json.data){
            var row= "";
            row += "<tr>";
            row += `<td class= "col_no">${board.no}</td>`;
            row += `<td class= "col_title><a href="여기 경로?? /?no=${board.no}">${board.title}</a></td>`;
            row += `<td class= "col_writer">${board.writer}</td>`;
            row += `<td class= "col_date">${board.date}</td>`;
            row += `<td class= "col_hits">${board.hits}</td>`;
            row += "</tr>";

            document.getElementsByClassName('board_list')[0].innerHTML += row;
        }
    })
}