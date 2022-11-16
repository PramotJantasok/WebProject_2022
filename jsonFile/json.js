let requestURL = 'data.json'; 
    let request = new XMLHttpRequest(); 
    request.onreadystatechange = function () { 
        if (request.readyState == 4 && request.status == 200) {             
            ExtractData(JSON.parse(request.responseText));            
        } }; 
    request.open("GET", requestURL, true); 
    request.send();

    let d = document;


    function ExtractData(book) { 
        // document.write(data.homeTown + '<br>'); 
        // for (let i = 0; i < data.person.length; i++) {
        //     document.write(data.person[i].id + " " + "<b>" 
        //     + data.person[i].Firstname + "</b>" + " " + "<b>"
        //     + data.person[i].Lastname + "</b>" + " " + '('+data.person[i].Gender + ')'+
        //     " is a " + data.person[i].Position + ", "
        //      + data.person[i].Address + "<br>")
        // }

        for (let i = 0; book.length; i++){
            d.write(i+1+". " + book[i].detail+"<br>"+ "<br>");
        }
    }