
function calcularMedia() { //getElementById busca o elemento no html com o id indicado entre aspas simples
    var nota1 = document.getElementById('nota1').value; // value possui um any (value do tipo texto)
    var nota2 = document.getElementById('nota2').value;
    var nota3 = document.getElementById('nota3').value;

    nota1 = parseFloat(nota1); // conversao de texto para numero no tipo real
    nota1 = parseFloat(nota2); 
    nota1 = parseFloat(nota3);
    
    var media = (nota1 + nota2 + nota3) / 3;

    var sapanMedia = document.getElementById('media');
    sapanMedia.textContent = media; //textContent usado para escrver textos no html
    // sapanMedia.innerHTML = `<p>${media}</p>`; insere um codigo html no html.
}