const id_region = document.getElementById("region");
id_region.addEventListener("change", () => {
  //console.log(id_region.options[id_region.options.selectedIndex.selected] = true);
  const idx = id_region.options[id_region.options.selectedIndex].value;
  const url = "/comunas";
  const comuna = document.getElementById("comuna");
  comuna.options.length = 1;
  comuna.options[0].disabled = 0;
  const options = {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify({ "id": idx })
  };

  fetch(url, options)
    .then(resp => resp.json())
    .then(data => {
      console.log(data);
      data.forEach(el => {
        const option = document.createElement("option");
        option.text = el.nombre;
        comuna.add(option);
        comuna.options[0].disabled = 1;
      });
    })
    .catch(error => console.error(error));

}, true);
