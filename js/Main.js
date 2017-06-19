// var thumbnails = document.getElementById('thumbnails');
//     var imageHolder = document.getElementById('imageHolder');
//     var container = document.getElementById('containerFotos');
//     var imageNames = ["1.jpg","2.jpg","3.jpg","4.jpg","5.jpg","6.jpg","7.jpg","8.jpg"];
// var myImages = [];
//     /*  ©Cem den ouden, All Rights Reserved.  */
//
//
//     for (var i = 0; i < imageNames.length; i++) {
//     var div = document.createElement('div');
//     div.setAttribute("class", "image-holder");
//     div.setAttribute("id", i);
//     thumbnails.appendChild(div);
//     var myImg = document.createElement('img');
//     myImg.setAttribute("src", "images/" + imageNames[i]);
//     myImg.setAttribute("onclick", "selectImage(this.src,this.id)");
//     myImg.setAttribute("class", 'lightbox_trigger'+i);
//     myImg.setAttribute("id", i);
//     document.getElementById(i).appendChild(myImg);
//
//
//
// }


function currentPagina() {

    var navKeuze = location.search.substring(5);

    switch (navKeuze) {

        case 'home':
            document.getElementById("home").style.borderBottom = "5px solid white";
            break;
        case 'information':
            document.getElementById("info").style.borderBottom = "5px solid white";
            break;
        case 'episodes':
            document.getElementById("epi").style.borderBottom = "5px solid white";
            break;
        case 'contact':
            document.getElementById("contact").style.borderBottom = "5px solid white";
            break;
        default:

    }
}
