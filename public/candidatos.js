const url = "/candidatos";
const candidato = document.getElementById("candidato");
candidato.options[0].disabled = 0;

fetch(url).then(resp => resp.json())
  .then(data => {
    data.forEach(el => {
      const option = document.createElement("option");
      option.text = el.nombre;
      candidato.add(option);
      candidato.options[0].disabled = 1;
    });
  })
  .catch(error => console.error(error));
