// 01-introdução ao jquery
// console.log("ok");

// acessando elemento usando jquery
// $ é função jquery
const titulo = $("h1");

// mudar o texto do elemento
titulo.text("Ola jquery");

// css via jquery
// titulo.css("color", "blue");
titulo.css({
    "color" : "blue",
    "text-align" : "center",
    "font-size" : "25px"
});

// eventos - ao clicar h1 muda cores
titulo.on("click", function(){
    $("body").css("background-color", "yellow");
    $("h2").text("Clicou.");

    titulo.fadeOut();
});