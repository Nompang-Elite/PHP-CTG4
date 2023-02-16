// --------Function for showing dialog---------//
function show() {
  dialog.style.display = "block";
}
//--------Function for hiding dialog---------//
function hide(event) {
  event.style.display = "none";
}
//--------Function for adding new ticket---------//
function createTicket() {
  hide(dialog);
  let titleInput = document.querySelector("#title");
  let priceInput = document.querySelector("#price");
  let dateInput = document.querySelector("#date");
  let textInput = document.querySelector("#message");
  let venue = document.querySelector("#venue");
  let address = document.querySelector("#address");

  let titleInputs = titleInput.value;
  let priceInputs = priceInput.value;
  let dateInputs = dateInput.value;
  let textInputs = textInput.value;
  let venueInput = venue.value;
  let addressInput = address.value;
  uploadTicketInfo(
    titleInputs,
    textInputs,
    venueInput,
    addressInput,
    priceInputs,
    dateInputs
  );
}
//--------Function add -------//
function add() {
  show(dialog);
  console.log("Hello!");
}
//--------Function cancel -------//
function cancel() {
  hide(document.querySelector("#dialog"));
  console.log("Cancel!");
}
function addTickets() {
  createTicket();
}
