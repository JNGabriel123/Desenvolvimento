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
