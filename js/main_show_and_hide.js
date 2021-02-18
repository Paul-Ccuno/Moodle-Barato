function showMain(main, page){
  main.style.left = '0px';
  page.style.marginLeft = '300px';
}
function hideMain(main, page){
  main.style.left = '-300px';
  page.style.marginLeft = '0px';
}

function showAndHideMain(){
  main = document.getElementById('main');
  
  page = document.getElementById('page');
  if (main.style.left < '0px') {
    showMain(main, page);
  } else{
    hideMain(main, page);
  }
}