// Moustache
// NPM -> Forma moderna -> eina inclosa en node
// npm install moustache
// Web?

function versioAnterior() {
  console.log('hey!');

  // console.log(document.getElementById('template'))

  var template = document.getElementById('template')
  // console.log(template)

  template.innerHTML = 'Hola Pepito'
}

window.onload = function() {
  // versioAnterior()
  // Moustache
  var template = document.getElementById('plantilla').innerHTML

  //Parse/render -> JSON
  var resultat = Mustache.render(template,
    { name : 'Pepita'});
  console.log(resultat);

  var resultat = document.getElementById('resultat')
  // console.log(template)

  template.innerHTML = resultat

}