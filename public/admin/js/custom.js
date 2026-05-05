"use strict";
function chartDisplay(data=[],lables=[],backgroundColor=[],pieChartId,type='pie') {
    var donutData = {
        labels: lables,
        datasets: [
          {
            data: data,
            backgroundColor : backgroundColor,
          }
        ]
      }

      var pieChartCanvas = $('#'+pieChartId).get(0).getContext('2d')
      var pieData        = donutData;
      var pieOptions     = {
        maintainAspectRatio : false,
        responsive : true,
      }
      new Chart(pieChartCanvas, {
        type: type,
        data: pieData,
        options: pieOptions
        })      
  }

  


function ArrayValue(arr=[], key) {
  if (arr.hasOwnProperty(key-1)) {
    return arr[key-1];
} else {
   return "No value"
}
}





  
