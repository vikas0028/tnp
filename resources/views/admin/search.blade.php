@extends('admin.index')

@section('AdminContent')
<script src="{{url('/js/jquery.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/1.3.3/FileSaver.min.js"></script>
<script type="text/javascript" src="{{url('/js/tableExport.js')}}"></script>
<script type="text/javascript" src="{{url('/js/jquery.base64.js')}}"></script>
<script type="text/javascript" src="{{url('/js/jspdf.js')}}"></script>
<script type="text/javascript" src="{{url('/js/sprintf.js')}}"></script>
<script type="text/javascript" src="{{url('/js/base64.js')}}"></script>
<script type="text/javascript">
  $(document).ready(function(){

  doc = new jsPDF();

    $('#pdf').click(function(){

      var pd = $('#dataTable').tableExport({

        type:'pdf',
        escape:'flase'


      });

      
      doc.saveAs(pd+'.pdf');
      pd = null;
    
    });
    
    

  });
</script>


  
<div class="content-wrapper" id="app">
    <div v-cloak>
      <div class="container-fluid">
        <!-- Breadcrumbs -->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="./">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Search</li>
        </ol>
        <div class="row">
          <div class="col-lg-12">
            
            <div class="card mb-3">
              <!-- <div class="card-header">
                <i class="fa fa-search"></i>
                Search Query
              </div> -->
              <div class="card-body">
                <form v-on:submit.prevent="onSubmit">

                  <div class="card-header form-row" v-for="element in elements">

                        <div class="form-group col-md-3">
                          <label for="inputEmail4" class="col-form-label">Field</label>
                            
                          <select class="custom-select" v-bind:name="element.field" v-model="element.fieldVal" style="width: 100% !important" >
                            
                          <!-- <select class="custom-select" style="width: 100% !important" required> -->
                            <option value="">Choose Field</option>
                            <option v-for="field in fields" v-bind:name="field" :value="field"> <% field.split('.').pop() %> </option>
                          </select>
                        </div>
                        <div class="form-group col-md-6">
                          <i class="fa fa-search"></i>
                           <label class="col-form-label">Search Field</label>
                           <input type="text" name="querystring" v-model = "querystring" class="form-control mb-6 mb-sm-0">
                        </div>
                  </div>
                  
                  <div class="form-row" style="border-bottom: 1px solid gray;" v-for="element in elements">
                  
                   <!-- 
                  <div class="form-row" style="border-bottom: 1px solid gray;" >
                    -->
                    <div class="form-group col-md-3">
                      <label for="inputEmail4" class="col-form-label">Field</label>
                        
                      <select class="custom-select" v-bind:name="element.field" v-model="element.fieldVal" style="width: 100% !important" >
                        
                      <!-- <select class="custom-select" style="width: 100% !important" required> -->
                        <option value="">Choose Field</option>
                        <option v-for="field in fields" v-bind:name="field" :value="field"> <% field.split('.').pop() %> </option>
                      </select>
                    </div>
                    <div class="form-group col-md-3">
                      <label for="inputEmail4" class="col-form-label">Comparision Operator</label>
                        
                      <select class="custom-select" v-bind:name="element.compare" v-model="element.compareVal" style="width: 100% !important" >
                        
                      <!-- <select class="custom-select" style="width: 100% !important" required> -->
                        <option value="">Choose Comparision Operator</option>
                        <option value="=">Equals to</option>
                        <option value="like">like</option>
                        <option value="<">less than</option>
                        <option value=">">greater than</option>
                      </select>
                    </div>
                    <div class="form-group col-md-3">
                      <label for="inputEmail4" class="col-form-label">Value</label>
                      <input type="text" class="form-control mb-2 mb-sm-0" id="inlineFormInput" placeholder="Value" v-bind:name="element.value" v-model="element.valueVal" >
                      <!-- <input type="text" class="form-control mb-2 mb-sm-0" id="inlineFormInput" placeholder="Value"  required> -->
                    </div>
                    <div class="form-group col-md-3">
                      <label for="inputEmail4" class="col-form-label">Connector For Multiple Selection</label>
                      <select class="custom-select" style="width: 100% !important" v-bind:name="element.connector" v-on:change="onChange(element.id)" v-model="element.conVal">
                     <!-- 
                      <select class="custom-select" style="width: 100% !important" >
                      -->
                        <option value="">Select Connector</option>
                        <option value="AND">AND</option>
                        <option value="OR">OR</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-row" style="margin-top: 5px;">
                    <button class="btn btn-primary" id="btn-search" type="submit">Search</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="card mb-3">
              <div class="card-header">
                <i class="fa fa-table"></i>
                Data Table

                  <button class="btn btn-link" id="exc" download="abc.xls" >
                    Export Excel
                  </button>
                  <button id="pdf" class="btn btn-link"  >
                    Export PDF
                  </button>
                 <button class="btn btn-link green-text text-success" style="padding: 0px; float: right;" v-on:click="convert"><i class="fa fa-file-excel-o" aria-hidden="true"></i>  Export As CSV</button>
              </div>
              <div class="card-body" style="overflow-x: scroll;">
               <!--  <div class="text text-center" v-if="process"><h4>Searching...</h4></div> -->
                <div >
                  <!-- <div class="text text-center" v-if="results.length < 1"><h4>No Results</h4></div> -->
                  <!-- <div class="table-responsive" v-if="results.length > 0" > -->
                    <div>
                    <dir id="exp-btn"></dir>
                    <table class="table table-bordered" width="100%"  id="dataTable" cellspacing="0">
                        <thead>
                          <tr>
                            <!-- <th>lol</th> -->
                            <th v-for="field in fields">  
                                <% fieldFormat(field) %>
                            </th>
                          </tr> 
                        </thead>
                        <tbody>
                          <tr v-for="(item, index) in results">
                            <td v-for="(field, fi) in fields">  
                                <% item[fieldFormat(field)] %>
                            </td>
                          </tr>
                          <!-- <tr>
                            <td>lol</td>
                          </tr> -->
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
            </div> 
        </div>
      </div>
    </div>
    </div>
  </div>
 <script src="{{url('/js/vue.js')}}"></script>
 <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.16.2/axios.min.js"></script> -->
 
 <script type="text/javascript" src="{{url('/js/excelexportjs.js')}}"></script>
 <!-- <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
<script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/jszip.min.js"></script> -->
 <!-- <script type="text/javascript" src="/js/jspdf.js"></script> -->
 
 

<!-- <script type="text/javascript" src="/js/jquery.dataTables.min.js" ></script>
<script type="text/javascript" src="/js/dataTables.buttons.min.js" ></script>
<script type="text/javascript" src="/js/buttons.flash.min.js" ></script>
<script type="text/javascript" src="/js/jszip.min.js" ></script>
<script type="text/javascript" src="/js/pdfmake.min.js" ></script>
<script type="text/javascript" src="/js/vfs_fonts.js" ></script>
<script type="text/javascript" src="/js/buttons.html5.min.js" ></script>
<script type="text/javascript" src="/js/buttons.print.min.js" ></script> -->
  <!-- <script type="text/javascript">
   
  $(document).ready(function(){



  table = $('#dataTable').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy',
            'csv',
            'excel',
            'pdf'
        ]
    });
  table.buttons().container()
    .appendTo( $('#exp-btn', table.table().container() ) );
   });

    


  

  

 </script> -->

<!-- <script type="text/javascript">
    jQuery(function ($) {
        $("#pdf").click(function () {
            // parse the HTML table element having an id=exportTable
            var dataSource = shield.DataSource.create({
                data: "#dataTable",
                schema: {
                    type: "table",
                    fields: {
                        email: { type: String },
                        enrollment: { type: String },
                        fname: { type: String },
                        mname: { type: String },
                        lname: { type: String },
                        dob: { type: String },
                        gender: { type: String },
                        contact: { type: String },
                        city: { type: String },
                        pincode: { type: String },
                        street: { type: String },
                        state: { type: String },
                        branch: { type: String },
                        division: { type: String },
                        sem: { type: String },
                        cpi: { type: String },
                        cgpa: { type: String },
                        cblocks: { type: String },
                        tblocks: { type: String }
                    }
                }
            });

            // when parsing is done, export the data to PDF
            dataSource.read().then(function (data) {
                var pdf = new shield.exp.PDFDocument({
                    author: "PrepBootstrap",
                    created: new Date()
                });

                pdf.addPage("a4", "portrait");

                pdf.table(
                    50,
                    50,
                    data,
                    [
                        { field: "email", title: "email", width: 50 },
                        { field: "enrollment", title: "enrollment", width: 50 },
                        { field: "fname", title: "fname", width: 50 },
                        { field: "mname", title: "mname", width: 50 },
                        { field: "lname", title: "lname", width: 50 },
                        { field: "dob", title: "dob", width: 50 },
                        { field: "gender", title: "gender", width: 50 },
                        { field: "contact", title: "contact", width: 50 },
                        { field: "city", title: "city", width: 50 },
                        { field: "pincode", title: "pincode", width: 50 },
                        { field: "street", title: "street", width: 50 },
                        { field: "state", title: "state", width: 50 },
                        { field: "branch", title: "branch", width: 50 },
                        { field: "division", title: "division", width: 50 },
                        { field: "sem", title: "sem", width: 50 },
                        { field: "cpi", title: "cpi", width: 50 },
                        { field: "cgpa", title: "cgpa", width: 50 },
                        { field: "cblocks", title: "cblocks", width: 50 },
                        { field: "tblocks", title: "tblocks", width: 50 }
                        
                    ],
                    {
                        margins: {
                            top: 50,
                            left: 50
                        }
                    }
                );

                pdf.saveAs({
                    fileName: "PrepBootstrapPDF"
                });
            });
        });
    });
</script> -->



















 
 <script type="text/javascript">
   
   $(document).ready(function(){

      $('#exc').click(function(){

          $('dataTable').excelexportjs({

              containerid:"dataTable",
              type:'table'

          });

      });

      

   });

 </script>

 
  
 <script type="text/javascript">
   $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
 </script>
 
 <script type="text/javascript">
  
      var app = new Vue({
        el: '#app',
        delimiters : ['<%', '%>'],
        data: {
            querystring: "",
            elements: [],
            fields:[],
            results:[],
            process:false,
            toReInit:false,
        },
        created:function () {
          var self=this;
          this.add();
          $.get("/api/getFields",function(schema){
              schema.user = schema.user.map(function (elm) {
                  return 'users.'+ elm
              })
              schema.marks = schema.marks.map(function (elm) {
                  return 'marks.'+ elm
              })
              self.fields = schema.user.concat( schema.marks );
          });
        },
      // updated:function(){
      //       console.log(this.toReInit)
      //   if( this.toReInit ){
                
      //           // window.table.destroy();
      //           table = $('#dataTable').DataTable( {
      //               dom: 'Bfrtip',
      //               buttons: [
      //                   'copy',
      //                   'csv',
      //                   'excel',
      //                   'pdf'
      //               ]
      //           });
      //         table.buttons().container()
      //           .appendTo( $('#exp-btn', table.table().container() ) );
               
      //         this.toReInit = false;  
      //   }
      // },
        methods:{
          Search:function(string){
            var self = this;
            $.post('/api/getResults', 
                  {'_token':$('[name=csrf-token]').attr('content'), q:string},
                 function (response) {
                     //console.log(response);
                    self.results=response;
                    // self.toReInit = true;
                    // self.process=false;
            });
          },
          add:function () {
            var self =this;
            var newL = self.elements.length + 1;
            self.elements.push({
              id: newL,
              field: "field" + newL,
              fieldVal:"",
              compare: "compare" + newL,
              compareVal:"",
              value: "value" + newL,
              valueVal:"",
              connector: "connector" + newL,
              conVal: ""
            });
          },
          log:function (argument) {
              console.log(argument);
              return argument;
          },
          fieldFormat:function (arg) {
            return arg.toString().split('.').pop() 
          },
          onChange:function (e) {
            var self= this;
            if (self.elements[e-1].conVal != "") {
              if (e == self.elements.length) {
                self.add();
              }
            }else{
              var n= self.elements.length - e;
              for (var i = 0; i <n; i++) {
                self.elements.pop();
              }
            }
          },
          onSubmit:function () {
            var self = this;
            self.process=true;
            
            
            var string = self.querystring;

            
            

            if (string.length == 0) {


              for (var i = 0; i < self.elements.length; i++) {
                  // console.log(self.elements[i]);

                var string = string + self.elements[i].fieldVal;
                var string = string + " " +self.elements[i].compareVal;
                var string = string + " '" +self.elements[i].valueVal+"'";
                var string = string + " "+self.elements[i].conVal+" ";
                
              }
              self.Search(string);
            }
            else{

              for(var i = 0;i < self.elements.length; i++){

                var qs = self.elements[i].fieldVal + " = " + "'" + self.querystring + "'";
              }

              self.Search(qs);
            }
            
            
          },
          convert:function () {
            var self=this;
            JSONToCSVConvertor(self.results,"List",true);
          }
        },
      });

 </script>

@endsection()