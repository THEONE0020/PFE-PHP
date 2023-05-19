// This function initializes Select2 on the "Niv" select element
$(document).ready(function() {
  $("#Niv").select2({
    placeholder: "choisis un Niveau",
    multiple: true, // Allows selecting multiple options without holding down the Ctrl key
  });
});

// This function previews the selected file and displays it in the ".prof-img" element
function previewFile() {
  const previewImage = document.querySelector(".prof-img");
  const fileInput = document.querySelector("input[type=file]");
  const selectedFile = fileInput.files[0];
  const reader = new FileReader();

  reader.addEventListener("load", () => {
    previewImage.src = reader.result;
  });

  if (selectedFile) {
    reader.readAsDataURL(selectedFile);
  }
}

// This function adds a click listener to each row of the table with the given ID and calls the provided callback when a row is clicked
function addRowClickListener(tableId, callback) {
  const table = document.getElementById(tableId);
  if (table) {
    const rows = table.querySelectorAll("tr");
    rows.forEach((row) => {
      row.addEventListener("click", () => {
        const cells = row.getElementsByTagName("td");
        callback(cells);
      });
    });
  }
}

// This function calculates the birth date of a person based on their age
function calculateBirthdayFromAge(age) {
  const today = new Date();
  const birthYear = today.getFullYear() - age;
  const birthday = new Date(birthYear, today.getMonth(), today.getDate());
  return birthday.toLocaleDateString();
}

// This function is called when a row in the table is clicked and it displays the information of the selected person in the "prf-info" section
function onRowClick(cells) {
  const prfInfo = document.querySelector(".prf-info");
  const listTable = document.querySelector("#list-table");
  const searchBox = document.querySelector(".search-box");
  const btnA = document.querySelector('.btn-ajt')
  listTable.style.display = "none";
  prfInfo.style.display = "block";
  searchBox.style.display = "none";
  btnA.style.marginTop = '11.8%'
  btnA.style.marginLeft = '75%';

  const prfInfoInputs = document.querySelectorAll(".table-infoPrf input");
  let i = 0;

  // Loops through the inputs in the "table-infoPrf" section and populates them with the information of the selected person
  prfInfoInputs.forEach((input) => {
    if (i === 3) {
      const age = parseInt(cells[i].textContent.trim().slice(0));
      const birthDate = calculateBirthdayFromAge(age);
      const [day, month, year] = birthDate.split("/").map((part) => part.padStart(2, "0"));
      const formattedBirthDate = `${year}-${day}-${month}`;

      input.value = formattedBirthDate;
      i++;
    } else {
      input.value = cells[i].textContent.trim();
      i++;
    }
  });
}
function onRowClick2(cells) {
  const prfInfo = document.querySelector(".et-info");
  const listTable = document.querySelector("#list-table");
  const searchBox = document.querySelector(".search-box");
  const sel = document.querySelector(".select-et");
  const btnA = document.querySelector('.btn-ajt')
  listTable.style.display = "none";
  prfInfo.style.display = "block";
  searchBox.style.display = "none";
  btnA.style.marginTop = '11.8%'
  btnA.style.marginLeft = '75%';
  sel.style.display = "none"
  const prfInfoInputs = document.querySelectorAll(".table-infoEt input");
  let i = 0;

  // Loops through the inputs in the "table-infoPrf" section and populates them with the information of the selected person
  prfInfoInputs.forEach((input) => {

      input.value = cells[i].textContent.trim();
      i++;
    
  });
}

function onrowC2(cells){
  const et = document.getElementById('et-notes')
  const res = document.getElementById('res-table')
  const ssem = document.querySelector('.select-sem')
  const sres = document.querySelector('.select-res')
  const headt = document.querySelector('.res-list h1 span')
  const backC = document.querySelector('.res-list .back-circle')
  backC.style.display = 'block'
  res.style.display = 'none'
  sres.style.display = 'none'
  ssem.style.display = 'table'
  et.style.display = 'table';
  headt.textContent = ` ${cells[2].textContent}  `;
}

// Adds a click listener to each row of the table with the ID "list-table"
addRowClickListener("list-table", onRowClick);
addRowClickListener("res-table", onrowC2);
addRowClickListener("list-table", onRowClick2);


function back() {
  const prfInfo = document.querySelector(".prf-info");
  const listTable = document.querySelector("#list-table");
  const searchBox = document.querySelector(".search-box");
  const btnA = document.querySelector('.btn-ajt');
  listTable.style.display = "";
  prfInfo.style.display = "none";
  searchBox.style.display = "";
  btnA.style.marginTop = '15.8%';
  btnA.style.marginLeft = '86.5%';
}

function back2() {
  const et = document.getElementById('et-notes');
  const res = document.getElementById('res-table');
  const ssem = document.querySelector('.select-sem');
  const sres = document.querySelector('.select-res');
  const headt = document.querySelector('.res-list h1 span');
  const backC = document.querySelector('.res-list .back-circle');
  res.style.display = 'table';
  sres.style.display = 'table';
  ssem.style.display = 'none';
  et.style.display = 'none';
  headt.textContent = ` Liste des résultats`;
  backC.style.display = 'none';
}
function back3() {
  const prfInfo = document.querySelector(".et-info");
  const listTable = document.querySelector("#list-table");
  const searchBox = document.querySelector(".search-box");
  const sel = document.querySelector(".select-et");
  const btnA = document.querySelector('.btn-ajt');
  listTable.style.display = "";
  prfInfo.style.display = "none";
  searchBox.style.display = "";
  btnA.style.marginTop = '15.8%';
  btnA.style.marginLeft = '86.5%';
  sel.style.display=""
}


// ---------------------------------


// document.getElementById('Doc').addEventListener('change', function (event) {
//   var file = event.target.files[0];
//   var fileURL = URL.createObjectURL(file);
//   var container = document.getElementById('pdf-container');
//   container.innerHTML = '<embed src="' + fileURL + '" type="application/pdf" width="100%" height="100%" />';
// });
document.getElementById('search-input').addEventListener('input', function (event) {
  handleSearchInput(event, 'res-table');
  handleSearchInput(event, 'list-table');
});

function handleSearchInput(event, tableId) {
  var input = event.target.value.toLowerCase();
  var rows = document.querySelectorAll('#' + tableId + ' tr:not(.not-header)');

  rows.forEach(function (row) {
    var cells = row.getElementsByTagName('td');
    var found = false;

    Array.from(cells).forEach(function (cell) {
      var text = cell.textContent.toLowerCase();
      if (text.includes(input)) {
        found = true;
      }
    });

    row.style.display = found ? '' : 'none';
  });
}
