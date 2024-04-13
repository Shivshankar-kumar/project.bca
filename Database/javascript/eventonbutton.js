//js on[\project.bca\Menu-option\insert.php] submit button when user click on button, this action will perform.
let save = document.querySelector(".submit");
save.addEventListener("click", () => {
  let popup = confirm("Do you want to save?");
  if (popup == true) {
    console.log(save);
    let form = document.querySelector("#saveData");
    form.setAttribute("action", "/project.bca/Database/insertData.php");
    console.log(form);
  }
  else {
    let form = document.querySelector("#saveData");
    form.setAttribute("action", "#");
    console.log(form);
  }
});
