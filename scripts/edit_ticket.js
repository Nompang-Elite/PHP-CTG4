//--------Function cancel -------//
function cancelShowTicket() {
  loadData("GET", `/dashboard`, "#app-content");
  console.log("You click on cancel show");
}

function editShow(element) {
  console.log("you click on edit show");
  loadData("GET", `/edit?ticketId=${element.id}`, "#app-content");
  console.log(element.id);
}

function editShowTicket(element) {
  let titleInput = $("#title");
  let priceInput = $("#price");
  let dateInput = $("#date");
  let textInput = $("#message");
  let venue = $("#venue");
  let address = $("#address");
  // FormData for the image upload:
  const formData = new FormData();
  formData.append("title", titleInput);
  formData.append("description", textInput);
  formData.append("venueName", venue);
  formData.append("address", address);
  formData.append("price", priceInput);
  formData.append("dateTime", dateInput);
  formData.append("ticketId", element.id);
  console.log(formData)
  // loadData("POST", "/editShow", "#app-content", formData);
}
