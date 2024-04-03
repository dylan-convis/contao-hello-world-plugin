function displayMessages() {
  //get all list items from the hello world container
  var listItems = document.querySelectorAll(
    ".hello-world-messages-container li"
  );
  var index = 0; //start at the beginning

  //function to show the next list message
  function showNextItem() {
    //hide every list item at the beginning
    listItems.forEach(function (item) {
      item.style.display = "none";
    });

    //display the current list item
    listItems[index].style.display = "block";

    //swap to the next index or reset it
    index = (index + 1) % listItems.length;
  }

  //init first time
  showNextItem();

  //after every five seconds, show next list item
  setInterval(showNextItem, 5000);
}

//HERE IT ALL STARTS
document.addEventListener("DOMContentLoaded", displayMessages);
