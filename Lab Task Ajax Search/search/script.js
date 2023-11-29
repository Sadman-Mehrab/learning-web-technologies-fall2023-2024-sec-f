function abc(){
    //alert('test');
    let term = document.getElementById('term').value;
    let xhttp = new XMLHttpRequest();

    xhttp.open('POST', 'abc.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            //alert(this.responseText);
            let users = JSON.parse(this.responseText);
            let tableContent = `<tr>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>Email</td>
                                </tr>`;

            for (let i=0;i<users.length;i++){
                tableContent += `<tr>
                                     <td>${users[i].id}</td>
                                     <td>${users[i].username}</td>
                                     <td>${users[i].email}</td>
                                 </tr>`;
            }

            document.getElementById('result').innerHTML = tableContent;
        }
    }

    xhttp.send('term='+term);
}