function empty_dots_array() {
	return [0,0,0, 0,0,0, 0,0,0];
}

/**
    Generate a dots array containing 'count' randomly placed dots
*/
function generate_dots_array_with(count) {
	var array = empty_dots_array();

	for (var i = 0; i < count; i++) {
        array[i] = 1;
	};

    shuffle(array);

	return array;
}

/**
    Create an HTML element (node) containing the dots grid.
    The grid will show the pattern in 'dot_array'.

    If 'interactive' is 'true', then the user can modify the
    dots grid. If the user modifies the dots grid, it will 
    affect the 'dot_array' consenquently.
*/
function create_dots_table(dot_array, interactive) {
	var dotsTable = document.createElement('table');
    
    dotsTable.id = 'dots';
    dotsTable.border = '1';

    var body = document.createElement('tbody');
    for (var i = 0; i < 3; i++) {
        var tr = document.createElement('tr');
        for (var j = 0; j < 3; j++) {
        	var index = 3*i + j;

        	var td = document.createElement('td');
        	var image = document.createElement('img');

        	image.src = dot_array[index] == 1 ? "../img/dot.png" : "../img/empty.png";
        	image.data_index = index;

        	if (interactive) {
        		image.onclick = function() {
        			dot_array[this.data_index] = (dot_array[this.data_index] + 1) % 2;
        			this.src = dot_array[this.data_index] == 1 ? "../img/dot.png" : "../img/empty.png";
        		};
        	}

        	td.appendChild(image);
        	tr.appendChild(td);
        }

        body.appendChild(tr);
    }

    dotsTable.appendChild(body);
    return dotsTable;
}






// http://stackoverflow.com/questions/6274339/how-can-i-shuffle-an-array-in-javascript
function shuffle(o){
    for(var j, x, i = o.length; i; j = Math.floor(Math.random() * i), x = o[--i], o[i] = o[j], o[j] = x);
    return o;
}