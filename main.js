// ############## SEARCH FIELD OPTION #################

// Get input element
let filterInputvalue = document.getElementById('filterInput');
// Add event listener
filterInputvalue.addEventListener('keyup', filterNames);

function filterNames() {
    // Get value of input
    let filterValue = document.getElementById('filterInput').value.toUpperCase();

    // Get names ul
    let ul = document.getElementById('names');
    // Get lis from ul
    let li = ul.querySelectorAll('li.collection-item');
    let header = ul.querySelectorAll('li.collection-header');   

    // Loop through collection-item lis
    for (let i = 0; i < li.length; i++) {
        let a = li[i].getElementsByTagName('a')[0];
        // If matched
        if (a.innerHTML.toUpperCase().indexOf(filterValue) > -1) {
            li[i].style.display = 'block';
            // header[i].style.display = 'block';
        } else {
            li[i].style.display = 'none';
            // header[i].style.display = 'none';
        }

        if (filterValue == "") {
            li[i].style.display = 'none';
            // header[i].style.display = 'none';
        }
    }

}
