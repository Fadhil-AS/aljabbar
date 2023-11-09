
 // ambil elemen canvas
 var ctx = document.getElementById('donutChart').getContext('2d');

 // tentukan data chart
 var data = {
   labels: ['Armada On trip', 'Armada Perpal'],
   datasets: [{
     data: [4,1],
     backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56']
   }]
 };

// buat configurasi chart
var config = {
    type: 'doughnut',
    data: data,
    options: {
      responsive: true

    }

  };
// buat donut chart
var myDonutChart = new Chart(ctx, config);


$(document).ready( function () {
    $('#dataBeranda').DataTable();
} );
