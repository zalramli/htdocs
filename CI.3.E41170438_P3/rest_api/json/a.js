// Dari Object Ke JSON
/**  let mahasiswa = {
 	nama: "Ali Rahmat",
 	umur: 20
 }
 console.log(JSON.stringify(mahasiswa));
**/

// Dari JSON ke Object (Vanilla Javascript)
/** 
let xhr = new XMLHttpRequest();
xhr.onreadystatechange = function () {
	if (xhr.readyState == 4 && xhr.status == 200) {
		let mahasiswa = JSON.parse(this.responseText);
		console.log(mahasiswa);
	}
}
xhr.open('GET', 'coba.json', true);
xhr.send();
**/

$.getJSON('coba.json', function (data) {
	console.log(data);
});
