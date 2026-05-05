@php
use App\Helpers\helper;
use App\Helpers\common;
@endphp



@extends('layouts.app')
@section('content')
<style>
  
  #container {
    height: 300px;
    min-width: 250px;
    max-width: 800px;
    margin: 0 auto;
}

.loading {
    margin-top: 10em;
    text-align: center;
    color: gray;
}
</style>
<style>
  table {
    width: 100%;
    border-spacing: 0;
    border-collapse: collapse;
  }

  td,
  th {
    padding: 0.5rem 1rem;
    border: solid 1px;
  }

  th {
    background-color: #eee;
  }

  .divNew {
    padding-top: 0.1rem;
    display: inline-table;
  }
</style>

<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0">
                {{ Auth::user()->user_type ?? '' }}:
                
              Admin Panel</h1> <br>
              @if(auth()->user()->status == 1)
              <a href="{{route('superadmin.dashboardquestion')}}" class="btn btn-primary">
                     @if(session()->get('lang') == 'bangla')
                     প্রিন্ট ভিউ
                @else
                    Print View
                @endif
            
            </a> 
              @endif
          </div><!-- /.col -->

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
@if(Auth::user()->user_type == "Super Admin")
        <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-4 col-6">
            <div class="small-box bg-info">
              <div class="inner">
               <h3 style="text-align: center;">
                      @if(session()->get('lang') == 'bangla')
                      পরিস্থিতি
                @else
               SITUATION
                @endif
                     </h3>
             <div style="display: flex; justify-content: space-between;">
                  <p>@if(session()->get('lang') == 'bangla')
                   জমা দেয়া হয়েছে ১৩
                @else 
                 13 Submission  
                @endif
                      </p>
                  <p>@if(session()->get('lang') == 'bangla')
                    জমা দেয়া হয়নি ১৫
                @else 
                15 Not Submitted 
                @endif</p>
                </div>
              </div>
            </div>
          </div>
           <div class="col-lg-4 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                                <h3 style="text-align: center;">   
                @if(session()->get('lang') == 'bangla')
                      প্রতিরোধ 
                @else
                 PREVENTION
                 @endif
                <div style="display: flex; justify-content: space-between;">
                   <p>@if(session()->get('lang') == 'bangla')
                  জমা দেয়া হয়েছে ১৫
                @else 
                15 Submission  
                @endif
                      </p>
                  <p>@if(session()->get('lang') == 'bangla')
                    জমা দেয়া হয়নি ১৩
                @else 
                13 Not Submitted
                @endif</p>
                </div>
              </div>
            </div>
          </div>
           <div class="col-lg-4 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                 <h3 style="text-align: center;">
                    @if(session()->get('lang') == 'bangla')
                         সুরক্ষা
                @else
              PROTECTION
                @endif
                    
                     
</h3>
                <div style="display: flex; justify-content: space-between;">
                     <p>@if(session()->get('lang') == 'bangla')
                  জমা দেয়া হয়েছে ১১ 
                @else 
               11 Submission 
                @endif
                      </p>
                  <p>@if(session()->get('lang') == 'bangla')
                   জমা দেয়া হয়নি ১৭
                @else 
                17 Not Submitted 
                @endif</p>
                </div>
              </div>
            </div>
          </div>
           <div class="col-lg-4 col-6">
            <div class="small-box bg-primary">
              <div class="inner">
               <h3 style="text-align: center;">
                      @if(session()->get('lang') == 'bangla')
                    বিচার
                @else
                     PROSECUTION
                @endif
                     </h3>
                <div style="display: flex; justify-content: space-between;">
                    <p>@if(session()->get('lang') == 'bangla')
                     জমা দেয়া হয়েছে ১২
                @else 
                12 Submission
                @endif
                      </p>
                  <p>@if(session()->get('lang') == 'bangla')
                  জমা দেয়া হয়নি ১৬
                @else  
                16 Not Submitted  
                @endif</p>
                </div>
              </div>
            </div>
          </div>
           <div class="col-lg-4 col-6">
            <div class="small-box bg-secondary">
              <div class="inner">
                 <h3 style="text-align: center;">
                        @if(session()->get('lang') == 'bangla')
                    অংশীদারিত্ব
                @else
                 PARTNERSHIP
                @endif
                    </h3>
                <div style="display: flex; justify-content: space-between;">
               <p>@if(session()->get('lang') == 'bangla')
                 জমা দেয়া হয়েছে ১০
                @else 
                  10 Submission
                @endif
                      </p>
                  <p>@if(session()->get('lang') == 'bangla')
                    জমা দেয়া হয়নি ১৮
                @else 
                18 Not Submitted
                @endif</p>
                </div>
              </div>
            </div>
          </div>
           <div class="col-lg-4 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                   <h3 style="text-align: center;">
                    
                            @if(session()->get('lang') == 'bangla')
                 পরিবীক্ষণ ও মূল্যায়ন
                @else
                     M & E
                @endif</h3>
                <div style="display: flex; justify-content: space-between;">
                    <p>@if(session()->get('lang') == 'bangla')
                   জমা দেয়া হয়েছে ৮ 
                @else 
                8 Submission
                @endif
                      </p>
                  <p>@if(session()->get('lang') == 'bangla')
                    জমা দেয়া হয়নি ২০ 
                @else 
                20 Not Submitted
                @endif</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-6">
            <div class="small-box bg-dark">
              <div class="inner">
                <h3 style="text-align: center;">
                    
                            @if(session()->get('lang') == 'bangla')
                       সুপারিশ
                @else
                 Recommendation
                @endif
                    
                     </h3>
                 <div style="display: flex; justify-content: space-between;">
                <p>@if(session()->get('lang') == 'bangla')
                  জমা দেয়া হয়েছে ১৬
                @else 
                16 Submission 
                @endif
                      </p>
                  <p>@if(session()->get('lang') == 'bangla')
                    জমা দেয়া হয়নি ১২
                @else 
               12 Not Submitted 
                @endif</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                 <h3 style="text-align: center;">               
                 @if(session()->get('lang') == 'bangla')
                       মোট
                @else
                 Total
                @endif</h3>
                  <div style="display: flex; justify-content: space-between;">
                     <p>@if(session()->get('lang') == 'bangla')
                   জমা দেয়া হয়েছে ৮৫
                @else 
               85 Submission 
                @endif
                      </p>
                  <p>@if(session()->get('lang') == 'bangla')
                  জমা দেয়া হয়নি ১১১
                @else 
                111 Not Submitted 
                @endif</p>
                </div>
              </div>
            </div>
          </div>
        </div>
   

      </div>
    </section>
@endif
    <!-- /.content-header -->
  
  

    <!-- Main content -->
    @if(auth()->user()->status == 0)
   @include('superadmin.dashboard.ministry')
   @include('superadmin.dashboard.agency')
   @include('superadmin.dashboard.agencymoib')
   @include('superadmin.dashboard.ctc')
   @include('superadmin.dashboard.ngo')
   @include('superadmin.dashboard.ingo')
   @include('superadmin.dashboard.un')
   
@endif

</div>

  <script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('admin/plugins/chart.js/Chart.min.js') }}"></script>
    <script src="https://code.highcharts.com/maps/highmaps.js"></script>
<script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
<script src="{{ asset('admin/js/custom.js') }}"> </script>


<script>
  // import { arr } from '../../../public/admin/js/constant.js'
  // import { arr } from '/public/js/constant.js';
  const category = ['Diplomats in foreign missions', 'Labour Attaches', 'MoFA officials within the country'];

  (async () => {
    
const topology = await fetch(
    'https://code.highcharts.com/mapdata/countries/bd/bd-all.topo.json'
).then(response => response.json());

// Prepare demo data. The data is joined to map using value of 'hc-key'
// property by default. See API docs for 'joinBy' for more info on linking
// data and map.
const data = [
    ['bd-da', 10], ['bd-kh', 11], ['bd-ba', 12], ['bd-cg', 13],
    ['bd-sy', 14], ['bd-rj', 15], ['bd-rp', 16]
];

// Create the chart
Highcharts.mapChart('container', {
    chart: {
        map: topology
    },

    title: {
        text: ''
    },

    subtitle: {
        text: ': <a href="http://code.highcharts.com/mapdata/countries/bd/bd-all.topo.json">Bangladesh</a>'
    },

    mapNavigation: {
        enabled: true,
        buttonOptions: {
            verticalAlign: 'bottom'
        }
    },

    colorAxis: {
        min: 0
    },

    series: [{
        data: data,
        name: 'Random data',
        states: {
            hover: {
                color: '#BADA55'
            }
        },
        dataLabels: {
            enabled: true,
            format: '{point.name}'
        }
    }]
});

})();

    $(function () {
     
  
    $.ajax({  
        type: "GET",
        url: "/pichart24",                            
        success: function(response){    

          var donutData        = {
      labels: [
          'Police HQ',
          'BGB',
       
      ],
      datasets: [
        {
          data: [response.data.total_policehq_percentage,response.data.total_bgb_percentage],
          backgroundColor : ['#4472C4', '#EE7D31'],
        }
      ]
    }
 //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieData        = donutData;
    var pieOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }

          new Chart(pieChartCanvas, {
      type: 'pie',
      data: pieData,
      options: pieOptions
      })


      
                      
           
            
        }

    });

    })

  //9qestion 
  $('#q9-dashboard-data-view').on("click",function (){
    if($(this).hasClass('intro')){    
        // alert("JS")
          $(this).removeClass('intro')
      }else{
        $(this).addClass("intro");
        $.ajax({  
         type: "GET",
         url: "/pichart9",             
         success: function(response){ 
          let newRow=response.data.q9_category_data;
          $("#q9_individual_activities tbody").html(newRow);
          }       
      })

      $.ajax({  
         type: "GET",
         url: "/q9datatotalparticipant",             
         success: function(response){ 
          let newRow=response.data.q9_category_data;
          $("#q9_all_participants tbody").html(newRow);
          }       
      })
      }
    })
//  $(function () {
    
//     //Question 9 Ajax calling for Pie Chart
//     //Each

//      $.ajax({  
//          type: "GET",
//          url: "/pichart9",             
//          success: function(response){ 
//           let newRow=response.data.q9_category_data;
//           $("#q9_individual_activities tr:eq(1)").after(newRow);
//           }       
//       })

//       $.ajax({  
//          type: "GET",
//          url: "/q9datatotalparticipant",             
//          success: function(response){ 
//           let newRow=response.data.q9_category_data;
//           $("#q9_all_participants tr:eq(1)").after(newRow);
//           }       
//       })
//  })


  //18qestion 
  $('#q18-dashboard-data-view').on("click",function (){
    if($(this).hasClass('intro')){    
        // alert("JS")
          $(this).removeClass('intro')
      }else{
        $(this).addClass("intro");
        $.ajax({  
         type: "GET",
         url: "/adult18",            
         success: function(response){ 
          let newRow=response.data.q18_category_data;
          $("#q18_individual_activities tbody").html(newRow);
          }       
      })
      $.ajax({  
         type: "GET",
         url: "/participants",           
         success: function(response){ 
           let newRow=response.data.q18_category_data;
            $("#q18_all_participants tbody").html(newRow);
          },
        error:function(xhr,status,error){
          console.error(error)
        }       
      })   
      }
  })
//   $(function () {
    
//     //Question 9 Ajax calling for Pie Chart
//     //Each

//      $.ajax({  
//          type: "GET",
//          url: "/adult18",             
//          success: function(response){ 
//           let newRow=response.data.q18_category_data;
//           $("#q18_individual_activities tr:eq(1)").after(newRow);
//           }       
//       })

//       $.ajax({  
//          type: "GET",
//          url: "/participants",             
//          success: function(response){ 
//           let newRow=response.data.q18_category_data;
//           $("#q18_all_participants tr:eq(1)").after(newRow);
//           }       
//       })
//  })

//q20 dashboard report
$('#q20-dashboard-data-view').on("click",function (){
    if($(this).hasClass('intro')){    
        // alert("JS")
          $(this).removeClass('intro');
      }else{
        $(this).addClass("intro");
        $.ajax({  
         type: "GET",
         url: "/adult20",             
         success: function(response){ 
          let newRow=response.data.q20_category_data;
          // alert(newRow)
          $("#q20_individual_activities tbody").html(newRow);
          }       
      })

      $.ajax({  
         type: "GET",
         url: "/participants20",             
         success: function(response){ 
          let newRow=response.data.q20_category_data;
          $("#q20_all_participants tbody").html(newRow);
          }       
      })
      }
    })
 // 24 dashboard report
 $('#q24-dashboard-data-view').on("click",function (){
    if($(this).hasClass('intro')){    
        // alert("JS")
          $(this).removeClass('intro');
      }else{
        $(this).addClass("intro");
        $.ajax({  
         type: "GET",
         url: "/pichart24",             
         success: function(response){ 
          let newRow=response.data.q24_category_data;
          $("#q24_individual_activities tbody").html(newRow);
          }       
      })

      $.ajax({  
         type: "GET",
         url: "/pichartadult",             
         success: function(response){ 
          let newRow=response.data.q24_category_data;
          $("#q24_all_participants tbody").html(newRow);
          }       
      })
      }
    })
//  $(function () {
    
//     //Question 25 Ajax calling for Pie Chart
//     //Each

//      $.ajax({  
//          type: "GET",
//          url: "/pichart24",             
//          success: function(response){ 
//           let newRow=response.data.q24_category_data;
//           $("#q24_individual_activities tr:eq(1)").after(newRow);
//           }       
//       })

//       $.ajax({  
//          type: "GET",
//          url: "/pichartadult",             
//          success: function(response){ 
//           let newRow=response.data.q24_category_data;
//           $("#q24_all_participants tr:eq(1)").after(newRow);
//           }       
//       })
//  })

//q25 dashboard report
$('#q25-dashboard-data-view').on("click",function (){
    if($(this).hasClass('intro')){    
        // alert("JS")
          $(this).removeClass('intro');
      }else{
        $(this).addClass("intro");
        $.ajax({  
         type: "GET",
         url: "/adult25",             
         success: function(response){ 
          let newRow=response.data.q25_category_data;
          $("#q25_individual_activities tbody").html(newRow);
          }       
      })

      $.ajax({  
         type: "GET",
         url: "/participants25",             
         success: function(response){ 
          let newRow=response.data.q25_category_data;
          $("#q25_all_participants tbody").html(newRow);
          }       
      })
      }
    })
//  $(function () {
    
//     //Question 25 Ajax calling for Pie Chart
//     //Each

//      $.ajax({  
//          type: "GET",
//          url: "/adult25",             
//          success: function(response){ 
//           let newRow=response.data.q25_category_data;
//           $("#q25_individual_activities tr:eq(1)").after(newRow);
//           }       
//       })

//       $.ajax({  
//          type: "GET",
//          url: "/participants25",             
//          success: function(response){ 
//           let newRow=response.data.q25_category_data;
//           $("#q25_all_participants tr:eq(1)").after(newRow);
//           }       
//       })
//  })



  //30qestion dashboard report
  $('#q30-dashboard-data-view').on("click",function (){
    if($(this).hasClass('intro')){    
        // alert("JS")
          $(this).removeClass('intro');
      }else{
        $(this).addClass("intro");
        $.ajax({  
         type: "GET",
         url: "/adult30",             
         success: function(response){ 
          let newRow=response.data.q30_category_data;
          $("#q30_individual_activities tbody").html(newRow);
          }       
      })

      $.ajax({  
         type: "GET",
         url: "/participants30",             
         success: function(response){ 
          let newRow=response.data.q30_category_data;
          $("#q30_all_participants tbody").html(newRow);
          }       
      })
      }
    })
//   $(function () {
    
//     //Question 9 Ajax calling for Pie Chart
//     //Each

//      $.ajax({  
//          type: "GET",
//          url: "/adult30",             
//          success: function(response){ 
//           let newRow=response.data.q30_category_data;
//           $("#q30_individual_activities tr:eq(1)").after(newRow);
//           }       
//       })

//       $.ajax({  
//          type: "GET",
//          url: "/participants30",             
//          success: function(response){ 
//           let newRow=response.data.q30_category_data;
//           $("#q30_all_participants tr:eq(1)").after(newRow);
//           }       
//       })
//  })

//q31 dashboard report
$('#q31-dashboard-data-view').on("click",function (){
    if($(this).hasClass('intro')){    
        // alert("JS")
          $(this).removeClass('intro');
      }else{
        $(this).addClass("intro");
        $.ajax({  
         type: "GET",
         url: "/adult31",             
         success: function(response){ 
        //  alert(response.data.q31_category_data)
          let newRow=response.data.q31_category_data;
          $("#q31_individual_activities tbody").html(newRow);
          }       
      })

      $.ajax({  
         type: "GET",
         url: "/participants31",             
         success: function(response){ 
          let newRow=response.data.q31_category_data;
          $("#q31_all_participants tbody").html(newRow);
          }       
      })
      }
});
  // q32 dashboard report
  $('#q32-dashboard-data-view').on("click",function (){
    if($(this).hasClass('intro')){    
        // alert("JS")
          $(this).removeClass('intro');
      }else{
        $(this).addClass("intro");
        $.ajax({  
         type: "GET",
         url: "/adult32",             
         success: function(response){ 
          let newRow=response.data.q32_category_data;
          $("#q32_individual_activities tbody").html(newRow);
          }       
      })

      $.ajax({  
         type: "GET",
         url: "/participants32",             
         success: function(response){ 
          let newRow=response.data.q32_category_data;
          $("#q32_all_participants tbody").html(newRow);
          }       
      })
      }
    })
//   $(function () {
    
//     //Question 25 Ajax calling for Pie Chart
//     //Each

//      $.ajax({  
//          type: "GET",
//          url: "/adult32",             
//          success: function(response){ 
//           let newRow=response.data.q32_category_data;
//           $("#q32_individual_activities tr:eq(1)").after(newRow);
//           }       
//       })

//       $.ajax({  
//          type: "GET",
//          url: "/participants32",             
//          success: function(response){ 
//           let newRow=response.data.q32_category_data;
//           $("#q32_all_participants tr:eq(1)").after(newRow);
//           }       
//       })
//  })

//q33 dashboard report
$('#q33-dashboard-data-view').on("click",function (){
    if($(this).hasClass('intro')){    
        // alert("JS")
          $(this).removeClass('intro');
      }else{
        $(this).addClass("intro");
        $.ajax({  
         type: "GET",
         url: "/adult33",             
         success: function(response){ 
          let newRow=response.data.q33_category_data;
          $("#q33_individual_activities tbody").html(newRow);
          }       
      })

      $.ajax({  
         type: "GET",
         url: "/participants33",             
         success: function(response){ 
          let newRow=response.data.q33_category_data;
          $("#q33_all_participants tbody").html(newRow);
          }       
      })
      }
    })
//  $(function () {
    
//     //Question 25 Ajax calling for Pie Chart
//     //Each

//      $.ajax({  
//          type: "GET",
//          url: "/adult33",             
//          success: function(response){ 
//           let newRow=response.data.q33_category_data;
//           $("#q33_individual_activities tr:eq(1)").after(newRow);
//           }       
//       })

//       $.ajax({  
//          type: "GET",
//          url: "/participants33",             
//          success: function(response){ 
//           let newRow=response.data.q33_category_data;
//           $("#q33_all_participants tr:eq(1)").after(newRow);
//           }       
//       })
//  })

 //q34 dashboard report 
 $('#q34-dashboard-data-view').on("click",function (){
    if($(this).hasClass('intro')){    
        // alert("JS")
          $(this).removeClass('intro');
      }else{
        $(this).addClass("intro");
        $.ajax({  
         type: "GET",
         url: "/adult34",             
         success: function(response){ 
          let newRow=response.data.q34_category_data;
          $("#q34_individual_activities tbody").html(newRow);
          }       
      })

      $.ajax({  
         type: "GET",
         url: "/participants34",             
         success: function(response){ 
          let newRow=response.data.q34_category_data;
          $("#q34_all_participants tbody").html(newRow);
          }       
      })
      }
    })
//  $(function () {
    
//     //Question 9 Ajax calling for Pie Chart
//     //Each

//      $.ajax({  
//          type: "GET",
//          url: "/adult34",             
//          success: function(response){ 
//           let newRow=response.data.q34_category_data;
//           $("#q34_individual_activities tr:eq(1)").after(newRow);
//           }       
//       })

//       $.ajax({  
//          type: "GET",
//          url: "/participants34",             
//          success: function(response){ 
//           let newRow=response.data.q34_category_data;
//           $("#q34_all_participants tr:eq(1)").after(newRow);
//           }       
//       })
//  })

// report 36
  $(function () {
    
    //Question 9 Ajax calling for Pie Chart
    //Each
    $('#q36-dashboard-data-view').on("click",function (){
    if($(this).hasClass('intro')){    
        // alert("JS")
          $(this).removeClass('intro');
      }else{
        $(this).addClass("intro");
        $.ajax({  
         type: "GET",
         url: "/adult36",             
         success: function(response){ 
        //  alert(response.data.q36_category_data)
          let newRow=response.data.q36_category_data;
          $("#q36_individual_activities tbody").html(newRow);
          }       
      })

      $.ajax({  
         type: "GET",
         url: "/participants36",             
         success: function(response){ 
          let newRow=response.data.q36_category_data;
          $("#q36_all_participants tbody").html(newRow);
          }       
      })
      }
    })
     
 });
 //q37 dashboard report
 $('#q37-dashboard-data-view').on("click",function (){
    if($(this).hasClass('intro')){    
        // alert("JS")
          $(this).removeClass('intro');
      }else{
        $(this).addClass("intro");
        $.ajax({  
         type: "GET",
         url: "/adult37",             
         success: function(response){ 
        //  alert(response.data.q37_category_data)
          let newRow=response.data.q37_category_data;
          $("#q37_individual_activities tbody").html(newRow);
          }       
      })

      $.ajax({  
         type: "GET",
         url: "/participants37",             
         success: function(response){ 
          let newRow=response.data.q37_category_data;
          $("#q37_all_participants tbody").html(newRow);
          }       
      })
      }
    });

//q40 dashboard report
$('#q40-dashboard-data-view').on("click",function (){
    if($(this).hasClass('intro')){    
        // alert("JS")
          $(this).removeClass('intro');
      }else{
        $(this).addClass("intro");
        $.ajax({  
         type: "GET",
         url: "/adult40",             
         success: function(response){ 
        //  alert(response.data.q40_category_data)
          let newRow=response.data.q40_category_data;
          $("#q40_individual_activities tbody").html(newRow);
          }       
      })

      $.ajax({  
         type: "GET",
         url: "/participants40",             
         success: function(response){ 
          let newRow=response.data.q40_category_data;
          $("#q40_all_participants tbody").html(newRow);
          }       
      })
      }
    });

//q42 dashboard report
$('#q42-dashboard-data-view').on("click",function (){
    if($(this).hasClass('intro')){    
        // alert("JS")
          $(this).removeClass('intro');
      }else{
        $(this).addClass("intro");
        $.ajax({  
         type: "GET",
         url: "/adult42",             
         success: function(response){ 
        //  alert(response.data.q42_category_data)
          let newRow=response.data.q42_category_data;
          $("#q42_individual_activities tbody").html(newRow);
          }       
      })

      $.ajax({  
         type: "GET",
         url: "/participants42",             
         success: function(response){ 
          let newRow=response.data.q42_category_data;
          $("#q42_all_participants tbody").html(newRow);
          }       
      })
      }
    });
//q49 dashboard report

$('#q49-dashboard-data-view').on("click",function (){
    if($(this).hasClass('intro')){    
        // alert("JS")
          $(this).removeClass('intro');
      }else{
        $(this).addClass("intro");
        $.ajax({  
         type: "GET",
         url: "/adult49",             
         success: function(response){ 
        //  alert(response.data.q49_category_data)
          let newRow=response.data.q49_category_data;
          $("#q49_individual_activities tbody").html(newRow);
          }       
      })

      $.ajax({  
         type: "GET",
         url: "/participants49",             
         success: function(response){ 
          let newRow=response.data.q49_category_data;
          $("#q49_all_participants tbody").html(newRow);
          }       
      })
      }
    });
//q55 dashboard report
$('#q55-dashboard-data-view').on("click",function (){
    if($(this).hasClass('intro')){    
        // alert("JS")
          $(this).removeClass('intro');
      }else{
        $(this).addClass("intro");
        $.ajax({  
         type: "GET",
         url: "/adult55",             
         success: function(response){ 
          let newRow=response.data.q55_category_data;
          $("#q55_individual_activities tbody").html(newRow);
          }       
      })

      $.ajax({  
         type: "GET",
         url: "/participants55",             
         success: function(response){ 
          let newRow=response.data.q55_category_data;
          $("#q55_all_participants tbody").html(newRow);
          }       
      })
      }
    })
//  $(function () {
    
//     //Question 55 Ajax calling for Pie Chart
//     //Each

//      $.ajax({  
//          type: "GET",
//          url: "/adult55",             
//          success: function(response){ 
//           let newRow=response.data.q55_category_data;
//           $("#q55_individual_activities tr:eq(1)").after(newRow);
//           }       
//       })

//       $.ajax({  
//          type: "GET",
//          url: "/participants55",             
//          success: function(response){ 
//           let newRow=response.data.q55_category_data;
//           $("#q55_all_participants tr:eq(1)").after(newRow);
//           }       
//       })
//  })

//  question 24 row data show
  
  $(function () {
  $.ajax({    //create an ajax request to display.php
         type: "GET",
         url: "/shakir24",             
      //expect html to be returned                
         success: function(response){ 
          //  alert(JSON.stringify(response));
          let data=response.data
       


for (const [key, value] of Object.entries(data)) {
 
  $('#' + key).html(value)
}

 }    
         
     })

    

 })

 //9 question 2 table
 $(function () {
  $.ajax({    //create an ajax request to display.php
         type: "GET",
         url: "/referred",             
      //expect html to be returned                
         success: function(response){ 
          //  alert(JSON.stringify(response));
          let data=response.data
       


for (const [key, value] of Object.entries(data)) {
 
  $('#' + key).html(value)
}

 }    
         
     })

    

 })




//2 NUMBER PICHART


$(function () {
     
     //Create pie or douhnut chart
     // You can switch between pie and douhnut using the method below.
    
 
     $.ajax({    //create an ajax request to display.php
         type: "GET",
         url: "/pichartadult",             
      //expect html to be returned                
         success: function(response){    
 
           var donutData        = {
       labels: [
           'Police HQ',
           'BGB',
        
       ],
       datasets: [
         {
           data: [response.data.total_policehq_percentage,response.data.total_bgb_percentage],
           backgroundColor : ['#4472C4', '#EE7D31'],
         }
       ]
     }
  //- PIE CHART -
     //-------------
     // Get context with jQuery - using jQuery's .get() method.
     var pieChartCanvas = $('#pieChart2').get(0).getContext('2d')
     var pieData        = donutData;
     var pieOptions     = {
       maintainAspectRatio : false,
       responsive : true,
     }
 
           new Chart(pieChartCanvas, {
       type: 'pie',
       data: pieData,
       options: pieOptions
       })
 
 
       
                       
            
             
         }
 
     });
 
     })

     //pichart one
     $(function () {

    
 
     $.ajax({  
         type: "GET",
         url: "/pichart1",                          
         success: function(response){    
 
           var donutData        = {
       labels: [
           'Yes',
           'No',
        
       ],
       datasets: [
         {
           data: [response.data.totalYesPercentage,response.data.totalNoPercentage],
           backgroundColor : ['#00a65a', '#f56954'],
         }
       ]
     }
  //- PIE CHART -
     //-------------
     // Get context with jQuery - using jQuery's .get() method.
     var pieChartCanvas = $('#pieChart3').get(0).getContext('2d')
     var pieData        = donutData;
     var pieOptions     = {
       maintainAspectRatio : false,
       responsive : true,
     }
 
           new Chart(pieChartCanvas, {
       type: 'pie',
       data: pieData,
       options: pieOptions
       })
 
 
       
                       
            
             
         }
 
     });
 
     })


     $(function () {
     
  
     $.ajax({  
         type: "GET",
         url: "/distribution_participants",                            
         success: function(response){    
 
           var donutData        = {
       labels: [
           'Courtyard meeting',
           'Bazar/hatt meeting',
           'CTC meeting',
           'Consultation',
           'Poster',
           'leaflet',
           'Booklet',
           'SMS',
           'Newsletter',
           'Billboard',
           'Folk show',
           'Film show',
           'Miking',
           'Web campaign',
        
       ],
       datasets: [
         {
           data: response.data.q9_category_pie_chart_data,
           backgroundColor : ['#4472C4', '#ED7D31','#A5A5A5','#FFC000','#5B9BD5','#70AD47','#254378','#9D480D','#636363','#997300','#255D91','#43672A','#688DCF','##F09659'],
         }
       ]
     }
  //- PIE CHART -
     //-------------
     // Get context with jQuery - using jQuery's .get() method.
     var pieChartCanvas = $('#pieChart4').get(0).getContext('2d')
     var pieData        = donutData;
     var pieOptions     = {
       maintainAspectRatio : false,
       responsive : true,
     }
 
    new Chart(pieChartCanvas, {
       type: 'pie',
       data: pieData,
       options: pieOptions
       })
     
    }
 
     });
 
     })


   

 // question no 20
 $(function () {
  $.ajax({    //create an ajax request to display.php
         type: "GET",
         url: "/adult20",             
      //expect html to be returned                
         success: function(response){ 
          //  alert(JSON.stringify(response));
          let data=response.data
       


for (const [key, value] of Object.entries(data)) {
 
  $('#' + key).html(value)
}

 }    
         
     })

    

 })

  // question no 20
  $(function () {
  $.ajax({    //create an ajax request to display.php
         type: "GET",
         url: "/participants20",             
      //expect html to be returned                
         success: function(response){ 
          //  alert(JSON.stringify(response));
          let data=response.data
       


for (const [key, value] of Object.entries(data)) {
 
  $('#' + key).html(value)
}

 }    
         
     })

    

 })

   // question no 32
   $(function () {
  $.ajax({    //create an ajax request to display.php
         type: "GET",
         url: "/adult32",             
      //expect html to be returned                
         success: function(response){ 
          //  alert(JSON.stringify(response));
          let data=response.data
       


for (const [key, value] of Object.entries(data)) {
 
  $('#' + key).html(value)
}

 }    
         
     })

    

 })

 $(function () {
  $.ajax({    //create an ajax request to display.php
         type: "GET",
         url: "/participants32",             
      //expect html to be returned                
         success: function(response){ 
          //  alert(JSON.stringify(response));
          let data=response.data
       


for (const [key, value] of Object.entries(data)) {
 
  $('#' + key).html(value)
}

 }    
         
     })

    

 })

 $(function () {
  $.ajax({    //create an ajax request to display.php
         type: "GET",
         url: "/adult33",             
      //expect html to be returned                
         success: function(response){ 
          //  alert(JSON.stringify(response));
          let data=response.data
       


for (const [key, value] of Object.entries(data)) {
 
  $('#' + key).html(value)
}

 }    
         
     })

    

 })

 $(function () {
  $.ajax({    //create an ajax request to display.php
         type: "GET",
         url: "/participants33",             
      //expect html to be returned                
         success: function(response){ 
          //  alert(JSON.stringify(response));
          let data=response.data
       


for (const [key, value] of Object.entries(data)) {
 
  $('#' + key).html(value)
}

 }    
         
     })

    

 })

 $(function () {
  $.ajax({    //create an ajax request to display.php
         type: "GET",
         url: "/adult34",             
      //expect html to be returned                
         success: function(response){ 
          //  alert(JSON.stringify(response));
          let data=response.data
       


for (const [key, value] of Object.entries(data)) {
 
  $('#' + key).html(value)
}

 }    
         
     })

    

 })

 $(function () {
  $.ajax({    //create an ajax request to display.php
         type: "GET",
         url: "/participants34",             
      //expect html to be returned                
         success: function(response){ 
          //  alert(JSON.stringify(response));
          let data=response.data
       


for (const [key, value] of Object.entries(data)) {
 
  $('#' + key).html(value)
}

 }    
         
     })

    

 })






 $(function () {
  $.ajax({    //create an ajax request to display.php
         type: "GET",
         url: "/adult25",             
      //expect html to be returned                
         success: function(response){ 
          //  alert(JSON.stringify(response));
          let data=response.data
       


for (const [key, value] of Object.entries(data)) {
 
  $('#' + key).html(value)
}

 }    
         
     })

    

 })


 $(function () {
  $.ajax({    //create an ajax request to display.php
         type: "GET",
         url: "/participants25",             
      //expect html to be returned                
         success: function(response){ 
          //  alert(JSON.stringify(response));
          let data=response.data
       


for (const [key, value] of Object.entries(data)) {
 
  $('#' + key).html(value)
}

 }    
         
     })

    

 })
 // dashboard view 44
 $('#q44-dashboard-data-view').on("click",function (){
    if($(this).hasClass('intro')){    
        // alert("JS")
          $(this).removeClass('intro');
      }else{
        $(this).addClass("intro");
        $.ajax({    //create an ajax request to display.php
         type: "GET",
         url: "/adult44",             
      //expect html to be returned                
         success: function(response){ 
           
          let data=response.data.q44_category;
          $("#question44 tbody").html(data)

         }
        });
        $.ajax({    //create an ajax request to display.php
         type: "GET",
         url: "/participants44",             
      //expect html to be returned                
         success: function(response){ 
           
          let data=response.data.category_two_44;
          $("#participants44 tbody").html(data)

         }
        });
      }
    })


//q53 dashboard report

$('#q53-dashboard-data-view').on("click",function (){
    if($(this).hasClass('intro')){    
        // alert("JS")
          $(this).removeClass('intro');
      }else{
        $(this).addClass("intro");
        $.ajax({    //create an ajax request to display.php
         type: "GET",
         url: "/adult53",             
      //expect html to be returned                
         success: function(response){ 
           
          let data=response.data.q53_category_data;
          $('#question53 tbody').html(data)
         }
        });
        $.ajax({    //create an ajax request to display.php
         type: "GET",
         url: "/participants53",             
      //expect html to be returned                
         success: function(response){ 
          //  alert(response.data.q53_category_data)
          let data=response.data.q53_category_data;
          $('#participants53 tbody').html(data)
         }
        });
      }
    })

// 54 dashboard view
$('#q54-dashboard-data-view').on("click",function (){
    if($(this).hasClass('intro')){    
        // alert("JS")
          $(this).removeClass('intro');
      }else{
        $(this).addClass("intro");
        $.ajax({    //create an ajax request to display.php
         type: "GET",
         url: "/agencies_judiciary_question54",             
      //expect html to be returned                
         success: function(response){ 
           
          let data=response.data.q54_category_data;
          // alert(data)
          $('#question54 tbody').html(data)
         }
        });
        $.ajax({    //create an ajax request to display.php
         type: "GET",
         url: "/participants54",             
      //expect html to be returned                
         success: function(response){ 
           
          let data=response.data.q54_category_data;
          $('#participants54 tbody').html(data)
         }
        });
      }
    })
//  $(function () {
//   $.ajax({    //create an ajax request to display.php
//          type: "GET",
//          url: "/agencies_judiciary_question54",             
//       //expect html to be returned                
//          success: function(response){ 
           
//           let data=response.data.q54_category;
          

//       var table = '<tr>'+
//                 '<th rowspan="2">Category Of Trainee</th>' +
//                 '<th rowspan="2">Training Content</th>' +
//                 '<th rowspan="2">Number Of  Training</th>' +
//                 '<th colspan="8">Number of Official Accused</th>' +
            

//               '</tr>' +
              
//               '<tr>' +
//                 '<td  colspan="2">Men</td>' +
//                 '<td  colspan="2">Women</td> ' +
//                 '<td  colspan="2">3 rd G</td>' +
//                 '<td  colspan="2">Total Adult</td>'+

//               '</tr>'
        
//        for (let value of data) {
//           // alert(JSON.stringify(value));
//     let newData=value
//   // for (const [key,value] of Object.entries(newData)) {
    
    
//              table += '<tr>' +
//                 '<td>' + value["category_trainee"] + '</td>' +
//                 '<td>' + value["number_of_training"] + '</td>' +
//                 '<td>' + value["training_contents"] + '</td>' +
//                 '<td>' + value["total_men"] + '</td>' +
//                 '<td>' + value["percentage_men"] + '</td>' +
//                 '<td>' + value["total_women"] + '</td>' +
//                 '<td>' + value["percentage_women"] + '</td>' +
//                 '<td>' + value["total_third_gender"] + '</td>' +
//                 '<td>' + value["percentage_third_gender"] + '</td>' +
//                 '<td>' + value["total_people"] + '</td>' +
//                 '<td>' + value["percentage_of_total_population"] + '</td>' +
              
       
     
          

//               '</tr>'
//   // }
// }

//  $('#question54').html(table)

//  }    
         
//      })

    

//  })

//  $(function () {
//   $.ajax({    //create an ajax request to display.php
//          type: "GET",
//          url: "/participants54",             
//       //expect html to be returned                
//          success: function(response){ 
           
//           let data=response.data.category_two_54;
         
          
//       //  console.log(data);

//       var table = '<tr>'+
//                 '<th rowspan="2">Category Of Trainee</th>' +
//                 '<th rowspan="2">Training Content</th>' +
//                 '<th rowspan="2">Number Of  Training</th>' +
//                 '<th colspan="8">Number of Official Accused</th>' +
            

//               '</tr>' +
              
//               '<tr>' +
//                 '<td  colspan="2">Men</td>' +
//                 '<td  colspan="2">Women</td> ' +
//                 '<td  colspan="2">3 rd G</td>' +
//                 '<td  colspan="2">Total Adult</td>'+

//               '</tr>'
        
//        for (let value of data) {
//           //  alert(JSON.stringify(value));
//     let newData=value
//   // for (const [key,value] of Object.entries(newData)) {
    
    
//              table += '<tr>' +
//                 '<td>' + value["category_trainee"] + '</td>' +
//                 '<td>' + value["number_of_training"] + '</td>' +
//                 '<td>' + value["training_contents"] + '</td>' +
//                 '<td>' + value["total_men"] + '</td>' +
//                 '<td>' + value["percentage_men"] + '</td>' +
//                 '<td>' + value["total_women"] + '</td>' +
//                 '<td>' + value["percentage_women"] + '</td>' +
//                 '<td>' + value["total_third_gender"] + '</td>' +
//                 '<td>' + value["percentage_third_gender"] + '</td>' +
//                 '<td>' + value["total_people"] + '</td>' +
//                 '<td>' + value["percentage_of_total_population"] + '</td>' +
              
       
     
          

//               '</tr>'
//   // }
// }

//  $('#participants54').html(table)

//  }    
         
//      })

    

//  })



//  $(function () {
//   $.ajax({    //create an ajax request to display.php
//          type: "GET",
//          url: "/adult18",             
//       //expect html to be returned                
//          success: function(response){ 
           
//           let data=response.data.category_18;
         
          
//       //  console.log(data);

//       var table = '<tr>'+
//                 '<th rowspan="2">Category of Trainee</th>' +
//                 '<th colspan="9"  style="text-align: left">Coverage of Training</th>' +
            
//               '</tr>' +
              
//               '<tr>' +
//                 '<td  colspan="2">Men</td>' +
//                 '<td  colspan="2">Women</td> ' +
//                 '<td  colspan="2">3 rd G</td>' +
//                 '<td  colspan="2">Total Adult</td>'+

//               '</tr>'
        
//        for (let value of data) {
//           // alert(JSON.stringify(value));
//     let newData=value
//   // for (const [key,value] of Object.entries(newData)) {
    
    
//              table += '<tr>' +
             
//             //  '<td>' +"New Data"  + '</td>' +
            
            
            

             

         
               
        
//                 '<td>' + ArrayValue(category, value["category_trainee"]) + '</td>' +
//                 '<td>' + value["total_men"] + '</td>' +
//                 '<td>' + value["percentage_men"] + '</td>' +
//                 '<td>' + value["total_women"] + '</td>' +
//                 '<td>' + value["percentage_women"] + '</td>' +
//                 '<td>' + value["total_third_gender"] + '</td>' +
//                 '<td>' + value["percentage_third_gender"] + '</td>' +
//                 '<td>' + value["total_people"] + '</td>' +
//                 '<td>' + value["percentage_of_total_population"] + '</td>' +
//               '</tr>'
//   // }
// }

//  $('#question18').html(table)

//  }    
         
//      })

    

//  })





    
   

</script>


@endsection