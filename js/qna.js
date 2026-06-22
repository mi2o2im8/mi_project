fetch('../../backend/board/getBoardList.php')
.then(res => res.json())
.then(list => {

    const table= document.querySelector('.column_list');

    list.forEach(item => {
        table.innerHTML +=`
        <tr class="col_line">
            <td>${item.no}</td>
            <td><a href="../side/QnAboard/view.html?no=${item.no}">${item.title}</a></td>
            <td>${item.writer}</td>
            <td>${item.date}</td>
            <td>${item.hits}</td>
        </tr>
        `;
    });
});