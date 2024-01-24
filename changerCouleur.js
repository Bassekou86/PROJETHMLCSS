let boutons = document.getElementsByTagName('button');
console.log (boutons);
for (let i = 0; i < boutons.length; i++) {
  boutons[i].onclick = function(event) {
    parentDiv = boutons[i].parentNode;
    console.log(parentDiv);
    parentDiv.style.backgroundColor = 'yellow';
  };
}
