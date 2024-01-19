const url = "/regiones";
const region = document.getElementById("region");
region.options[0].disabled = 0;

fetch(url).then(resp => resp.json())
  .then(data => {
    data.forEach(el => {
      const option = document.createElement("option");
      option.value = el.id;
      option.text = el.nombre;
      region.add(option);
      region.options[0].disabled = 1;
    });
  })
  .catch(error => console.error(error));
