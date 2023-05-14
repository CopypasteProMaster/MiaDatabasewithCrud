/*dark and lightmode*/
function dtow() {
   var element = document.body;
   element.classList.toggle("dark-mode");
}
const btn = document.getElementById('btn');

// ✅ Toggle button text on click
btn.addEventListener('click', function handleClick() {
  const initialText = 'Dark mode';

  if (btn.textContent.toLowerCase().includes(initialText.toLowerCase())) {
    btn.textContent = 'Light mode';
  } else {
    btn.textContent = initialText;
  }
});

/*====*/


function openNav() {
  document.getElementById("dropdown").style.width = "250px";
  document.getElementById("dropbtn").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("dropdown").style.width = "0";
  document.getElementById("dropbtn").style.marginLeft= "0";
}



