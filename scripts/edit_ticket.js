//--------Function cancel -------//
function cancelShowTicket() {
    loadData("GET", `/dashboard`, "#app-content");
    console.log("You click on cancel show");
  }

function editShow(element){
    console.log("you click on edit show");
    loadData("GET", `/edit?ticketId=${element.id}`, "#app-content");
    console.log(element.id)
}
