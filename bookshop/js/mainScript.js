var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    myFunction(this);
    }
};
xhttp.open("GET", "../xml/xmlfiles/books.xml", true);
xhttp.send();

function myFunction(xml) {

    var xmlDoc = xml.responseXML;


    //You may remove comments to check interchangably.

    //var bookEl = xmlDoc.getElementsByTagName('book')[0]; 
    //Remove book[0] element
    //xmlDoc.documentElement.removeChild(bookEl);

    //GetAttribute of book[0] element
    // var bookCat = bookEl.getAttribute('category');
    // console.log(bookCat);

    //Change Attribute Value of book[0] from cooking to fiction
    // bookEl.setAttribute("category", "fiction");
    // console.log(bookEl);
   
 
    var x = xmlDoc.getElementsByTagName('book');
    //Displaying XML Data in HTML 
    for (i = 0; i < x.length; i++) {
        var txt = "";
        var title, media, book_img;
        var y = x[i].children;

        for(a=0; a < y.length; a++){
            var e = y[a].nodeName;

            if(e == "title"){
                title = y[a].childNodes[0].nodeValue;
            } 
            else if(e == "media") {
                media = y[a].childNodes[0].nodeValue;
            }
            else {
                txt += e.toUpperCase() + ": " + y[a].childNodes[0].nodeValue + "<br>";
            }
        }

        // Display Image data in img tag
        book_img = document.getElementById("card-img"+ i);
        book_img.setAttribute("src", "../xml/images/"+ media);

        //Display title h2 tag
        document.getElementById("card-title"+ i).innerHTML = title;

        // Display other details in p tag
        document.getElementById("card-text"+ i ).innerHTML = txt;
        
    }
    
    
    /*
    // Other Method of Displaying XML Data
    var xmlDoc = xml.responseXML;
    var title = xmlDoc.getElementsByTagName('title');

    var txt = "";
    for (i = 0; i < title.length; i++) {
        txt =  title[i].childNodes[0].nodeValue;
        document.getElementById("card-title"+ i ).innerHTML = txt;
    }

    var media = xmlDoc.getElementsByTagName('media');
    var imgFile = "";
    for (i = 0; i < media.length; i++) {
        imgFile =  media[i].childNodes[0].nodeValue;

        var book_img = document.getElementById("card-img"+ i);
        book_img.setAttribute("src", "../xml/images/"+ imgFile);
    }

    var author = xmlDoc.getElementsByTagName('author');
    var txt2 = "";
    for (i = 0; i < author.length; i++) {
        e = author[i].nodeName
        txt2 =  e.toUpperCase() +": "+ author[i].childNodes[0].nodeValue;
        document.getElementById("card-text"+ i ).innerHTML = txt2;
    }*/
    
}