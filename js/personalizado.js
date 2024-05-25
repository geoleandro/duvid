


  window.onload = function() {

    var elementBody = document.querySelector('body');
    var elementBtnIncreaseFont = document.getElementById('increase-font');
    var elementBtnDecreaseFont = document.getElementById('decrease-font');
    // Padrão de tamanho, equivale a 100% do valor definido no Body
    var fontSize = 100;
    // Valor de incremento ou decremento, equivale a 10% do valor do Body
    var increaseDecrease = 10;

    // Evento de click para aumentar a fonte
    elementBtnIncreaseFont.addEventListener('click', function(event) {
        fontSize = fontSize + increaseDecrease;
        elementBody.style.fontSize = fontSize + '%';
    });

    // Evento de click para diminuir a fonte
    elementBtnDecreaseFont.addEventListener('click', function(event) {
        fontSize = fontSize - increaseDecrease;
        elementBody.style.fontSize = fontSize + '%';
    });
}



function DarkMode() {
    let element = document.body;
    element.classList.toggle("dark-mode");
    
      
}

//função relacionada as capas do 1, 2 e 3º anos

function ExpandeDiv(id_cadastro) {

    var qtd_div = document.getElementsByTagName('div').length;
    var div_sel = document.getElementById(id_cadastro);
    var todas_divs;

    for (var i = 1; i <= qtd_div; i++) {
      todas_divs = document.getElementById("div" + i);

      if (todas_divs != null) {
        if (todas_divs.id != id_cadastro) {
          todas_divs.style.display = 'none';

        }

        else {
          div_sel.style.display = 'block';

        }

      }
    }




  }

  function AbrirDropDown(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
    } else { 
      x.className = x.className.replace(" w3-show", "");
    }
  }
  