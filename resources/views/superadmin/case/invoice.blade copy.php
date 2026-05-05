<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Case View</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="col-md-12">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <p class="card-title">5.Did your ministry/agency take steps to ensure policies did not further
            marginalize communities
            already overrepresented among trafficking victims?</p>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <div class="form-check">
           
            <label class="form-check-label">
              {{$case->five->fivestatus ?? '' }}
        
          </div>
       
          <table class="table table-white">
            <thead>
              <tr>
                <th scope="col">Type of Policy tool</th>
                <th scope="col">Title of the initiative</th>
                <th scope="col">Objectives</th>

              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                <input type="text" value="{{$case->five->fiveone ?? '' }}"  class="form-control" readonly>
                
                </td>

                <td>
                <input type="text" value="{{$case->five->fivetwo ?? '' }}"  class="form-control" readonly>
               
                </td>
                <td>
                <input type="text" value="{{$case->five->fivethree ?? '' }}"  class="form-control" readonly>
         
              </tr>
              <tr>
                <td> 
                <input type="text" value="{{$case->five->fivefour ?? '' }}"  class="form-control" readonly>
              
                </td>

                <td>
                <input type="text" value="{{$case->five->fivefive ?? ''  }}"  class="form-control" readonly>
               </td>
                <td>
                <input type="text" value="{{$case->five->fivesix ?? ''  }}"  class="form-control" readonly>
                  
                </td>
              </tr>
              <tr>
                <td>
                <input type="text" value="{{$case->five->fiveseven ?? ''  }}"  class="form-control" readonly>
                
                </td>

                <td>
                <input type="text" value="{{$case->five->fiveeight ?? ''  }}"  class="form-control" readonly>
                  
                </td>
                <td>
                <input type="text" value="{{$case->five->fivenine ?? '' }}"  class="form-control" readonly>
            
              </td>
              </tr>
              <tr>
                <td>
                <input type="text" value="{{$case->five->fiveten ?? ''  }}"  class="form-control" readonly>
                
                </td>

                <td>
                <input type="text" value="{{$case->five->fiveeleven ?? '' }}"  class="form-control" readonly>
                  
                </td>
                <td>
                <input type="text" value="{{$case->five->fivetwelve ?? '' }}"  class="form-control" readonly>
                 
                </td>
              </tr>
              <tr>
                <td>
                <input type="text" value="{{$case->five->fivethirteen ?? ''  }}"  class="form-control" readonly>
                 
                </td>

                <td>
                <input type="text" value="{{$case->five->fivefourteen?? ''  }}"  class="form-control" readonly>
                 
                </td>
                <td>
                <input type="text" value="{{$case->five->fivefifteen ?? '' }}"  class="form-control" readonly>
               
                </td>
              </tr>


              <tr>
                <td>
                <input type="text" value="{{$case->five->extra_one ?? '' }}"  class="form-control" readonly>
                
                </td>

                <td>
                <input type="text" value="{{$case->five->extra_two ?? '' }}"  class="form-control" readonly>
               
                </td>
                <td>
                <input type="text" value="{{$case->five->extra_three ?? '' }}"  class="form-control" readonly>
         
              </tr>




              <tr>
                <th scope="row">Others-1 (Specify)
                <input type="text" value="{{$case->five->fivesixteen ?? ''  }}"  class="form-control" readonly>
                  
                </th>
                <td>
                <input type="text" value="{{$case->five->fiveseventeen ?? ''  }}"  class="form-control" readonly>
                 
                </td>
                <td>
                <input type="text" value="{{$case->five->fiveeighteen ?? ''  }}"  class="form-control" readonly>
      
                </td>
              </tr>
              <tr>
                <th scope="row">Others-2 (Specify)
                <input type="text" value="{{$case->five->fivenineteen ?? ''  }}"  class="form-control" readonly>
                
                </th>
                <td>
                <input type="text" value="{{$case->five->fivetwenty ?? ''  }}"  class="form-control" readonly>
                  
                 </td>
                <td>
                <input type="text" value="{{$case->five->fivetwenty_one ?? ''  }}"  class="form-control" readonly>
                 
                </td>
              </tr>
              <tr>
                <th scope="row">Others-3 (Specify)
                <input type="text" value="{{$case->five->fivetwenty_two ?? ''  }}"  class="form-control" readonly>
                 
                </th>
                <td>
                <input type="text" value="{{$case->five->fivetwenty_three ?? ''  }}"  class="form-control" readonly>
                  
                </td>
                <td>
                <input type="text" value="{{$case->five->fivetwenty_four ?? ''  }}"  class="form-control" readonly>
                  
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="col-md-12">
      <div class="card card-outline collapsed-card">
        <div class="card-header">
          <h3 class="card-title">6.How much funding (in the local currency) did your ministry/agency/organization
            spend on
            prevention efforts (e.g., awareness campaigns, research projects, national action plan
            implementation, etc.)?</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <div class="form-check">
            
            <label class="form-check-label">
            
              {{$case->six->sixstatus ?? '' }}
            </label>
          </div>
        
          <table class="table table-white">
            <thead>
              <tr>
                <th scope="col">Type of preventive Action</th>
                <th scope="col">Allocation (in BDT)</th>


              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Total Allocation under NPA for prevention</th>
                <td>
                   <input type="text" value="{{$case->six->sixone ?? ''  }}"  class="form-control" readonly>
                   </td>


              </tr>
              <tr>
                <th scope="row">Total Allocation utilized under NPA for prevention</th>
                <td> 
                <input type="text" value="{{$case->six->sixtwo ?? ''  }}"  class="form-control" readonly>
                 
                 </td>

              </tr>
              <tr>
                <th scope="row">Total allocation spent for Awareness activities</th>
                <td>
                <input type="text" value="{{$case->six->sixthree ?? '' }}"  class="form-control" readonly>
               
                  </td>
              </tr>
              <tr>
                <th scope="row">Total allocation spent for safety-net</th>
                <td>
                <input type="text" value="{{$case->six->sixfour ?? '' }}"  class="form-control" readonly>
                  
                  </td>
              </tr>
              <tr>
                <th scope="row">Total allocation spent for training to promote prevention</th>
                <td>
                <input type="text" value="{{$case->six->sixfive ?? ''  }}"  class="form-control" readonly>
                  
                 </td>
              </tr>
              <tr>
                <th scope="row">Assessment of Allocation</th>
                <td>
                <input type="text" value="{{$case->six->sixsix ?? ''  }}"  class="form-control" readonly>
                 
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

   
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>