// let A = 10;
// let B = 9;

// let result = A + B;

// console.log("X = " + result);

// A = 2, B = 3, C = 2, D = 6



function toggleContent() {
    var content = document.getElementById("hiddenContent");
    if (content.style.display === "none" || content.style.display === "") {
        content.style.display = "block";
    } else {
        content.style.display = "none";
    }
}

function openModal() {
    const scrollY = window.scrollY;
    document.body.classList.add('modal-open');
    document.body.style.top = `-${scrollY}px`;
    document.body.dataset.scrollY = scrollY;
    // aqui você também mostra o modal
  }
  
  function closeModal() {
    const scrollY = document.body.dataset.scrollY;
    document.body.classList.remove('modal-open');
    document.body.style.top = '';
    window.scrollTo(0, parseInt(scrollY || '0'));
    // aqui você também esconde o modal
  }
